<?php
include_once("Model/ConnectDataBase.php");

function findMyProducts()
{
    if(isset($_SESSION['User'])){
    $iduser = $_SESSION['User'];
    
    $pdo = connectDB();
    $requete = $pdo->prepare("SELECT TYPE,IMAGE,IDSMARTPHONES ,USERS_IDUSERS, DESCRIPTION,PRICE,STATE,COLOR,MARK.NAME,SMARTPHONES.CAPACITY,MODEL.NAME, PICTURES_IDPICTURES FROM PICTURES JOIN SMARTPHONES ON PICTURES.IDPICTURES = SMARTPHONES.PICTURES_IDPICTURES JOIN MODEL ON MODEL.IDMODEL = SMARTPHONES.MODEL_IDMODEL JOIN MARK ON MARK.IDMARK = MODEL.MARK_IDMARK WHERE USERS_IDUSERS = '$iduser' AND SMARTPHONES.SOLD = 0" );
    $requete->execute();
    $stock = $requete->fetchAll(); // renvoie un tableau pour qu'on l'exploite
    
    return $stock; 
    }
}

function removeSmartphone($idSmartphone,$idPicture)
{
  $pdo = connectDB();
  $requete1 = $pdo->prepare("DELETE  FROM SMARTPHONES WHERE IDSMARTPHONES = '$idSmartphone' ");
  $requete1->execute();
  
  $requete = $pdo->prepare("DELETE  FROM PICTURES WHERE IDPICTURES = '$idPicture' ");
  $requete->execute();

 
}