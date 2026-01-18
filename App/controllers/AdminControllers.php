<?php
namespace App\Controllers;
use App\Models\Admin;

class AdminControllers{
    private Admin $admin;

    public function __construct(){
        $this->admin = new Admin();
    }

    public function index(){
        return $this->admin->finAllUsers();
    }
}

