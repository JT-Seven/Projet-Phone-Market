<?php
include('Model/CreateMark.php');

if (isset($_GET['Add']) && $_GET['action'] == "Add Mark" ){
 if(preg_match('/[A-Z]{2,}/', $_GET['Add'])) {
    $verif = invalidMark($_GET['Add']);
    if ($verif == true) {
        insertMark();
        include('View/ConfirmationAddMark.php');
    } else {
        $error = 'This brand already exists !';
        include('View/CreateMark.php');

    }
   
}else{
    $error = 'This brand is invalid !';
    include('View/CreateMark.php');

}
}else{
    include('View/CreateMark.php');

}

