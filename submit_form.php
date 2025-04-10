<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    // Send email or store the message in the database
    mail('your-email@example.com', 'Contact Form Message', $message, 'From: ' . $email);

    echo 'Thank you for your message. I will get back to you shortly!';
}
?>
