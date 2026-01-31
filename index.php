<?php
require 'vendor/autoload.php';

use App\Controllers\HomeController;
use App\Controllers\ProductController;

$page = $_GET['page'] ?? 'home';

switch ($page) {
    case 'home':
        $controller = new HomeController();
        $controller->index();
        break;

    case 'product-list':      
        $controller = new ProductController();
        $controller->index();
        break;

    case 'product-detail':   
        $controller = new ProductController();
        $controller->detail();
        break;

    case 'product-delete':   
        $controller = new ProductController();
        $controller->delete();
        break;
    
    case 'product-add':       
        $controller = new ProductController();
        $controller->create();
        break;

    case 'product-store':     
        $controller = new ProductController();
        $controller->store();
        break;

    // 👇 BỔ SUNG 2 CASE MỚI CHO CHỨC NĂNG SỬA 👇
    case 'product-edit':
        $controller = new ProductController();
        $controller->edit();
        break;

    case 'product-update':
        $controller = new ProductController();
        $controller->update();
        break;

    default:
        echo "<h1>404 - Page Not Found</h1>";
        break;
}
?>