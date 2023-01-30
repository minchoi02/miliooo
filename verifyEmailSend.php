<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';
$emailAddress = $_REQUEST["ToEmail"];
$VerifyCode = $_REQUEST["VerifyCode"];
if ( !is_null( $emailAddress ) ) {
  $mail = new PHPMailer( true );
  $mail->isSMTP();
  $mail->Host        = 'mail.w.milo.partners';
  $mail->SMTPAuth    = true;
  $mail->Username    = 'info@milo.partners';
  $mail->Password    = 'pcpc1004!!';
  $mail->SMTPSecure  = PHPMailer::ENCRYPTION_STARTTLS;
  $mail->Port        = 587;
  $mail->setFrom( 'info@milo.partners', 'FROM' );
  $mail->addAddress( $emailAddress, 'TO' );
  $mail->isHTML( true );
  $mail->Subject     ='=?UTF-8?B?'.base64_encode( "[Milo] 이메일 인증을 위한 인증번호가 발급되었습니다." ).'?=';
  $mail->Body        = $VerifyCode;
  $mail->send();
  $send = 'Yes';
}
?>