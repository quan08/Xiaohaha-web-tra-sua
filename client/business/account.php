<?php
function forgot_password()
{
    // unset($_SESSION['location']);

    if (isset($_POST['submit'])) {
        $mess = [];
        $email = $_POST['email'];
        $result = getUesrEmail($email);

        if ($email == '') {
            $mess['false'] = 'Không được bỏ trống';
        } elseif (!is_array($result)) {
            $mess['false'] = 'Email không tồn tại';
        } else {
            $_SESSION['location'] = 'quen-mat-khau';

            $code = random_int(10000, 99999);
            $title = 'Yêu cầu đặt lại mật khẩu';
            $content = "Chào bạn, <br>
            Chúng tôi đã nhận được yêu cầu đặt lại mật khẩu XiaoHaha của bạn.<br>
                        Nhập mã xác nhận sau đây: <h3>$code</h3>";
            sendEmail($title, $content, $email);

            $_SESSION['email'] = $email;
            $_SESSION['code'] = $code;
            header('location: kiem-tra-ma');
        }
    }
    client_render('account/forgot_password.php');
}
function code_check()
{
    if (isset($_SESSION['location']) && $_SESSION['location'] == 'quen-mat-khau') {
        if (isset($_POST['submit'])) {
            $mess = [];
            if ($_POST['code'] === '') {
                $mess['false'] = 'Không được bỏ trống';
            } elseif ($_SESSION['code'] != $_POST['code']) {
                $mess['false'] = 'Mã xác nhận không đúng';
            } else {
                $_SESSION['location'] = 'kiem-tra-ma';
                header('location: doi-mat-khau');
            }
        }
        client_render('account/verification.php');
    } else {
        header('location: trang-chu');
    }
}
function reset_password()
{
    if (isset($_SESSION['location']) && $_SESSION['location'] == 'kiem-tra-ma') {
        if (isset($_POST['submit'])) {
            $mess = [];
            $newPass = $_POST['newpass'];
            $rePass = $_POST['repass'];
            if (empty($newPass) || empty($rePass)) {
                $mess['false'] = 'Không được bỏ trống';
            } elseif (strlen($newPass) < 6) {
                $mess['false'] = 'Mật khẩu tối thiểu có 6 kí tự';
            } elseif ($newPass !== $rePass) {
                $mess['false'] = 'Mật khẩu nhập lại không khớp';
            } else {
                $mess['success'] = 'Đổi mật khẩu thành công. Tự động chuyển hướng sau 5s!';

                unset($_SESSION['location']);
                updatePassword($_SESSION['email'], $rePass);
                header('refresh:5;trang-chu');
            }
        }
        client_render('account/reset_password.php');
    } else {
        header('location: trang-chu');
    }
}

function register()
{
    if (isset($_POST['themmoi']) && ($_POST['themmoi'])) {
        $ten_taikhoan = $_POST['ten_taikhoan'];
        $mat_khau = $_POST['mat_khau'];
        $email = $_POST['email'];
        $sql = "INSERT INTO tai_khoan(email,ten_taikhoan,mat_khau) values('$email','$ten_taikhoan','$mat_khau')";
        pdo_execute($sql);;
    }
    client_render('account/dangky.php');
}

function update_user()
{

    if (isset($_POST['capnhat']) && ($_POST['capnhat'])) {
        $name_new = $_POST['ten_taikhoan'];
        $phone_new = $_POST['sdt'];
        $email_new = $_POST['email'];
        $pass_new = $_POST['mat_khau'];
        if (isset($_FILES['image'])) {
            $image_name = $_FILES['image']['name'];
            $image_size = $_FILES['image']['size'];
            $image_tmp = $_FILES['image']['tmp_name'];
            $image_type = $_FILES['image']['type'];
            $image_ext = strtolower(end(explode('.', $_FILES['image']['name'])));
            $expensions = array('jpeg', 'jpg', 'png');
            if (in_array($image_ext, $expensions) === false) {
                $errors[] = "Ảnh không đúng định dạng";
            }
            if ($image_size > 8000000) {
                $errors[] = "Kích cỡ vượt quá cho phép";
            }
            if (empty($errors) == true) {
                move_uploaded_file($image_tmp, "public/image/" . $image_name);
                action("UPDATE tai_khoan SET ten_taikhoan='$name_new',hinh_anh = '$image_name', sdt='$phone_new',email= '$email_new', mat_khau = '$pass_new' WHERE mat_khau = '$pass_new'");
                header('location: dang-nhap');//đăng nhập chưa có nên sẽ là 404
            }
        } else {
            action("UPDATE tai_khoan SET ten_taikhoan='$name_new', sdt='$phone_new',email= '$email_new', mat_khau = '$pass_new' WHERE mat_khau = '$pass_new'");
            header('location: trang-chu');
        }
    }
    client_render('account/update_account.php');
}
