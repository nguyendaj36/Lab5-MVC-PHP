<?php
// Khai báo namespace tương ứng với đường dẫn thư mục: app/Models -> App\Models
namespace App\Models;

class Student {
    private $name;
    private $age;

    public function __construct($name = "Nguyễn Văn A", $age = 20) {
        $this->name = $name;
        $this->age = $age;
    }

    public function getInfo() {
        return "Sinh viên: " . $this->name . " - Tuổi: " . $this->age;
    }
}
?>