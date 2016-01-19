<div class="col-md-12">
    <div class="panel panel-default">
      <div class="panel-heading">
        Lựa chọn phương thức thanh toán
      </div>
      <div class="panel-body">        
        <div>
          <form id="formPayment" name="formPayment" method="POST" action="process/payment.php">
          <div class="col-sm-8">
       
              <div class="col-sm-12">
                <div class="radio">
                  <label >
                    <input type="radio" value="1" name="payment_method" checked>
                    <span style="font-weight:bold">C.O.D - Thanh toán trực tiếp tại nhà</span>
                    
                  </label>
                </div>
                <div class="radio">
                  <label >
                    <input type="radio" value="2" name="payment_method" >
                    <span style="font-weight:bold">ATM/Internet Banking</span>
                  </label>
                </div>
                <div class="radio">
                  <label >
                    <input type="radio" value="3" name="payment_method" >
                    <span style="font-weight:bold">Visa - Master</span>
                  </label>
                </div>
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
<style>

</style>