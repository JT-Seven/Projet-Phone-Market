<?php
include("Model/ShowProduct.php");
if(isset($_GET['action']) && $_GET['action'] == 'ShowProduct'){
   $phone  =  Productsheet($_GET['id']);
   $stock  =  getSimilarProduct($_GET['Mark']);
    include('View/ShowProduct.php');

}

