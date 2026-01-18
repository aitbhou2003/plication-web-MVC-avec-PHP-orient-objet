<?php
namespace App\Database;

use PDO;
use PDOException;
class Database{
    private PDO $pdo;
    public function __construct(){
        try {
            $this->pdo = new PDO('mysql:host=localhost;dbname=llll','root','');
            $this->pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
            // echo 'connection success';
        } catch (PDOException $e) {
            echo 'no connection'.$e->getMessage();
        }
    }

    public function Connect(){
        return $this->pdo;
    }
}