<?php

require_once __DIR__ . '/../../vendor/autoload.php'; // Adjust this path if necessary

use Dotenv\Dotenv;

class Database {
    private $db_connection;

    public function __construct() {
        // Load environment variables
        $dotenv = Dotenv::createImmutable(__DIR__ . '/../../'); // Adjust to the root folder where .env is located
        $dotenv->load();
    }

    public function getConnection() {
        $this->db_connection = null;

        try {
            // Use environment variables from .env
            $host = $_ENV['DB_HOST'];
            $db_name = $_ENV['DB_NAME'];
            $username = $_ENV['DB_USER'];
            $password = $_ENV['DB_PASS'];

            $this->db_connection = new PDO("
                mysql:host=" . $host . ";dbname=" . $db_name, 
                $username, 
                $password
            );
            
            $this->db_connection->exec("set names utf8");
        } catch (PDOException $exception) {
            echo "Connection error: " . $exception->getMessage();
        }

        return $this->db_connection;
    }
}
