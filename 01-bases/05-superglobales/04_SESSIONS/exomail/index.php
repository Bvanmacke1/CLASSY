<?php

// Le message
$message = "Bonjour Mosieur";
// Envoi du mail



$to      = 'nobody@example.com';
$subject = 'the subject';
$message = 'hello';
$headers = array('From' => 'webmaster@example.com',
'Reply-To' => 'webmaster@example.com',
'X-Mailer' => 'PHP/' . phpversion()
);

mail($to, $subject, $message, $headers);



// exemple

mail($_POST['to'], $_POST['subject'], $_POST['message']);