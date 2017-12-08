<?php
//variables for email
$to                 = 'info@digitalis.se';
$subject            = 'Digitalis client';
$name               = $_POST['name'];
$email              = $_POST['email'];
$number             = $_POST['number'];
$company            = $_POST['company'];
$brief              = $_POST['brief'];
$budget             = $_POST['budget'];
$new_website        = $_POST['new-website'];
$update_website     = $_POST['update-website'];
$e_commerce         = $_POST['e-commerce'];
$info_page          = $_POST['info-page'];
$branding           = $_POST['branding'];
$mobil_app          = $_POST['mobil-app'];
$support            = $_POST['support'];
$other              = $_POST['other'];


//Email
$message = <<<EMAIL
    Name:           \n <b>$name</b> \n
    Email:          \n <b>$email</b> \n
    Phone number:   \n <b>$number</b> \n
    Company:        \n <b>$company</b> \n
    Brief:          \n <b>$brief</b> \n
    budget:         \n <b>$budget</b> \n
    new_website:    \n <b>$new_website</b> \n
    update_website: \n <b>$update_website</b> \n
    e_commerce:     \n <b>$e_commerce</b> \n
    info_page:      \n <b>$info_page</b> \n
    info_page:      \n <b>$info_page</b> \n
    branding:       \n <b>$branding</b> \n
    mobil_app:      \n <b>$mobil_app</b> \n
    support:        \n <b>$support</b> \n
    other:          \n <b>$other</b> \n
EMAIL;

$header             = "From: $email";

//validation
if($_POST){
    if($name == '' || $email == '' || $number == '' || $company == '' || $brief == '' || $budget == ''){
        $feedback = 'Please fill out all the fields';
        header("Location: contact.php?feedback=$feedback");
    }
    //name validator
    if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
        $feedback = "Only letters and white space allowed";
    }
    //email calidator
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $feedback = "Invalid email format";
    }
    else{
        mail($to, $subject, $message, $header);
        $feedback = 'Thanks for making an order to Digitalis, we will get back to you as soon as possible';
        header("Location: contact.php?feedback=$feedback");
    }
}
?>