<?php

$url = "https://api.indexnow.org/IndexNow";
$data = [
    "host" => "www.avsglobalsupply.com",
    "key" => "cc5fe9382cd141ce8a2046929ec7fc83",
    "keyLocation" => "https://www.avsglobalsupply.com/cc5fe9382cd141ce8a2046929ec7fc83.txt",
    "urlList" => [
        "https://www.avsglobalsupply.com/",
        "https://www.avsglobalsupply.com/ship-supply-turkey",
        "https://www.avsglobalsupply.com/company",
        "https://www.avsglobalsupply.com/nordic",
        "https://www.avsglobalsupply.com/areas",
        "https://www.avsglobalsupply.com/newvendors",
        "https://www.avsglobalsupply.com/timeline",
        "https://www.avsglobalsupply.com/management",
        "https://www.avsglobalsupply.com/advantage",
        "https://www.avsglobalsupply.com/team",
        "https://www.avsglobalsupply.com/globalsupply",
        "https://www.avsglobalsupply.com/provision",
        "https://www.avsglobalsupply.com/tsm",
        "https://www.avsglobalsupply.com/technical",
        "https://www.avsglobalsupply.com/onoffshore",
        "https://www.avsglobalsupply.com/food",
        "https://www.avsglobalsupply.com/logistics",
        "https://www.avsglobalsupply.com/education",
        "https://www.avsglobalsupply.com/partners",
        "https://www.avsglobalsupply.com/career",
        "https://www.avsglobalsupply.com/sustainability",
        "https://www.avsglobalsupply.com/contact",
        "https://www.avsglobalsupply.com/kvkk",
        "https://www.avsglobalsupply.com/tr/",
        "https://www.avsglobalsupply.com/tr/gemi-tedarigi-turkiye",
        "https://www.avsglobalsupply.com/tr/sirket",
        "https://www.avsglobalsupply.com/tr/nordic",
        "https://www.avsglobalsupply.com/tr/hizmet-bolgeleri",
        "https://www.avsglobalsupply.com/tr/yeni-tedarikci",
        "https://www.avsglobalsupply.com/tr/tarihce",
        "https://www.avsglobalsupply.com/tr/yonetim",
        "https://www.avsglobalsupply.com/tr/avantaj",
        "https://www.avsglobalsupply.com/tr/ekip",
        "https://www.avsglobalsupply.com/tr/kureselgemitedarigi",
        "https://www.avsglobalsupply.com/tr/kumanya",
        "https://www.avsglobalsupply.com/tr/teknik-malzeme",
        "https://www.avsglobalsupply.com/tr/teknik-hizmetler",
        "https://www.avsglobalsupply.com/tr/kiyi-acikdeniz",
        "https://www.avsglobalsupply.com/tr/gida",
        "https://www.avsglobalsupply.com/tr/lojistik",
        "https://www.avsglobalsupply.com/tr/egitim",
        "https://www.avsglobalsupply.com/tr/partnerler",
        "https://www.avsglobalsupply.com/tr/kariyer",
        "https://www.avsglobalsupply.com/tr/surdurulebilirlik",
        "https://www.avsglobalsupply.com/tr/iletisim",
        "https://www.avsglobalsupply.com/tr/kvkk"
    ]
];

$ch = curl_init($url);
$payload = json_encode($data);

curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, $payload);
curl_setopt($ch, CURLOPT_HTTPHEADER, ['Content-Type: application/json; charset=utf-8']);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

$response = curl_exec($ch);
$http_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);
curl_close($ch);

echo "HTTP Status Code: " . $http_code . "\n";
echo "Response: " . $response . "\n";

?>