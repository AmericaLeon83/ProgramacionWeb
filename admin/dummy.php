<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
require '../vendor/autoload.php';
$mail = new PHPMailer();
$mail->isSMTP();

$mail->SMTPDebug = SMTP::DEBUG_OFF;
$mail->Host = 'smtp.gmail.com';
$mail->Port = 465;
$mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
$mail->SMTPAuth = true;
$mail->Username = '20031883@itcelaya.edu.mx';
$mail->Password = '';
$mail->setFrom('20031883@itcelaya.edu.mx', 'Leon Rodriguez America Patricia');

$mail->addAddress('americapleonr16@gmail.com', 'Leon Rodriguez America Patricia');
$mail->Subject = 'Hola mundo';
$mail->msgHTML("Hola mundo");
if (!$mail->send()) {
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
    echo 'Message sent!';
}