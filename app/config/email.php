<?php
error_reporting(E_ERROR & ~E_NOTICE & ~E_WARNING);
date_default_timezone_set("Asia/Jakarta");
$email_system="vanectro@gmail.com";
$password_email_system="Angkasapura8481";
$smtp_email_system="tls";
$port_email_system=587;

// email config
require LIB.'/PHPMailer/PHPMailerAutoload.php';
$mail = new PHPMailer;

// Konfigurasi SMTP
$mail->isSMTP();
$mail->Host = 'smtp.gmail.com';
$mail->SMTPAuth = true;
$mail->Username = 'vanectro@gmail.com';
$mail->Password = 'Angkasapura8481';
$mail->SMTPSecure = 'tls';
$mail->Port = 587;