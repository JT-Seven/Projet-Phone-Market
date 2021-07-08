<?php
include_once("Model/MyFavorites.php");
include_once("Model/Store.php");
include_once('Model/EditProfile.php');

$products = getMarkTendance();
$available = findAllProductsAvailable();
$stockApple = getStockApple();
$stockApple2 = getStockApple2();
$stockAndroid = getStockAndroid();
$stockAndroid2 = getStockAndroid2();

?>

<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.css">
<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">


<section class="zone-accueil-phone">
    <div class="slider">
        <div class="slider-container slide-contents active">
            <span class="number">01</span>
            <div class="slide-animations-phone slide-active" id="slide-animations-phone1">
                <div class="contents-card">
                    <div class="caption">
                        <h1>Trend of the moment</h1>
                        <p>The pricier iPhone 12 Pro and iPhone 12 Pro Max have more advanced cameras, more premium designs and a largest display on the Max. Some may want to hold off until the iPhone 13 ships this fall, which is expected to offer an even faster A15 Bionic chip, better cameras and a smaller notch along with more robust 5G.</p>
                    </div>
                </div>
                <div class="container-btn">
                    <button class="btn-card">
                        <a href="index.php?apple=on&price=0&price2=2000&action=Filter"><span>Show Now</span></a>
                    </button>
                </div>
            </div>
            <div class="container-colors">
                <div class="color">
                    <p>Color</p><div></div>
                </div>
            </div>
            <div class="container-cercle">
                <div class="bulle-info">
                    <div class="mark">
                        <p>APPLE</p><div></div>
                    </div>
                    <div class="model">
                        <h2>IPhone 12</h2>
                    </div>
                    <div class="capacity">
                        <div></div> <p>256GO</p>
                    </div>
                    <div class="price">
                        <p>$640</p>
                    </div>
                </div>
                <div class="cercle"></div>
                <img class="img-phone" src="img/iphone12.png" alt="">
                <div class="cont-btn">
                    <div class="btn-nav left">←</div>
                    <div class="btn-nav right">→</div>
                </div>
            </div>
        </div>
        <div class="slider-container slide-contents">
            <span class="number">02</span>
            <div class="slide-animations-phone slide-active" id="slide-animations-phone1">
                <div class="contents-card">
                    <div class="caption">
                        <h1>Trend of the moment</h1>
                        <p>The Samsung Galaxy S9 is a smartphone with a 5.8-inch curved Super Amoled display. It features the Exynos 9810 processor backed by 4GB of RAM and 64GB of expandable storage. Like the Galaxy S8, it benefits from a 12 Mpix camera module on the back. Including technical performance, with a new chipset, and photographic qualities, with a camera lens with a unique aperture at its launch</p>
                    </div>
                </div>
                <div class="container-btn">
                    <button class="btn-card">
                        <a href="index.php?samsung=on&price=0&price2=2000&action=Filter"><span>Show Now</span></a>
                    </button>
                </div>
            </div>
            <div class="container-colors">
                <div class="color">
                    <p>Color</p><div id="colors2"></div>
                </div>
            </div>
            <div class="container-cercle">
                <div class="bulle-info">
                    <div class="mark">
                        <p>Android</p><div></div>
                    </div>
                    <div class="model">
                        <h2>Samsung S9</h2>
                    </div>
                    <div class="capacity">
                        <div></div> <p>128GO</p>
                    </div>
                    <div class="price">
                        <p>$170</p>
                    </div>
                </div>
                <div class="cercle" id="circle2"></div>
                <img class="img-phone" id="second" src="img/samsung-s9.png" alt="">
                <div class="cont-btn">
                    <div class="btn-nav left2">←</div>
                    <div class="btn-nav right2">→</div>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Effect Vave -->
    
    <div class="effet-wave">
        <!--Waves Container-->
        <div>
            <svg class="waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                viewBox="0 24 150 28" preserveAspectRatio="none" shape-rendering="auto">
                <defs>
                    <path id="gentle-wave" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z" />
                </defs>
                <g class="parallax">
                    <use xlink:href="#gentle-wave" x="48" y="0" fill="rgba(255,255,255,0.7)" />
                    <use xlink:href="#gentle-wave" x="48" y="3" fill="rgba(255,255,255,0.5)" />
                    <use xlink:href="#gentle-wave" x="48" y="5" fill="rgba(255,255,255,0.3)" />
                    <use xlink:href="#gentle-wave" x="48" y="7" fill="#fff" />
                </g>
            </svg>
        </div>
    </div>          
</section>


<!-- PARTIE VENTE POPULAIRE -->

<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

<section class="zone-vente-populaire">
    <div class="slide-animations-phone3 slide-active3" id="slide-animations-phone3">
        <div class="contents-card3">
            <div class="caption3">
                <h2>Popular phones</h2>
            </div>
        </div>
    </div>
    <div class="swiper-container">
        <div class="swiper-wrapper">
            <?php foreach($products as $product) { ?>
            <div class="swiper-slide">
                    <div class="cards-popular">
                        <?php echo '<img class="view-img" src="data:'.$product['TYPE'].';base64,'.base64_encode($product['IMAGE']).'" />';?>
                        <div class="card card1">
                            <div class="container-card">
                                <?php echo '<img class="img" src="data:'.$product['TYPE'].';base64,'.base64_encode($product['IMAGE']).'" />';?>
                            </div>
                            <div class="details">
                                <div class="color">
                                    <h4>Color :</h4><p class="text-color"><?= $product['COLOR'] ?></p>
                                </div>
                                <div class="capacity">
                                    <h4>Capacity :</h4>
                                    <span><?= $product['CAPACITY'] ?></span>
                                </div>
                                <div class="price">
                                    <span>$</span>
                                    <span><?= $product['PRICE'] ?></span>
                                </div>
                                <div class="container-btn">
                                    <button class="btn-card"><a href="index.php?action=ShowProduct&id=<?php echo $product['IDSMARTPHONES']; ?>&Mark=<?php echo $product['IDMARK']; ?>"><span>Show Now</span></a></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
        <div class="swiper-pagination"></div>
    </div>
</section>   
    
<!-- PARTIE SMARTPHONES APPLE OR ANDROID (MY PREFERENCES) -->

<section class="zone-our-phones">
    <div class="slide-animations-phone4 slide-active4" id="slide-animations-phone4">
        <div class="contents-card4">
            <div class="caption4">
                <h2>Our Phones</h2>
            </div>
        </div>
    </div>
    <div class="iphone">
        <div class="message">
            <div class="container-msg">
                <div class="nav-top">
                    <div class="location">
                        <img src="img/left-chevron.svg" alt="">
                        <p>Back</p>
                    </div>
                    <div class="utilisateur">
                        <p><?php if(isset($_SESSION['Surname'])) { echo $_SESSION['Surname']; ?></p>
                        <?php } else { ?>
                        <p>Utilisateur</p>
                        <?php } ?>
                        <p>Active now</p>
                    </div>
                </div>
                <div class="conversation">
                    <div class="talk left">
                    <img src="img/anonymous.jpg" alt="">           
                        <p>Are you more Apple or Android ?</p>
                    </div>
                    <div class="talk right">
                        <div class="answer-user">
                            <div class="content"></div>
                            <div class="content"></div>
                            <div class="content"></div>
                        </div>
                        <?php if (isset($_SESSION['Picture_registred']) &&  $_SESSION['Picture_registred'] === 1) { ?>
                            <?php $picture = getUserPicture($_SESSION['User']); ?>
                            <?php echo '<img class="view-img" src="data:' . $picture['TYPE'] . ';base64,' . base64_encode($picture['IMAGE']) . '" />'; ?>
                        <?php } else { ?>
                            <img src="img/user.svg" alt="">
                        <?php } ?>
                    </div>
                    <div class="talk left">
                        <img src="img/anonymous.jpg" alt="">           
                        <p class="apple">For the Apple model, you have at your disposal from the IPhone 5s to the IPhone 12 PRO with prices ranging from <?php foreach($stockApple as $val) { ?><?php echo $val["price"]; } ?> to <?php foreach($stockApple2 as $val) { ?><?php echo $val["price2"]; } ?> $.</p>                        
                    </div>
                    <div class="talk left">
                        <img src="img/anonymous.jpg" alt="">           
                        <p class="android">For the Android model, you have at your disposal the brands :
                            Samsung, Huawei, Xiaomi and Sony + used phones. Their prices vary between <?php foreach($stockAndroid as $val) { ?><?php echo $val["price"]; } ?> to <?php foreach($stockAndroid2 as $val) { ?><?php echo $val["price2"]; } ?> $. </p>
                    </div>
                    <div class="talk left">
                        <img src="img/anonymous.jpg" alt=""> 
                        <p><a href="index.php?action=Store">See all phones.</a></p>
                    </div>
                </div>
                <form action="" method="GET" class="chat-form">
                    <div class="container-inputs-stuffs">
                        <div class="files-logo-cont">
                            <img src="img/paperclip.svg">
                        </div>
                        <div class="group-inp">
                            <textarea placeholder="Select the choices offered" minlength="1" maxlength="1500"></textarea>
                            <img src="img/smile.svg">
                        </div>
                        <button name="action" value="Accueil" class="submit-msg-btn">
                            <img src="img/cursor.svg">
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="contents-choices">
        <!-- ------------APPLE---------- -->
        <div class="container-apple">
            <!-- -----------IMAGES-APPLE---------- -->
            <img class="view-img" src="img/logo-apple.png" alt="">
            <!-- --------CONTAINER-BOX-APPLE------------ -->
            <div class="box box-apple">
                <div class="container-img">
                    <a href="index.php?apple=on&price=0&price2=2000&action=Filter"><img class="img" src="img/iphone_msg.png" alt=""></a>
                </div>
            </div>
        </div>
        <!-- ----------ANDROID---------- -->
        <div class="container-android">
            <!-- -----------IMAGES-APPLE---------- -->
           <img class="view-img" src="img/logo-android.png" alt="">
            <!-- --------CONTAINER-BOX-APPLE------------ -->
            <div class="box box-android">
                <div class="container-img">
                    <a href="index.php?action=Android"><img class="img" src="img/samsung_msg-1.png" alt=""></a>
                </div>
            </div>
        </div>
    </div>
</section>



<!-- SCRIPT JAVASCRIPT -->

<?php include_once('js/swiper.php'); ?>
<?php include_once('js/slider-home.php'); ?>
<?php include_once('js/animationCard.php'); ?>

<!-- CSS -->

<?php include_once('Css/Home.php'); ?>