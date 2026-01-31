<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Chi tiết sản phẩm</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <div class="card shadow mx-auto" style="max-width: 600px;">
            <img src="<?php echo $product['image']; ?>" class="card-img-top" alt="Product Image" style="height: 300px; object-fit: cover;">
            <div class="card-body">
                <h3 class="card-title text-primary"><?php echo $product['name']; ?></h3>
                <h4 class="text-danger mb-3"><?php echo number_format($product['price']); ?> VND</h4>
                
                <p class="card-text"><strong>Mã sản phẩm:</strong> #<?php echo $product['id']; ?></p>
                
                <p class="card-text">
                    <strong>Mô tả:</strong> 
                    <?php echo !empty($product['description']) ? $product['description'] : '<em>Chưa có mô tả</em>'; ?>
                </p>
                
                <hr>
                <a href="index.php?page=product-list" class="btn btn-secondary">Quay lại danh sách</a>
                <a href="index.php?page=product-delete&id=<?php echo $product['id']; ?>" 
                   class="btn btn-danger"
                   onclick="return confirm('Xóa nhé?');">Xóa sản phẩm này</a>
            </div>
        </div>
    </div>
</body>
</html>