
<?php
// Include PHPMailer classes
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// Include the Composer autoloader if you're using Composer
require 'vendor/autoload.php'; // Make sure you have PHPMailer installed via Composer

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the form data
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $birth = htmlspecialchars($_POST['birth']);
    $start = htmlspecialchars($_POST['start']);
    $phone = htmlspecialchars($_POST['phone']);
    $message = htmlspecialchars($_POST['message']);

    // Create a new PHPMailer instance
    $mail = new PHPMailer(true);

    try {
        // Server settings
        $mail->isSMTP(); // Use SMTP
        $mail->Host = 'smtp.gmail.com'; // Gmail SMTP server
        $mail->SMTPAuth = true; // Enable SMTP authentication
        $mail->Username = 'dnttest16@gmail.com'; // Your Gmail email address
        $mail->Password = 'wbug cuya txuq rtus'; // Your Gmail password or app-specific password (if using 2FA)
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS; // Use TLS encryption
        $mail->Port = 587; // Gmail SMTP port for TLS

        // Set the recipient email address
        $subject = "Registration form"; // The subject of the email

        // Recipients
        $mail->setFrom('dnttest16@gmail.com', 'Bassett Creek Montessori'); // Your email and name
        $mail->addAddress('dnttest16@gmail.com'); // Replace with the recipient's email address


        // HTML Content (Email Template)
        $body = "
             <html>
                <head>
                    <style>
                        body {
                            font-family: 'Arial', sans-serif;
                            background-color: #f4f4f4;
                            color: #333;
                            margin: 0;
                            padding: 0;
                        }
                        .container {
                            background-color: #ffffff;
                            padding: 20px;
                            border-radius: 8px;
                            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
                            width: 100%;
                            max-width: 600px;
                            margin: 0 auto;
                        }
                        .header {
                            text-align: center;
                            color: #28a745;
                            padding: 15px;
                            border-radius: 8px;
                        }
                        .header h1 {
                            margin: 0;
                            font-size: 24px;
                        }
                        .content {
                            padding: 20px;
                            border-top: 1px solid #ddd;
                        }
                        .content p {
                            margin: 12px 0;
                            font-size: 16px;
                            font-weight: 600;
                            color: #28a745;
                            line-height: 1.6;
                        }
                        .content p strong {
                            color:rgb(0, 0, 0);
                            font-weight: 500;
                        }
                        .footer {
                            text-align: center;
                            font-size: 12px;
                            color: #777;
                            margin-top: 20px;
                        }
                        .button {
                            display: inline-block;
                            padding: 10px 20px;
                            background-color: #28a745;
                            color: white !important;
                            text-decoration: none;
                            border-radius: 4px;
                            margin-top: 20px;
                        }

                        /* Mobile responsiveness */
                        @media only screen and (max-width: 600px) {
                            .container {
                                padding: 15px;
                            }
                            .header h1 {
                                font-size: 20px;
                            }
                            .content p {
                                font-size: 14px;
                            }
                            .button {
                                padding: 12px 25px;
                            }
                        }
                    </style>
                </head>
                <body>
                    <div class='container'>
                        <div class='header'>
                            <h1>New Contact Form Submission</h1>
                        </div>
                        <div class='content'>
                            <p>Name: <strong>$name </strong></p>
                            <p>Email: <strong>$email </strong></p>
                            <p>Date of Birth: <strong>$birth </strong></p>
                            <p>Preferred Start Date: <strong>$start </strong></p>
                            <p>Phone Number: <strong>$phone </strong></p>
                            <p>Message:</p>
                            <p><strong>$message </strong></p>
                        </div>
                        <div class='footer'>
                            <p>This email was sent from your website's contact form.</p>
                        </div>
                    </div>
                </body>
            </html>
        ";

        // Set email format to HTML
        $mail->isHTML(true);
        $mail->Subject = $subject;  // Set the subject
        $mail->Body    = $body;     // Set the HTML body

        // Send the email
        if ($mail->send()) {
            echo "<div style='padding: 20px; background-color: #d4edda; color: #155724; border-radius: 8px; width: 50%; margin: auto; text-align: center;'>
                    <h2>Thank you for your message!</h2>
                    <p>Your message has been sent successfully. We will get back to you shortly.</p>
                    <a href='index.html' style='background-color: #28a745; color: white; padding: 10px 20px; text-decoration: none; border-radius: 4px;'>Go Back</a>
                  </div>";
        }
    } catch (Exception $e) {
        // If the email fails to send
        echo "<div style='padding: 20px; background-color: #f8d7da; color: #721c24; border-radius: 8px; width: 50%; margin: auto; text-align: center;'>
                <h2>Oops! Something went wrong.</h2>
                <p>We couldn't send your message. Please try again later.</p>
                <a href='index.html' style='background-color: #dc3545; color: white; padding: 10px 20px; text-decoration: none; border-radius: 4px;'>Go Back</a>
              </div>";
    }
}
?>



