<?php
if($_GET['action'] == 'RemoveProfilePicture' && isset($_GET['action'])){
$_SESSION['Picture_registred'] = 0;
header('location: index.php?action=Myaccount');
}