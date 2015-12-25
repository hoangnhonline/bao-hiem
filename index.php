<!DOCTYPE html>
<html>
  <head>
    <title>Web Bao hiem</title>    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <!-- Bootstrap -->
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <style type="text/css">
    .tab-pane{padding: 5px}
    .form-group{
      margin-bottom: 5px !important;
    }
    label{
      margin-bottom: 2px !important;  
      font-weight: normal !important;      
    }
    #hinh-thuc{
      margin-top: 15px;
      margin-bottom: 15px;
    }
    #co-ban, #ca-nhan, #lua-chon{
      margin-bottom: 15px;
    }
    .title {
      
      font-weight: bold !important
    }
    </style>
  </head>
  <body>
    <div class="container" style="margin-top:20px;">
        <div class="row">
            <form role="form">
              <div>
                <!-- Nav tabs -->
                <ul class="nav nav-tabs" role="tablist">
                  <li role="presentation" class="active"><a href="#step1" aria-controls="step1" role="tab" data-toggle="tab">Bước 1: Chuyến đi và tính phí</a></li>
                  <li role="presentation"><a href="#step2" aria-controls="step-2" role="tab" data-toggle="tab">Bước 2: Thông tin người bảo hiểm</a></li>
                  <li role="presentation"><a href="#step3" aria-controls="step-3" role="tab" data-toggle="tab">Bước 3: Đăng nhập hệ thống</a></li>
                  <li role="presentation"><a href="#step4" aria-controls="step-4" role="tab" data-toggle="tab">Bước 4: Xác nhận và thanh toán</a></li>
                </ul>

                <!-- Tab panes -->
                <div class="tab-content">
                  <div role="tabpanel" class="tab-pane active" id="step1">
                      <?php include "blocks/step1.php"; ?>

                   
                      <div class="col-md-6">
                        <div class="panel panel-default">
                          <?php include "blocks/quyen-loi-co-ban.php"; ?>                          
                        </div>

                      </div><!--col-md-6-->
                      <?php include "blocks/hinh-thuc-thanh-toan.php"; ?>   
                      
                  </div>
                  <div role="tabpanel" class="tab-pane" id="step2">...dsfasdfds</div>
                  <div role="tabpanel" class="tab-pane" id="step3">.dsgasdg..</div>
                  <div role="tabpanel" class="tab-pane" id="step4">.sdgasdgsd..</div>
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