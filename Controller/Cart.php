<?php
include_once("Model/Cart.php");

if ($_GET["action"] == "AddToCart") {
    addItemToCart($_GET["id"]);
    header('Location: index.php?action=ShowCart');
    return;
}

if ($_GET["action"] == "RemoveFromCart") {
    removeItemFromCart($_GET["id"]);
    header('Location: index.php?action=ShowCart');
    return;
}

if ($_GET["action"] == "EmptyCart") {
    emptyCart();
    header('Location: index.php?action=ShowCart');
    return;
}