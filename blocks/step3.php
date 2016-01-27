<div class="col-md-12">
    <div class="panel panel-default">
      <div class="panel-heading">
        ♥ Thông tin chi tiết người bảo hiểm
      </div>
      <div class="panel-body">
        <div id="dangnhap">
        <div class="col-sm-6">
          <div class="panel panel-default">
            <div class="panel-heading" style="background-color:#f7f7f9;color:#000">
              <h3 class="panel-title">Thành viên cũ</h3>
            </div>
            <div class="panel-body">
              <form id="formLogin" name="formLogin" method="POST" action="process/login.php">
              <div class="col-sm-12">
                <div class="form-group">
                  <label for="username">Email</label>
                  <input class="form-control" name="email" id="email_login">
                </div>
                <div class="form-group">
                  <label for="password">Mật khẩu</label>
                  <input class="form-control" type="password" name="password" id="password_login">
                </div>
                <button class="btn" type="submit" style="background-color:#ff6400;color:#FFF;float:right">Đăng nhập</button>
                <span class="error" id="span_error_login"></span>
              </div>
              </form>
            </div>
          </div>
          
        </div>
        <div class="col-sm-6">
          <div class="panel panel-default">
            <div class="panel-heading" style="background-color:#f7f7f9;color:#000">
              <h3 class="panel-title">Thành viên mới</h3>
            </div>
            <div class="panel-body">
              <div class="col-sm-12">
                <div class="radio" style="margin-bottom:35px">
                  <label >
                    <input type="radio" value="1" name="type_member">
                    <span style="font-weight:bold">Đăng ký tài khoản</span><br />
                    Tạo 1 tài khoản mới và dùng tài khoản này để thanh toán
                  </label>
                </div>
                <div class="radio">
                  <label >
                    <input type="radio" value="2" name="type_member" >
                    <span style="font-weight:bold">Thanh toán như khách vãng lai</span><br />
                    Thanh toán nhanh không cần tài khoản đăng nhập
                  </label>
                </div>
                <button class="btn" id="btnDK" style="display:none;background-color:#ff6400;color:#FFF;float:right">Đăng ký tài khoản</button>
                <button class="btn" id="btnVL" style="display:none;background-color:#ff6400;color:#FFF;float:right">Nhập thông tin</button>
              </div>
            </div>
          </div>
          
        </div>
        </div>
        <div id="dangky" style="display:none">
          <form id="formDK" name="formDK" method="POST" action="process/register.php">
          <div class="col-sm-8">
          <div class="panel panel-default">
            <div class="panel-heading" style="background-color:#f7f7f9;color:#000">
              <h3 class="panel-title">Thông tin đăng ký</h3>
            </div>
            <div class="panel-body">
              <div class="col-sm-12">
                <div class="form-group">
                  <label for="username">Email <label class="required">*</label></label>
                  <input class="form-control" name="email" id="email" aria-required="true" required="required" >
                </div>
                <div class="form-group">
                  <label for="password">Mật khẩu <label class="required">*</label></label>
                  <input type="password" class="form-control" name="password" maxlength="20" id="password"  aria-required="true" required="required" >
                </div>
                <div class="form-group">
                  <label for="password">Xác nhận mật khẩu <label class="required">*</label></label>
                  <input type="password"  class="form-control" name="re_password" maxlength="20" id="re_password"  aria-required="true" required="required" >
                </div>
                 <div class="form-group">
                  <label for="password">Họ và tên <label class="required">*</label></label>
                  <input class="form-control" name="fullname" id="fullname"  aria-required="true" required="required" >
                </div>
                <div class="form-group">
                  <label for="password">Điện thoại <label class="required">*</label></label>
                  <input class="form-control" maxlength="20" name="phone" id="phone"  aria-required="true" required="required" >
                </div>
                <div class="form-group">
                  <label for="password">Địa chỉ <label class="required">*</label></label>
                  <input class="form-control" name="address" id="address"  aria-required="true" required="required" >
                </div>
                 <div class="form-group">
                  <label for="password">Ngày sinh</label>
                  <input class="form-control birthday" name="birthday" id="birthday" >
                </div>
                <div class="form-group">
                  <label for="password">CMND</label>
                  <input class="form-control" name="cmnd" id="cmnd"  >
                </div>            
                <div class="form-group">
                  <label for="password">Công ty</label>
                  <input class="form-control" name="company_name" id="company_name"  >
                </div>
                <div class="form-group">
                  <label for="password">Địa chỉ công ty</label>
                  <input class="form-control" name="company_address" id="company_address"  >
                </div>
                <div class="form-group">
                  <label for="password">MST</label>
                  <input class="form-control" name="tax_no" id="tax_no"  maxlength="20">
                </div>
                <button class="btn" style="background-color:#ff6400;color:#FFF;marign-right:5px">Đăng ký tài khoản</button>
                 <button class="btn btn-default" type="button"  id="btnHuyDK">Hủy bỏ</button>
              </div>
            </div>
          </div>
          
        </div>
      </form>
        </div>
        <div id="vanglai" style="display:none">
          <form id="formVL" name="formVL" method="POST" action="process/register.php">
          <div class="col-sm-8">
          <div class="panel panel-default">
            <div class="panel-heading" style="background-color:#f7f7f9;color:#000">
              <h3 class="panel-title">Thông tin khách hàng</h3>
            </div>
            <div class="panel-body">
              <div class="col-sm-12">
                <div class="form-group">
                  <label for="username">Email <label class="required">*</label></label>
                  <input class="form-control" name="email" id="email" aria-required="true" required="required" >
                </div>               
                 <div class="form-group">
                  <label for="password">Họ và tên <label class="required">*</label></label>
                  <input class="form-control" name="fullname" id="fullname"  aria-required="true" required="required" >
                </div>
                <div class="form-group">
                  <label for="password">Điện thoại <label class="required">*</label></label>
                  <input class="form-control" maxlength="20" name="phone" id="phone"  aria-required="true" required="required" >
                </div>
                <div class="form-group">
                  <label for="password">Địa chỉ <label class="required">*</label></label>
                  <input class="form-control" name="address" id="address"  aria-required="true" required="required" >
                </div>
                 <div class="form-group">
                  <label for="password">Ngày sinh</label>
                  <input class="form-control birthday" name="birthday" id="birthday" >
                </div>
                <div class="form-group">
                  <label for="password">CMND</label>
                  <input class="form-control" name="cmnd" id="cmnd"  >
                </div>            
                <div class="form-group">
                  <label for="password">Công ty</label>
                  <input class="form-control" name="company_name" id="company_name"  >
                </div>
                <div class="form-group">
                  <label for="password">Địa chỉ công ty</label>
                  <input class="form-control" name="company_address" id="company_address"  >
                </div>
                <div class="form-group">
                  <label for="password">MST</label>
                  <input class="form-control" name="tax_no" id="tax_no"  maxlength="20">
                </div>
                <button class="btn" style="background-color:#ff6400;color:#FFF;marign-right:5px">Tiếp tục thanh toán</button>
                 <button class="btn btn-default" type="button"  id="btnHuyVangLai">Hủy bỏ</button>
              </div>
            </div>
          </div>
          
        </div>
      </form>
        </div>
      </div>
    </div>  
</div><!--col-md-12-->