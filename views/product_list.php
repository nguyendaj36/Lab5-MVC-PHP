<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Danh sách sản phẩm</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>
<body>
    <div class="container mt-5">
        <h2 class="text-center mb-4 text-primary">Danh sách sản phẩm</h2>
        
        <div class="d-flex justify-content-between align-items-center mb-3">
            <a href="?page=home" class="btn btn-secondary"><i class="fas fa-arrow-left"></i> Quay về</a>
            
            <form action="" method="GET" class="d-flex">
                <input type="hidden" name="page" value="product-list">
                <input type="text" name="keyword" class="form-control me-2" 
                       placeholder="Tìm tên sản phẩm..." 
                       value="<?php echo $_GET['keyword'] ?? ''; ?>">
                <button class="btn btn-outline-primary" type="submit"><i class="fas fa-search"></i></button>
            </form>

            <a href="?page=product-add" class="btn btn-success"><i class="fas fa-plus"></i> Thêm mới</a>
        </div>

        <div class="card shadow">
            <div class="card-body">
                <table class="table table-bordered table-hover align-middle">
                    <thead class="table-dark">
                        <tr>
                            <th>ID</th>
                            <th>Hình ảnh</th>
                            <th>Tên sản phẩm</th>
                            <th>Giá (VND)</th>
                            <th>Hành động</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php if (!empty($products)): ?>
                            <?php foreach ($products as $item): ?>
                            <tr>
                                <td><?php echo $item['id']; ?></td>
                                <td>
                                    <img src="<?php echo $item['image'] ?? 'https://placehold.co/50'; ?>" 
                                         alt="Anh sp" 
                                         class="img-thumbnail" 
                                         style="width: 60px; height: 60px; object-fit: cover;">
                                </td>
                                <td>
                                    <a href="?page=product-detail&id=<?php echo $item['id']; ?>" class="text-decoration-none fw-bold">
                                        <?php echo $item['name']; ?>
                                    </a>
                                </td>
                                <td class="text-danger fw-bold"><?php echo number_format($item['price']); ?> đ</td>
                                <td>
                                    <a href="?page=product-edit&id=<?php echo $item['id']; ?>" class="btn btn-warning btn-sm">
                                        <i class="fas fa-edit"></i> Sửa
                                    </a>
                                    
                                    <a href="?page=product-delete&id=<?php echo $item['id']; ?>" 
                                       class="btn btn-danger btn-sm" 
                                       onclick="return confirm('Xóa thật chứ?');">
                                       <i class="fas fa-trash-alt"></i> Xóa
                                    </a>
                                </td>
                            </tr>
                            <?php endforeach; ?>
                        <?php else: ?>
                            <tr>
                                <td colspan="5" class="text-center text-muted">Không tìm thấy sản phẩm nào.</td>
                            </tr>
                        <?php endif; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>