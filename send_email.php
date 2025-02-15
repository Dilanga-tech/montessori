<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the form data
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $birth = htmlspecialchars($_POST['birth']);
    $start = htmlspecialchars($_POST['start']);
    $phone = htmlspecialchars($_POST['phone']);
    $message = htmlspecialchars($_POST['message']);

    // Your email address
    $to = "dnttest16@gmail.com";  // Replace with your email address
    $subject = "New message from: $name";
    
    // Prepare the email content
    $email_content = "Name: $name\n";
    $email_content .= "Email: $email\n";
    $email_content .= "Date of Birth: $birth\n";
    $email_content .= "Preferred Start Date: $start\n";
    $email_content .= "Phone Number: $phone\n\n";
    $email_content .= "Message: \n$message";
    
    // Set the email headers
    $headers = "From: $email";
    
    // Send the email
    if (mail($to, $subject, $email_content, $headers)) {
        echo "Message sent successfully!";
    } else {
        echo "Failed to send the message.";
    }
}
?>
