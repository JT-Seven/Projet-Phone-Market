<?php
if(isset($_SESSION['User'])){
include_once('View/CreateOrInssertMark.php');
}else{
    header("Location: index.php?action=Login");
    if(!isset($_SESSION['GoSell'])){
    $_SESSION['GoSell'] = 'true';
    }
}