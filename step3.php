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
    <style type="text/css">
    .tab-pane{padding: 5px}
    .form-group{
      margin-bottom: 10px !important;
    }
    label{
      margin-bottom: 2px !important;      
    }
   
    .title {
      
      font-weight: bold !important
    }
    </style>
      <style type="text/css">
  #crumbs ul {
    list-style: none;
    display: inline-table;
  }
    #crumbs ul li {
      display: inline;
      padding: 2px;
    }
  
    #crumbs ul li a {
      display: block;
      float: left;
      text-align: center;
      height: 40px;
      background: #3498db;
      position: relative;
      margin: 0 10px 0 0; 
      padding-top: 9px;      
      font-size: 17px;
      text-decoration: none;
      color: #fff;
          width: 100%;
    }
      #crumbs ul li a:after {
        content: "";  
        border-top: 20px solid transparent;
        border-bottom: 20px solid transparent;
          border-left: 20px solid #3498db;
        position: absolute; right: -20px; top: 0;
        z-index: 1;
      }
      
      #crumbs ul li a:before {
        content: "";  
        border-top: 20px solid transparent;
          border-bottom: 20px solid transparent;
          border-left: 20px solid #FFF;
        position: absolute; left: 0; top: 0;
      }
  
        #crumbs ul li:first-child a {
          border-top-left-radius: 10px; border-bottom-left-radius: 10px;    
          padding-left: 15px;      
        }
        #crumbs ul li:first-child a:before {
          display: none; 
        }
        
        #crumbs ul li:last-child a {          
          border-top-right-radius: 10px; border-bottom-right-radius: 10px;
        }
        #crumbs ul li:last-child a:after {
          display: none; 
        }
      
      #crumbs ul li a:hover, #crumbs ul li a.active {
        background: #ff6400;
      }
        #crumbs ul li a:hover:after, #crumbs ul li a.active:after {
          border-left-color: #ff6400;
        }
  </style>
  </head>
  <body>
    <div class="container" style="margin-top:20px;">
        <div class="row">
          
              <div>
                <div id="crumbs">
                  <ul class="col-sm-12">
                    <li class="col-sm-3"><a href="index.php" >Chuyến đi và tính phí</a></li>
                    <li class="col-sm-3"><a href="step2.php">Thông tin người bảo hiểm</a></li>
                    <li class="col-sm-3"><a href="step3.php" class="active">Đăng nhập hệ thống</a></li>
                    <li class="col-sm-3"><a href="step4.php">Xác nhận và thanh toán</a></li>
                    
                  </ul>
                </div>             
                <div class="clearfix"></div>
                <!-- Tab panes -->
                <div class="tab-content">
                  <div role="tabpanel" class="tab-pane active" id="step1">
                      <?php include "blocks/step3.php"; ?>                      
                  </div>                  
                </div>

              </div>
        
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