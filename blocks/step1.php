<form id="formStep1" method="POST" action="process/cal.php">
<div class="col-md-12">
    <div class="panel panel-default">
      <div class="panel-heading">
        ♥ Tính phí bảo hiểm du lịch quốc tế
      </div>
      <div class="panel-body">
        <div class="col-md-12" style="margin-bottom:15px">
          <label class="title">Khu vực:</label>
          <label class="radio-inline">
            <input type="radio" name="area" value="W" checked data-toggle="modal" data-target="#toancauModal">Toàn cầu
          </label>
          <label class="radio-inline">
            <input type="radio" name="area" value="A" data-toggle="modal" data-target="#chauaModal">Châu Á
          </label>
          <label class="radio-inline">
            <input type="radio" name="area" value="E" data-toggle="modal" data-target="#dongnamaModal">Đông Nam Á
          </label>
        </div><!--col-md-12-->
      
          <div class="col-sm-3">
            <div class="form-group">
              <label>Ngày đi</label>
              <input class="form-control datepicker" name="date_from" id="date_from" aria-required="true" required="required"
              value="<?php if(isset($_SESSION['step1']['date_from'])) echo $_SESSION['step1']['date_from'];?>"
              />
            </div>
            
          </div><!--col-md-6-->
          <div class="col-sm-3">
              <div class="form-group">
                <label>Ngày về</label>
                <input class="form-control datepicker" name="date_to" id="date_to" aria-required="true" required="required"
                value="<?php if(isset($_SESSION['step1']['date_to'])) echo $_SESSION['step1']['date_to'];?>"
                />
              </div>             
          </div><!--col-md-6-->
          <div class="col-sm-3">
            <div class="form-group">
              <label>Số ngày du lịch</label>
              <input class="form-control" name="no_date" id="no_date" aria-required="true" required="required" 
              value="<?php if(isset($_SESSION['step1']['no_date'])) echo $_SESSION['step1']['no_date'];?>"
              />
            </div>
            
          </div><!--col-md-6-->
          <div class="col-sm-3">             
              <div class="form-group">
                <label>Số người du lịch</label>
                <input class="form-control" name="persons" id="persons" aria-required="true" required="required" 
              value="<?php if(isset($_SESSION['step1']['persons'])) echo $_SESSION['step1']['persons'];?>"
                />
              </div>
          </div><!--col-md-6-->
          <div class="col-md-6" >
            <div id="hinh-thuc">
              <label class="title">Hình thức du lịch:</label>
              <label class="radio-inline">
                <input type="radio" name="type" value="Individual" checked>Cá nhân
              </label>
              <label class="radio-inline">
                <input type="radio" name="type" value="Family">Gia đình
              </label>          
            </div>
            <div id="lua-chon">
            <p class="title">Quyền lợi bảo hiểm lựa chọn:<span style="cursor:pointer" data-toggle="modal" data-target="#luachonModal">(Xem chi tiết)</span></p>
            <div class="col-md-6">
            <label class="title">-  Bảo hiểm sự cố bất ngờ:</label>
            </div>
            <div class="col-md-6">
              <div class="col-md-6">
              <label class="radio-inline">
                <input type="radio" name="incidental_plan" value="0" checked>Không
              </label>
              </div>
              <div class="col-md-6">
              <label class="radio-inline">
                <input type="radio" name="incidental_plan" value="1">Có
              </label>
              </div>                                 
            </div>
            </div><!--col-md-12-->
            
            
          </div>
          <div class="col-md-6">                      
            <div class="col-md-12" id="co-ban">
              <p class="title">Quyền lợi bảo hiểm cơ bản bắt buộc: <span style="cursor:pointer" data-toggle="modal" data-target="#cobanModal">(Xem chi tiết)</span></p>
              <div class="col-md-4">
              <label class="title">1. Chi phí y tế:</label>
              </div>
              <div class="col-md-8">
                <div class="col-md-4">
                <label class="radio-inline">
                  <input type="radio" name="medical_plan" value="A">Hạng A
                </label>
                </div>
                <div class="col-md-4">
                <label class="radio-inline">
                  <input type="radio" name="medical_plan" value="B" checked>Hạng B
                </label>
                </div>
                <div class="col-md-4">
                <label class="radio-inline">
                  <input type="radio" name="medical_plan" value="C">Hạng C
                </label>
                </div>
              </div>
              </div><!--col-md-12-->
            <div class="col-md-12" id="ca-nhan">
              <div class="col-md-4"><label class="title">2. Tai nạn cá nhân:</label></div>
              <div class="col-md-8">
                <div class="col-md-6">
                <label class="radio-inline">
                  <input type="radio" name="personal_accident" value="1">400 triệu VND
                </label>
                </div>
                <div class="col-md-6">
                <label class="radio-inline">
                  <input type="radio" name="personal_accident" value="2" checked>1 tỷ VND
                </label>
                </div>
                <div class="col-md-6">                                  
                <label class="radio-inline">
                  <input type="radio" name="personal_accident" value="3">2 tỷ VND
                </label>
                </div>
                <div class="col-md-6">
                <label class="radio-inline">
                  <input type="radio" name="personal_accident" value="4">5 tỷ VND
                </label>
                </div>
              </div>
            </div><!--col-md-12-->
          </div>
          
            <div class="col-sm-10">
              <h3 class="panel-title" style="color: #ff6400;margin-bottom:15px;font-size:18px">Cách thức mua bảo hiểm du lịch</h3>
              <ul id="cach-thuc-mua">
              <li class="col-sm-12">Đăng ký mua trực tiếp trên website</li>
              <li class="col-sm-12">Liên hệ nhân viên phòng vé Globalink.vn</li>              
            </ul>
            </div>
            <div class="col-sm-2">
              <button type="submit" class="btn-primary btn btn-lg" id="btnXemphi">Xem phí bảo hiểm</button>
            </div>
          
          </div>
          

          
      </div>
      <div class="clearfix"></div>
      
      
    </div><!--col-md-12-->

</form>
