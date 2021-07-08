<?php
include_once('Model/ConnectDataBase.php');

function getUser()
{
    $pdo = connectDB();
    $user = $_SESSION['User'];

    $request = $pdo->prepare("SELECT * FROM USERS WHERE IDUSERS = '$user'");
    $request->execute();
    $containt = $request->fetchAll();
    return $containt;
}


function deleteProfilePicture()
{
    $pdo = connectDB();
    $user = getUser();
    $idphoto = $user[0]['PROFILE_PHOTO_IDPROFILE_PHOTO'];
    $request = $pdo->prepare("DELETE FROM PROFILE_PHOTO WHERE IDPROFILE_PHOTO = $idphoto");
    $request->execute();
}
