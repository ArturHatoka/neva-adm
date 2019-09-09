<?php
include("../../admin/_mysql.php");
include("../../admin/_additional.php");
$headers  = 'MIME-Version: 1.0'."\r\n".'Content-type: text/html; charset=utf-8'."\r\n".'From: '.$additional[2].' <noreplay@'.$_SERVER['SERVER_NAME'].'>'."\r\n";

$name = $_POST['name'];
$phone = $_POST['phone'];
$mail = $_POST['mail'];

$name = htmlspecialchars($name);
$phone = htmlspecialchars($phone);
$mail = htmlspecialchars($mail);

$name = urldecode($name);
$phone = urldecode($phone);
$mail = urldecode($mail);

$name = trim($name);
$phone = trim($phone);
$mail = trim($mail);

//

if (
mail($additional[11],
    'Заявка на звонок от '.$name,
    "Имя: ".$name.'<br/>'
    . "\nТелефон: ".$phone.'<br/>'
//    . "\nПочта: ".$mail.'<br/>'
    , $headers))
{
    header("Location: /");
} else {
    echo "<script>alert('при отправке сообщения возникли ошибки');</script>";
}