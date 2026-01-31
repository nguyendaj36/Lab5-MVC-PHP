<?php
namespace App\Models;

use PDO;
use PDOException;

class BaseModel {
    // Sửa thành $pdo theo yêu cầu
    protected $pdo; 

    public function __construct() {
        $host = 'localhost';
        $dbname = 'lab5_mvc';
        $username = 'root';
        $password = '';

        try {
            // Gán vào $this->pdo
            $this->pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password);
            $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            echo "Lỗi kết nối: " . $e->getMessage();
        }
    }
}