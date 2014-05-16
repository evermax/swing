<?php
$to = "chloe.brouzes@hotmail.fr";
$subject = "Essai envoi de mail via PHP";
$email = "Coucou ma chérie !\nBon apparemment tu t'en fiches mais je t'aime très fort !";
$headers   = array();
$headers[] = "MIME-Version: 1.0";
$headers[] = "Content-type: text/plain; charset=UTF-8";
$headers[] = "From: Maxime Lasserre <maxime.lasserre@mbpmx.fr>";
$headers[] = "Subject: {$subject}";
$headers[] = "X-Mailer: PHP/".phpversion();

mail($to, $subject, $email, implode("\r\n", $headers));
?>