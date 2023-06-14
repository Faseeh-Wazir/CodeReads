<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $message = $_POST["message"];
    
    $to = "faseehwazir@gmail.com";
    $subject = "New Message from CodeReads";
    $body = "Name: $name\nEmail: $email\nPhone: $phone\n\nMessage:\n$message";
    
    if (mail($to, $subject, $body)) {
        echo "Message sent successfully!";
    } else {
        echo "Failed to send message.";
    }
}
?>





