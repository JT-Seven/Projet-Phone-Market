<?php
include_once('Model/Home.php');
if(isset($_GET['action']) && $_GET['action'] == "Android"){
$stock = getAllSmartphoneAndroid();
}elseif(isset($_GET['action']) && $_GET['action'] == "Apple"){
    $stock = getAllSmartphoneApple();
}
include_once("View/Store.php");
