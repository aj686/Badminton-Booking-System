<?php 

namespace Aj686\BadmintonBookingSystem\Models;

use Aj686\BadmintonBookingSystem\Models\BaseModel;
use PDO;

class User extends BaseModel {
    private $table = 'users';

    // create new data
    public function create($name, $email, $password, $userType) {

        // make query insert new data
        $query = "INSER INTO " . $this->table . " (name, email, password, user_type) 
        VALUES (:name, :email, :password, :user_type)";
        
        // prepare query insert new data
        $stmt = $this->db->prepare($query);
        
        // ':name' is prepared statement similar as in SQL statemnt 
        // $name pass to :name 
        $stmt->bindParam(':name', $name);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':password', $password);
        $stmt->bindParam(':user_type', $userType);

        // executre the quey
        return $stmt->execute();
    }


    // fetch all data from users table in assoc array(key => value) 
    public function getAllUser() {
         // Step 1: Construct the SQL Query
        $query = "SELECT * FROM " . $this->table;

        // Step 2: Prepare the Query
        $stmt = $this->db->prepare($query);

        // Step 3: Execute the Query
        $stmt->execute();

        // Step 4: Fetch All Results 
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}