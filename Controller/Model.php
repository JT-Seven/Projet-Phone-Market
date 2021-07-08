<?php
    if(isset($_GET['Model']) && !empty($_GET['Model'])){
        $_SESSION['Model'] = $_GET['Model'];
        include_once('View/Sell.php');

        
    }else{
        include_once('View/Model.php');


    }

