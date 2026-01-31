<?php
namespace App\Controllers;
use App\Models\Product;

class ProductController {

    // 1. HÀM INDEX: Hiển thị danh sách + Tìm kiếm (Gộp logic lại cho chuẩn)
    public function index() {
        $keyword = $_GET['keyword'] ?? null;
        $productModel = new Product();

        if ($keyword) {
            // Nếu có từ khóa -> Tìm kiếm
            $products = $productModel->search($keyword);
        } else {
            // Nếu không -> Lấy tất cả
            $products = $productModel->all();
        }
        
        include 'views/product_list.php';
    }

    // 2. Chi tiết sản phẩm
    public function detail() {
        $id = $_GET['id'] ?? null;
        if (!$id) { echo "ID không hợp lệ!"; return; }

        $productModel = new Product();
        $product = $productModel->find($id);

        if (!$product) { echo "Sản phẩm không tồn tại!"; return; }
        include 'views/product_detail.php';
    }

    // 3. Xóa sản phẩm
    public function delete() {
        $id = $_GET['id'] ?? null;
        if ($id) {
            $productModel = new Product();
            $productModel->delete($id);
        }
        header("Location: index.php?page=product-list");
        exit;
    }

    // 4. Hiển thị form thêm mới
    public function create() {
        include 'views/product-add.php';
    }

    // 5. Lưu sản phẩm mới
    public function store() {
        $name = $_POST['name'] ?? '';
        $price = $_POST['price'] ?? 0;
        $image = $_POST['image'] ?? '';
        $description = $_POST['description'] ?? '';

        $errors = [];
        if (empty($name)) { $errors[] = "Tên sản phẩm không được để trống"; }
        if (empty($price) || !is_numeric($price)) { $errors[] = "Giá phải là số"; }

        if (!empty($errors)) {
            include 'views/product-add.php';
            return;
        }

        $data = [
            'name' => $name,
            'price' => $price,
            'image' => $image,
            'description' => $description
        ];

        $productModel = new Product();
        $productModel->insert($data);

        header("Location: index.php?page=product-list");
        exit;
    }

    // 6. Hiển thị form sửa (Edit)
    public function edit() {
        $id = $_GET['id'] ?? null;
        if (!$id) { echo "ID không hợp lệ"; return; }

        $productModel = new Product();
        $product = $productModel->find($id);

        if (!$product) { echo "Không tìm thấy sản phẩm"; return; }

        include 'views/product-edit.php';
    }

    // 7. Cập nhật dữ liệu (Update)
    public function update() {
        $id = $_GET['id'] ?? null;
        
        $name = $_POST['name'] ?? '';
        $price = $_POST['price'] ?? 0;
        $image = $_POST['image'] ?? '';
        $description = $_POST['description'] ?? '';

        $data = [
            'name' => $name,
            'price' => $price,
            'image' => $image,
            'description' => $description
        ];

        $productModel = new Product();
        $productModel->update($id, $data);

        header("Location: index.php?page=product-list");
        exit;
    }
}