<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Validate and sanitize inputs
    $name = filter_var(trim($_POST['name']), FILTER_SANITIZE_STRING);
    $email = filter_var(trim($_POST['email']), FILTER_SANITIZE_EMAIL);
    $message = filter_var(trim($_POST['message']), FILTER_SANITIZE_STRING);

    if (filter_var($email, FILTER_VALIDATE_EMAIL) && !empty($name) && !empty($message)) {
        $to = "contact@astrakit.net";
        $subject = "New Contact Form Submission";
        $body = "Name: $name\nEmail: $email\nMessage:\n$message";
        $headers = "From: $email";

        // Send email to site owner
        if (mail($to, $subject, $body, $headers)) {
            // Send confirmation email to user
            $user_subject = "Confirmation: Your message has been received";
            $user_body = "Hi $name,\n\nThank you for reaching out to us. We have received your message and will get back to you shortly.\n\nBest regards,\nAstrakit Team";
            $user_headers = "From: contact@astrakit.net";

            mail($email, $user_subject, $user_body, $user_headers);

            echo "Message sent successfully!";
        } else {
            echo "Failed to send message. Please try again later.";
        }
    } else {
        echo "Invalid input. Please check your entries and try again.";
    }
}
?>