<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Danh sách sản phẩm</title>
    <style>
        table { width: 60%; margin: 20px auto; border-collapse: collapse; }
        th, td { border: 1px solid #ddd; padding: 10px; text-align: center; }
        th { background-color: #4CAF50; color: white; }
        tr:nth-child(even) { background-color: #f2f2f2; }
    </style>
</head>
<body>
    <h1 style="text-align: center;">Danh sách sản phẩm (Database)</h1>
    
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Tên sản phẩm</th>
                <th>Giá (VND)</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($products as $item): ?>
            <tr>
                <td><?php echo $item['id']; ?></td>
                <td><?php echo $item['name']; ?></td>
                <td><?php echo number_format($item['price']); ?> đ</td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    
    <div style="text-align: center;">
        <a href="?page=home">Quay về trang chủ</a>
    </div>
</body>
</html>