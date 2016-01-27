<div class="col-md-8">
    <div class="panel panel-default">
      <div class="panel-heading">
        Chọn phương thức thanh toán
      </div>
      <div class="panel-body">        
        <div>
          <form id="formPayment" name="formPayment" method="POST" action="process/payment.php">
          <div class="col-sm-12">
       
              <div class="col-sm-12">
                
                <div class="radio" style="margin-bottom:20px">
                  <label >
                    <input type="radio" value="2" name="payment_method" checked >
                    <span style="font-weight:bold;color:#15697f; font-size:18px">Thanh toán bằng hình thức chuyển khoản</span>
                    
                                      </label>
                                      <span id="btnCK" style="cursor:pointer;color:red">( Chi tiết )</span>
                  <div class="col-sm-12" id="content_ck" style="display:none;">
                    <?php include "blocks/payment-info.php"; ?>
                  </div>
                </div>
                <div style="margin-bottom:30px;clear:both"></div>
                <div class="radio">
                  <label >
                    <input type="radio" value="3" name="payment_method" >
                    <span style="font-weight:bold;color:#15697f; font-size:18px">Thanh toán bằng tiền mặt</span>
                    
                  </label>
                  <span id="btnTM"  style="cursor:pointer;color:red">( Chi tiết )</span>
                  <div class="col-sm-12" id="content_tienmat" style="display:none;">
                    <span style="    color: #999;">
                      <div>Địa chỉ: 29/38 Đoàn Thị Điểm, P.1, Phú Nhuận, TP.HCM, Việt Nam</div>
                      Email: info@globalink.vn – Hotline: (+84) 08 3990 0567 - 3990 0365</span>
                  </div>
                </div>
                <div style="margin-bottom:30px;clear:both"></div>
                <div class="cleafix" style="margin-top:30px"></div>
                 <div class="form-group" style="margin-bottom:15px">
                  <label for="username">Ghi chú của khách hàng</label>
                  <textarea name="notes" id="notes" class="form-control" rows="3"></textarea>
                  
                </div>
                <div class="cleafix" style="margin-top:20px"></div>
                <button class="btn" style="background-color:#ff6400;color:#FFF;marign-top:15px">Thanh toán</button>
                 
              </div>
                      
        </div>
      </form>
        </div>
      </div>
    </div>  
</div><!--col-md-12-->
<div class="col-md-4">
  <?php $arrData = $_SESSION['step1']; ?>
    <div class="panel panel-default">
      <div class="panel-heading">
        Thông tin chi tiết
      </div>
      <div class="panel-body">        
        <table class="table table-bordered">  
          <tr>
            <th width="200px">Khu vực</th>
            <td class="value">
              <?php 
              if($arrData['area'] == 'W') echo 'Toàn cầu';
              if($arrData['area'] == 'A') echo 'Châu Á';
              if($arrData['area'] == 'E') echo 'Đông Nam Á';
              ?>
            </td>
          </tr>
          <tr>
            <th>Ngày đi</th>
            <td class="value">
              <?php 
              echo date('d-m-Y', strtotime($arrData['date_from']));
              ?>
            </td>
          </tr>
          <tr>
            <th>Ngày về</th>
            <td class="value">
              <?php 
              echo date('d-m-Y', strtotime($arrData['date_to']));
              ?>
            </td>
          </tr>
          <tr>
            <th>Số ngày</th>
            <td class="value"><?php echo $arrData['no_date']; ?></td>
          </tr>
          <tr>
            <th>Số người</th>
            <td class="value"><?php echo $arrData['persons']; ?></td>
          </tr>
          <tr>
            <th>Hình thức du lịch</th>
            <td class="value">
              <?php if($type=="Individual") echo "Cá nhân" ; else  echo "Gia đình"; ?>
            </td>
          </tr>
          <tr>
            <th>Chi phí y tế</th>
            <td class="value">
              Hạng <?php echo $arrData['medical_plan']; ?>
            </td>
          </tr>
          <tr>
            <th>Tai nạn cá nhân</th>
            <td class="value">
              <?php if($arrData['personal_accident'] == 1) echo '400 triệu VND'; ?>
              <?php if($arrData['personal_accident'] == 2) echo '1 tỷ VND'; ?>
              <?php if($arrData['personal_accident'] == 3) echo '2 tỷ VND'; ?>
              <?php if($arrData['personal_accident'] == 4) echo '5 tỷ VND'; ?>
            </td>
          </tr>
          <tr>
            <th>Bảo hiểm sự cố bất ngờ</th>
            <td class="value">
              <?php if($arrData['incidental_plan'] == 1) echo "Có" ; else echo "Không"; ?>
            </td>
          </tr>
          <tr>
            <th>Tổng chi phí</th>
            <td class="value">
              <?php echo number_format($arrData['unit_price']); ?>,000 x <?php echo $arrData['persons'] ;?> = <?php echo number_format($arrData['total_price'])?>,000 đ
            </td>
          </tr>

        </table>

      </div>
    </div>  
</div><!--col-md-12-->
<style>

</style>
<script type="text/javascript">

</script>