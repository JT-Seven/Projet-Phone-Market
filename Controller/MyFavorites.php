<?php
include('Model/MyFavorites.php');


if (isset($_GET['action']) && $_GET['action'] == "MyFavorites") {
    if (isset($_GET['idUser']) && isset($_GET['idSmartphone'])) {
        $iduser = $_GET['idUser'];
        $idsmartphone = $_GET['idSmartphone'];

        $compte = getFavorites($iduser, $idsmartphone);
        if ($compte == 0) {
            Like($iduser, $idsmartphone);
        }
    }
} elseif (isset($_GET['action']) && $_GET['action'] == "Removetofavorites") {
    if (isset($_GET['idfavorite'])) {
        $idfavorite = $_GET['idfavorite'];
        DeleteSmartphonetoFavorite($idfavorite);
    }
}
$allphones = getFavoritesSmartphone();
if (isset($_GET['Mark'])) {
$stock  =  getSimilarProduct($_GET['Mark']);
}


include('View/MyFavorites.php');
