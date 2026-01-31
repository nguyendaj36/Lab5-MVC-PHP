<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Thêm sản phẩm mới</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <div class="card shadow mx-auto" style="max-width: 800px;">
            <div class="card-header bg-primary text-white">
                <h3 class="mb-0">Thêm sản phẩm mới</h3>
            </div>
            <div class="card-body">
                
                <?php if (!empty($errors)): ?>
                    <div class="alert alert-danger">
                        <ul>
                            <?php foreach ($errors as $err): ?>
                                <li><?php echo $err; ?></li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                <?php endif; ?>

                <form action="index.php?page=product-store" method="POST">
                    
                    <div class="mb-3">
                        <label class="form-label">Tên sản phẩm (*)</label>
                        <input type="text" name="name" class="form-control" placeholder="Nhập tên sản phẩm..." required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Giá (VND) (*)</label>
                        <input type="number" name="price" class="form-control" placeholder="Nhập giá..." required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Link hình ảnh</label>
                        <input type="text" name="image" class="form-control" placeholder="https://example.com/anh.jpg">
                        <small class="text-muted">Bạn có thể copy link ảnh từ Google dán vào đây</small>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Mô tả sản phẩm</label>
                        <textarea name="description" class="form-control" rows="4"></textarea>
                    </div>

                    <div class="d-flex justify-content-end gap-2">
                        <a href="index.php?page=product-list" class="btn btn-secondary">Hủy bỏ</a>
                        <button type="submit" class="btn btn-success">Lưu sản phẩm</button>
                    </div>

                </form>
            </div>
        </div>
    </div>
</body>
</html>