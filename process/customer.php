<?php 
session_start();
$data = $_POST;
if(isset($_SESSION['customer_info'])){
	unset($_SESSION['customer_info']);
}
$_SESSION['customer_info'] = $data;
?>