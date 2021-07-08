<?php

include_once('Model/Store.php');
include_once('Css/Order.php');

$phoneIDs = getSmartphonesFromLineOrders($_SESSION['User']);
?>
<h1>Cancel Orders</h1><BR>

<section class="cards">
    
    <?php
     if ($phoneIDs != NULL) {

    foreach ($phoneIDs as $key => $id) {
        $phone = findOneProducts($id);
        $user = getEmailUser($phone["idseller"]);

        if (!isset($phone)) continue;
    ?>
        <div class="card">
            <?php echo ' <img src="data:' . $phone['imagetype'] . ';base64,' . base64_encode($phone['image']) . '" />'; ?>
            <div class="information">
                <H1>information product :</H1>
                <h2>Model : <?php echo strtoupper($phone["name"]) ?><br>
                <?php echo "Capacity: " . $phone["capacity"] . "\n" ?>
                    <br><?php echo "Color: " . $phone["color"] ?>
                    <br><?php echo "State: " . $phone["state"] ?><br>
                    <?php echo "Price: " .$phone["price"] ?>€

                    <H1>Order information : </H1>
                    <H2 ><?php echo 'Order date :<b style =  color:green;font-size:14px;>' . getOrderFromLineOrderID($key)['ORDER_DATE'] . '</b>' ?><BR>
                    <?php echo "Seller:<b style =  color:green;font-size:14px;> ".$user[0]['EMAIL'] ?></H2><br>
                </h2><br>
            </div>
          
            <section class="Button">
            <div class="Button1">
                    <a href="index.php?action=RemoveOrder&id=<?php echo $key ?>">Cancel </a>
                </div>


            </section>
        </div>

    <?php

    }
    ?>
</section>
<?php } else { ?>
            <div class="error-message">
                <h2>No order...</h2>
            </div>
            <section class="affiche1">
                <img src="img/basket.svg">
            </section>
        <?php } ?>