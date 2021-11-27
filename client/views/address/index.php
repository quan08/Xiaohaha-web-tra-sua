<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    table td {
        padding-top: 1em;
    }
</style>

<body>
    <div style="background:#fff" class="container mt-3 p-3 shadow mb-5">

        <h3 style="text-align: center; width: 100%;">Quản lý địa chỉ nhận hàng của bạn</h3>

        <table class="mt-5 " style="border-collapse: collapse; width:80%;  ">
            <tr>
                <th>Chọn</th>
                <th>Tên người nhận</th>
                <th>SĐT người nhận </th>
                <th>Địa chỉ</th>
                <th>Ghi chú</th>
                <th></th>
            </tr>

            <?php

            if (isset($_GET['dels'])) {
                delete_addresss($_GET['dels']);
            }

            for ($i = 0; $i < count($address); $i++) {
            ?>
                <tr style="margin-top: 30px;" >
                    <td>
                        <form action="" method="post">
                            <input type="checkbox" name="checkbox[]">
                        </form>
                    </td>
                    <td style="display: none;" class="key"><?php echo $address[$i]['id']; ?></td>
                    <td><?php echo $address[$i]['recciever'] ?></td>
                    <td><?php echo $address[$i]['phone'] ?></td>
                    <td><?php echo $address[$i]['address'] ?></td>
                    <td><?php echo $address[$i]['note'] ?></td>
                    <td>
                        <a class="btn btn-success" href="chinh-sua-dia-chi&id=<?php echo $address[$i]['id']; ?>">Sửa</a>
                        <a style="color: #fff;" class="btn btn-danger " onclick="confirm_remove('<?= 'xoa-dia-chi?dellid=' . $address[$i]['id'] ?>', '<?php echo $address[$i]['recciever'] ?>', 'địa chỉ có tên người nhận là')">Xóa</a>
                    </td>
                </tr>
            <?php
            }
            ?>

        </table>
        <div class="mt-5">
            <btn onclick="chooseAll()" class="btn btn-success">Chọn tất cả</btn>
            <btn onclick="unchooseAll()" class="btn btn-success">Bỏ chọn tất cả</btn>
            <btn onclick="check_isset_box();" data-toggle="modal" data-target="#myModal" class="btn btn-danger">Xóa đã chọn</btn>
        </div>
    </div>

    <!-- The Modal -->
    <div class="modal" id="myModal">
        <div class="modal-dialog">
            <div class="modal-content">

                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title">Cảnh báo</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>

                <!-- Modal body -->
                <div class="modal-body">

                </div>

                <!-- Modal footer -->
                <div class="modal-footer">
                    <button onclick="checkbox();" type="button" class="btn btn-danger btn_true " data-dismiss="modal">Xóa</button>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger btn_false " data-dismiss="modal">Đã hiểu</button>
                </div>

            </div>
        </div>
    </div>
</body>

</html>