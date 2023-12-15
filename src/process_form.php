<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $message = $_POST["Message"];

    $to = "alexg@clickmortar.app"; // Replace with your email address
    $subject = "New Appointment Request";

    $email_body = "Name: $name\n";
    $email_body .= "Email: $email\n";
    $email_body .= "Phone: $phone\n";
    $email_body .= "Message:\n$message";

    // Additional headers
    $headers = "From: $email";

    // Send email
    mail($to, $subject, $email_body, $headers);

    // You can add a success message or redirect the user to a thank-you page
    echo "Thank you for your message!";
} else {
    // If someone tries to access the script directly without submitting the form
    echo "Access denied!";
}
?>
