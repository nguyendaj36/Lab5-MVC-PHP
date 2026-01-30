<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Trang chủ MVC</title>
    <style>
        body { font-family: sans-serif; text-align: center; margin-top: 50px; }
        .box { border: 1px solid #ccc; padding: 20px; display: inline-block; border-radius: 10px; }
        h1 { color: #2c3e50; }
        p { color: #e74c3c; font-weight: bold; }
        /* Thêm style cho nút bấm đẹp hơn */
        .btn-link {
            display: inline-block;
            margin-top: 20px;
            padding: 10px 20px;
            background-color: #3498db;
            color: white;
            text-decoration: none;
            border-radius: 5px;
        }
        .btn-link:hover { background-color: #2980b9; }
    </style>
</head>
<body>
    <div class="box">
        <h1><?php echo $message; ?></h1>
        <hr>
        <p>Thông tin sinh viên:</p>
        <div>
            <?php echo $studentInfo; ?>
        </div>

        <br>
        <a href="?page=products" class="btn-link">👉 Xem danh sách sản phẩm</a>
        </div>
</body>
</html>