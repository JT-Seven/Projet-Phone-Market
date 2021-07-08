<?php
include_once('Model/EditProfile.php');

if (isset($_POST['action']) && $_POST['action'] == 'EditUser') {
    $Name = htmlspecialchars($_POST['Name']);
    $Surname = htmlspecialchars($_POST['Surname']);
    $Email = htmlspecialchars($_POST['email_']);
    $Address = htmlspecialchars($_POST['Address']);
    $CEmail = htmlspecialchars($_POST['confirmation-email']);

    $NameSpace = trim($Name);
    $SurnameSpace = trim($Surname);
    $NameSpace2 = preg_replace('/\s+/', ' ', $Name);
    $SurnameSpace2 = preg_replace('/\s+/', ' ', $Surname);

    if (!empty($Name)) {

        if (!preg_match("/^([a-zA-Zéêâèîôûçàìòù]+[,.]?[ ]?|[a-zA-Zéêâèîôûçàìòù]+['-]?){2,30}+$/", $Name) || preg_match("/[~`_.!@#$%\^&*()+=\\[\]\\';,{}|\\\":<>\?]/", $Name)) {
            if (preg_match("/[ ]/", $Name)) {
                $error = '<p class="error" style="color: red;">The spaces are not accomodated<p>';
            } else {
                $error = '<p class="error" style="color: red;"> Name is incorrect <p>';
            }
        } else {
            $bool = editUser();
            $error = '<p class="success" style="color: green;"> Name registred <p>';
        }
        include_once('View/EditProfile.php');
    }

    if (!empty($Surname)) {

        if (preg_match("/[ ]/", $Surname)) {
                if (!preg_match("/^([a-zA-Zéêâèîôûçàìòù]+[,.]?[ ]?|[a-zA-Zéêâèîôûçàìòù]+['-]?){2,30}+$/", $Surname) || preg_match("/[~`_.!@#$%\^&*()+=\\[\]\\';,{}|\\\":<>\?]/", $Surname)) {
                $error = '<p class="error" style="color: red;">The spaces are not accomodated<p>';
            } else {
                $error = '<p class="error" style="color: red;"> Surname is incorrect <p>';
            }
        } else {
            $bool = editUser();
            $error = '<p class="success" style="color: green;"> Surname registred <p>';
        }
        include_once('View/EditProfile.php');
    }

    if (!empty($Address)) {
        
        if (!preg_match("/^\d+\s[A-zàèìòùÀÈÌÒÙáéíóúýÁÉÍÓÚÝâêîôûÂÊÎÔÛãñõÃÑÕäëïöüÿÄËÏÖÜŸçÇßØøÅåÆæœ]+\s[A-z]/", $Address) || preg_match("/[~`_.!@#$%\^&*()+=\\[\]\\';,{}|\\\":<>\?]/", $Address)) {
            $error = '<p class="error" style="color: red;"> Address is incorrect <p>';
        } else {
            $bool = editUser();
            $error = '<p class="success" style="color: green;"> Address registred <p>';
        }
        include_once('View/EditProfile.php');
    }

    if (!empty($Email) || !empty($CEmail)) {

        if (!preg_match("/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix", $Email) || !preg_match("/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix", $CEmail)) {
            if (preg_match("/[ ]/", $Email) || preg_match("/[ ]/", $CEmail)) {
                $error = '<p class="error" style="color: red;">The spaces are not accomodated<p>';
            } else {
                $error = '<p class="error" style="color: red;"> Email is incorrect <p>';
            }
        } else {
            $bool = editUser();
            $error = '<p class="success" style="color: green;">  Email registred <p>';
        }
        include_once('View/EditProfile.php');
    }

    if ($Email != $CEmail) {

        $error = '<p class="error" style="color: red;">  The two email don\'t  <p>';
        include_once('View/EditProfile.php');
    }

    if ($_FILES['image']['size'] > 0) {
        header('location: index.php?action=Myaccount');
        addPicture();
        $error = '<p class="error" style="color: red;">  Avatar registred ! <p>';
        $_SESSION['Picture_registred'] = 1;
    }
} 
    include_once('View/EditProfile.php');

