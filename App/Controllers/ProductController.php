<?php
namespace App\Controllers;

use App\Models\Product;

class ProductController {
    public function index() {
        // 1. Gọi Model để lấy dữ liệu thật
        $productModel = new Product();
        $products = $productModel->getAllProducts();

        // 2. Gửi dữ liệu $products sang View hiển thị
        include 'views/product_list.php';
    }
}