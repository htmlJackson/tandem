<?php
require 'Mail.class.php';
require 'varDefine.php';

$to = "info@clubtandem.ru";

$theme  = "Заявка с сайта 'Эксперт-клуб Тандем'";

$objMail = new Mail($to, $theme, $name, $surname, $message, $phone, $email);
$objMail->sendMail();
?>
