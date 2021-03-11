<?php
$to = "barnabe.geffroy@ensiie.fr";
$subject = 'Nouveau message depuis votre site';
$message = $_POST['message'];
$headers = 'From: $_POST["email"]' . "\r\n" .
  'Reply-To: $_POST["email"]' . "\r\n" .
  'X-Mailer: PHP/' . phpversion();

$return = mail($to, $subject, $message, $headers);
if ($return) {
    echo '<p>Votre message a bien été envoyé.</p>';
}