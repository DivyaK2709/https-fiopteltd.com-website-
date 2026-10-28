<?php
$name    = $_POST['name'];
$email   = $_POST['email'];
$service = $_POST['service'];
$message = $_POST['message'];

$to      = "admin@fiopteltd.com";
$subject = "New Website Message from $name";

$body = "
Name:    $name
Email:   $email
Service: $service
Message: $message
";

$headers = "From: admin@fiopteltd.com\r\n";
$headers .= "Reply-To: $email\r\n";

if(mail($to, $subject, $body, $headers)) {
    echo "<script>
        alert('✅ Message Sent Successfully!');
        window.history.back();
    </script>";
} else {
    echo "<script>
        alert('❌ Failed! Please try again.');
        window.history.back();
    </script>";
}
?>