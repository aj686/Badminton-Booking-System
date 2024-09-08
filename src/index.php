<?php

    use Aj686\BadmintonBookingSystem\Controllers\UserController;
    use Aj686\BadmintonBookingSystem\Controllers\HomeController;
    use Aj686\BadmintonBookingSystem\Services\Database;
    use Aj686\BadmintonBookingSystem\Routes\Router;
    // require_once __DIR__  . '/../backend/services/Database.php';
    require_once __DIR__ . '/../vendor/autoload.php';

    $database = new Database();

    $connection_db = $database->getConnection();

    // if ($connection_db) {
    //     echo "Database connection successful!";
    // } else {
    //     echo "Database connection failed!";
    // }

    // User
    Router::add('GET','/user/login', UserController::class, 'login');

    // Public
    Router::add('GET', '/homepage', HomeController::class, 'homepage');

    Router::run();

