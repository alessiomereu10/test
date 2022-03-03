<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

include_once ($_SERVER['DOCUMENT_ROOT'] . '/sonic/system/lib/php/mailer/PHPMailerAutoload.php');
include_once ($_SERVER['DOCUMENT_ROOT'] . '/sonic/system/lib/php/mailer/setup.php');

$utente=$_POST["email"];
$nome=$_POST["nome"];
$to="alemereu3@gmail.com";
$subject="Messaggio da un cliente";
$message="Nome: ".$nome."<br> Email: ".$utente."<br> Messaggio:".$_POST["message"];
$no_reply_email="noreply@sonic.it";
$from_name="SONIC";



  $mail = mail_setup($to);
  $mail->setFrom($no_reply_email, $from_name);
  $mail->addAddress($to);
  $mail->addReplyTo($to, $from_name);
  $mail->Subject = $subject;
  $mail->msgHTML($message);


  if(!$mail->send()) {
      $ret['errore'] = 1;
      $ret['messaggio'] = 'Errore nell\'invio dell\'email: ' . $mail->ErrorInfo;
      echo json_encode($ret);
  }
  else {
      $ret['errore'] = 0;
      $ret['messaggio'] = 'Email inviata correttamente';
      echo json_encode($ret);
  }


// echo json_encode($_POST);


 ?>
