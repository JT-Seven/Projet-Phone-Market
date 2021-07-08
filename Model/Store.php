<?php
include_once('Model/ConnectDataBase.php');

function findAllProducts(){
    $pdo = connectDB();
    $requete = $pdo->prepare("SELECT TYPE,IMAGE,IDSMARTPHONES ,USERS_IDUSERS, DESCRIPTION,PRICE,STATE,COLOR,MARK.NAME AS themark,SMARTPHONES.CAPACITY,MODEL.NAME,PICTURES_IDPICTURES FROM PICTURES JOIN SMARTPHONES ON PICTURES.IDPICTURES = SMARTPHONES.PICTURES_IDPICTURES JOIN MODEL ON MODEL.IDMODEL = SMARTPHONES.MODEL_IDMODEL JOIN MARK ON MARK.IDMARK = MODEL.MARK_IDMARK
    ");  
    $requete->execute();
    $stock = $requete->fetchAll(); // renvoie un tableau pour qu'on l'exploite
    
    return $stock; 
}

function findAllProductsAvailable(){
    $pdo = connectDB();
    $requete = $pdo->prepare("SELECT TYPE,IMAGE,IDSMARTPHONES ,USERS_IDUSERS, DESCRIPTION,PRICE,STATE,COLOR,MARK.NAME,MARK.IDMARK,SMARTPHONES.CAPACITY,MODEL.NAME,PICTURES_IDPICTURES FROM PICTURES JOIN SMARTPHONES ON PICTURES.IDPICTURES = SMARTPHONES.PICTURES_IDPICTURES JOIN MODEL ON MODEL.IDMODEL = SMARTPHONES.MODEL_IDMODEL JOIN MARK ON MARK.IDMARK = MODEL.MARK_IDMARK WHERE SMARTPHONES.SOLD = 0
    ");  
    $requete->execute();
    $stock = $requete->fetchAll(); // renvoie un tableau pour qu'on l'exploite
    
    return $stock; 
}

function findOneProducts($product) {
    $stock = findAllProducts();
    foreach ($stock as $element) {
        if ($product != $element['IDSMARTPHONES']) continue;
        return array(
            "id" => $element["IDSMARTPHONES"],
            "idpicture" => $element["PICTURES_IDPICTURES"],
            "idseller" => $element["USERS_IDUSERS"],
            "name" => $element["NAME"],
            "mark" => $element["themark"],
            "price" => $element["PRICE"],
            "description" => $element["DESCRIPTION"],
            "color" => $element["COLOR"],
            "capacity" => $element["CAPACITY"],
            "image" => $element["IMAGE"],
            "imagetype" => $element["TYPE"],
            "state" => $element["STATE"]
        );
    }
    return null;
}

function getEmailUser($IdUser){
    $pdo = connectDB();
    $requete = $pdo->prepare("SELECT NAME,EMAIL FROM USERS WHERE IDUSERS = '$IdUser'");
    $requete->execute();
    $user =  $requete->fetchAll();
   
    return $user;
}

function getStockApple() {
    $pdo = connectDB();
    $min = $pdo->prepare("SELECT MARK.NAME AS MarkName, MIN(SMARTPHONES.PRICE ) AS price FROM SMARTPHONES JOIN MODEL ON MODEL.IDMODEL = SMARTPHONES.MODEL_IDMODEL JOIN MARK ON MARK.IDMARK = MODEL.MARK_IDMARK WHERE MARK.NAME = 'Apple'");
    $min->execute();
    $resultatMin =  $min->fetchAll();    
    return $resultatMin;
}

function getStockApple2() {
    $pdo = connectDB();
    $max = $pdo->prepare("SELECT MARK.NAME AS MarkName, MAX(SMARTPHONES.PRICE) AS price2 FROM SMARTPHONES JOIN MODEL ON MODEL.IDMODEL = SMARTPHONES.MODEL_IDMODEL JOIN MARK ON MARK.IDMARK = MODEL.MARK_IDMARK WHERE MARK.NAME = 'Apple'");
    $max->execute();
    $resultatMax =  $max->fetchAll();
    return $resultatMax;
}

function getStockAndroid() {
    $pdo = connectDB();
    $max = $pdo->prepare("SELECT MARK.NAME AS MarkName, MIN(SMARTPHONES.PRICE) AS price FROM SMARTPHONES JOIN MODEL ON MODEL.IDMODEL = SMARTPHONES.MODEL_IDMODEL JOIN MARK ON MARK.IDMARK = MODEL.MARK_IDMARK WHERE MARK.NAME != 'Apple'");
    $max->execute();
    $resultatMax =  $max->fetchAll();
    return $resultatMax;
}

function getStockAndroid2() {
    $pdo = connectDB();
    $max = $pdo->prepare("SELECT MARK.NAME AS MarkName, MAX(SMARTPHONES.PRICE) AS price2 FROM SMARTPHONES JOIN MODEL ON MODEL.IDMODEL = SMARTPHONES.MODEL_IDMODEL JOIN MARK ON MARK.IDMARK = MODEL.MARK_IDMARK WHERE MARK.NAME != 'Apple'");
    $max->execute();
    $resultatMax =  $max->fetchAll();
    return $resultatMax;
}