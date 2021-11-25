<?php

$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$phone = $_POST['phone'];
$message = $_POST['message'];

if(!$name || !$email || !$subject ||!$phone || !$message)
{
    $error = 'formerror';
    include('error.php');
    exit;
}

if(!filter_var($email, FILTER_VALIDATE_EMAIL))
{
    $error = 'emailerror';
    include('error.php');
    exit;
}

else{

    
$to = 'duduvybez@gmail.com>';
$details = 'Hi! I would like to make enquiry';
$from = 'From: noreply@gmail.com';

$content = 'Below are my details'."\n"
            .'Name: '.$name."\n"
            .'Email: '.$email."\n"
            .'Subject: '.$subject."\n"
            .'Phone: '.$phone."\n"
            .'Message: '.$message."\n";

mail($to, $details, $from, $content);
include('thank-you.php');

}

?>

