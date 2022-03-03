<?php
function mail_setup($to){

    $mail = new PHPMailer();
    $mail->IsSMTP();
    $mail->IsHTML(true);
    $mail->SMTPDebug = 0;
    $mail->SMTPAuth = true;
    //$mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    //$mail->SMTPSecure = 'tls';
    //$mail->SMTPSecure = 'ssl';

    $mail->SMTPOptions = array(
      'ssl' => array(
      'verify_peer' => false,
      'verify_peer_name' => false,
      'allow_self_signed' => true
      )
    );

    $mail->Host       = "smtps.aruba.it";

    $mail->Port = 587;

    $mail->Username = 'noreply@vistanet.it';
    $mail->Password = 'ybabaiola14';

    /* INSERIMENTO CHIAVI DKIM PER EMAIL NON SPAM */
    // $mail->DKIM_domain = 'google._domainkey';
    // $mail->DKIM_selector = 'DKIM1';
    // $mail->DKIM_passphrase = 'MIIBIjANBgkqhkiG9w0BAQEFAAOCAQ8AMIIBCgKCAQEA4XIdB0uQe8hWRA1uc580OmL13AvL925RzVGrQXDaqm8dzp+bskmbNnW4UdpXGiNCIVeUWHOhxIWqoHgt1ZNRkFAqbyOKjxFf1FL6ACvy5etQb53kcEW1EvM0UNaCGQMQSpbas0kzS9x6mP/jkaeqKdhzW+4VsrgGAKSik2PGezLtqIPqpHuQPfgA0kv8vZiUNzy+gFzMqRWvdJs2CV/KZ5J2pfaYyAf3za4pWQbfLJJqwLSyI7Gs5oqILnlha+rC3+Y+3m1jyaGkMlPSdu+K3ld1Vj6XUwalifHPKq3nx2BTOQKnOE13uumnk4gK/qGXodvF9apdufQotl0dG0e9XQIDAQAB';
    //
    // $mail->DKIM_copyHeaderFields = false;
    // $mail->DKIM_extraHeaders = ['List-Unsubscribe', 'List-Help'];
    // $mail->DKIM_identity = $from;

    return $mail;
}
