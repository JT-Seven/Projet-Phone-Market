<?php

include_once("Model/Store.php");

$stock = findAllProductsAvailable();
include_once('View/Store.php');