<?php
include_once('Model/MyProducts.php');
if($_GET['action'] == 'RemoveProduct'){
    $idSmartphone = $_GET['idSmartphone'];
    $idPicture = $_GET['idPicture'];
    $email = $_SESSION['Email'];

    $message = '<html>
	<body>
		<div align="center">
			
			<P>You have just deleted a product for sale on our site! !</P><BR>
            <img src="https://d1eh9yux7w8iql.cloudfront.net/carousel_images/Buyback_2021_FR_CarouselNormal4.gif"/>

			
		</div>
	</body>
</html>';
include_once("Model/sendmail.php");


    removeSmartphone($idSmartphone,$idPicture );
    $msg='Your phone has been deleted !';
    include('View/MyProducts.php');

}else{
    include('View/MyProducts.php');
}
