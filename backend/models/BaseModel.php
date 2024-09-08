<?php 

namespace Aj686\BadmintonBookingSystem\Models;

use Aj686\BadmintonBookingSystem\Services\Database;

// use PDO; - dah setup enable, no need to use PDO because already built-in

abstract class BaseModel {
    protected $db; // PDO object

    public function __construct() {

        $database = new Database;
        $this->db = $database->getConnection();
    }
}

