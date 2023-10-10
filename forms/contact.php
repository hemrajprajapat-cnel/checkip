<?php

$post_name = $_POST['name'];
$post_email = $_POST['email'];
$post_subject = $_POST['subject'];
$post_message = $_POST['message'];

$to = 'info@checkip.com';
$subject = $post_subject; 
$message = "Dear " . $post_name . " <br/><br/>" . $post_email . " <br/><br/>" . $post_message; 

// Additional headers
$headers = "From: info@readyforyourreview.com\r\n";
$headers .= "Reply-To: info@readyforyourreview.com\r\n";
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

// Send email
$mailSent = mail($to, $subject, $message, $headers);

if ($mailSent) {
    echo "OK";
} else {
    echo "Failed to send message.";
}
?>
