<?php

include_once('Model/ConnectDataBase.php');
function insertUser($Name,$Surname,$Email,$Address,$Password,$ZipCode,$City) {
    $pdo = connectDB();
    
    $request = $pdo->prepare("INSERT INTO profile_photo (IDPROFILE_PHOTO, TYPE, IMAGE) VALUES ('', NULL, NULL);");
    $request->execute();

    $Password =  md5($Password);
    $last_id1 = $pdo->lastInsertId();

    $requete = $pdo->prepare("INSERT INTO USERS (NAME, SURNAME, ADDRESS, EMAIL, ADMIN, PASSWORD, CITY, ZIP_CODE,PROFILE_PHOTO_IDPROFILE_PHOTO) VALUES (:NAME, :SURNAME, :ADDRESS,:EMAIL, '', :PASSWORD, :City, :ZipCode,$last_id1)");
    $requete->bindParam(':NAME', $Name);
    $requete->bindParam(":SURNAME", $Surname);
    $requete->bindParam(":ADDRESS", $Address);
    $requete->bindParam(":EMAIL", $Email);
    $requete->bindParam(":PASSWORD", $Password);
    $requete->bindParam(":ZipCode", $ZipCode);
    $requete->bindParam(":City", $City);

    $requete->execute();
    
}


function isUserEmailAvailable($username) {
    $pdo = connectDB();
    $request = $pdo->prepare("SELECT COUNT(*) FROM USERS WHERE EMAIL = '$username'");
    $request->execute();
    $members = $request->fetchAll();

    if ($members[0]["COUNT(*)"] == 0) {
        return true;
    } else {
        return false;
    }
}
