<?php
if ( $_GET['action'] == 'ConfirmSell') {
    $email = $_SESSION['Email'];
    $message = '<html>
	<body>
		<div align="center">
			<P>Your smartphone has been sold !</P><br>
            <img src="https://d1eh9yux7w8iql.cloudfront.net/carousel_images/Buyback_2021_FR_CarouselNormal4.gif"/>
		</div>
	</body>
</html>';
include_once("Model/sendmail.php");
header('Location: index.php?action=');

}else{
    include_once('View/ConfirmSell.php');

}

