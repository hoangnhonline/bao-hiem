<?php 
session_start();
require_once "../models/Home.php";
$model = new Home;

if(!empty($_SESSION['step1'])){
	$dataContract = $_SESSION['step1'];
	$dataContract['status'] = 1;
	$dataContract['date_from'] = strtotime($dataContract['date_from']);
	$dataContract['date_to'] = strtotime($dataContract['date_to']);
	$dataContract['created_at'] = $dataContract['updated_at'] = time();
	$dataContract['method_id'] = $_POST['payment_method'];
	$dataContract['notes'] = $_POST['notes'];
	$dataContract['customer_id'] = $_SESSION['users']['id'];
	$contract_id = $model->insert('contract', $dataContract);

	if($contract_id > 0){
		if(!empty($_SESSION['customer_info'])){
			$dataCustomer = $_SESSION['customer_info'];
			
			foreach ($dataCustomer['first_name'] as $key => $value) {
				$dataInsert = array();
				$dataInsert['contract_id'] = $contract_id;

				$dataInsert['first_name'] = $dataCustomer['first_name'][$key];
				$dataInsert['last_name'] = $dataCustomer['last_name'][$key];
				$dataInsert['gender'] = $dataCustomer['gender'][$key];
				$dataInsert['passport'] = $dataCustomer['passport'][$key];
				$dataInsert['member_type'] = 'MEMBER_TYPE_A';
				$dataInsert['birthday'] = strtotime($dataCustomer['birthday'][$key]);
				$model->insert('customers', $dataInsert);
			}
		}
	}
}
unset($_SESSION['step1']);
unset($_SESSION['customer_info']);
echo "ok";
?>