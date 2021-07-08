<div class="container-my-product">
	<h2>My products</h2>
	<div class="msg-succes"><?php if(isset($msg)){ echo "<p1>$msg</p>"; } ?></div>
	<?php if (isset($_SESSION['User'])) {
		$stock = findMyProducts();
		if ($stock != null) { ?>
			<div class="cards">
				<?php foreach ($stock as $products) { ?>
					<div class="box-cards">
						<div class="img">
							<?php echo '<img src="data:'.$products['TYPE'].';base64,'.base64_encode($products['IMAGE']).'" />';?>
						</div>
						<div class="information">
							<p><?php echo $products["COLOR"] ?></p>
							<p><?php echo $products["CAPACITY"] ?></p>
							<p><?php echo $products["STATE"] ?></p>
						</div>
						<div class="model"><p><?php echo strtoupper($products["NAME"]) ?></p></div>
						<div class="price"><p>$<?php echo $products["PRICE"] ?></p></div>
						<div class="remove">
							<a href="index.php?action=RemoveProduct&idSmartphone=<?php echo $products["IDSMARTPHONES"] ?>&idPicture=<?php echo $products["PICTURES_IDPICTURES"] ?>"><span></span><span></span></a>
						</div>
                	</div>
				<?php } ?>
			</div>
			<?php } else { ?>
				<div class="noproduct">
					<h2>NO PRODUCTS :(</h2>
					<img src="img/basket.svg" alt="">
				</div>
		<?php } ?>
<?php } ?>

<?php require_once("Css/MyProducts.php"); ?>

		