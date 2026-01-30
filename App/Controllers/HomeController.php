<?php
namespace App\Controllers;

// Import Model Student từ bài 2
use App\Models\Student;

class HomeController {
    public function index() {
        // 1. Chuẩn bị dữ liệu (Lấy từ Model)
        $studentModel = new Student();
        $studentInfo = $studentModel->getInfo();
        
        $message = "Chào mừng đến với mô hình MVC!";

        // 2. Gọi View và truyền dữ liệu
        // Khi include file này, biến $studentInfo và $message sẽ dùng được bên trong home.php
        include 'views/home.php';
    }
}