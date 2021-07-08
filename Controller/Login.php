<?php
include_once('Model/Login.php');

if (!empty($_POST['Password']) && !empty($_POST['Email'])) {
    if (isset($_POST['Password']) && $_POST['Password'] != 'ADMIN') {
        $Password = md5($_POST['Password']);
    } else {
        $Password = $_POST['Password'];
    }
    $Email = htmlspecialchars($_POST['Email']);

    $verif = login($Password, $Email);
    if ($verif == 1) {
        if(isset($_SESSION['GoCheckout'])){
            header('Location: index.php?action=ShowCart');

        }elseif(isset($_SESSION['GoOrder'])){
            header('Location: index.php?action=Orders');

        }elseif(isset($_SESSION['GoAccount'])){
            header('Location: index.php?action=Myaccount');

         }elseif(isset($_SESSION['GoSell'])){
            header('Location: index.php?action=Sell');
        }
        else{
        header('Location: index.php?action=');
        }
           
    } else {
        isset($error);
        $error = '<p style="color:red;font-size:12px;margin-top:10;">This account does not exist or password invalid !</p>';
        include_once("View/Login.php");
    }
} else {
    include_once("View/Login.php");
  
    }

