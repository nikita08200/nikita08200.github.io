<?php
//Принимаем постовые данные
$username=$_POST['username'];
$email=$_POST['email'];
$user_message=$_POST['user_message'];
//Тут указываем на какой ящик посылать письмо
$to = "nikita1bogdan@gmail.com";
//Далее идет тема и само сообщение
// Тема письма
$subject = "Заявка с сайта";
// Сообщение письма
$message = "
Форма которую заполнил клиент: ".htmlspecialchars($whatever)."<br />
Имя пользователя: ".htmlspecialchars($username)."<br />
Email: ".htmlspecialchars($email)."<br />
Сообщение: ".htmlspecialchars($user_message);
// Отправляем письмо при помощи функции mail();
$headers = "From: https://nikita08200.github.io <nikita61511@gmail.com>\r\nContent-type: text/html; charset=UTF-8 \r\n";
mail ($to, $subject, $message, $headers);
// Перенаправляем человека на страницу благодарности и завершаем скрипт
header('Location: thanks.html');
exit();
?>