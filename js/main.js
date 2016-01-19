$(document).ready(function(){
	$("#formStep1").validate({});
	
    $('#formStep1').ajaxForm({
        beforeSend: function() {                
        },
        uploadProgress: function(event, position, total, percentComplete) {
                   
        },
        dataType : 'html',
        complete: function(data) {  
          console.log(data);
          $('#bodyCalFeeModal').html(data.responseText);
          $('#calFeeModal').modal('show');
        	/*
        	if($.trim(data.responseText)=='ok'){
        		swal({   title: "Cập nhật thành công!",   
        			text: "Vui lòng đăng nhập lại với mật khẩu mới.",   
        			type: "success",        			  
        			confirmButtonText: "OK",  
        			 closeOnConfirm: false }, 
        			 function(){   
        				location.href='dang-ky.html';		
        			});
        	}else{    
           		swal('Error','Mật khẩu cũ không đúng.','error');
       		}
          */
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
  $('#formDK').ajaxForm({
        beforeSend: function() {                
        },
        uploadProgress: function(event, position, total, percentComplete) {
                   
        },
        dataType : 'html',
        complete: function(data) {  
          console.log(data);
      
        }
    }); 
    $('#formStep1').ajaxForm({
        beforeSend: function() {                
        },
        uploadProgress: function(event, position, total, percentComplete) {
                   
        },
        dataType : 'html',
        complete: function(data) {  
          console.log(data);
      
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
         // $('#bodyCalFeeModal').html(data.responseText);
          //$('#calFeeModal').modal('show');
          /*
          if($.trim(data.responseText)=='ok'){
            swal({   title: "Cập nhật thành công!",   
              text: "Vui lòng đăng nhập lại với mật khẩu mới.",   
              type: "success",                
              confirmButtonText: "OK",  
               closeOnConfirm: false }, 
               function(){   
                location.href='dang-ky.html';   
              });
          }else{    
              swal('Error','Mật khẩu cũ không đúng.','error');
          }
          */
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
    }else{
      $('#email_vl').show();
      $('#btnDK').hide();
    } 
  });
  $('#btnDK').click(function(){
    $('#dangnhap').hide();
    $('#dangky').show();
  });
  $('#btnHuyDK').click(function(){
    $('#dangnhap').show();
    $('#dangky').hide();
  });
});