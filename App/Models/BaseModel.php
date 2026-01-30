<?php
namespace App\Models; // Namespace phải khớp

use PDO;
use PDOException;

class BaseModel { // Tên class phải khớp với tên file
    protected $conn;
    
    public function __construct() {
        // ... code kết nối database ...
        $host = 'localhost';
        $dbname = 'lab5_mvc'; 
        $username = 'root';
        $password = '';
        
        try {
            $this->conn = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password);
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            echo "Lỗi kết nối: " . $e->getMessage();
        }
    }
}