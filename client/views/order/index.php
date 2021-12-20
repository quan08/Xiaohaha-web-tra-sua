<section class="breadcrumb-section set-bg" data-setbg="<?= CLIENT_ASSET ?>img/banner/banner-top2.png">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <div class="breadcrumb__text">
                    <h2>Đơn hàng</h2>
                    <div class="breadcrumb__option">
                        <a href="trang-chủ">Trang chủ</a>
                        <span>Đơn hàng</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php

if (count($order) > 0) {
?>
    <section class="shoping-cart spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="shoping__cart__table">
                        <table>
                            <thead>
                                <tr>
                                    <th class="col-2">Trà sữa</th>
                                    <th class="col-2">Tổng tiền</th>
                                    <th col="col-2">Tạo lúc</th>
                                    <th col="col-2">Trạng thái</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php for ($i = 0; $i < count($order); $i++) {
                                    if ($order[$i]['status'] != 5) {
                                        $oder_detail = (queryOrderDetail($order[$i]['id']));
                                    }

                                    if (isset($_GET['dellid'])) {
                                        $id =  $order[$i]['id'];
                                        $checkStatus = "select * from oder where id = $id";
                                        $resultCheck = executeQuery($checkStatus);
                                        if ($resultCheck['status'] == 0) {
                                            delOrder($_GET['dellid']);
                                        }
                                        header("refresh:0; url =gio-hang?dellsuccess");
                                        exit();
                                    }

                                ?>
                                    <tr>

                                        <td style="text-align: left;">
                                            <?php
                                            for ($l = 0; $l < count($oder_detail); $l++) {
                                                echo '- ' . queryProduct(queryCart($oder_detail[$l]['cart_id'])['product_id'])['name'];
                                            ?>.
                                            <br>
                                        <?php
                                            }
                                        ?>
                                        </td>
                                        <td id="price" class="shoping__cart__price">
                                            <?= number_format($order[$i]['total'], 0, '', ',') . 'đ' ?>
                                        </td>
                                        <td class="">
                                            <?= $order[$i]['created_at'] ?>

                                        </td>
                                        <td>
                                            <?php
                                            $color = 'info';
                                            $valueBtn = "Chi tiết";
                                            if ($order[$i]['status'] == 0) {
                                                echo 'Chờ xác nhận';
                                            } elseif ($order[$i]['status'] == 1) {
                                                echo "Đã xác nhận";
                                            } elseif ($order[$i]['status'] == 2) {
                                                echo "Đang giao";
                                            } elseif ($order[$i]['status'] == 3) {
                                                $valueBtn = 'Đánh giá';
                                                $color = 'success';
                                                echo "Giao hàng thành công";
                                            } else {
                                                echo "Giao hàng thất bại ";
                                                $color = 'secondary';
                                            } ?>
                                        </td>
                                        <td>
                                            <a href="don-hang-chi-tiet?id=<?= $order[$i]['id'] ?>" class="btn btn-<?php echo $color ?>"><?= $valueBtn ?></a>
                                        </td>
                                    </tr>
                                <?php  } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php
}

?>