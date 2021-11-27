<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    if (isset($_POST['name'])) {
        if ($_POST['name'] != "" || $_POST['phone'] != "" || $_POST['address'] != "" || $_POST['note'] != "") {
            if (is_int($_POST['phone']) == false && strlen($_POST['phone']) <= 11 && strlen($_POST['phone']) >= 9) {
                edit($_GET['id'], $_POST['name'], $_POST['phone'], $_POST['address'], $_POST['note']);
            } else {
                echo "Số điện thoại không hợp lệ";
            }
        } else {
            echo "Không được bỏ trống bất cứ trường nào!";
        }
    }
    ?>
    <div style="background:#fff" class="container mt-3 p-3 shadow mb-5 ">
        <a class="btn btn-success" href="dia-chi">Trở lại</a>

        <h2 style="text-align: center;width: 100%;">Sửa địa chỉ nhận hàng</h2>
        <form style="margin-top: 30px;" action="" method="post" enctype="multipart/form-data">
            <div class="row">
                <div class="col">
                    <div class="form-group">
                        <label for="name">Tên người nhận</label>
                        <input type="text" class="form-control" name="name" value="<?php echo $address[0]['recciever'] ?>">
                    </div>
                    <div class="form-group">
                        <label for="phone">SDT người nhận</label>
                        <input type="text" class="form-control" name="phone" value="<?php echo $address[0]['phone'] ?>">
                    </div>


                </div>
                <div class="col">
                    <div class="form-group">
                        <label for="address">Địa chỉ</label>
                        <input type="text" class="form-control" name="address" value="<?php echo $address[0]['address'] ?>">
                    </div>
                    <div class="form-group">
                        <label for="note">Ghi chú</label>
                        <input type="text" class="form-control" name="note" value="<?php echo $address[0]['note'] ?>">
                    </div>
                    <div style="text-align: right;">
                        <button style="margin-top: 30px; " type="submit" class="btn btn-success">Cập nhật</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</body>

</html>