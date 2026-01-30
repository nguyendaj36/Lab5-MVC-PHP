<?php
require 'vendor/autoload.php';

use App\Controllers\HomeController;
use App\Controllers\ProductController; // Nhớ use thêm Controller mới

$page = $_GET['page'] ?? 'home';

switch ($page) {
    case 'home':
        $controller = new HomeController();
        $controller->index();
        break;
        
    case 'products': // Thêm case này
        $controller = new ProductController();
        $controller->index();
        break;
        
    default:
        echo "<h1>404 - Page Not Found</h1>";
        break;
}
?>