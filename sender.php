<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Получаем адрес электронной почты из формы
    $email = $_POST["email"];

    // Отправка сообщения
    $subject = "Привет";
    $message = "Привет";
    $headers = "From: umedjani44@gmail.com"; 
    mail($email, $subject, $message, $headers);
}
?>

