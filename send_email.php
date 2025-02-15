<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $birth = htmlspecialchars($_POST['birth']);
    $start = htmlspecialchars($_POST['start']);
    $phone = htmlspecialchars($_POST['phone']);
    $message = htmlspecialchars($_POST['message']);

    // Set your email address where you want to receive the form submission
    $to = "dnttest16@gmail.com";  // Replace with your actual email
    $subject = "New Contact Form Submission";

    // Prepare email body content
    $body = "
    Name: $name\n
    Email: $email\n
    Date of Birth: $birth\n
    Preferred Start Date: $start\n
    Phone Number: $phone\n
    Message: $message\n
    ";

    // Set email headers
    $headers = "From: $email\r\n";
    $headers .= "Reply-To: $email\r\n";
    $headers .= "Content-type: text/plain; charset=UTF-8\r\n";

    // Send email
    if (mail($to, $subject, $body, $headers)) {
        // If the email is sent successfully, show the success message
        echo "
        <div style='padding: 20px; background-color: #d4edda; color: #155724; border-radius: 8px; width: 50%; margin: auto; text-align: center;'>
            <h2>Thank you for your message!</h2>
            <p>Your message has been sent successfully. We will get back to you shortly.</p>
            <a href='index.html' style='background-color: #28a745; color: white; padding: 10px 20px; text-decoration: none; border-radius: 4px;'>Go Back</a>
        </div>";
    } else {
        // If sending email fails
        echo "
        <div style='padding: 20px; background-color: #f8d7da; color: #721c24; border-radius: 8px; width: 50%; margin: auto; text-align: center;'>
            <h2>Oops! Something went wrong.</h2>
            <p>We couldn't send your message. Please try again later.</p>
            <a href='index.html' style='background-color: #dc3545; color: white; padding: 10px 20px; text-decoration: none; border-radius: 4px;'>Go Back</a>
        </div>";
    }
}
?>
