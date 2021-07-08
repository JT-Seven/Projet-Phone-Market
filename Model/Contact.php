<?php
include_once("Model/ConnectDataBase.php");

function Contact($Email)
{
    $base = connectDB();
    $requestUser = $base->prepare("SELECT * FROM USERS  WHERE EMAIL = :EMAIL ");
    $requestUser->execute([
        ":EMAIL" => $Email, 
    ]); 
    

    // $_SESSION['userRegisterDate'] = $userInfo['registerdate'];
    return $requestUser->rowCount();
}