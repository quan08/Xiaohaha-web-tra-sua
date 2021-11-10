<!DOCTYPE html>
<html lang="en">

<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Alfa+Slab+One&family=Mochiy+Pop+P+One&family=Pacifico&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" />
</head>
<style>
  .yellow {
    color: #cfa057;
  }

  .fixed {
    z-index: 1000;
    width: 100%;
    top: 0px;
    position: fixed;
  }

  footer {
    color: white;
    padding-top: 30px;
    width: 100%;
  }

  footer a {
    color: white;
    text-decoration: none;
  }

  footer a:hover {
    color: white;
  }

  h2 {
    color: #d2a351;
  }
  /* article */
  article{
    width: 90%;
    margin-left: 100px;
  }
  .tittle h2{
    color: #fff;
    position:absolute;
    top: 550px; 
    left:110px;
    }
  span{
    font-weight: bold;
  }
  .top h3{
    margin-bottom: 10px;
    margin-top: 20px;
  }
  .top p{
    margin-left: 50px;
    line-height:1.5em;
  }
  .under{
   text-align: center;
  }
  .under div img{
    width: 600px;
    height: auto;
    margin-top: 40px;

  }
</style>

<body>
  <div class="container-fluid">
    <!-- header -->
    <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
      <div class="container">
        <a class="navbar-brand" href="#">
          <img src="images/logo.png" alt="logo" style="width:120px;">
        </a>
        <ul style=" font-size: 19px ;font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;" class="navbar-nav ">
          <li class="nav-item active">
            <a class="nav-link mr-4 " href="trangchu.php">Trang chủ</a>
          </li>
          <li class="nav-item mr-4">
            <a class="nav-link" href="#">Giới thiệu</a>
          </li>
          <li class="nav-item mr-4">
            <a class="nav-link" href="#">Sản phẩm</a>
          </li>
          <li class="nav-item mr-4">
            <a class="nav-link " href="tintuc.php">Tin tức</a>
          </li>
          <li class="nav-item">
            <a class="nav-link mr-4" href="#">Liên hệ</a>
          </li>

        </ul>
        <form class=" form-inline" action="/action_page.php">
          <input class="form-control mr-sm-2" type="text" placeholder="tìm kiếm...">
          <button style="color:white;" class="btn btn-warning" type="submit">Đi</button>
        </form>
      </div>
    </nav>
    <!-- end header -->

    <!-- banner -->
    <img style="width: 100%; height: 650px" src="./images/banner.jpg" alt="">
    <div class="tittle">
      <h2>Giới thiệu</h2>
    </div>
    <!-- end-banner -->
    <article>
      <div class="top">
        <h3>Giới thiệu</h3>
        <p>
          Luôn tâm huyết với việc khai thác nguồn nông sản Việt Nam để tạo ra những ly thức uống tươi ngon, an toàn và giàu giá trị dinh dưỡng, <span>Xiao Haha</span> mở cửa hàng đầu tiên vào năm 2013, mang trong mình lòng giới trẻ và khát vọng xây dựng một thương hiệu trà sữa thuận viết mang đậm hương vị quê hương <span>Xiao Haha</span> tin rằng thường thức một ly trà sữa được pha chế từ trả Mộc Châu, trân châu tủ sắn dây Nghệ An hay mút dầu tâm từ Đà Lạt sil là những trải nghiệm hoàn toàn khác biệt và tuyệt vời nhất cho những khách hàng của mình.
          <br>
          <br>

          Cung chính từ sự khác biệt đó, thượng hiệu <span>Xiao Haha</span> đã có những bước phát triển thận tốc và dẫn chiếm lĩnh thị trường trò sữa với hơn 200 cửa hàng trải dài trên toàn quốc. Cột mốc năm 2018 đánh dấu ước mơ vươn xa biển lớn của thương hiệu khi <span>Xiao Haha</span> chính thức đặt chân lên nước Mỹ và tiếp nổi thành công tại Úc, Nhật Bản, Hàn Quốc, Singapore.
          <br>
          <br>

          Hành trình đầy đam mê và tâm huyết này sẽ tiếp tục nhân rộng để lan tộc những ly trả thuận khiết rằng sản Việt đến mọi miền trên Việt Nam và thế
          giói.
        </p>
      </div>
      <div class="under">
        <div>
          <img src="./images/on-gioithieu.jpg" alt="anh">
        </div>
        <div>
          <img src="./images/in-gioithieu.jpg" alt="anh">
        </div>
      </div>
    </article>
    <!-- footer -->
    <div class="container-flui">
      <footer class="bg-dark mt-5">
        <div class="container">
          <div class="row">
            <div class="col">
              <img style="width: 90%;" src="images/logo1.png" alt="">
            </div>

            <div class="col">
              <h2>CONTACT</h2>
              <p><i class="fas fa-map-marker"></i> <a href="">Hà Đông, Hà Nội</a></p>
              <p> <i class="fas fa-envelope"></i> <a href="">xiaohaha78@.com</a></p>
              <p> <i class="fas fa-phone-square-alt"></i> <a href="">0387878787</a></p>
              <img style="width: 60%;" src="../img//bo_cong_thuong_grande.png" alt="">
            </div>

            <div class="col">
              <h2>CHÍNH SÁCH</h2>
              <div style="line-height: 35px;">
                <a href>Hình thức thanh toán</a> <br>
                <a href>Vận chuyển giao nhận</a> <br>
                <a href>Bảo mật thông tin</a> <br>
                <a href>Chính sách người dùng </a>
              </div>
              </p>
            </div>

            <div class="col">
              <h2>VỀ CHÚNG TÔI</h2>
              <div style="line-height: 35px;">
                <a href>Giới thiệu</a> <br>
                <a href>Tin tức</a> <br>
                <a href>Cửa hàng</a> <br>
              </div>
              </p>
            </div>
          </div>
          <div style="height: 2px ; background-color: white; width: 100%;" class="line mt-4"></div>

          <div class="row">
            <div class="col">
              <h5>XIAOHAHA - Trà Sữa Thả Ga</h5>
            </div>

            <div class="col">
              <p style="text-align: right;"> Copyrights 2021 by XIAOHAHA Tea.</p>
            </div>
          </div>
      </footer>
    </div>
    <script>
      window.addEventListener("scroll", function(event) {
        var nav = document.getElementsByClassName("navbar");
        var scroll_y = this.scrollY;
        if (scroll_y >= 36) {
          nav[0].classList.add('fixed');
        } else {
          nav[0].classList.remove('fixed');
        }
      });
    </script>
</body>

</html>