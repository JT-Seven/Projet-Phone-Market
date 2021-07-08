<?php

include_once("Model/Store.php");
include_once('Model/Search.php');

if($_GET['action'] == 'Search' && isset($_GET['action'])) 
{  
    if(!empty($_GET['search']))
    {
        $search = $_GET['search'];
        $stock = search($search);
        include_once("View/Store.php");
    } else {
        $stock = findAllProductsAvailable();
        include_once("View/Store.php");
    }
} else {
    include_once("View/Store.php");
}
