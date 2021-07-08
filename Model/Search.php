<?php

require_once('Model/ConnectDataBase.php');

function search($search)
{
 	$pdo = connectDB();
 	$produit = $pdo->query('SELECT MARK.IDMARK, MODEL.NAME, MODEL.IDMODEL, IDSMARTPHONES, TYPE,IMAGE,USERS_IDUSERS, DESCRIPTION,PRICE,STATE,COLOR,SMARTPHONES.CAPACITY,SMARTPHONES.SOLD,PICTURES_IDPICTURES FROM MARK JOIN MODEL ON MODEL.MARK_IDMARK = MARK.IDMARK JOIN SMARTPHONES ON MODEL.IDMODEL = SMARTPHONES.MODEL_IDMODEL JOIN PICTURES ON PICTURES.IDPICTURES  = SMARTPHONES.PICTURES_IDPICTURES WHERE CONCAT(MODEL.NAME,SMARTPHONES.SOLD) LIKE "%'.$search.'%" ORDER BY IDSMARTPHONES ASC ');
 	
    $resultat = $produit->rowCount();
    if($resultat > 0)
    {
        $product = $produit->fetchAll();
        return $product; 
    } else {
        return false;
    }
}