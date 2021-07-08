<?php

include_once('Model/ConnectDataBase.php');

function displayMessag(){
    $pdo = connectDB();
    if(isset($_SESSION['User'])){
    $user =  $_SESSION['User'];
    }
    $requete = $pdo->prepare("SELECT MESSAGE  FROM MESSAGING WHERE USERS_IDUSERS = '$user' ");  
    $requete->execute();
    $messag = $requete->fetchAll(); // renvoie un tableau pour qu'on l'exploite
    
    return $messag; 
    
}