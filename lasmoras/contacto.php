<?php

$to = "residencialasmoras@gmail.com";

$subject = "Nuevo e-mail desde residencialasmoras.com.ar";

$message = '<!DOCTYPE html>';
$message .= '<html lang="es">';
$message .= '<head><meta charset="utf-8"></head>';
$message .= '<body style="margin:10px 0px;padding:0px;">';
$message .= '<p style="font:16px arial,helvetica,sans-serif;line-height:130%;">'.preg_replace("/\r\n|\r|\n/", '<br>', $_POST['message']).'</p>';
$message .= '<p style="font:16px arial,helvetica,sans-serif;line-height:130%;">--------------<br>E-mail enviado desde residencialasmoras.com.ar</p>';
$message .= '</body>';
$message .= '</html>';

$headers = "From: ".$_POST['name']." <".$_POST['email']."> \r\n";
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-type: text/html\r\n";

$retval = mail($to, $subject, $message, $headers);

echo ($retval) ? 'OK' : 'ERROR';

?>
