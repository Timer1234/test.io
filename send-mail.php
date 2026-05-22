<?php
// Configuration
$to = "iamjilsuthar@gmail.com";
$from = "noreply@jmtechnolab.com";
$subject_prefix = "New Contact Form Inquiry - JM Technolab";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Sanitize and validate input
    $name = filter_var(trim($_POST["name"]), FILTER_SANITIZE_STRING);
    $email = filter_var(trim($_POST["email"]), FILTER_SANITIZE_EMAIL);
    $phone = filter_var(trim($_POST["phone"]), FILTER_SANITIZE_STRING);
    $service = filter_var(trim($_POST["service"]), FILTER_SANITIZE_STRING);
    $message = filter_var(trim($_POST["message"]), FILTER_SANITIZE_STRING);

    // Validate email
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        header("Location: contact.php?error=invalid_email");
        exit;
    }

    // Validate required fields
    if (empty($name) || empty($email) || empty($message)) {
        header("Location: contact.php?error=missing_fields");
        exit;
    }

    // Prepare email content
    $email_subject = $subject_prefix . " - " . ucfirst(str_replace('-', ' ', $service));
    
    $email_body = "
    <html>
    <head>
        <style>
            body { font-family: Arial, sans-serif; line-height: 1.6; color: #333; }
            .container { max-width: 600px; margin: 0 auto; padding: 20px; }
            .header { background: linear-gradient(135deg, #1e3a8a, #f97316); color: white; padding: 20px; border-radius: 10px 10px 0 0; }
            .content { background: #f8f9fa; padding: 20px; border-radius: 0 0 10px 10px; }
            .field { margin-bottom: 15px; }
            .label { font-weight: bold; color: #1e3a8a; }
            .footer { text-align: center; padding: 20px; color: #666; font-size: 12px; }
        </style>
    </head>
    <body>
        <div class='container'>
            <div class='header'>
                <h2>🚀 New Contact Form Submission</h2>
                <p>JM Technolab Website</p>
            </div>
            <div class='content'>
                <div class='field'>
                    <span class='label'>Name:</span> {$name}
                </div>
                <div class='field'>
                    <span class='label'>Email:</span> <a href='mailto:{$email}'>{$email}</a>
                </div>
                <div class='field'>
                    <span class='label'>Phone:</span> {$phone}
                </div>
                <div class='field'>
                    <span class='label'>Service Interested:</span> " . ucfirst(str_replace('-', ' ', $service)) . "
                </div>
                <div class='field'>
                    <span class='label'>Message:</span><br>
                    " . nl2br(htmlspecialchars($message)) . "
                </div>
            </div>
            <div class='footer'>
                <p>This email was sent from the JM Technolab contact form.</p>
                <p>&copy; " . date('Y') . " JM Technolab. All rights reserved.</p>
            </div>
        </div>
    </body>
    </html>
    ";

    // Email headers
    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
    $headers .= "From: JM Technolab <{$from}>" . "\r\n";
    $headers .= "Reply-To: {$email}" . "\r\n";
    $headers .= "X-Mailer: PHP/" . phpversion();

    // Send email
    if (mail($to, $email_subject, $email_body, $headers)) {
        // Success - redirect with success message
        header("Location: contact.php?success=1");
    } else {
        // Error - redirect with error message
        header("Location: contact.php?error=send_failed");
    }
    exit;
} else {
    // Direct access not allowed
    header("Location: contact.php");
    exit;
}
?>