<?php
include_once("Model/ConnectDataBase.php");
include_once('Model/Checkout.php');

function getAllOrders($userID) {
        $pdo = connectDB();
        $requete = $pdo->prepare("SELECT * FROM ORDERS WHERE USERS_IDUSERS = '$userID'");
        $requete->execute();
    return $requete->fetchAll(PDO::FETCH_ASSOC);
}

function getAllLineOrders($userID) {
    $orders = getAllOrders($userID);
    $lineOrders = Array();

    foreach ($orders as $key => $value) {
        $orderID = $value["IDORDERS"];
        array_push($lineOrders, getLineOrdersFromOrderID($orderID));
    }
    return $lineOrders;
}

function getLineOrdersFromOrderID($orderID) {
    $pdo = connectDB();
    $requete = $pdo->prepare("SELECT * FROM ORDERS_LINES WHERE ORDERS_IDORDERS = '$orderID'");
    $requete->execute();
    return $requete->fetchAll(PDO::FETCH_ASSOC);
}

function getLineOrder($lineOrderID) {
    $pdo = connectDB();
    $requete = $pdo->prepare("SELECT * FROM ORDERS_LINES WHERE IDORDERS_LINES = '$lineOrderID'");
    $requete->execute();
    return $requete->fetchAll(PDO::FETCH_ASSOC)[0];
}

function getOrder($orderID) {
    $pdo = connectDB();
    $requete = $pdo->prepare("SELECT * FROM ORDERS WHERE IDORDERS = '$orderID'");
    $requete->execute();
    return $requete->fetchAll(PDO::FETCH_ASSOC)[0];
}

function getOrderFromLineOrderID($LineOrderID) {
    return getOrder(getLineOrder($LineOrderID)['ORDERS_IDORDERS']);
}

function getPhoneIDFromLineOrder($lineOrderID) {
    return getLineOrder($lineOrderID)['SMARTPHONES_IDSMARTPHONES'];
}

function removeLineOrder($lineOrderID) {
    $pdo = connectDB();
    $requete = $pdo->prepare("DELETE FROM ORDERS_LINES WHERE IDORDERS_LINES = '$lineOrderID'");
    $requete->execute();
}

function removeOrder($orderID) {
    $pdo = connectDB();
    $requete = $pdo->prepare("DELETE FROM ORDERS WHERE IDORDERS = '$orderID'");
    $requete->execute();
}

function cancelLineOrder($lineOrderID) {
    $phoneID = getPhoneIDFromLineOrder($lineOrderID);
    setPhoneSellStatus($phoneID, 0);
    removeLineOrder($lineOrderID);
}

function getSmartphonesFromLineOrders($userID) {
    $array = getAllLineOrders($userID);
    $smartphones = Array();

    if (empty($array)) return $smartphones;

    foreach ($array as $key => $value) {
        if (empty($value[0])) continue;
        $smartphones[$value[0]["IDORDERS_LINES"]] = $value[0]["SMARTPHONES_IDSMARTPHONES"];
    }
    return $smartphones;
}


