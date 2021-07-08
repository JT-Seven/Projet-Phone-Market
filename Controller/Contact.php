<?php
include_once('Model/Contact.php');

if (!empty($_GET['subject']) && !empty($_GET['Email']) && !empty($_GET['object'])){
   
   if(isset( $_SESSION['Send'])){
    $_SESSION['Send'] =  $_SESSION['Send'] + 1 ;
   }

$Email = $_GET['Email'];
$object = $_GET['object'];
if(isset($_SESSION['User'])){
if(isset( $_SESSION['Send']) && $_SESSION['Send'] <= 2){
if(preg_match("#^[a-z0-9_-]+((\.[a-z0-9_-]+){1,})?@[a-z0-9_-]+((\.[a-z0-9_-]+){1,})?\.[a-z]{2,30}$#i", $Email) && $Email != "") {

    $verif = Contact($Email);
    if ($verif == 1 && $_GET['Email'] == $_SESSION['Email'])
    {
        $subject = $_GET['subject'];
        include_once('Model/sendmailContact.php');
        $error = '<p class="error" style= color:green;>Your message has been sent !</p><br>';

        include_once("View/Contact.php");

    } else {
        $error = '<p class="error acount">This account does not exist or does not match your registration information !</p>';
        include_once("View/Contact.php");

    }
}else{
    $error = 'This email does not valid !';
    include_once("View/Contact.php");
}
}else{
    $error = 'You have exceeded the limit for sending an email!';
    include_once("View/Contact.php");
}
}else{
    $error = 'Please register or login before contacting us';
    include_once("View/Contact.php");
}
} else {
    include_once("View/Contact.php");
}


