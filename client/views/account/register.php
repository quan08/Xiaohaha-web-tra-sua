<style>
    .form{
    width: 40%;
    margin: 0px auto;
    border: 2px solid green;
    height: 350px;
    margin-bottom: 50px;
}
h1{
    text-align: center;
    font-size:45px;
    color:green;
}
.form .row{
    padding: 5px 30px;
}
.form input{
    width: 100%;
    height: 30px;
    padding-left: 10px;
    margin-top: 10px;
}
.form .button{
    height: 100px;
    margin-left: 160px;
}
.form .button button{
    height: 50px;
    width: 120px;
    padding: 10px 20px;
    margin-left: 5px;
    border: 1px solid #ccc;
    border-radius: 5px;
    cursor: pointer;
    color: #333;
    background-color: #fff;
    float: left;
    margin-top: 25px;
    margin-bottom: 25px;
}
.form .button a  {
    display: block;
    text-decoration: none;
    color: #333;
}
.form .button input{
    height: 50px;
    width: 120px;
    padding: 10px 20px;
    margin-left: 5px;
    border: 1px solid #ccc;
    border-radius: 5px;
    cursor: pointer;
    color: #333;
    background-color: #fff;
    float: left;
    margin-top: 25px;
    margin-bottom: 25px;
}
</style>
<div class="title">
        <h1>Thêm tài khoản</h1>
    </div>
    <div class="form">
        <form action="" method="post">
            <div class="row">
                Email <br> <input type="text" name="email" id="" >
            </div>  
            <div class="row">
                Mật Khẩu <br><input type="text" name="password" >
            </div>
              
            <div class="row">
                Họ Và Tên <br> <input type="text" name="name">
            </div>
            <div class="button">
            <input  type="submit" name="dang-ky" value="Đăng Ký">
                <button class="btn" type="reset">Nhập Lại</button>
            </div>
         </form>
    </div>
