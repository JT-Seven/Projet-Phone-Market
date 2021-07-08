<?php

include('Model/ConnectDataBase.php');

function unsubscribe($user){
    $pdo = connectDB();
    $requete = $pdo->prepare("DELETE FROM SMARTPHONES WHERE USERS_IDUSERS = '$user'");   
    $requete->execute();

    $requete1 = $pdo->prepare("DELETE FROM ORDERS WHERE USERS_IDUSERS = '$user'");   
    $requete1->execute();

    $requete2 = $pdo->prepare("DELETE FROM USERS WHERE IDUSERS = '$user'");   
    $requete2->execute();
    session_start();
    session_destroy();
    session_unset();
	session_write_close();

}