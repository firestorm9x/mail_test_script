<?php
//Enter the email address you want to send to in between the single qoutes
$to ='firestorm9x@users.noreply.github.com';

$host=$_SERVER['SERVER_NAME'];
$ip=$_SERVER['SERVER_ADDR'];
$from="test@$host";
$subject="PHP Mail Test";
$message="This is a test message sent from $host. It originated from the IP address $ip. If you received this email, that means that the PHP mail function is working on this server.";
$headers="From: $from" . "\r\n" . "Reply-To: $from" . "\r\n" . "X-Mailer: PHP/" . phpversion();

$success=mail($to,$subject,$message,$headers);

if($success) {
     echo "The email was sent successfully";
}
else {
    echo "An error occurred, and the email was not sent. Check your domains' error logs and mail log for more info.";

}
?>