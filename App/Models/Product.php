<?php
namespace App\Models;

class Product extends BaseModel {
    // -------------------------------------------
    // PHẦN LOGIC CŨ (GIỮ NGUYÊN KHÔNG ĐỔI)
    // -------------------------------------------

    // Lấy danh sách sản phẩm
    public function all() {
        $stmt = $this->pdo->prepare("SELECT * FROM products");
        $stmt->execute();
        return $stmt->fetchAll(\PDO::FETCH_ASSOC);
    }

    // Tìm 1 sản phẩm theo ID
    public function find($id) {
        $stmt = $this->pdo->prepare("SELECT * FROM products WHERE id = :id");
        $stmt->execute(['id' => $id]);
        return $stmt->fetch(\PDO::FETCH_ASSOC);
    }

    // Xóa sản phẩm
    public function delete($id) {
        $stmt = $this->pdo->prepare("DELETE FROM products WHERE id = :id");
        $stmt->execute(['id' => $id]);
    }

    // -------------------------------------------
    // PHẦN NÂNG CẤP CHO NHIỆM VỤ 4
    // -------------------------------------------

    /**
     * Thêm mới sản phẩm (Chuẩn hóa nhận vào mảng $data)
     * Giúp code gọn hơn và chống SQL Injection
     */
    public function insert($data) {
        $sql = "INSERT INTO products (name, price, image, description) 
                VALUES (:name, :price, :image, :description)";
        
        $stmt = $this->pdo->prepare($sql);
        
        // $data phải là mảng ['name'=>..., 'price'=>..., 'image'=>..., 'description'=>...]
        $stmt->execute($data);
    }
    public function update($id, $data) {
        $sql = "UPDATE products 
                SET name = :name, price = :price, image = :image, description = :description 
                WHERE id = :id";
        
        $stmt = $this->pdo->prepare($sql);
        
        // Gộp ID vào mảng data để bind tham số
        $data['id'] = $id;
        
        $stmt->execute($data);
    }

    /**
     * Tìm kiếm sản phẩm theo tên (Bonus)
     */
    public function search($keyword) {
        $sql = "SELECT * FROM products WHERE name LIKE :keyword";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute(['keyword' => "%$keyword%"]);
        return $stmt->fetchAll(\PDO::FETCH_ASSOC);
    }
}