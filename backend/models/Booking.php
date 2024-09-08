<?php

namespace Aj686\BadmintonBookingSystem\Models;

use Aj686\BadmintonBookingSystem\Models\BaseModel;
use PDO;

class Booking extends BaseModel
{
    private $table = 'bookings';

    public function create($userId, $courtId, $bookingDate, $startTime, $endTime, $status)
    {
        $query = "INSERT INTO " . $this->table . " (user_id, court_id, booking_date, start_time, end_time, status) VALUES (:user_id, :court_id, :booking_date, :start_time, :end_time, :status)";
        $stmt = $this->db->prepare($query);

        $stmt->bindParam(':user_id', $userId);
        $stmt->bindParam(':court_id', $courtId);
        $stmt->bindParam(':booking_date', $bookingDate);
        $stmt->bindParam(':start_time', $startTime);
        $stmt->bindParam(':end_time', $endTime);
        $stmt->bindParam(':status', $status);

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