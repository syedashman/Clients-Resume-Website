<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $phone = htmlspecialchars($_POST['phone']);
    $message = htmlspecialchars($_POST['message']);

    $to = "syedashmanmumtaz@gmail.com";  // your email
    $subject = "New Contact Form Submission";
    $body = "You received a new message from your website contact form:\n\n" .
            "Name: $name\n" .
            "Email: $email\n" .
            "Phone: $phone\n\n" .
            "Message:\n$message\n";

    $headers = "From: $email\r\nReply-To: $email\r\n";

    if (mail($to, $subject, $body, $headers)) {
        echo "<script>alert('Message sent successfully!'); window.location.href='index.html';</script>";
    } else {
        echo "<script>alert('Failed to send message. Try again later.'); window.location.href='index.html';</script>";
    }
}
?>
