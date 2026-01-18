<?php
require_once '../vendor/autoload.php';

use App\Database\Database;
use App\Models\Admin;
use App\Controllers\AdminControllers;

// echo '<pre>';
// var_dump($_SERVER);
// echo '</pre>';

switch ($_SERVER['REQUEST_URI']) {
    case '/home':
        echo 'this is home page';
        break;
    case '/admin':
        $admin = new Admin();
        var_dump($admin->finAllUsers());
        // include '../views/html/login.php';
        break;


    default:
        echo '<h1>Error 404</h1>';
        break;
}
