<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    table th {
        text-align: left;
    }
</style>

<body>
    <h1 style="width: 100%; text-align: center;">Quản lý khách hàng</h1>
    <div class="col-lg-3 col-6">
        <!-- small box -->
        <div class="small-box bg-info">
            <div class="inner">
                <h3><?php   ?></h3>
                <p>Số lượng khách hàng</p>
            </div>

        </div>
        <h2>Danh sách </h2>
        <form action="" method="get" class="form-inline">
            <div class="form-group">
                <input type="text" name="keyword" value="<?php if(isset($keyword)) $keyword  ?>" class="form-control mr-2" placeholder="Tìm kiếm...">
            </div>
            <input class="btn btn-sm btn-outline-dark" type="submit" value="Tìm kiếm">
        </form>
    </div>
    <div class="row ml-5">
        <?php
        
        if (isset($_GET['dellid'])) {
            delete_user_one($_GET['dellid']);
        }
        if (isset($_GET['dels'])) {
            delete_user($_GET['dels']);
        }
        for ($i = 0; $i < count($account); $i++) {
        ?>

            <div class="col-sm-5 card bg-light d-flex flex-fill ml-5 mt-3">
                <form class="mt-1" action="" method="post">
                    <input type="checkbox" name="checkbox[]">
                </form>
                <div style="display: none;" class="key"><?php echo $account[$i]['id']; ?></div>
                <div class="card-header text-muted border-bottom-0">
                    <h2 class="lead"><b>Họ Tên: <?php echo $account[$i]['name'] ?></b></h2>
                </div>
                <div class="card-body pt-0">
                    <div class="row">
                        <div class="col-7">

                            <ul class="ml-4 mb-0 fa-ul text-muted">

                                <li class="small"><span class="fa-li"><i class="fas fa-lg fa-phone"></i></span> Phone :<?php echo $account[$i]['phone'] ?> </li>
                                <li class="small"><span class="fa-li"><i class="fas fa-envelope-open"></i></span> Gmail <?php echo $account[$i]['email'] ?></li>
                            </ul>
                        </div>
                        <div class="col-5 text-center">
                            <img src="<?php echo $account[$i]['avatar'] ?>" class="img-circle img-fluid">
                        </div>
                    </div>

                </div>
                <div style="text-align: right;" class="card-footer">
                    <a class="btn btn-danger" onclick="confirm_remove('<?= ADMIN_URL . 'tai-khoan/del?dellid=' . $account[$i]['id'] ?>', '<?= $account[$i]['name'] ?>', 'khách hàng')"> <i class="fas fa-trash"></i>Xóa</a>
                    <a class="btn btn-success" href="edit_account&id=<?php echo $account[$i]['id']; ?>"> <i class="fas fa-edit"></i> Sửa</a>
                </div>
            </div>
        <?php
        }
        ?>
    </div>
    <div style="position: fixed; bottom: 60px;right: 10px;">
        <btn onclick="chooseAll()" class="btn btn-success">Chọn tất cả</btn>
        <btn onclick="unchooseAll()" class="btn btn-success">Bỏ chọn tất cả</btn>
        <btn class="btn btn-danger" onclick="return confirm('Bạn có muốn xóa tất cả khách hàng đã chọn '),checkbox();">Xóa đã chọn</btn>
    </div>
</body>

</html>