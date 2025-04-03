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
                        <h2>Nhập thông tin sản phẩm</h2>
                        <form action="?action=addProcess" method="POST">

                            <div class="mb-3">
                                <label class="form-label" for="name">Tên sản phẩm:</label>
                                <input class="form-control" type="text" name="name"><br>
                            </div>

                            <div class="mb-3">
                                <label class="form-label" for="price">Giá sản phẩm:</label>
                                <input class="form-control" type="number" name="price"><br>
                            </div>

                            <div class="mb-3">
                                <label class="form-label" for="img">Ảnh sản phẩm (URL):</label>
                                <input class="form-control" type="text" name="img"><br>
                            </div>

                            <div class="mb-3">
                                <label class="form-label" for="cate_id">Danh mục sp:</label>
                                <select name="cate_id" class="form-control">
                                    <?php foreach($categories as $cate){ ?>
                                        <option value="<?= $cate['category_id'] ?>"><?= $cate['category_name']; ?></option>
                                    <?php }?>
                                </select>
                            </div>

                            <button type="submit" class="btn btn-success w-100">Thêm sản phẩm</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>