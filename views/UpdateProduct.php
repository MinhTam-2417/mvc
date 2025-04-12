<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thêm sản phẩm</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light d-flex justify-content-center align-items-center vh-100">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card shadow">
                    <div class="card-body">
                        <h2>Chan đê</h2>
                        <form action="?action=updateProcess&id=<?= $products['product_id'] ?>"
                            enctype="multipart/form-data" method="POST">

                            <div class="mb-3">
                                <label class="form-label" for="id">ID sản phẩm</label>
                                <input class="form-control" name="id" value="<?= $products['product_id'] ?>" readonly>
                            </div><br>

                            <div class="mb-3">
                                <label class="form-label" for="name">Tên sản phẩm:</label>
                                <input class="form-control" type="text" name="name"
                                    value="<?= $products['product_name'] ?>">
                            </div><br>

                            <div class="mb-3">
                                <label class="form-label" for="price">Giá sản phẩm:</label>
                                <input class="form-control" type="number" name="price"
                                    value="<?= $products['product_price'] ?>">
                            </div><br>

                            <div class="mb-3">
                                <label class="form-label">Tên ảnh</label>
                                <input class="form-control" type="text" name="img" 
                                    value=<?= $products['product_img'] ?>>
                                <label class="form-label" for="img">    Ảnh sản phẩm (URL):</label>
                                <input class="form-control" type="file" name="img"
                                    value="<?php echo $products['product_img'] ?>">
                            </div><br>

                            <div class="mb-3">
                                <label class="form-label" for="cate_id">Danh mục:</label>
                                <select name="cate_id" class="form-control">
                                    <?php foreach ($category as $cate) { ?>
                                        <option value="<?= $cate['category_id'] ?>" <?php if ($cate['category_id'] == $products['category_id'])
                                              echo "selected" ?>>
                                            <?= $cate['category_name'] ?>
                                        </option>
                                    <?php } ?>
                                </select>
                            </div><br>

                            <button type="submit" class="btn btn-success w-100">Sửa</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>