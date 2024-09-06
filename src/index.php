<?php 

    require_once '../backend/services/Database.php';
    require_once __DIR__ . '/../vendor/autoload.php';

    $database = new Database();

    $connection_db = $database->getConnection();

    if ($connection_db) {
        echo "Database connection successful!";
    } else {
        echo "Database connection failed!";
    }