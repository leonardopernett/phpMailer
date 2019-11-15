<?php
$name   = $_POST['name'];
$email  = $_POST['email'];
$tel    = $_POST['tel'];
$mensaje    = $_POST['mensaje'];

$body = "correo: ". " " . $email ." " . " <br>name: " . " ".$name. " " . "<br> telefono: " . $tel . "<br> mensaje: ". $mensaje;

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require('phpmailer/PHPMailer.php');
require('phpmailer/SMTP.php');
require('phpmailer/Exception.php');

$mail = new PHPMailer(true);

try {
    //Server settings
   $mail->SMTPDebug = 0;                      // Enable verbose debug output
   $mail->isSMTP();                                            // Send using SMTP
   $mail->Host       = 'smtp.gmail.com';                    // Set the SMTP server to send through
   $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
   $mail->Username   = 'pernettleonardo@gmail.com';                     // SMTP username
   $mail->Password   = 'Admon214*';                               // SMTP password
   $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` also accepted
   $mail->Port       = 587;                                    // TCP port to connect to


   //Recipients
   $mail->setFrom($email, $name);
   $mail->addAddress('pernettleonardo@gmail.com');               // Name is optional
   
  

   // Content
   $mail->isHTML(true);                                  // Set email format to HTML
   $mail->Subject = 'contacto';
   $mail->Body    = $body;
   


    $mail->send();
    echo "<script> alert ('mensaje enviado'); window.history.go(-1);</script>";

   

} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}





?>


