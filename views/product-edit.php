<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Chỉnh sửa sản phẩm</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <div class="card shadow mx-auto" style="max-width: 800px;">
            <div class="card-header bg-warning text-dark">
                <h3 class="mb-0">Chỉnh sửa sản phẩm #<?php echo $product['id']; ?></h3>
            </div>
            <div class="card-body">
                <form action="index.php?page=product-update&id=<?php echo $product['id']; ?>" method="POST">
                    
                    <div class="mb-3">
                        <label class="form-label">Tên sản phẩm</label>
                        <input type="text" name="name" class="form-control" 
                               value="<?php echo $product['name']; ?>" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Giá (VND)</label>
                        <input type="number" name="price" class="form-control" 
                               value="<?php echo $product['price']; ?>" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Link hình ảnh</label>
                        <input type="text" name="image" class="form-control" 
                               value="<?php echo $product['image']; ?>">
                        <img src="<?php echo $product['image']; ?>" class="mt-2 img-thumbnail" width="100">
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Mô tả</label>
                        <textarea name="description" class="form-control" rows="4"><?php echo $product['description']; ?></textarea>
                    </div>

                    <div class="d-flex justify-content-end gap-2">
                        <a href="index.php?page=product-list" class="btn btn-secondary">Hủy bỏ</a>
                        <button type="submit" class="btn btn-warning">Cập nhật</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>