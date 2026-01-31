<?php
namespace App\Controllers;

use App\Models\Student;

class HomeController {
    public function index() {
        $studentModel = new Student();
        $studentInfo = $studentModel->getInfo();
        
        $message = "Chào mừng đến với mô hình MVC!";

        include 'views/home.php';
    }
}