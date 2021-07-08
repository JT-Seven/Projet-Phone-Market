<?php
include('Model/UpdateMark.php');

if ($_GET['action'] == 'Rename' && isset($_GET['Mark'])) {
    if (preg_match('/[A-Z]{2,}/', $_GET['Mark'])) {

        $verif = verifMark($_GET['Mark']);
        if ($verif == true) {
            updateMark($_SESSION['idMark'], $_GET['Mark']);
            include_once('View/ConfirmationUpdateMark.php');
        } else {
            $error = 'This brand already exists !';
            include('View/UpdateMark.php');
        }
    } else {
        $error = 'This brand is invalid !';
        include('View/UpdateMark.php');
    }
} else {
    include('View/UpdateMark.php');
    if (!isset($_SESSION['idMark'])) {
        $_SESSION['idMark'] = $_GET['id'];
        print_r($_SESSION['idMark']);
    }
}
