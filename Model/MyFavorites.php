<?php

include('Model/ConnectDataBase.php');

function getFavorites($iduser, $idsmartphone)
{
    $pdo = connectDB();
    $requete = $pdo->prepare("SELECT  USERS_IDUSERS, SMARTPHONES_IDSMARTPHONES FROM FAVORITES WHERE USERS_IDUSERS = '$iduser' AND  SMARTPHONES_IDSMARTPHONES = '$idsmartphone'");
    $requete->execute();
    $compte =  $requete->rowCount();
    return $compte;
}

function Like($iduser, $idsmartphone)
{
    $pdo = connectDB();
    $requete = $pdo->prepare("INSERT INTO  FAVORITES (USERS_IDUSERS,SMARTPHONES_IDSMARTPHONES) VALUES (:USERS_IDUSERS,:SMARTPHONES_IDSMARTPHONE)");
    $requete->bindParam(':USERS_IDUSERS', $iduser);
    $requete->bindParam(':SMARTPHONES_IDSMARTPHONE', $idsmartphone);
    $requete->execute();
}


function getFavoritesSmartphone(){
    $pdo = connectDB();
    $iduser = $_SESSION['User'];
    $requete = $pdo->prepare("SELECT MARK.IDMARK,IDFAVORITES,SMARTPHONES.CAPACITY, USERS.IDUSERS ,MODEL.NAME,TYPE,IMAGE ,IDSMARTPHONES ,SMARTPHONES.USERS_IDUSERS, DESCRIPTION,PRICE,STATE,COLOR FROM USERS JOIN FAVORITES ON USERS.IDUSERS = favorites.USERS_IDUSERS JOIN SMARTPHONES ON SMARTPHONES.IDSMARTPHONES = favorites.SMARTPHONES_IDSMARTPHONES JOIN PICTURES ON PICTURES.IDPICTURES = SMARTPHONES.PICTURES_IDPICTURES JOIN MODEL ON MODEL.IDMODEL = SMARTPHONES.MODEL_IDMODEL JOIN MARK ON MARK.IDMARK = MODEL.MARK_IDMARK WHERE USERS.IDUSERS = '$iduser' ");
    $requete->execute();
    $phones = $requete->fetchAll();
    return $phones;
}

function DeleteSmartphonetoFavorite($idfavorite)
{
    $pdo = connectDB();
    $requete = $pdo->prepare("DELETE from favorites where IDFAVORITES= '$idfavorite'");
    $requete->bindParam(':SMARTPHONES_IDSMARTPHONE', $idsmartphone);
    $requete->execute();
}

function getSimilarProduct($name)
{
    $pdo = connectDB();
    $requete = $pdo->prepare("SELECT TYPE,IMAGE,IDSMARTPHONES ,USERS_IDUSERS, DESCRIPTION,PRICE,STATE,COLOR,MARK.NAME,SMARTPHONES.CAPACITY,PICTURES_IDPICTURES, IDMARK FROM PICTURES JOIN SMARTPHONES ON PICTURES.IDPICTURES = SMARTPHONES.PICTURES_IDPICTURES JOIN MODEL ON MODEL.IDMODEL = SMARTPHONES.MODEL_IDMODEL JOIN MARK ON MARK.IDMARK = MODEL.MARK_IDMARK WHERE MARK.idmark = '$name';");
    $requete->execute();
    $stock = $requete->fetchAll(); // renvoie un tableau pour qu'on l'exploite

    return $stock;
}

function getMarkTendance()
{
    $pdo = connectDB();
    $requete = $pdo->prepare("SELECT  MARK.IDMARK,TYPE,IMAGE,IDSMARTPHONES , DESCRIPTION,PRICE,STATE,COLOR,MARK.NAME,SMARTPHONES.CAPACITY FROM USERS JOIN FAVORITES ON USERS.IDUSERS = favorites.USERS_IDUSERS JOIN SMARTPHONES ON SMARTPHONES.IDSMARTPHONES = favorites.SMARTPHONES_IDSMARTPHONES JOIN PICTURES ON PICTURES.IDPICTURES = SMARTPHONES.PICTURES_IDPICTURES JOIN MODEL ON MODEL.IDMODEL = SMARTPHONES.MODEL_IDMODEL JOIN MARK ON MARK.IDMARK = MODEL.MARK_IDMARK WHERE SOLD = 0 ");
    $requete->execute();
    $stock = $requete->fetchAll(); // renvoie un tableau pour qu'on l'exploite

    return $stock;
}



