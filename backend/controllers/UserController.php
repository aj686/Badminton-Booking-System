<?php

namespace Aj686\BadmintonBookingSystem\Controllers;

use Aj686\BadmintonBookingSystem\Models\User;

class UserController {


    public function __construct() {
        function view($path) {
            include __DIR__ . "/../views/user/{$path}.php";
        }
    }
    public function register() {
        return view('register');
    }

    public function login() {
        return view('login');
    }

    public function logout() {}

    public function dashboard() {
        return view('dashboard');
    }

    public function viewCourt() {}

    public function addBooking() {
        return 'User booked court';
    }
}