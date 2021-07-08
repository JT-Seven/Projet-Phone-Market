<?php	
require_once("Model/ControlSmartphone.php");
require_once("Css/ControlSmartphone.php");

$stock = findAllSmartphone();
?>
			<h1>All smartphones</h1>

		<div class="cards">

<?php
 foreach($stock as $products) { ?>
 
 				<div class="card">
        <?php echo '<img src="data:'.$products['TYPE'].';base64,'.base64_encode($products['IMAGE']).'" />';?>
		<div class="information">
						<h2 ><?php echo strtoupper($products["NAME"]) ?></h2>
						<p><?php echo $products["DESCRIPTION"] ?></p>
						<p><?php echo $products["COLOR"] ?></p>
						<p><?php echo $products["CAPACITY"] ?></p>
						<p><?php echo $products["STATE"] ?></p>
						<b><?php echo $products["PRICE"] ?>€</b>
					
			<div class="Button">
			<a href="index.php?action=RemoveSmartphone&idUser=<?php echo $products["USERS_IDUSERS"] ?>&idSmartphone=<?php echo $products["IDSMARTPHONES"] ?>&idPicture=<?php echo $products["PICTURES_IDPICTURES"] ?>">Remove</a>
			</div>
			</div>
			</div>

<?php
 } 
 ?>
		</div>
		<?php

if(isset($msg)){
echo "<p style= 'color : red'>$msg</p>";
}
?>
	
