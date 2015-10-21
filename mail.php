<?php
$not_human       = "Human verification incorrect.";
$missing_content = "Please supply all information.";
$email_invalid   = "Email Address Invalid.";
$message_unsent  = "Message was not sent. Try Again.";
$message_sent    = "Thanks! Your message has been sent.";

$name = $_POST['name'];
$bname = $_POST['bname'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$human = $_POST['message_human'];

$referral = $_POST['referral'];
$type = $_POST['type'];
$message = $_POST['message'];
$formcontent=" From: $name \n Phone: $phone \n Business Name: $bname \n Website: $website \n Referral: $referral \n Type: $type \n Message: $message";

$recipient = "dabbott@eps-na.com";

$subject = "Contact Form";
$mailheader = "From: $email \r\n";
mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
echo "Thank You!";

if(!$human == 0){
    if($human != 2) generate_response("error", $not_human); //not human!
    else {
?>
