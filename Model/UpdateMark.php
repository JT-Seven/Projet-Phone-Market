<?php
include_once('Model/ConnectDataBase.php');

function updateMark($idmark,$mark){
    $pdo = connectDB();
    $requete1 = $pdo->prepare("UPDATE  MARK SET NAME = '$mark' WHERE IDMARK = '$idmark'");   
    $requete1->execute();
}


function verifMark($mark){
    $pdo = connectDB();
    $requete = $pdo->prepare("SELECT * FROM MARK WHERE NAME = '$mark' ");
    $requete->execute();
    $mark = $requete->fetchAll();
    if($mark == null){
        return true;
    }else{
        return false;
    }



}