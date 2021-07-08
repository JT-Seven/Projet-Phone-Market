<?php
include_once("Model/ConnectDataBase.php");

function resetMdp($password, $user)
{
    $pdo= connectDB();
    $requete = $pdo->prepare("UPDATE USERS SET PASSWORD = '$password' WHERE EMAIL = '$user'");
    $requete->execute();
}

function verif($user)
{
    $base = connectDB();
    $requestUser = $base->prepare("SELECT * FROM USERS  WHERE EMAIL = :EMAIL ");
    $requestUser->execute([
        ":EMAIL" => $user, 
    ]); 
    
    return $requestUser->rowCount();
}

function VerifPassword($user){
    $pdo = connectDB();
    $requete = $pdo->prepare("SELECT PASSWORD  FROM USERS WHERE EMAIL = '$user'");  
    $requete->execute();
    $password = $requete->fetchAll(); // renvoie un tableau pour qu'on l'exploite
    return $password; 
}