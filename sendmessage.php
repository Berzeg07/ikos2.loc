<?php
$to = "test@mail.ru";
$inp1 = $_POST['inp-1'];
$inp2 = $_POST['inp-2'];

$dateSelect = $_POST['dateSelect'];
$timeSelect = $_POST['timeSelect'];
$tables = $_POST['tables'];


// Формирование заголовка письма
$subject  = "Заказ стола с сайта ikos";
$headers  = "From: info@starlight.space" . "\r\n";
$headers .= "Reply-To: info@starlight.space".  "\r\n";
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/html;charset=utf-8 \r\n";
// Формирование тела письма
$msg  = "<html><body>";
$msg .= "<h2>Новое сообщение</h2>\r\n";
$msg .= "<p><strong>Время клиента:</strong> ".$inp1."</p>\r\n";
$msg .= "<p><strong>Телефон клиента:</strong> ".$inp2."</p>\r\n";
$msg .= "<p><strong>Дата на бронь:</strong> ".$dateSelect."</p>\r\n";
$msg .= "<p><strong>Время на бронь:</strong> ".$timeSelect."</p>\r\n";
$msg .= "<p><strong>Кол-во столов:</strong> ".$tables."</p>\r\n";
$msg .= "</body></html>";


// отправка сообщения
@mail($to, $subject, $msg, $headers);
?>
