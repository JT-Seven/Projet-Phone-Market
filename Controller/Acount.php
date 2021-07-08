<?php
if (isset($_SESSION['User'])) {
    include_once('View/Acount.php');
} else {
    header("Location: index.php?action=Login");

    if (!isset($_SESSION['GoAccount'])) {
        $_SESSION['GoAccount'] = 'true';
    }
}
