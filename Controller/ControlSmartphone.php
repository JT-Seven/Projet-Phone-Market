<?php
require_once("Model/ControlSmartphone.php");

if($_GET['action'] == 'RemoveSmartphone'){
    $idSmartphone = $_GET['idSmartphone'];
    $idUser = $_GET['idUser'];
    $idPicture = $_GET['idPicture'];

 $email = findEmail($idUser);
    $email = $email[0]['EMAIL'];
    $message = '<html>
	<body>
		<div align="center">
			
			<P>Your product has been deleted by the administrator! !</P><BR>
            <img src="https://d1eh9yux7w8iql.cloudfront.net/carousel_images/Buyback_2021_FR_CarouselNormal4.gif"/>

			
		</div>
	</body>
</html>';
include_once("Model/sendmail.php");
    removeSmartphone($idUser,$idSmartphone,$idPicture );
    $msg='This  smartphone has been deleted !';
    include('View/ControlSmartphone.php');

   


  

}else{
    include('View/ControlSmartphone.php');
}
