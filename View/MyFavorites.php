<?php include_once('Css/MyFavorites.php')  ?>

<?php if ($allphones != false) { ?>
    <h2 class="title-favorites">My favorites</h2>
    <div class="container-cards-favorite">
        <ul id="lightSlider2"> 
            <?php foreach ($allphones as $product) { ?>
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
                                    <div class="container-remove">
                                        <a href="index.php?action=Removetofavorites&idfavorite=<?php echo $product['IDFAVORITES']; ?>"><span></span><span></span></a>
                                    </div>
                                <?php  } ?>
                            </div>
                        </div>
                    </div>
                </li>
            <?php } ?>
        </ul>
    </div>
<?php } else { ?>
    <div class="noproduct">
        <h2>No favorite...</h2>
        <img src="img/basket.svg" alt="">
    </div>
<?php } ?>

<section class="affiche2">
    <img src="img/AFFICHE.jpg">
</section>

<?php if (isset($_GET['Mark'])) { ?>
    
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
<?php } else {
    include_once('Controller/Store.php');
} ?>

<?php include_once("js/CartSimilar.php"); ?>
<?php include_once("js/jquery-slide/lightslider.php"); ?>
<?php include_once("js/jquery-slide/lightslider-js.php"); ?>