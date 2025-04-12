<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List Product</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container">
        <h2>Danh sách các sản phẩm</h2>
        <a class="btn btn-secondary" href="?action=addProduct">Thêm sản phẩm</a><br><br>
        <div class="table-responsive">
            <table class="table table-bordered table-hover shadow-sm bg-white">
                <thead class="table-primary text-center">
                    <tr>
                        <th>STT</th>
                        <th>Tên sp</th>
                        <th>Giá sp</th>
                        <th>Ảnh sp</th>
                        <th>Danh mục sp</th>
                        <th>Thao tác</th>
                    </tr>
                </thead>
                <tbody class="text-center">
                    <?php
                    $stt = 1;
                    foreach ($products as $item) {
                        ?>

                        <tr>
                            <td><?= $stt; ?></td>
                            <td><?= $item['product_name'] ?></td>
                            <td><?= $item['product_price'] ?></td>
                            <td> <img width="100px" src="<?= BASE_ASSETS_UPLOADS . $item['product_img'] ?>"> </td>
                            <td> <?= $item['category_name'] ?> </td>



                            <td>
                                <a class="btn btn-danger" href="?action=DeleteProduct&id=<?= $item['product_id'] ?>">Xóa</a>
                                <!--
                                - lấy id của sp cần xóa
                                - gửi id lên GET
                                - vào trong control tạo biến nhận id đc gửi lên
                                - trỏ đến model để xử lý sql xóa với db
                                -->
                                <a class="btn btn-primary"
                                    href="?action=updateProduct&id=<?= $item['product_id'] ?>">Sửa</a>
                            </td>
                        </tr>

                        <?php $stt++;
                    } ?>
                </tbody>
            </table>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    </div>
</body>

</html>