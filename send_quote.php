<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $phone = htmlspecialchars($_POST['phone']);
    $service = htmlspecialchars($_POST['service']);
    $location = htmlspecialchars($_POST['location']);
    $details = htmlspecialchars($_POST['details']);

    $to = "youremail@example.com"; // Replace with your company email
    $subject = "New Quote Request from $name";
    $message = "
        Name: $name\n
        Email: $email\n
        Phone: $phone\n
        Service: $service\n
        Location: $location\n
        Details: $details
    ";
    $headers = "From: $email";

    if (mail($to, $subject, $message, $headers)) {
        echo "Thank you! Your request has been submitted.";
    } else {
        echo "Error sending request. Please try again.";
    }
}
?>
