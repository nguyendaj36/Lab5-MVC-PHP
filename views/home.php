<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Trang chủ MVC</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body { margin-top: 50px; text-align: center; }
        .box { border: 1px solid #ccc; padding: 30px; display: inline-block; border-radius: 10px; box-shadow: 0 0 10px rgba(0,0,0,0.1); }
        h1 { color: #2c3e50; }
        p { color: #e74c3c; font-weight: bold; }
    </style>
</head>
<body>
    <div class="container">
        <div class="box">
            <h1><?php echo $message; ?></h1>
            <hr>
            <p>Thông tin sinh viên:</p>
            <div>
                <?php echo $studentInfo; ?>
            </div>
            <br>
            
            <a href="?page=product-list" class="btn btn-primary btn-lg">
                👉 Quản lý sản phẩm
            </a>
        </div>
    </div>
</body>
</html>