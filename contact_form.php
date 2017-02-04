<?php
$to = 'info@digitalis.com';
$subject = 'Digitalis new client';

$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$message = <<<EMAIL
Name:  \n <b>$name</b> \n
E_mail:  \n $email \n
subject: \n $subject \n
Message: \n $message \n
EMAIL;

$header = "From: $email";

if($_POST){
    if($name == '' || $email == '' || $subject == '' || $message == ''){
        $feedback = 'Please fill out all the fields';
        header("Location: index.php?feedback=$feedback");
    }else{
        mail($to, $subject, $message, $header);
        $feedback = 'Thanks for making an order to Digitalis, we will get back to you as soon as possible';
        header("Location: index.php?feedback=$feedback");
    }
}
?>