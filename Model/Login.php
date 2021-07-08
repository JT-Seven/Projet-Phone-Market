<?php
include_once("Model/ConnectDataBase.php");

function login($Password, $Email)
{
    $base = connectDB();
    $requestUser = $base->prepare("SELECT * FROM USERS  WHERE EMAIL = :EMAIL AND PASSWORD = :PASS");
    $requestUser->execute([
        ":EMAIL" => $Email, 
        ":PASS" => $Password
    ]); 
    $userInfo = $requestUser->fetch(); //On vas chercher nos attribut via notre table users pour les inserer dans une session

    if ($requestUser->rowCount() !== 0) {
        $_SESSION['User'] = $userInfo['IDUSERS'];
        $_SESSION['Name'] = $userInfo['NAME'];
        $_SESSION['Surname'] = $userInfo['SURNAME'];
        $_SESSION['Address'] = $userInfo['ADDRESS'];
        $_SESSION['Email'] = $userInfo['EMAIL'];
        $_SESSION['Admin'] = $userInfo['ADMIN'];
        $_SESSION['Send'] = 0;

    }

    // $_SESSION['userRegisterDate'] = $userInfo['registerdate'];
    return $requestUser->rowCount();
}
