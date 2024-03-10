<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    $to = "yama041011@gmail.com";
    $subject = "新しい申請がありました";

    $headers = "From: $email\r\n";
    $headers .= "Reply-To: $email\r\n";
    $headers .= "Content-Type: text/plain; charset=utf-8\r\n";

    $mailBody = "お名前: $name\n";
    $mailBody .= "メールアドレス: $email\n";
    $mailBody .= "申請内容:\n$message";

    mail($to, $subject, $mailBody, $headers);
}
?>