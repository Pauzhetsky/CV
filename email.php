<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $to = "kazancev.alex2020@gmail.com";
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

    // Заголовки письма
    $headers = "From: $name <$email>\r\n";
    $headers .= "Reply-To: $email\r\n";

    // Тема письма
    $subject = "Новое сообщение от $name";

    // Отправка email
    if (mail($to, $subject, $message, $headers)) {
        echo "Сообщение успешно отправлено!";
    } else {
        echo "Ошибка при отправке сообщения.";
    }
} else {
    echo "Неверный метод запроса.";
}
?>

<!-- Требуется настроить функцию SMTP с использованием библиотеки PHPMailer -->