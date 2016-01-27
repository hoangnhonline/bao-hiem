<?php 
session_start();
require_once "../models/Home.php";
$model = new Home;
$arr['messages'] = "";
$password = $model->processData($_POST['password']);
$email = $model->processData($_POST['email']);
if($password != '' && $email !=''){
	$arrRs = $model->login($email, $password);
	if(empty($arrRs)){
		$arr['messages'] = "Email hoặc mật khẩu không đúng.";	
	}else{
		$_SESSION['users'] = $arrRs;
	}
}else{
	$arr['messages'] = "Vui lòng nhập đầy đủ email và mật khẩu.";
}
echo $arr['messages'];
?>