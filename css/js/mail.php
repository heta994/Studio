<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $to = "contact@studioinnovare.com";
    $name = strip_tags($_POST["name"]);
    $email = filter_var($_POST["email"], FILTER_SANITIZE_EMAIL);
    $message = strip_tags($_POST["message"]);
    $subject = "New Contact Form Submission from $name";
    $body = "Name: $name\nEmail: $email\n\nMessage:\n$message";
    $headers = "From: $email\r\nReply-To: $email\r\n";
    if (mail($to, $subject, $body, $headers)) {
        header("Location: index.php?success=1#contact");
        exit();
    } else {
        header("Location: index.php?error=1#contact");
        exit();
    }
}
?>