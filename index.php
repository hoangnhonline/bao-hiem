<!DOCTYPE html>
<html>
  <head>
    <title>Web Bao hiem</title>    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <!-- Bootstrap -->
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>
    <header id="header" class="fixed-width"><section id="menu-base">
      <div class="main-top-menu">
      <div class="container">
      <div class="row">
      <div class="col-md-12">
      <ul class="nav navbar-nav">
        <li class="dropdown"><a class="dropdown-toggle icon-menu" href="#" data-toggle="dropdown">Menu</a>
      <ul class="dropdown-menu main-nav">
        <li><a href="/tra-ve-may-bay">Vé máy bay trực tuyến</a></li>
        <li><a href="/dang-ki-visa-passport">Dịch vụ Visa - passport</a></li>
        <li><a href="/dich-vu-dat-phong-khach-san/">Đặt phòng khách sạn</a></li>
        <li><a href="http://www.worldtrans.vn/globalink/dich-vu-du-lich" target="_blank">Dịch vụ du lịch</a></li>
        <li><a href="/dich-vu-bao-hiem-du-lich/">Bảo hiểm du lịch</a></li>
      </ul>
      </li>
      </ul>
      <div class="navbar-header"><a class="navbar-brand globalink-ticket" href="/">Globalink</a></div>
      <ul class="nav navbar-nav navbar-right">
        <li>Quý khách vui lòng liên hệ với chúng tôi: (+84) 08 399 00 567 - 08 399 00 365</li>
        <li><a class="gift" href="/">Quà tặng</a></li>
        <li><a class="info-member" href="/">Thông tin thành viên</a></li>
        <li><a class="login" href="/">Đăng nhập</a></li>
      </ul>
      </div>
      </div>
      <!-- /.navbar-collapse -->

      </div>
      <!-- /.container-fluid -->

      </div>
      </section></header>
    <div class="container" style="margin-top:20px;">
        <div class="row">
            <form>
              <div>
                <div id="crumbs">
                  <ul class="col-sm-12">
                    <li class="col-sm-3"><a href="index.php" class="active">Chuyến đi và tính phí</a></li>
                    <li class="col-sm-3"><a href="step2.php">Thông tin người bảo hiểm</a></li>
                    <li class="col-sm-3"><a href="step3.php">Đăng nhập hệ thống</a></li>
                    <li class="col-sm-3"><a href="step4.php">Xác nhận và thanh toán</a></li>
                    
                  </ul>
                </div>             
                <div class="clearfix"></div>
                <!-- Tab panes -->
                <div class="tab-content">
                  <div role="tabpanel" class="tab-pane active" id="step1">
                      <?php include "blocks/step1.php"; ?>

                   
                     
                      <?php include "blocks/hinh-thuc-thanh-toan.php"; ?>   
                      
                  </div>                  
                </div>

              </div>
            </form>
        </div>
    </div>
    <div>
</div>
    <script src="http://code.jquery.com/jquery.js"></script>
    <script src="js/bootstrap.min.js" ></script>
    <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">    
    <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
    <script src="js/datepicker-vi.js"></script>
    <script type="text/javascript">
    $(document).ready(function(){
      $('.datepicker').datepicker({
         numberOfMonths: 3,
         minDate: 0,
         dateFormat : 'dd/mm/yy'         
      });
    });
    </script>
  </body>
</html>