<?php
include_once('Css/ShowProduct.php');
include_once('Model/Cart.php');
?>

<section class="cards">
	<h2>Product sheet</h2>
	<?php foreach ($phone as $products) { ?>
		<?php $user = getUser($products["USERS_IDUSERS"]); ?>
		<div class="card">
			<?php echo '<img src="data:' . $products['TYPE'] . ';base64,' . base64_encode($products['IMAGE']) . '" />'; ?>
			<div class="information">
				<h3><?php echo strtoupper($products["NAME"]) ?>
				<?php echo " " . $products["CAPACITY"] . "\n" ?>
					<?php echo "- " . $products["COLOR"] ?>
					<?php echo "- " . $products["STATE"] ?>
				</h3><br>
				<div class="description"><p><?php echo $products["DESCRIPTION"] ?></p></div> 
			</div>

			<div class="price">
				<b><?php echo $products["PRICE"] ?>€</b>
			</div>
			<section class="Button">
                <?php if (isset($_SESSION['User'])) { ?>
					<button class="Button1">
						<a href="index.php?action=Profile&id=<?php echo $products['USERS_IDUSERS']; ?>"><span>see seller</span></a>
					</button>
					<button class="Button3">
						<a href="index.php?action=MyFavorites&idUser=<?php echo $_SESSION['User']; ?>&idSmartphone=<?php echo $products['IDSMARTPHONES']?>&Mark=<?php echo $products['IDMARK'];?>"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-heart-fill" viewBox="0 0 16 16">
						<path fill-rule="evenodd" d="M8 1.314C12.438-3.248 23.534 4.735 8 15-7.534 4.736 3.562-3.248 8 1.314z"/>
						</svg></a>
					</button>
                <?php } ?>
                <button class="Button2">
					<a id="add-to-cart" href="index.php?action=AddToCart&id=<?php echo $products['IDSMARTPHONES']; ?>"><span>Add to cart</span></a>
				</button>
			</section>
		</div>
	<?php } ?>
</section>

<section class="affiche">
	<img src="img/AFFICHE.jpg">
</section>


<div class="container-similar">
    <h2>Similar products</h2>
    <ul id="lightSlider"> 
        <?php foreach($stock as $product) { ?>
            <li>
                <div class="show-card">
                    <?php echo '<img class="view-img" src="data:'.$product['TYPE'].';base64,'.base64_encode($product['IMAGE']).'" />';?>
                    <div class="card card1">
                        <div class="details">
                            <h3><?php echo $product['NAME']; ?></h3>
                            <div class="color">
                                <h4>Color :</h4><p class="text-color"><?php echo $product['COLOR']; ?></p>
                            </div>
                            <div class="capacity">
                                <h4>Capacity :</h4>
                                <span><?php echo $product['CAPACITY']; ?></span>
                            </div>
                            <div class="price">
                                <span>$</span>
                                <span><?php echo $product['PRICE']; ?></span>
                            </div>
                            <?php
                            if (isset($_SESSION['User']) && $product['USERS_IDUSERS'] != $_SESSION['User'] || !isset($_SESSION['User'])) { ?>
                                <div class="container-btn">
                                    <button class="btn-card"><a href="index.php?action=ShowProduct&id=<?php echo $product['IDSMARTPHONES']; ?>&Mark=<?php echo $product['IDMARK']; ?>"><span>Show Now</span></a></button>
                                </div>
                            <?php  } ?>
                        </div>
                    </div>
                </div>
            </li>
        <?php } ?>
    </ul>
</div>


<?php include_once("js/CartSimilar.php"); ?>
<?php include_once("js/jquery-slide/lightslider.php"); ?>
<?php include_once("js/jquery-slide/lightslider-js.php"); ?>