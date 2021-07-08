<?php
include_once('Model/Cart.php');


function checkout($iduser) {
    $cart =& findCart();



    $pdo = connectDB();
    $orderRequest = $pdo->prepare("INSERT INTO ORDERS (ORDER_DATE, USERS_IDUSERS) VALUES (CURDATE() ,:USERS_IDUSERS)");
    $orderRequest->bindParam(':USERS_IDUSERS', $iduser);
    $orderRequest->execute();

    $lastOrderID = $pdo->lastInsertId();

    foreach ($cart as $phoneID => $phoneInCart) {
        $lineOrderRequest = $pdo->prepare("INSERT INTO  ORDERS_LINES (ORDERS_IDORDERS, SMARTPHONES_IDSMARTPHONES) VALUES (:ORDERS_IDORDERS, :SMARTPHONES_IDSMARTPHONES)");
        $lineOrderRequest->bindParam(':ORDERS_IDORDERS', $lastOrderID);
        $lineOrderRequest->bindParam(':SMARTPHONES_IDSMARTPHONES', $phoneID);
        $lineOrderRequest->execute();
    }

    foreach ($cart as $phoneID => $phoneInCart) {
        setPhoneSellStatus($phoneID, 1);
    }

    emptyCart();
}

// 1 = vendu | 0 = disponible

function setPhoneSellStatus($phoneID, $nb) {
    $pdo = connectDB();
    $phoneRequest = $pdo->prepare("UPDATE SMARTPHONES SET SOLD = :NB WHERE IDSMARTPHONES = :IDSMARTPHONES");
    $phoneRequest->bindParam(":IDSMARTPHONES", $phoneID);
    $phoneRequest->bindParam(":NB", $nb);
    $phoneRequest->execute();
}

function deletFavorite() {
    $pdo = connectDB();
    $user = $_SESSION['User'];

    $request = $pdo->prepare("DELETE FROM FAVORITES WHERE USERS_IDUSERS = '$user'");
    $request->execute();
    $containt = $request->fetchAll();
    return $containt;
}

