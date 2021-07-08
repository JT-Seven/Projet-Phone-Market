<?php
/*
La fonction edit user return true si le code a ete execute avec success
sinon return false si quelqu'un a deja ce nom d'utilisateur

user => sert a recuperer l'ancien id photo de user , on recupere l'id photo on insert, update et on supprime l'ancuienne photo avvec addpicture
*/
include_once('Model/ConnectDataBase.php');
include_once('Model/SignUp.php');


function editUser() {

    if (isset($_POST["Email"])) {
        if (isUserEmailAvailable($_POST["Email"]) == false) return false;
    }

    updateUserValue($_POST["Name"], "NAME");
    updateUserValue($_POST["Surname"], "SURNAME");
    updateUserValue($_POST["Address"], "ADDRESS");
    updateUserValue($_POST["email_"], "EMAIL");

    return true;
}

function updateUserValue($value, $column) {
    if ($value == "") return;
    $pdo = connectDB();

    switch ($column) {


        case "NAME":
            $requete = $pdo->prepare("
            UPDATE USERS
            SET NAME = :VALUE
            WHERE IDUSERS = :IDUSERS;
            ");
            $_SESSION['Name'] = $value;

            break;
        case "SURNAME":
            $requete = $pdo->prepare("
            UPDATE USERS
            SET SURNAME = :VALUE
            WHERE IDUSERS = :IDUSERS;
            ");
            $_SESSION['Surname'] = $value;

            break;
        case "ADDRESS":
            $requete = $pdo->prepare("
            UPDATE USERS
            SET ADDRESS = :VALUE
            WHERE IDUSERS = :IDUSERS;
            ");
            $_SESSION['Address'] = $value;

            break;
        case "EMAIL":
            $requete = $pdo->prepare("
            UPDATE USERS
            SET EMAIL = :VALUE
            WHERE IDUSERS = :IDUSERS;
            ");
            $_SESSION['Email'] = $value;

            break;
    }

    $requete->bindParam(':VALUE', $value);
    $requete->bindParam(":IDUSERS", $_SESSION["User"]);
    $requete->execute();
}


function user() {
    $pdo = connectDB();
    $user = $_SESSION['User'];

    $request = $pdo->prepare("SELECT * FROM USERS WHERE IDUSERS = '$user'");
    $request->execute();
    $containt = $request->fetchAll();
    return $containt;
}


function addPicture() {

    $id = user();
    $idphoto = $id[0]['PROFILE_PHOTO_IDPROFILE_PHOTO'];
    $image = $_FILES['image']['tmp_name'];
    $img = file_get_contents($image);
    $info = getimagesize($image);

    $pdo = connectDB();
    $request = $pdo->prepare("INSERT INTO PROFILE_PHOTO (IDPROFILE_PHOTO, TYPE, IMAGE) VALUES ('', :TYPE, :IMAGE)");
    $request->bindParam(':IMAGE', $img);
    $info2 = $info['mime'];
    $user = $_SESSION['User'];
    $request->bindParam(':TYPE', $info2);
    $request->execute();


    $request1 = $pdo->prepare("UPDATE USERS SET PROFILE_PHOTO_IDPROFILE_PHOTO = :VALUE  WHERE IDUSERS = :IDUSERS");
    $request1->bindParam(':IDUSERS', $user);
    $last_id1 = $pdo->lastInsertId();
    $request1->bindParam(':VALUE', $last_id1);
    $request1->execute();

    $request2 = $pdo->prepare("DELETE FROM PROFILE_PHOTO WHERE IDPROFILE_PHOTO = $idphoto");
    $request2->execute();

    $picture = $request->fetchAll();
    // print_r($picture);
    return $picture;
}


function getUserPicture($iduser) {
    $pdo = connectDB();
    $requestPictureId = $pdo->prepare("SELECT PROFILE_PHOTO_IDPROFILE_PHOTO FROM USERS WHERE IDUSERS = :IDUSERS");
    $requestPictureId->bindParam(':IDUSERS', $iduser);
    $requestPictureId->execute();
    $pictureId = $requestPictureId->fetch(PDO::FETCH_ASSOC);

    $requestPicture = $pdo->prepare("SELECT * FROM PROFILE_PHOTO WHERE IDPROFILE_PHOTO = :IDPROFILE_PHOTO");
    $requestPicture->bindParam(':IDPROFILE_PHOTO', $pictureId['PROFILE_PHOTO_IDPROFILE_PHOTO']);
    $requestPicture->execute();
    return $requestPicture->fetch();
}
