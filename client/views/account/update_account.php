<style>
    .formdk {
        width: 1130px;
        height: 540px;
        border: 2px solid green;
        margin: 0px auto;
        display: grid;

    }

    h1 {
        font-size: 35px;
        text-align: center;
        margin-bottom: 30px;
    }

    .formdk .row {
        width: 50%;
        padding: 5px 25px
    }

    .formdk .image {
        position: relative;
        top: -102px;
    }

    .formdk .right .row {
        width: 50%;
        padding: 5px 25px
    }

    .formdk .right {
        float: left;
        position: relative;
        left: 50%;
        top: -150%;
    }

    .formdk .button {
        margin-left: 120px;
        margin-top: 25px;
    }

    .formdk input {
        width: 100%;
        height: 30px;
        padding-left: 10px;
        margin-top: 17px;
    }

    .formdk .button button {
        height: 50px;
        width: 120px;
        padding: 10px 20px;
        margin-left: 5px;
        border: 1px solid #ccc;
        border-radius: 5px;
        cursor: pointer;
        color: #333;
        background-color: #fff;
    }

    .formdk .button a {
        display: block;
        text-decoration: none;
        color: #333;
    }

    .formdk .button input {
        height: 50px;
        width: 885px;
        padding: 10px 20px;
        margin-left: -110px;
        border: 1px solid #ccc;
        border-radius: 5px;
        cursor: pointer;
        color: #333;
        background-color: #7fad39;
        float: left;
        margin-top: -218px;
        margin-bottom: 25px;
    }

    .formdk .button a {
        height: 50px;
        width: 215px;
        padding: 10px 20px;
        margin-left: 785px;
        border: 1px solid #ccc;
        border-radius: 5px;
        cursor: pointer;
        color: #333;
        background-color: #7fad39;
        float: left;
        margin-top: -218px;
        margin-bottom: 25px;
        text-align: center;
    }
</style>
<?php
if (isset($_POST['submit']) && ($_POST['submit'])) {
    if (isset($_POST['email']) && isset($_POST['password'])) {
        $email = $_POST['email'];
        $password = $_POST['password'];
    }
}
ini_set('log_errors','On');
ini_set('display_errors','Off');
ini_set('error_reporting', E_ALL );
define('WP_DEBUG', false);
define('WP_DEBUG_LOG', true);
define('WP_DEBUG_DISPLAY', false);
?>
<div class="boxcenter">
    <div class="left">
        <div class="content">

            <div class="title">
                <h1>Cập Nhật Tài Khoản</h1>
            </div>
            <form action="cap-nhat" method="POST" enctype="multipart/form-data">
                <div class="formdk">
                    <form action="">
                        <div class="row">
                            Nhập email của bạn <br>
                            <input type="email" name="email" >
                            Nhập mật khẩu của bạn <br>
                            <input type="password" name="password" value="">
                            <input style="background-color: #7fad39; border: 1px solid #ccc;" type="submit" name="submit" value="Tiếp tục">
                        </div>
                    </form>
                    <?php foreach (selectDb("SELECT * FROM tai_khoan WHERE email = '$email' AND mat_khau = '$password'") as $row) { ?>
                        <div class="row">
                            Email <br>
                            <input type="email" value="<?php echo $row['email'] ?>" name="email">
                        </div>
                        <div class="row">
                            Số điện thoại <br>
                            <input type="text" value="<?php echo $row['sdt'] ?>" name="sdt">
                        </div>
                        <div class="row">
                            Tên tài khoản <br>
                            <input type="text" value="<?php echo $row['ten_taikhoan'] ?>" name="ten_taikhoan">
                        </div>
                        <div class="right">
                            <div id="content" class="row">
                                Mật khẩu <br>
                                <input type="password" value="<?php echo $row['mat_khau'] ?>" name="mat_khau">
                            </div>
                            <div class="row image">
                                Ảnh <br>
                                <input type="file" value="<?php echo $row['hinh_anh'] ?>" required name="image">
                                <img src = "<?php echo '/duan1-nhom7/public/image/'.$row['hinh_anh'];?>"style="width: 160px; height: 147px; position: relative; top: 35px;" /></td>
                            </div>

                        </div>


                        <div class="button">
                            <input type="submit" name="capnhat" value="Cập Nhật">
                            <a BASE_URL . href="cap-nhat">Quay Lại</a>

                        </div>
                    <?php } ?>
                </div>
            </form>
        </div>
    </div>

    <script>
        document.getElementById("content").style.display = 'none';
    </script>