<!-- ZONE de Compte -->

<?php 
include_once('Model/EditProfile.php');
include_once('Model/Sell.php');

$seller = getSelesman($_SESSION['User']);
$sumsold = getSumProductSold($_SESSION['User']);
$sumToBuy = getSumProductToBuy($_SESSION['User']);
?>
<div class="wrapper-acount">
    <!--header menu end-->
    <!--sidebar start-->
    <div class="sidebar">
        <div class="sidebar-menu">
            <center class="profile">
                <?php if (isset($_SESSION['Picture_registred']) &&  $_SESSION['Picture_registred'] === 1) { // on rentre bien dans la boucle mais le stock semble vide  !
                    $picture = getUserPicture($_SESSION['User']);
                    echo '<img class="view-img" src="data:' . $picture['TYPE'] . ';base64,' . base64_encode($picture['IMAGE']) . '" />';
                } else {
                ?>
                    <img src="img/user.svg" alt="">
                <?php } ?>
                <p><?php if (isset($_SESSION['Email'])) {
                        echo $_SESSION['Email'];
                    } ?></p>
            </center>
            <ul class="choices-btn">
                <form method="GET" action="">
                    <?php if (isset($_SESSION['Picture_registred']) &&  $_SESSION['Picture_registred'] === 1) { // on rentre bien dans la boucle mais le stock semble vide  !
                    ?>
                        <li class="item">
                            <a href="index.php?action=RemoveProfilePicture" class="menu-btn">
                                <span>remove profile picture </span>
                            </a>
                        </li>
                    <?php } ?>

                    <?php if (isset($_SESSION['Admin']) &&  $_SESSION['Admin'] == 1) { ?>
                        <li class="item">
                            <a href="index.php?action=ControlSmartphone" class="menu-btn">
                                <span>Delete Smartphones </span>
                            </a>
                        </li>
                        <li class="item">
                            <a href="index.php?action=Removeaccount" class="menu-btn">
                                <span>Delete accounts </span>
                            </a>
                        </li>
                        <li class="item">
                            <a href="index.php?action=ControlMark" class="menu-btn">
                                <span>Control marks </span>
                            </a>
                        </li>
                        <li class="item">
                            <a href="index.php?action=Add Mark" class="menu-btn">
                                <span>Add new marks </span>
                            </a>
                        </li>
                    <?php }; ?>
                    <li class="item" id="Edit-prof">
                        <a href="index.php?action=Myaccount" class="menu-btn">
                            <span>My Informations</span>
                        </a>
                    </li>
                    <li class="item" id="myProducts">
                        <a href="index.php?action=MyProducts" class="menu-btn">
                            <span>My products </span>
                        </a>
                    </li>
                    <li class="item" id="myOrders">
                        <a href="index.php?action=Orders" class="menu-btn">
                            <span>My Orders</i></span>
                        </a>
                    </li>
                    <li class="item" id="change-pass">
                        <a href="index.php?action=ChangeMypassword" class="menu-btn">
                            <!-- index.php?action=ChangeMypassword -->
                            <span>Change my password</i></span>
                        </a>
                    </li>
                    <li class="item" id="settings">
                        <a href="index.php?action=Disconnect" class="menu-btn">
                            <span>Logout</span>
                        </a>
                    </li>
                    <?php if (isset($_SESSION['Admin']) &&  $_SESSION['Admin'] != 1) { ?>

                        <li class="item">
                            <a href="#" id="unsubscribe" class="menu-btn">
                            <!-- <a href="index.php?action=Unsubscribe" class="menu-btn"> -->
                                <span>Unsubscribe</span>
                            </a>
                        </li>
                    <?php } ?>

                </form>
            </ul>
        </div>
    </div>
    <!--sidebar end-->
    <!--main container start-->
    <div class="main-container">
        <div class="container-my-information">
            <h2 class="titre-acount">My informations</h2>

            <!-- MY INFORMATIONS -->

            <div class="wrapper">
                <div class="edit"><button id="button-edit" class="change"><a href="index.php?action=EditProfil"><img src="img/edit-profil.svg" alt=""></a></button></div>
                <div class="left">
                    <?php if (isset($_SESSION['Picture_registred']) &&  $_SESSION['Picture_registred'] === 1) { // on rentre bien dans la boucle mais le stock semble vide  !
                        $picture = getUserPicture($_SESSION['User']);
                        echo '<img class="view-img" src="data:' . $picture['TYPE'] . ';base64,' . base64_encode($picture['IMAGE']) . '" />';
                    } else {
                    ?>
                        <img src="img/user.svg" alt="">
                    <?php } ?>
                    <h4><?= $_SESSION['Surname']; ?> <span id="name"><?= $_SESSION['Name']; ?></span></h4>
                    <?php if($seller == true) { ?>
                        <p>Salesman</p>
                    <?php } else { ?>
                        <p>Buyer</p>
                    <?php } ?>
                </div>
                <div class="right">
                    <div class="info">
                        <h3>Information</h3>
                        <div class="info_data">
                            <div class="data">
                                <h4>Email</h4>
                                <p><?= $_SESSION['Email']; ?></p>
                            </div>
                            <div class="data">
                                <h4>Address</h4>
                                <p><?= $_SESSION['Address']; ?></p>
                            </div>
                        </div>
                    </div>
                <div class="projects">
                        <h3>My experiences</h3>
                        <div class="projects_data">
                            <div class="data">
                                <h4>Product sold</h4>
                                <?php if($sumsold == false) { ?>
                                    <p>0</p>
                                <?php } else { ?>
                                    <?php foreach($sumsold as $sum) { ?>
                                        <p><?= $sum["SUM"]; ?></p>
                                    <?php } ?>
                                <?php } ?>
                            </div>
                            <div class="data">
                                <h4>Product to buy</h4>
                                <?php if($sumToBuy == false) { ?>
                                    <p>0</p>
                                <?php } else { ?>
                                    <?php foreach($sumToBuy as $sum) { ?>
                                        <p><?= $sum["SUM"]; ?></p>
                                    <?php } ?>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- END MY INFORMATIONS -->

        <!-- Unsubscribe -->
            <div class="rgba-unsubscribe"></div>
            <div class="zone-unsubscribe">
                <div class="unsubscribe">
                    <h2>Are you sure you want to delete your account?</h2>
                    <div class="btn">
                        <button class="button"><a href="index.php?action=Unsubscribe">YES</a></button>
                        <button id="no" class="button"><a href="#">NO</a></button>
                    </div>
                </div>
            </div>
        <!-- END Unsubscribe -->

        <!-- CHANGE MY PASSWORD -->

        <!-- <div class="container-change-password">
            <h2 class="titre-acount">Change my password</h2>
            <div class="formulaire contenu">
                <?php if (isset($error)) {
                    echo "<p class='error'>$error</p>";
                } ?>
                <p class='error fields' style="color: red;" id="GenralError"></p>
                <div class="form">
                    <form method='GET' action="index.php" id="NewPassword">
                        <div class="field">
                            <label>New password </label>
                            <input type="password" name="Password" placeholder="New password"id="Password"> <p style="color: red;" id="PasswordError"></p> <p style="color: #27ae27;" id="PasswordValid"></p>
                        </div>
                        <div class="field">
                            <label>Confirmation password</label>
                            <input type="password" name="Confirmation-password" placeholder="Confirmation password" id="Confirmation password"><p style="color: red;" id="CpasswordError"></p><p style="color: #27ae27;" id="CpasswordValid"></p>
                        </div>
                        <div class="condition">
                            <h4>Condition :</h4>
                            <p>At least 8 characters (and less than 15 characters)<br>
                            Contains at least 1 number,
                            at least 1 lowercase letter,
                            and at least 1 uppercase letter.</p>
                        </div>
                        <input class="button" type="submit" name="action" value="Change">
                    </form>
                </div>
            </div>
        </div> -->
        <!-- END CHANGE MY PASSWORD -->

        <!-- MY ORDERS -->

        <!-- <div class="container-my-orders">
            <h2 class="titre-acount">My orders</h2>
            <div class="contents-my-orders contenu">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloribus atque excepturi dicta expedita ab at consequuntur officiis amet corporis autem error aliquam veritatis, tempora beatae totam id incidunt cupiditate laudantium?</p>
            </div>
        </div> -->

        <!-- END MY ORDERS -->

        <!-- MY PRODUCTS -->

        <!-- <div class="container-my-products">
            <h2 class="titre-acount">My products</h2>
            <div class="contents-my-products contenu">
            
                
            </div>
        </div> -->

        <!-- END MY PRODUCTS -->

    </div>
    <!--main container end-->

</div>
<!--wrapper-acount end-->

<script type="text/javascript">
    $(document).ready(function() {
        $(".sidebar-btn").click(function() {
            $(".wrapper-acount").toggleClass("collapse");
        });
    });
</script>



<?php include_once('Css/Acount.php');
include_once('js/editprofil.php');
include_once('js/acount.php');
include_once('js/testJsEditProfile.php');
include_once('js/testJsChangeMypassword.php');
include_once('Model/EditProfile.php');

?>