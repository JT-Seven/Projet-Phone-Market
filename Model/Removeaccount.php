<?php

include_once('Model/ConnectDataBase.php');
include_once('Model/Order.php');

function displayAccount(){
    $pdo = connectDB();
    $requete = $pdo->prepare("SELECT * FROM USERS WHERE IDUSERS != '1'");
    $requete->execute();
    return $requete->fetchAll();
}



function deleteUser($iduser){
    $pdo = connectDB();

    $orders = getAllOrders($iduser);
    $LineOrders = getAllLineOrders($iduser);

    $requete2 = $pdo->prepare("DELETE FROM SMARTPHONES WHERE USERS_IDUSERS = '$iduser' ");
    $requete2->execute();

    if (!empty($LineOrders)) {
        foreach ($LineOrders as $key => $value) {
            var_dump($value);
            removeLineOrder($value[0]['IDORDERS_LINES']);
        }
    }

    if (!empty($orders)) {
        foreach ($orders as $key => $value) {
            removeOrder($value['IDORDERS']);
        }
    }

    $requete1 = $pdo->prepare("DELETE FROM USERS WHERE IDUSERS = '$iduser'");   
    $requete1->execute();
}