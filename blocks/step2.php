<?php 
echo "<pre>";
print_r($_SESSION['customer_info']);
echo "</pre>";
?>
<div class="col-md-12">
    <div class="panel panel-default">
      <div class="panel-heading">
        ♥ Thông tin chi tiết người bảo hiểm
      </div>
      <div class="panel-body">
          <form class="form-inline" id="customerInfoForm" method="POST" action="process/customer.php">
           <div class="col-md-12">
            <table class="table table-bordered">
              <tr style="background:#CCC">
                <th>STT</th>
                <th>Họ</th>
                <th>Tên</th>
                <th>Giới tính</th>
                <th>Ngày sinh</th>
                <th>Passport</th>
              </tr>
              <?php if(!isset($_SESSION['customer_info'])){ ?>
              <?php for($i = 0; $i < $_SESSION['step1']['persons']; $i++){ ?>
              <tr>
                <td style="text-align:center"><?php echo $i + 1;?></td>
                <td>
                  <input class="form-control" name="first_name[]" />
                  <label class="errors" > Vui lòng nhập họ.</label>
                </td>
                <td>
                  <input class="form-control" name="last_name[]" />
                  <label class="errors" > Vui lòng nhập tên.</label>
                </td>
                <td>
                  <select class="form-control" name="gender[]" >
                    <option value="0">--Chọn--</option>
                    <option value="1">Nam</option>
                    <option value="2">Nữ</option>
                  </select>
                  <label class="errors" > Vui lòng chọn.</label>
                </td>
                <td>
                  <input class="form-control birthday" name="birthday[]" />
                  <label class="errors" > Vui lòng nhập ngày sinh.</label>
                </td>
                <td>
                  <input class="form-control" name="passport[]" />
                  <label class="errors" > Vui lòng nhập passport.</label>
                </td>
              </tr>
              <?php }}else{ 
                $data = $_SESSION['customer_info'];
                foreach ($data['first_name'] as $key => $value) {
              ?>
              <tr>
                <td style="text-align:center"><?php echo $key+1;?></td>
                <td>
                  <input class="form-control" name="first_name[]" value="<?php echo $data['first_name'][$key]; ?>"/>
                  <label class="errors" > Vui lòng nhập họ.</label>
                </td>
                <td>
                  <input class="form-control" name="last_name[]" value="<?php echo $data['last_name'][$key]; ?>"/>
                  <label class="errors" > Vui lòng nhập tên.</label>
                </td>
                <td>
                  <select class="form-control" name="gender[]" >
                    <option value="0">--Chọn--</option>
                    <option value="1" <?php if($data['gender'][$key] == 1) echo "selected"; ?>>Nam</option>
                    <option value="2" <?php if($data['gender'][$key] == 2) echo "selected"; ?>>Nữ</option>
                  </select>
                  <label class="errors" > Vui lòng chọn.</label>
                </td>
                <td>
                  <input class="form-control birthday" name="birthday[]" value="<?php echo $data['birthday'][$key]; ?>"/>
                  <label class="errors" > Vui lòng nhập ngày sinh.</label>
                </td>
                <td>
                  <input class="form-control" name="passport[]" value="<?php echo $data['passport'][$key]; ?>"/>
                  <label class="errors" > Vui lòng nhập passport.</label>
                </td>
              </tr>
              <?php } } ?>
            </table>
            <div class="col-md-12" style="text-align:right">
              <a class="btn btn-warning" href="index.php">Quay lại</a>
              <button class="btn btn-primary" type="submit" onclick="return validateInfo()">Tiếp tục</button>
            </div>
            </div>
           
        </form>
      </div>
      <div class="clearfix"></div>
      
    </div><!--col-md-12-->
  