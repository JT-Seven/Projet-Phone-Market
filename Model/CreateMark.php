<?php
/*
insertmark => ajoute une marqque dans la base de donnée
invalidMark => verifie si la marque rentrer n'existe pas 
*/
include('Model/ConnectDataBase.php');
function insertMark()
{
    $pdo = connectDB();
    $requete2 = $pdo->prepare("INSERT INTO  MARK (IDMARK, NAME) VALUES ('',:MARK )");
    $requete2->bindParam(':MARK',$_GET['Add']);
    $idU = $_SESSION['User'];
    $requete2->execute();
}

function invalidMark($mark){
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