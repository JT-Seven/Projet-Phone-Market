<?php session_start(); ?>

<meta http-equiv="X-UA-Compatible" content="IE=7">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<link type="text/css" rel="stylesheet" href="css/lightslider.css" />                  
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="js/lightslider.js"></script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Big+Shoulders+Stencil+Display:wght@500;600;800;900&family=Poppins:wght@400;700&display=swap" rel="stylesheet">

<div class="scroll-up-btn">
    <i class="fas fa-angle-up"></i>
</div>
<section class="section-content">
    <!-- navbar header -->
    <nav class="nav-header">
        <div class="nav-brand">
            <a href="index.php?action=Accueil"><img src="img/logo-pm.png" class="logo"></a>
        </div>

        <div class="header-links" id="menuToggle">
            <input class="checkbox" type="checkbox" />
            <span></span>
            <span></span>
            <span></span>
            <ul id="menu">
                <li id="smartphone">
                    <a href="index.php?action=Store">Buy&nbsp;&nbsp;
                        <img title="Tout les smartphones" class="img" id="logo-smart" src="img/smartphones.svg" alt="">
                    </a>
                </li>
                <?php if (isset($_SESSION['User'])) { ?>
                    <li>
                        <a href="index.php?action=Sell">Sell</a>
                    </li>
                <?php } ?>
                <li>
                    <a href="index.php?action=Contact">Contact</a>
                </li>
                <li>
                    <a href="index.php?action=Faq">FAQ</a>
                </li>
                <?php if (!isset($_SESSION['User'])) { ?>
                    <li class="user">
                        <a href="index.php?action=Register">Login</a>
                    </li>
                <?php } else { ?>
                    <li class="user-acount">
                        <a href="index.php?action=Myaccount"><?php if (isset($_SESSION['Surname'])) {
                             echo $_SESSION['Surname']; } ?>
                    <img title="Mon compte" class="img" id="acount" src="img/user-acount.svg" alt=""></a>
                    </li>
                    <li class="user-">
                        <a href="index.php?action=MyFavorites">Favorite <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-heart-fill" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M8 1.314C12.438-3.248 23.534 4.735 8 15-7.534 4.736 3.562-3.248 8 1.314z"/>
                        </svg>
                        </a>
                    </li>

                <?php } ?>
                <li id="search_">
                    <a href="#"><img id="search" class="img" src="img/search.svg" alt=""></a>
                </li>
                <?php if (isset($_SESSION['User'])) { ?>
                    <li class="cart">
                        <a href="index.php?action=ShowCart"><img title="Gérer mon panier" id="cart" class="img" src="img/bag.svg" alt=""></a>
                    </li>
                <?php } ?>
                <?php if (isset($_SESSION['Admin']) &&  $_SESSION['Admin'] == 1) { ?>
                    <!-- <li>
                        <a href="index.php?action=Debug">Debug</a>
                    </li> -->
                <?php } ?>
                <li>
                    <div id="toggle">
                        <input id="indicator" type="checkbox" name=""></i>
                    </div>
                </li>
            </ul>
        </div>
        <div class="search-bar">
            <form method="GET" action="">
                <input type="search" name="search" placeholder="Search...">
                <input class="button" id="btn-search" type="submit" name="action" value="Search">
            </form>
        </div>
    </nav>
    <!-- end navbar header -->
    <div class="zone-invi"></div>
    <a class="gotopbtn" href="#"><img title="Revenir au top" class="img" src="img/btntop.svg" alt=""></a>

    <section class="content_for_layout">
        <?php include($content_for_layout); ?>
    </section>

</section>

<!-- SCRIPT JAVASCRIPT -->

<?php include_once('js/btn_on_off.php'); ?>
<?php include_once('js/app.php'); ?>
<?php include_once('js/btn-top.php'); ?>
<?php include_once('js/search.php'); ?>

<!-- FOOTER -->

<?php include_once('View/footer.php'); ?>

<!-- CSS -->

<?php include_once('Css/footer.php'); ?>
<?php include_once('Css/Mainlayout.php'); ?>

