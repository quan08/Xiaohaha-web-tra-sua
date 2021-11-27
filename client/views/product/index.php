<!-- Breadcrumb Section Begin -->
<section class="breadcrumb-section set-bg" data-setbg="<?= CLIENT_ASSET ?>img/banner/banner-top2.png">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <div class="breadcrumb__text">
                    <h2>Sản phẩm</h2>
                    <div class="breadcrumb__option">
                        <a href="trang-chủ">Trang chủ</a>
                        <span>Sản phẩm</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Breadcrumb Section End -->

<!-- Product Section Begin -->
<section class="product spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-5">
                <div class="sidebar">
                    <div class="sidebar__item">
                        <h4>Department</h4>
                        <ul>
                            <li><a href="#">Fresh Meat</a></li>
                            <li><a href="#">Vegetables</a></li>
                            <li><a href="#">Fruit & Nut Gifts</a></li>
                            <li><a href="#">Fresh Berries</a></li>
                            <li><a href="#">Ocean Foods</a></li>
                            <li><a href="#">Butter & Eggs</a></li>
                            <li><a href="#">Fastfood</a></li>
                            <li><a href="#">Fresh Onion</a></li>
                            <li><a href="#">Papayaya & Crisps</a></li>
                            <li><a href="#">Oatmeal</a></li>
                        </ul>
                    </div>
                    <div class="sidebar__item">
                        <h4>Price</h4>
                        <div class="price-range-wrap">
                            <div class="price-range ui-slider ui-corner-all ui-slider-horizontal ui-widget ui-widget-content" data-min="10" data-max="540">
                                <div class="ui-slider-range ui-corner-all ui-widget-header"></div>
                                <span tabindex="0" class="ui-slider-handle ui-corner-all ui-state-default"></span>
                                <span tabindex="0" class="ui-slider-handle ui-corner-all ui-state-default"></span>
                            </div>
                            <div class="range-slider">
                                <div class="price-input">
                                    <input type="text" id="minamount">
                                    <input type="text" id="maxamount">
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="sidebar__item">

                    </div>
                </div>
            </div>
            <div class="col-lg-9 col-md-7">
                <!-- <div>
                    <div class="section-title product__discount__title">
                        <h2>Sale Off</h2>
                    </div>

                </div> -->
                <div class="">
                    <div class="section-title product__discount__title">
                        <h2>Sản Phẩm</h2>
                    </div>
                    <div class="row">
                        <div class="col-lg-4 col-md-5">
                            <div class="filter__sort">
                                <span>Kiểu lọc</span>
                                <form action="" method="post" style="margin-left: 50px;margin-top: -25px;">
                                    <select class="cate_id" name="cate_id" id="">
                                        <option value="0" selected>Tất cả</option>
                                        <?php 
                                        $listdanhmuc = loadall_danhmuc();
                                        foreach ($listdanhmuc as $danhmuc){
                                        extract($danhmuc);
                                        echo '<option value="'.$id.'">'.$name.'</option>';
                                        }
                                        ?>
                                    </select>
                                <input class="btn btn-success btn-sm " name="filter" type="submit" value="Filter">
                                </form>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="row">
                    <?php if (!empty($products)) : ?>
                        <?php if(isset($_GET['cate_id'])&&($_GET['cate_id']>0)){
                                $cate_id=$_GET['cate_id'];
                            }else{
                                $cate_id=0;
                            } 
                            $products=loadall_sanpham($cate_id);
                        ?>
                        <?php foreach ($products as $product) : ?>
                            <div class="col-lg-4 col-md-6 col-sm-6">
                                <div class="product__item">
                                    <div class="product__item__pic set-bg" data-setbg="<?= CLIENT_ASSET ?>img/product/sp1.jpg">
                                        <ul class="product__item__pic__hover">
                                            <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                            <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                                        </ul>
                                    </div>
                                    <div class="product__item__text">
                                        <h6><a href="#"><?= $product['name'] ?></a></h6>
                                        <h5><?= number_format($product['price'], 0, '', ',') ?>đ</h5>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach ?>
                    <?php else : ?>
                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <span class="text-danger">Không có sản phẩm nào</span>
                        </div>
                    <?php endif ?>

                </div>
                <div class="product__pagination">
                    <!-- nut prev -->
                    <?php if ($current_page > 1 && $total_page > 1) : ?>
                        <?php if (!isset($_GET['keyword'])) : ?>
                            <a href="<?= BASE_URL . 'san-pham?trang=' . $current_page - 1 ?>"><i class=" fa fa-long-arrow-left"></i></a>
                        <?php else : ?>
                            <a href="<?= BASE_URL . 'san-pham?keyword=' . $_GET['keyword'] . '&trang=' . $current_page - 1 ?>"><i class=" fa fa-long-arrow-left"></i></a>
                        <?php endif ?>
                    <?php endif ?>

                    <!-- phan trang -->
                    <?php for ($i = 1; $i <= $total_page; $i++) : ?>
                        <?php if ($i == $current_page) : ?>
                            <a disabled style="background-color: #7fad39; color: white"><?= $i ?></a>
                        <?php else : ?>
                            <?php if (!isset($_GET['keyword'])) : ?>
                                <a href="<?= BASE_URL . 'san-pham?trang=' . $i ?>"><?= $i ?></a>
                            <?php else : ?>
                                <a href="<?= BASE_URL . 'san-pham?keyword=' . $_GET['keyword'] . '&trang=' . $i ?>"><?= $i ?></a>
                            <?php endif ?>
                        <?php endif ?>
                    <?php endfor ?>

                    <!-- nut next -->
                    <?php if ($current_page < $total_page && $total_page > 1) : ?>
                        <?php if (!isset($_GET['keyword'])) : ?>
                            <a href="<?= BASE_URL . 'san-pham?trang=' . $current_page + 1 ?>"><i class=" fa fa-long-arrow-right"></i></a>
                        <?php else : ?>
                            <a href="<?= BASE_URL . 'san-pham?keyword=' . $_GET['keyword'] . '&trang=' . $current_page + 1 ?>"><i class=" fa fa-long-arrow-right"></i></a>
                        <?php endif ?> <?php endif ?>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Product Section End -->