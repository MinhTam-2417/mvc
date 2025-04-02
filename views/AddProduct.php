<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h2>Nhập thông tin sản phẩm</h2>
    <form action="?addProcess" method="POST">

        <label for="name">Tên sản phẩm:</label>
        <input type="text" name="name"><br>

        <label for="price">Giá sản phẩm:</label>
        <input type="number" name="price"><br>

        <label for="img">Ảnh sản phẩm (URL):</label>
        <input type="text" name="img"><br>

        <label for="cate_id">Mã danh mục:</label>
        <input type="text" name="cate_id"><br>

        <button type="submit">Thêm sản phẩm</button>
    </form>
</body>

</html>