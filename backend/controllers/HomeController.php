<?php

namespace Aj686\BadmintonBookingSystem\Controllers;

use Aj686\BadmintonBookingSystem\Models\User;

class HomeController {
    public function __construct() {
        function view($path) {
            include __DIR__ . "/../views/{$path}.php";
        }
    }
    public function homepage() {
        return view('homepage');
    }
}