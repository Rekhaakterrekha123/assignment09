<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $subject = $_POST["subject"];
    $message = $_POST["message"];

    // Write code to process the form data here

    // Send email to admin
    $to = "admin@mywebsite.com";
    $subject = "New contact form submission";
    $body = "Name: $name\nEmail: $email\nSubject: $subject\nMessage: $message";
    mail($to, $subject, $body);

    // Display success message
    echo "<p>Your message has been sent successfully!</p>";
}
?>