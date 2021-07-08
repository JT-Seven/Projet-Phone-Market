<?php

function connectDB() {
    try {
        $pdo = new PDO("mysql:host=localhost;dbname=PHONE_MARKET", "root", "");
    } catch (PDOExeption $e) {
        echo $e->getMessage();
    }
    return $pdo;
}

