<?php
include('Model/Sell.php');

if (isset($_POST['Color']) && !empty($_POST['Color']) && isset($_POST['Description']) && !empty($_POST['Description']) && isset($_POST['State']) && !empty($_POST['State']) && !empty($_POST['Price']) && isset($_POST['Price']) && $_FILES['image']['size'] > 0) {
    if (trim($_POST['Description']) != '') {
        if ( strlen($_POST['Description']) < 501) {
            if($_POST['Price'] > 4 && $_POST['Price'] < 2001){
            insertSmartphone();
            header('Location: index.php?action=MyProducts');

            }else{
                include('View/Sell.php');
            }
        } else {
            $error = '<p style="color: red;"> The description must contain less than 50 characters. <p>';
            include('View/Sell.php');
        }
    } else {
        $error = '<p style="color: red;"> The description is empty or contains only spaces <p>';
        include('View/Sell.php');
    }
} else {
    include('View/Sell.php');
}
