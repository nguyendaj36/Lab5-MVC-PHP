<?php
namespace App\Models;

class Product extends BaseModel {
    // Hàm lấy tất cả sản phẩm
    public function getAllProducts() {
        // $this->conn được kế thừa từ BaseModel
        $stmt = $this->conn->prepare("SELECT * FROM products");
        $stmt->execute();
        
        // Trả về danh sách dạng mảng
        return $stmt->fetchAll(\PDO::FETCH_ASSOC);
    }
}