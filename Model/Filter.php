<?php

include_once('Model/ConnectDataBase.php');

function filter() {
    $stringRequest = "
  SELECT MARK.IDMARK, MODEL.NAME, MODEL.IDMODEL, IDSMARTPHONES, TYPE,IMAGE,USERS_IDUSERS, DESCRIPTION,PRICE,STATE,COLOR,SMARTPHONES.CAPACITY,SMARTPHONES.SOLD,PICTURES_IDPICTURES FROM MARK JOIN MODEL ON MODEL.MARK_IDMARK = MARK.IDMARK JOIN SMARTPHONES ON MODEL.IDMODEL = SMARTPHONES.MODEL_IDMODEL JOIN PICTURES ON PICTURES.IDPICTURES  = SMARTPHONES.PICTURES_IDPICTURES
    WHERE SMARTPHONES.SOLD = 0 ";

    if (isset($_GET['apple'])) {
        $stringRequest = $stringRequest." AND MARK.NAME = 'Apple'";
    }

    if (isset($_GET['sony'])) {
        $stringRequest = $stringRequest." AND MARK.NAME = 'Sony'";
    }

    if (isset($_GET['huawei'])) {
        $stringRequest = $stringRequest." AND MARK.NAME = 'Huawei'";
    }

    if (isset($_GET['xiaomi'])) {
        $stringRequest = $stringRequest." AND MARK.NAME = 'Xiaomi'";
    }

    if (isset($_GET['samsung'])) {
        $stringRequest = $stringRequest." AND MARK.NAME = 'Samsung'";
    }
    if (isset($_GET['google'])) {
        $stringRequest = $stringRequest." AND MARK.NAME = 'Google'";
    }

    if (isset($_GET['black'])) {
        $stringRequest = $stringRequest." AND COLOR = 'BLACK'";
    }

    if (isset($_GET['grey'])) {
        $stringRequest = $stringRequest." AND COLOR = 'GREY'";
    }

    if (isset($_GET['blue'])) {
        $stringRequest = $stringRequest." AND COLOR = 'BLUE'";
    }

    if (isset($_GET['red'])) {
        $stringRequest = $stringRequest." AND COLOR = 'RED'";
    }

    if (isset($_GET['white'])) {
        $stringRequest = $stringRequest." AND COLOR = 'WHITE'";
    }

    
    if (isset($_GET['green'])) {
        $stringRequest = $stringRequest." AND COLOR = 'GREEN'";
    }

    if (isset($_GET['gold'])) {
        $stringRequest = $stringRequest." AND COLOR = 'GOLD'";
    }

    if (isset($_GET['purple'])) {
        $stringRequest = $stringRequest." AND COLOR = 'PURPLE'";
    }


    if (isset($_GET['8go'])) {
        $stringRequest = $stringRequest." AND SMARTPHONES.CAPACITY = '8Go'";
    }

    if (isset($_GET['16go'])) {
        $stringRequest = $stringRequest." AND SMARTPHONES.CAPACITY = '16Go'";
    }

    if (isset($_GET['32go'])) {
        $stringRequest = $stringRequest." AND SMARTPHONES.CAPACITY = '32Go'";
    }

    if (isset($_GET['64go'])) {
        $stringRequest = $stringRequest." AND SMARTPHONES.CAPACITY = '64Go'";
    }

    if (isset($_GET['128go'])) {
        $stringRequest = $stringRequest." AND SMARTPHONES.CAPACITY = '128Go'";
    }

    if (isset($_GET['256go'])) {
        $stringRequest = $stringRequest." AND SMARTPHONES.CAPACITY = '256Go'";
    }

    if (isset($_GET['512go'])) {
        $stringRequest = $stringRequest." AND SMARTPHONES.CAPACITY = '512Go'";
    }

    $stringRequest = $stringRequest." AND SMARTPHONES.PRICE BETWEEN ".$_GET["price"]." AND ".$_GET["price2"];

    if (isset($_GET['order-by'])) {
        if ($_GET['order-by'] == "increasing")
            $stringRequest = $stringRequest . " ORDER BY PRICE ASC";
        if ($_GET['order-by'] == "decreasing")
            $stringRequest = $stringRequest . " ORDER BY PRICE DESC";
        if ($_GET['order-by'] == "mark")
            $stringRequest = $stringRequest . " ORDER BY MARK.NAME ASC";
        if ($_GET['order-by'] == "color")
            $stringRequest = $stringRequest . " ORDER BY COLOR ASC";
        if ($_GET['order-by'] == "capacity")
            $stringRequest = $stringRequest . " ORDER BY CAPACITY ASC";
    }

    $pdo = connectDB();
    $request = $pdo->query($stringRequest);
    return $request->fetchAll(PDO::FETCH_ASSOC);
}