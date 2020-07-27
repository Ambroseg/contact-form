<?php

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $mailfrom = $_POST['email'];
    $phone = $_POST['phone'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    $mailTo = "info@goshencollege.co.ke";
    $headers = "From: " . $mailfrom;
    $txt = "You Have Received an email from " . $name . ".\n" . $message;

    mail($mailTo, $phone, $subject, $txt, $headers);
    header("Location: index.php?mailsent");

}