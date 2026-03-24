<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Form verilerini al
    $rsvp = isset($_POST['rsvp']) ? $_POST['rsvp'] : '';
    $full_name = isset($_POST['full_name']) ? $_POST['full_name'] : '';
    $company_name = isset($_POST['company_name']) ? $_POST['company_name'] : '';
    $job_title = isset($_POST['job_title']) ? $_POST['job_title'] : '';
    $email = isset($_POST['email']) ? $_POST['email'] : '';
    $contact_number = isset($_POST['contact_number']) ? $_POST['contact_number'] : '';
    $country_residence = isset($_POST['country_residence']) ? $_POST['country_residence'] : '';
    $additional_guests = isset($_POST['additional_guests']) ? $_POST['additional_guests'] : '';
    $hotel_booking = isset($_POST['hotel_booking']) ? $_POST['hotel_booking'] : '';
    $visa_assistance = isset($_POST['visa_assistance']) ? $_POST['visa_assistance'] : '';
    $comments = isset($_POST['comments']) ? $_POST['comments'] : '';

    try {
        $mail = new PHPMailer(true);
        $mail->isSMTP();
        $mail->Host = 'smtp.office365.com'; // Outlook SMTP sunucusu
        $mail->SMTPAuth = true;
        $mail->Username = 'muharrem.baylan@365technology.net'; // Outlook e-posta adresiniz
        $mail->Password = 'avs+1003'; // E-posta şifreniz
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS; // TLS şifrelemesi
        $mail->Port = 587; // TLS için kullanılan port
        $mail->CharSet = 'UTF-8';
        

        $mail->setFrom('muharrem.baylan@avsglobalsupply.com', 'AVS Contact Form');
        $mail->addAddress('muharrem.baylan@avsglobalsupply.com', 'AVS Admin');
        $mail->isHTML(true);
        $mail->Subject = $full_name . ' - Form Submission';

      // HTML formatında mail body oluşturuluyor
      $body = '<table border="1" cellpadding="5" cellspacing="0" style="width:100%;">';
      $body .= '<tr>'; // Başlıkları bir satırda yan yana yerleştiriyoruz
      $fields = [
          'RSVP' => $rsvp,
          'Full Name' => $full_name,
          'Company Name' => $company_name,
          'Job Title' => $job_title,
          'Email' => $email,
          'Contact Number' => $contact_number,
          'Country of Residence' => $country_residence,
          'Additional Guests' => $additional_guests,
          'Hotel Booking' => $hotel_booking,
          'Visa Assistance' => $visa_assistance,
          'Comments' => $comments
      ];

      foreach ($fields as $field => $value) {
          $body .= "<th style='width: 15%;'>$field</th>";  // Field başlıklarını yan yana yerleştir
      }
      $body .= '</tr><tr>'; // Başlıklardan sonra yeni satır başlatıyoruz

      // Verileri altına yan yana ekliyoruz
      foreach ($fields as $field => $value) {
          $body .= "<td>$value</td>";  // Value'ları başlıkların altına yerleştir
      }

      $body .= '</tr></table>';  // Tabloyu bitir


        $mail->Body = $body;
        $mail->send();
        echo json_encode(["success" => true, "message" => "Message sent successfully!"]);
    } catch (Exception $e) {
        echo json_encode(["success" => false, "message" => "Message could not be sent. Mailer Error: {$mail->ErrorInfo}"]);
    }
}
?>
