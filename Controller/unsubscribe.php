<?php
session_start();
include('Model/unsubscribe.php');
unsubscribe($_SESSION['User']);
header('Location: index.php?action=');
