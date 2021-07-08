<?php
    include_once('Model/Mark.php');
    if(isset($_GET['Mark'])){
        $mark = $_GET['Mark'];
        include_once('View/Model.php');


    }else{
        include_once('View/Mark.php');

    }

