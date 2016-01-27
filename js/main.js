$(document).ready(function(){
	$("#formStep1").validate();
	
    $('#formStep1').ajaxForm({
        beforeSend: function() {                
        },
        uploadProgress: function(event, position, total, percentComplete) {
                   
        },
        dataType : 'html',
        complete: function(data) {            
          $('#bodyCalFeeModal').html(data.responseText);
          $('#calFeeModal').modal('show');
        }
    }); 
    $("#formDK").validate({

      rules: {
        email: {
          required: true,
          email: true
        },
        phone: {          
          number : true
        },
        password: {
          required: true,
          minlength: 5
        },
        re_password: {
          required: true,
          minlength: 5,
          equalTo: "#password"
        }       
      }
  
    });
    $("#formVL").validate({

      rules: {
        email: {
          required: true,
          email: true
        },
        phone: {          
          number : true
        }            
      }
  
    });
    $('#formVL').ajaxForm({
        beforeSend: function() {                
        },
        uploadProgress: function(event, position, total, percentComplete) {
                   
        },
        dataType : 'html',
        complete: function(data) {  
         location.href='index.php?step=3'; 
      
        }
    });
  $('#formDK').ajaxForm({
        beforeSend: function() {                
        },
        uploadProgress: function(event, position, total, percentComplete) {
                   
        },
        dataType : 'html',
        complete: function(data) {  
	       location.href='index.php?step=3'; 
      
        }
    }); 
  $('#formLogin').ajaxForm({
        beforeSend: function() {                
        },
        uploadProgress: function(event, position, total, percentComplete) {
                   
        },
        dataType : 'json',
        complete: function(data) {
          if(data.responseText == ""){
            location.href='index.php?step=3';
          }else{
            $('#span_error_login').html(data.responseText);
          }
      
        }
    });
   $("#formLogin").validate({
      rules: {
        email_login: {
          required: true,
          email: true
        },
        password_login: {          
          required : true
        }            
      }
  
    });
  $('#formPayment').ajaxForm({
        beforeSend: function() {                
        },
        uploadProgress: function(event, position, total, percentComplete) {
                   
        },
        dataType : 'html',
        complete: function(data) {  
          if($.trim(data.responseText)=='ok'){
            swal({   title: "Đơn hàng đã được ghi nhận",   
              text: "Cảm ơn quý khách, chúng tôi sẽ liên hệ lại quý khách để hoàn tất đơn hàng.",   
              type: "success",                
              confirmButtonText: "OK",  
               closeOnConfirm: false }, 
               function(){   
                location.href='index.php';   
              });
          }else{    
              swal('Error','Có lỗi xảy ra.','error');
          }
      
        }
    }); 
    
  
    $('#customerInfoForm').ajaxForm({
        beforeSend: function() {                
        },
        uploadProgress: function(event, position, total, percentComplete) {
                   
        },
        dataType : 'html',
        complete: function(data) {  
          location.href="index.php?step=3";        
        }
    }); 
});
function validateInfo(){
  var errorCount = 0;
  $('#customerInfoForm input, #customerInfoForm select').each(function(){
    var obj = $(this);
    var value = $.trim(obj.val());
    if( value == 0 || value == ''){
      errorCount++;
      obj.next().show();
    }else{
      obj.next().hide();
    }
  });
  return errorCount > 0 ? false : true;
}
$('#customerInfoForm input, #customerInfoForm select').change(function(){
   var obj = $(this);
    var value = $.trim(obj.val());
    if( value == 0 || value == ''){     
      obj.next().show();
    }else{
      obj.next().hide();
    }
});
/* process date */
$(document).ready(function(){
    $('#date_from').datepicker({
       numberOfMonths: 3,
       minDate: 0,
       dateFormat : 'mm/dd/yy',
           
    });
    $('#date_to').datepicker({
        onSelect: function(date) {
          var date1 = $('#date_from').val();
          var date2 = $('#date_to').val();
          var no_date = daydiff(parseDate($('#date_from').val()), parseDate($('#date_to').val()));
          if(no_date > 0){
            $('#no_date').val(no_date);
          }else{
            $('#no_date, #date_to').val();
            alert('Vui lòng chọn ngày về lớn hơn ngày đi');
          }
        },
        numberOfMonths: 3,
        minDate: 0,
        dateFormat : 'mm/dd/yy' 
    }); 

});
function parseDate(str) {
    var mdy = str.split('/')
    return new Date(mdy[2], mdy[0]-1, mdy[1]);
}

function daydiff(first, second) {
    return (second-first)/(1000*60*60*24)
}
$(document).ready(function(){
  $('input[name="type_member"]').click(function(){
    var value = $(this).val();
    if(value==1){
      $('#btnDK').show();
      $('#btnVL').hide();
    }else{
      $('#btnVL').show();
      $('#email_vl').show();
      $('#btnDK').hide();
    } 
  });
  $('#btnDK').click(function(){
    $('#dangnhap, #vanglai').hide();
    $('#dangky').show();
  });
  $('#btnVL').click(function(){
    $('#dangnhap, #dangky').hide();
    $('#vanglai').show();
  });
  $('#btnHuyDK').click(function(){
    $('#dangnhap').show();
    $('#dangky, #vanglai').hide();
  });
  $('#btnHuyVangLai').click(function(){
    $('#dangnhap').show();
    $('#dangky, #vanglai').hide();
  });
});
