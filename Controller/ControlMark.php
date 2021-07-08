<?php
include('Model/ControlMark.php');


if ($_GET['action'] == 'RemoveMark') {
    $idmark = $_GET['id'];
    deleteMark($idmark);
    header('Location: index.php?action=ControlMark');
}else{
    include('View/ControlMark.php');

}
