<?php

namespace Aj686\BadmintonBookingSystem\Models;

use Aj686\BadmintonBookingSystem\Models\BaseModel;
use PDO;

class Court extends BaseModel
{
    private $table = 'courts';

    public function create($name, $location, $availability)
    {
        $query = "INSERT INTO " . $this->table . " (name, location, availability) VALUES (:name, :location, :availability)";
        $stmt = $this->db->prepare($query);

        $stmt->bindParam(':name', $name);
        $stmt->bindParam(':location', $location);
        $stmt->bindParam(':availability', $availability, PDO::PARAM_BOOL);

        return $stmt->execute();
    }

    public function getAll()
    {
        $query = "SELECT * FROM " . $this->table;
        $stmt = $this->db->prepare($query);
        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}