<?php
namespace App\Models;

use App\Database\Database;
use PDO;
class Admin extends User
{
    private PDO $conn;
    public function __construct()
    {
        $pdo = new Database();
        $this->conn = $pdo->Connect();
    }
    public function finAllUsers()
    {
        $query = ('SELECT * FROM users');
        $stmt = $this->conn->prepare($query);
        $stmt->setFetchMode(PDO::FETCH_CLASS, Admin::class);
        return $stmt->fetchAll();
    }
    public function Creat()
    {
        return true;
    }

    public function delete()
    {
        return true;
    }
    public function update()
    {
        return true;
    }

}