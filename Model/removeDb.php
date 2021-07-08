<?php
include_once('Model/ConnectDataBase.php');

function removeDb()
{
  $pdo = connectDB();
  $requete = $pdo->prepare("DELETE  FROM PICTURES");
  $requete->execute();
  $requete1 = $pdo->prepare("DELETE  FROM SMARTPHONES");
  $requete1->execute();
  $requete2 = $pdo->prepare("DELETE  FROM MARK");
  $requete2->execute();

  $requete3 = $pdo->prepare("DELETE  FROM USERS");
  $requete3->execute();

 
}


