<?php
include_once('Model/ConnectDataBase.php');

function updatePassword($user,$password){
    $pdo = connectDB();
    $requete1 = $pdo->prepare("UPDATE  USERS SET PASSWORD = :PASSWORD WHERE IDUSERS = '$user'");   
    $mdp = md5($password);
    $requete1->bindParam(':PASSWORD',$mdp);

    $requete1->execute();
}


function verifPassword($user){
    $pdo = connectDB();
    $requete = $pdo->prepare("SELECT PASSWORD  FROM USERS WHERE IDUSERS = '$user'");  
    $requete->execute();
    $password = $requete->fetchAll(); 
    
    return $password; 
}