<?php
include_once('Model/Order.php');
if(isset($_SESSION['User'])){

if ($_GET["action"] == "RemoveOrder")
    cancelLineOrder($_GET['id']);

include_once("View/Order.php");
}else{
    header("Location: index.php?action=Login");
    if(!isset($_SESSION['GoOrder'])){
    $_SESSION['GoOrder'] = 'true';
    }

}
