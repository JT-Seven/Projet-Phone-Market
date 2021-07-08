<?php
include_once('Model/Checkout.php');
if(isset($_SESSION['User'])){
$iduser = $_SESSION['User'];
checkout($iduser);
deletFavorite();
$email = $_SESSION['Email'];
$message = '<html>
<body>
    <div align="center">
        
        <P> Information : Your order has been registered !</P><BR>
        <img src="https://d1eh9yux7w8iql.cloudfront.net/carousel_images/Buyback_2021_FR_CarouselNormal4.gif"/>

        
    </div>
</body>
</html>';
include_once("Model/sendmail.php");
header('Location: index.php?action=Orders');

}else{
    header("Location: index.php?action=Login");
    if(!isset($_SESSION['GoCheckout'])){
    $_SESSION['GoCheckout'] = 'true';
    }

}
