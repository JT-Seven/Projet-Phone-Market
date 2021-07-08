<?php

include('Model/ConnectDataBase.php');

function Productsheet($smartphone)
{
    $pdo = connectDB();
    $requete = $pdo->prepare("SELECT IDMARK,TYPE,IMAGE,IDSMARTPHONES ,USERS_IDUSERS, DESCRIPTION,PRICE,STATE,COLOR,MARK.NAME,SMARTPHONES.CAPACITY,MODEL.NAME,PICTURES_IDPICTURES FROM PICTURES JOIN SMARTPHONES ON PICTURES.IDPICTURES = SMARTPHONES.PICTURES_IDPICTURES JOIN MODEL ON MODEL.IDMODEL = SMARTPHONES.MODEL_IDMODEL JOIN MARK ON MARK.IDMARK = MODEL.MARK_IDMARK WHERE IDSMARTPHONES = $smartphone");
    $requete->execute();
    $stock = $requete->fetchAll(); // renvoie un tableau pour qu'on l'exploite

    return $stock;
}


function getSimilarProduct($name)
{
    $pdo = connectDB();
    $requete = $pdo->prepare("SELECT TYPE,IMAGE,IDSMARTPHONES ,USERS_IDUSERS, DESCRIPTION,PRICE,STATE,COLOR,MARK.NAME,SMARTPHONES.CAPACITY,PICTURES_IDPICTURES, IDMARK FROM PICTURES JOIN SMARTPHONES ON PICTURES.IDPICTURES = SMARTPHONES.PICTURES_IDPICTURES JOIN MODEL ON MODEL.IDMODEL = SMARTPHONES.MODEL_IDMODEL JOIN MARK ON MARK.IDMARK = MODEL.MARK_IDMARK WHERE MARK.idmark = '$name';");
    $requete->execute();
    $stock = $requete->fetchAll(); // renvoie un tableau pour qu'on l'exploite

    return $stock;
}
