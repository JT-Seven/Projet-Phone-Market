<?php

/*

Ce fichier définit la structure d'un panier. Il permet également de manipuler et de persister le panier courant de l'utilisateur
Un panier est un tableau associatif contenant les éléments.

(seller = vendeur)

$cart[phoneID] = array('seller' => sellerID) (j'ai utilise un array pour que l'on puisse ajouter plus d'elemant plus tard si besoin)

exemple:

$cart[1] = array('seller' => 3)
$cart[2] = array('seller' => 5)
 */

include_once('Model/Store.php');
include_once('Model/ConnectDataBase.php');

function &findCart() {

    if (!isset($_SESSION['cart'])) {
        $_SESSION['cart'] = array();
    }

    return $_SESSION['cart'];
}

function addItemToCart($phoneID) {
    $cart =& findCart();

    if (isset($cart[$phoneID])) return false;

    $phone = findOneProducts($phoneID);
    $cart[$phoneID] = array('seller' => $phone["idseller"]);
    return true;
}

function removeItemFromCart($phoneID) {
    $cart =& findCart();
    unset($cart[$phoneID]);
}

function cartTotalPrice() {
    $cart =& findCart();
    if (empty($cart)) {
        return 0;
    }
    $totalPrice = 0;
    foreach ($cart as $phoneID => $phoneInCart) {
        $phone = findOneProducts($phoneID);

        $totalPrice = $totalPrice + $phone["price"];
    }
    return $totalPrice;
}

function emptyCart() {
unset($_SESSION['cart']);
}


function getUser($userID) {
    $pdo = connectDB();
    $request = $pdo->prepare("SELECT * FROM USERS WHERE IDUSERS = '$userID'");
    $request->execute();
    return $request->fetch();
}