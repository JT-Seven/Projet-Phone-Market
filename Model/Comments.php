<?php

include_once("Model/ConnectDataBase.php");

function getAllCommentsToUser($iduser) {
    $pdo = connectDB();
    $request = $pdo->prepare("SELECT * FROM COMMENTS WHERE USERS_IDUSER_TO = '$iduser'");
    $request->execute();
    return $request->fetchAll(PDO::FETCH_ASSOC);
}

function getAllCommentsFromUser($iduser) {
    $pdo = connectDB();
    $request = $pdo->prepare("SELECT * FROM COMMENTS WHERE USERS_IDUSER_FROM = '$iduser'");
    $request->execute();
    return $request->fetchAll(PDO::FETCH_ASSOC);
}

function createNewComment($iduserFrom, $iduserTo, $text) {
    $pdo = connectDB();
    $request = $pdo->prepare("INSERT INTO COMMENTS (USERS_IDUSER_FROM, USERS_IDUSER_TO, TEXT, DATE) VALUES (:USERS_IDUSER_FROM, :USERS_IDUSER_TO, :TEXT, CURDATE())");
    $request->bindParam(':USERS_IDUSER_FROM', $iduserFrom);
    $request->bindParam(':USERS_IDUSER_TO', $iduserTo);
    $request->bindParam(':TEXT', $text);
    $request->execute();
}

function removeComment($commentId) {
    $pdo = connectDB();
    $request = $pdo->prepare("DELETE FROM COMMENTS WHERE IDCOMMENTS = '$commentId'");
    $request->execute();
}

function getCommentAmount($iduserFrom, $iduserTo) {
    $pdo = connectDB();
    $request = $pdo->prepare("SELECT COUNT(IDCOMMENTS) FROM COMMENTS WHERE USERS_IDUSER_TO = '$iduserTo' AND USERS_IDUSER_FROM = '$iduserFrom'");
    $request->execute();
    $amount = $request->fetch(PDO::FETCH_ASSOC);
    return $amount['COUNT(IDCOMMENTS)'];
}
