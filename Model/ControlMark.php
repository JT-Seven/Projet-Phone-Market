<?php

include_once('Model/ConnectDataBase.php');

function displayMark(){
    $pdo = connectDB();
    $requete = $pdo->prepare("SELECT * FROM MARK ");  
    $requete->execute();
    $stock = $requete->fetchAll(); // renvoie un tableau pour qu'on l'exploite
    
    return $stock; 
}

function deleteMark($idmark){
    $pdo = connectDB();
    $requete1 = $pdo->prepare("DELETE FROM MARK WHERE IDMARK = '$idmark'");   
    $requete1->execute();
}