<?php 
$name = $_POST'name'];
$tel = $_POST'tel'];
$name = htmlspecialchars($name);
$tel = htmlspecialchars($tel);
$name = urldecode($name);
$tel = urldecode($tel);
$name = trim($name);
$tel = trim($tel);

if (mail("n.kravchenko545@gmail.com",
"Новое письмо с сайта",
"Name: ".$name."\n".
"Tel: ".$tel."\n".
"From: no-reply@nydonain.ru \r\n")
）{
echo ("Письмо успешно отправлено! ");
else {
echo ("Есть ошибки! Проверьте данные?");
}