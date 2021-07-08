<?php

include_once('Model/ConnectDataBase.php');

function searchMark()
{
    $pdo = connectDB();
    $requete = $pdo->prepare("SELECT * FROM MARK SELECT * FROM `mark` WHERE IDMARK > 16");
    $requete->execute();
    $Marks = $requete->fetchAll();
    return $Marks;

}
