<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
header('Content-Type: application/json');

// Only allow POST requests
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);
    echo json_encode(['success' => false, 'message' => 'İzin verilmeyen metod']);
    exit;
}

// Get email from POST data
$email = $_POST['email'] ?? null;

if (!$email || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
    http_response_code(400);
    echo json_encode(['success' => false, 'message' => 'Lütfen geçerli bir e-posta adresi giriniz.']);
    exit;
}

// Mailchimp settings
$serverPrefix = 'us13';
$listId = 'a9dbfaf045';
$memberId = md5(strtolower($email));

// Check if user exists
$getUrl = "https://$serverPrefix.api.mailchimp.com/3.0/lists/$listId/members/$memberId";
$getResponse = sendMailchimpRequest($getUrl, null, $apiKey, 'GET');
$getResponseDecoded = json_decode($getResponse, true);

$isExistingMember = !(isset($getResponseDecoded['status']) && $getResponseDecoded['status'] == 404);

// Subscribe/Update member
$subscribeUrl = "https://$serverPrefix.api.mailchimp.com/3.0/lists/$listId/members/$memberId";
$data = [
    'email_address' => $email,
    'status' => 'subscribed',
    'status_if_new' => 'subscribed'
];

$subscribeResponse = sendMailchimpRequest($subscribeUrl, $data, $apiKey, 'PUT');
$subscribeDecoded = json_decode($subscribeResponse, true);

if (isset($subscribeDecoded['status']) && is_numeric($subscribeDecoded['status']) && $subscribeDecoded['status'] >= 400) {
    echo json_encode([
        'success' => false,
        'message' => $subscribeDecoded['detail'] ?? 'Abonelik başarısız oldu. Lütfen tekrar deneyiniz.'
    ]);
    exit;
}

// Add Website tag
$tagUrl = "https://$serverPrefix.api.mailchimp.com/3.0/lists/$listId/members/$memberId/tags";
$tagData = [
    'tags' => [
        ['name' => 'Website', 'status' => 'active']
    ]
];

sendMailchimpRequest($tagUrl, $tagData, $apiKey, 'POST');

// Return success message
echo json_encode([
    'success' => true,
    'message' => $isExistingMember ? 'Zaten aboneydiniz, bilgileriniz güncellendi.' : 'Başarıyla abone oldunuz!'
]);

// Mailchimp API request function
function sendMailchimpRequest($url, $data, $apiKey, $method) {
    $ch = curl_init($url);
    
    curl_setopt($ch, CURLOPT_USERPWD, "anystring:$apiKey");
    curl_setopt($ch, CURLOPT_HTTPHEADER, ['Content-Type: application/json']);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, $method);
    
    if ($data !== null) {
        curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));
    }
    
    $result = curl_exec($ch);
    
    if (curl_errno($ch)) {
        $result = json_encode(['status' => 500, 'detail' => 'cURL hatası: ' . curl_error($ch)]);
    }
    
    curl_close($ch);
    return $result;
}
