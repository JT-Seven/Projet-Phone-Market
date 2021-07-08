<?php

include_once('Model/SignUp.php');

$error = array();

if(isset($_POST['action']) && $_POST['action'] == "Sign up")
{
    if (!empty($_POST['Name']) && !empty($_POST['Surname']) && !empty($_POST['Email']) && !empty($_POST['confirmation-email']) && !empty($_POST['Address']) && !empty($_POST['zip-code']) && !empty($_POST['Password']) && !empty($_POST['Confirmation-password']))
    {   
        $Name = htmlspecialchars($_POST['Name']);
        $Surname = htmlspecialchars($_POST['Surname']);
        $Email = htmlspecialchars($_POST['Email']);
        $CEmail = htmlspecialchars($_POST['confirmation-email']);
        $Address = htmlspecialchars($_POST['Address']);
        $ZipCode = htmlspecialchars($_POST['zip-code']);
        $City = htmlspecialchars($_POST['City']);
        $Password = $_POST['Password'];
        $CPassword = $_POST['Confirmation-password'];
        $NameLength = strlen($Name);
        $SurnameLength = strlen($Surname);
        if(isset($_POST['City']))
        {
            $city = htmlspecialchars($_POST['City']);
        }

        if(empty($Name) || !preg_match("/^[a-zA-Z-àèìòùÀÈÌÒÙáéíóúýÁÉÍÓÚÝâêîôûÂÊÎÔÛãñõÃÑÕäëïöüÿÄËÏÖÜŸçÇßØøÅåÆæœ]{2,30}/", $Name) || preg_match("/[~`_ .!@#$%\^&*()+=\\[\]\\';,{}|\\\":<>\?]/", $Name))
        {
            $error["Name"] = 'Name is invalid';
        }

        if(empty($Surname) || !preg_match("/^[a-zA-Z-àèìòùÀÈÌÒÙáéíóúýÁÉÍÓÚÝâêîôûÂÊÎÔÛãñõÃÑÕäëïöüÿÄËÏÖÜŸçÇßØøÅåÆæœ]{2,30}/", $Surname) || preg_match("/[~`_ .!@#$%\^&*()+=\\[\]\\';,{}|\\\":<>\?]/", $Surname))
        {
            $error["Surname"] = 'Surname is invalid';
        }

        if(empty($Email) || empty($CEmail) || !preg_match("/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix", $Email) || !preg_match("/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix", $CEmail))
        {
            $error["Email-Cmail"] = 'Email and Confirmation email are invalid';
        }
    
        if ($Email != $CEmail) {
            $error["email-no-match"] = 'The two emails do not match';
        }
       

        if(empty($Address))
        {
            $error["Address"] = 'Address is invalid';
        }

        if(empty($ZipCode) || !preg_match("/^(?:[0-8]\d|9[0-8])\d{3}$/",$ZipCode))
        {
            $error["ZipCode"] = 'Surname is invalid';
        }

        if(empty($Password) || !preg_match("/^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])[0-9a-zA-Z]{8,}$/",$Password) || !preg_match("/^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])[0-9a-zA-Z]{8,}$/",$CPassword))
        {
            $error["Password-Cpassword"] = 'Password is invalid';
        } 
        
        if ($Password != $CPassword) {
            $error["Password-Cpassword"] = 'The two password do not match';
        }

        if(empty($error))
        {
            $isInDB = isUserEmailAvailable($Email);
            if($isInDB == false) {
                $error["connect"] = 'This account already exists !';
            } else {
                $Name = trim($Name);
                $Surname = trim($Surname);
                $Name = preg_replace('/\s+/', ' ', $Name);
                $Surname = preg_replace('/\s+/', ' ', $Surname);

                insertUser($Name,$Surname,$Email,$Address,$Password,$ZipCode,$City);
                header("Location: index.php?action=Login");
            }
        }
    }
}
    
include('View/SignUp.php');


