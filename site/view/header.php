
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
    />
    <link rel="stylesheet" href="../site/public/css/styleview.css">
    <script src="../site/public/js/trangchu.js"></script>
    <title>Document</title>
  </head>

  <body>
    <header>
      <div class="container">
        <div class="logo">
          <a href="?page=home"><img src="../site/public/img/mlb.jpg" alt="" /></a>
        </div>
        <div class="phandau">
          <nav>
            <ul>
              <li>
                <a href="#">QUẦN ÁO</a>
                <ul class="dropdown">
                  <li><a href="#">Áo</a></li>
                  <li><a href="#">Quần</a></li>
                  <li><a href="#">Quần Kaki</a></li>
                  <li><a href="#">Áo khoác</a></li>
                </ul>
              </li>

              <li>
                <a href="#">MŨ NÓN</a>
                <ul class="dropdown">
                  <li><a href="#">Nón lưỡi trai</a></li>
                  <li><a href="#">Nón bucket</a></li>
                </ul>
              </li>
              <li>
                <a href="?page=product">GIÀY DÉP</a>
                <ul class="dropdown">
                  <li><a href="#">Giày Nam</a></li>
                  <li><a href="#">Giày Nữ</a></li>
                </ul>
              </li>
              <li>
                <a href="#">TÚI VÍ</a>
                <ul class="dropdown">
                  <li><a href="#">Túi xách</a></li>
                  <li><a href="#">Ví da</a></li>
                </ul>
              </li>
              <li>
                <a href="#">PHỤ KIỆN</a>
                <ul class="dropdown">
                  <li><a href="#">Nhẫn</a></li>
                  <li><a href="#">Dây Chuyền</a></li>
                  <li><a href="#">Vòng Tay</a></li>
                  <li><a href="#">Bông Tai</a></li>
                  <li><a href="#">Thắt lưng</a></li>
                </ul>
              </li>
              <li><a href="#" style="color: red">GIẢM GIÁ</a></li>
              
              <li></li>
            </ul>
          </nav>
        </div>
        <div class="icons">
          
          <i style="font-size: 24px" class="fa">&#xf002;</i>
          <i style="font-size: 24px" class="fa">&#xf291;</i>
          <i style="font-size: 24px" class="fa">&#xf07a;</i>
        <?php if(isset($_SESSION['user'])){?>
          <a href="?page=logout"><i style="font-size:24px" class="fa">&#xf0a9;</i>
        </a>
       
        <?php } else {?>
            <a href="?page=registerpage"><i class="fa fa-plus-square-o" style="font-size:30px"></i></a>
            <a href="?page=loginpage"><i style="font-size: 24px" class="fa">&#xf2c0;</i></a>
        <?php }?>
        </div>
      </div>
    </header>
    <div class="picture">
      <div class="slider">
        <img id="anh" alt="" src="../site/public/img/banner.jpg" />
        <i class="slider-prev" onclick="prev()"><</i>
        <i class="slider-next" onclick="prev()">></i>
      </div>
    </div>