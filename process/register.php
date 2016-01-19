<?php 
session_start();
require_once "../models/Home.php";
$model = new Home;
unset($_POST['re_password']);
$tmp = $_POST;
foreach ($tmp as $key => $value) {
	if($key == "password"){
		$dataArr[$key] = md5($model->processData($value));	
	}elseif($key == "birthday"){
		$dataArr[$key] = strtotime($value);
	}else{
		$dataArr[$key] = $model->processData($value);
	}
}
$dataArr['created_at'] = $dataArr['updated_at'] = $dataArr['last_login'] = time();
$dataArr['role'] = 2;
$dataArr['status'] = 1;
$id = $model->insert('users', $dataArr);
$dataArr['id'] = $id;
unset($dataArr['password']);
$_SESSION['users'] = $dataArr;
?>