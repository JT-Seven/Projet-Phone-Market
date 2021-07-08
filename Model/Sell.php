<?php

/*
seachMark => affiche les marque de la base de donnée sur la view.
Searchconfiguration => pareil
catchMark => permet de recuperer l'id du smartphone pour l'utiliser dans linsertion de donné.
*/

include_once('Model/ConnectDataBase.php');

function searchMark()
{
    $pdo = connectDB();
    $requete = $pdo->prepare("SELECT * FROM MARK");
    $requete->execute();
    $Marks = $requete->fetchAll();
    return $Marks;

}

function searchConfiguration($idmark)
{
    $pdo = connectDB();
    $requete = $pdo->prepare("SELECT * FROM MODEL WHERE MARK_IDMARK = '$idmark'");
    $requete->execute();
    $Marks = $requete->fetchAll(PDO::FETCH_ASSOC);
 
    return $Marks;
}

function searchConfiguration2($idmodel)
{
    $pdo = connectDB();
    $requete = $pdo->prepare("SELECT * FROM MODEL WHERE IDMODEL = '$idmodel'");
    $requete->execute();
    $Marks = $requete->fetchAll(PDO::FETCH_ASSOC);
 
    return $Marks;
}

function state(){
    $tab = array(
        'COLOR' => array('BLACK', 'WHITE', 'GREEN', 'BLUE', 'RED', 'PURPLE', 'GREY', 'GOLD'),
        'STATE' => array('NEW', 'STRIKE', 'BAD CONDITION')
    );
    return $tab;
    }

// function catchMark($idMark)
// {
//     $pdo = connectDB();
//     $marks = searchMark();

//     foreach ($marks as $id) {
//         if ($id['IDMARK'] == $idMark) {
//             return $idMark;
//         }
//     }
// }

function insertSmartphone()
{
   
    $image = $_FILES['image']['tmp_name'];
    $img = file_get_contents($image);
    $info = getimagesize($image);

    $pdo = connectDB();
    $request = $pdo->prepare("INSERT INTO PICTURES (IDPICTURES, TYPE, IMAGE) VALUES ('', :TYPE, :IMAGE)");
    $request->bindParam(':IMAGE', $img);
    $request->bindParam(':TYPE', $info['mime']);
    $request->execute();


    $requete3 = $pdo->prepare("INSERT INTO  SMARTPHONES (IDSMARTPHONES, DESCRIPTION, COLOR, STATE, PRICE, USERS_IDUSERS,PICTURES_IDPICTURES,MODEL_IDMODEL,CAPACITY) VALUES ('', :DESCRIPTION,  :COLOR, :STATE, :PRICE,  :USERS_IDUSERS, :PICTURES_IDPICTURES,:MODEL_IDMODEL,:CAPACITY)");
    $requete3->bindParam(':STATE', $_POST['State']);
    $requete3->bindParam(':PRICE', $_POST['Price']);
    $requete3->bindParam(':COLOR', $_POST['Color']);
    $requete3->bindParam(':CAPACITY', $_POST['Capacity']);

    $requete3->bindParam(':DESCRIPTION', $_POST['Description']);
    $model = $_SESSION['Model'];

    $requete3->bindParam(':MODEL_IDMODEL', $model);

    $last_id1 = $pdo->lastInsertId();
    $requete3->bindParam(':PICTURES_IDPICTURES', $last_id1);
    $idU = $_SESSION['User'];
    $requete3->bindParam(':USERS_IDUSERS', $idU);
    $requete3->execute();
}

function getSelesman($userid)
{
    $pdo = connectDB();
    $requete = $pdo->prepare("SELECT SMARTPHONES.USERS_IDUSERS, USERS.IDUSERS, USERS.NAME FROM SMARTPHONES JOIN USERS ON SMARTPHONES.USERS_IDUSERS = USERS.IDUSERS WHERE IDUSERS = '$userid'");
    $requete->execute();
    
    $resultat = $requete->rowCount();
    if($resultat > 0)
    {
        return true; 
    } else {
        return false;
    }
}

function getSumProductSold($userid)
{
    $pdo = connectDB();
    $requete = $pdo->prepare("SELECT COUNT(SMARTPHONES.IDSMARTPHONES) AS SUM, SMARTPHONES.IDSMARTPHONES, USERS.IDUSERS FROM SMARTPHONES JOIN USERS ON SMARTPHONES.USERS_IDUSERS = USERS.IDUSERS WHERE IDUSERS = '$userid'");
    $requete->execute();
    $count = $requete->fetchAll(PDO::FETCH_ASSOC);

    $resultat = $requete->rowCount();
    if($resultat > 0)
    {
        return $count;
    } else {
        return false;
    }
}

function getSumProductToBuy($userid)
{
    $pdo = connectDB();
    $requete = $pdo->prepare("SELECT COUNT(ORDERS_LINES.ORDERS_IDORDERS) AS SUM, ORDERS_LINES.ORDERS_IDORDERS, ORDERS.IDORDERS, ORDERS.USERS_IDUSERS, USERS.IDUSERS FROM ORDERS_LINES JOIN ORDERS ON ORDERS_LINES.ORDERS_IDORDERS = ORDERS.IDORDERS JOIN USERS ON ORDERS.USERS_IDUSERS = USERS.IDUSERS WHERE IDUSERS = '$userid'");
    $requete->execute();
    $count = $requete->fetchAll(PDO::FETCH_ASSOC);

    $resultat = $requete->rowCount();
    if($resultat > 0)
    {
        return $count;
    } else {
        return false;
    }
}