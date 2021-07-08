<?php
    include_once("Model/Cart.php");
    include_once("Model/Store.php");
    include_once("Css/Cart.php");
    
    $products = findAllProductsAvailable();
    $cart =& findCart();
?>
   
<?php if($cart != null) { ?>
    <div class="container-cart">
        <h2>My cart</h2>
            <div class="container-cart-cards">
                    <?php foreach ($cart as $phoneID => $phoneInCart) { $phone = findOneProducts($phoneID); $seller = getUser($phone["idseller"]); ?>
                        <div class="box-cards">
                            <div class="img">
                                <a href="index.php?action=ShowProduct&id=<?php echo $phone['id']; ?>&Mark=<?php echo $phone['mark']; ?>"><?php echo '<img src="data:' . $phone['imagetype'] . ';base64,' . base64_encode($phone['image']) . '" />'; ?></a>
                            </div>
                            <div class="information">
                                <p>Color : <?php echo $phone["color"] ?></p>
                                <p>Capacity : <span><?php echo $phone["capacity"] ?></span></p>
                                <p>State : <?php echo $phone["state"] ?></p>
                            </div>
                            <div class="model"><p><?php echo strtoupper($phone["name"]) ?></p></div>
                            <div class="price"><p>$<?php echo $phone["price"] ?></p></div>
                            <div class="remove">
                                <a href="index.php?action=RemoveFromCart&id=<?php echo $phoneID ?>"><span></span><span></span></a>
                            </div>
                        </div>
                    <?php } ?>
            </div>
            
            <div class="container-view-and-checkout">
                <div class="total-price">
                    <p>Total Price :</p><p>$<?php $cartTotalPrice = cartTotalPrice() ; echo $cartTotalPrice; $_SESSION['cartTotalPrice'] = $cartTotalPrice;?></p>
                </div>
                <hr>
                <form class="btn-checkout" action="" method="GET">
                    <div class="container-btn">
                        <button name="action" value="checkout" class="btn-cart"><span>Checkout</span></button>
                    </div>
                </form>
                <div class="empty">
                    <a href="index.php?action=EmptyCart">empty cart</a>
                </div>
            </div>
    </div>
<?php } else { ?>
    <div class="noproduct">
        <h2>NO PRODUCTS :(</h2>
        <img src="img/basket.svg" alt="">
    </div>
<?php } ?>

<div class="container-similar">
    <h2>Available product</h2>
    <ul id="lightSlider"> 
        <?php foreach($products as $product) { ?>
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
