<?php
session_start();
if(isset($_SESSION['step1'])){
	unset($_SESSION['step1']);
}
	require_once('../lib/nusoap.php'); 
	$client = new nusoap_client("http://bluecross.com.vn/webservice/ws_globalink.php?wsdl");
	// Input value	
	$token = 'k1241124ffsd134';
	$ref_no = '2';
	$holder_name = 'Nguyen Van Test'; 
	$holder_address = 'TP. HCM';
	$phone = '898230548';
	$residence_country = 'VIETNAM';
	$departure_country = 'VIETNAM';
	$type = $_POST['type']; //Individual , Family
	$date_from = date('m/d/Y', strtotime($_POST['date_from']));//"01/22/2016"; 
	$date_to = date('m/d/Y', strtotime($_POST['date_to']));
	//var_dump($date_from, $date_to);die;
	$incidental_plan = $_POST['incidental_plan'] == 1 ? $_POST['medical_plan'] : "N";
	$plan_id = $_POST['medical_plan'].$_POST['area'].$_POST['personal_accident'].$incidental_plan."N"; 	
	//'CW2CN';  //CW2CN = 548
	$error = '';
	$trial = 1;
	
	$inv_company = "Invoice Company";
	$inv_address = "Invoice Address";
	$inv_tax = "234523452345";
	$arrData = $_POST;	

	//Initiate member list
	$member_list = array();
	for($i = 0 ; $i < $_POST['persons']; $i++){
	    $member_list[] = array(
	        'firstname' => "Test1",
			'lastname' => "Nguyen Van",
			'gender'    => "M",
			'date_of_birth' => "12/13/1997",
			'member_type'    => "MBR_TYPE_A",
			'passport'    => "BA930948209"
		);
	}

	$list = $client->call('getCertificate',
		array(
			'token'=>"$token",
			'ref_no'=>"$ref_no",		
			'holder_name'=>"$holder_name",
			'holder_address'=>"$holder_address",
			'phone'=>"$phone",
			'residence_country'=>"$residence_country",
			'departure_country'=>"$departure_country",
			'type'=>"$type",
			'date_from'=>"$date_from",
			'date_to'=>"$date_to",
			'plan_id' => $plan_id,
			'member_list' => $member_list,
			'trial' => $trial,
			'inv_company' => $inv_company,
			'inv_address' =>  $inv_address,
			'inv_tax' => $inv_tax
		));  
		$arrData['total_price'] = $list['total_price'];
		$arrData['unit_price'] = $list['unit_price'];
		$_SESSION['step1'] = $arrData;
/*
	echo '<pre>';
	echo 'error message: ' . $list['error']."<br/>";
	
	echo 'internal_cert_number = ' . $list['internal_cert_number']."<br/>";
	
	echo 'total_price = ' . $list['total_price']."<br/>";
	
	echo 'unit_price = ' . $list['unit_price']."<br/>";
		
	echo '</pre>';
	 
	echo "Cert link 1 = " . $list['pdf_file1']."<br/>";
	echo "Cert link 2 = " . $list['pdf_file2']."<br/>"; 
	
	$err = $client->getError();


	if ($err) {
		echo '<h2>Error Found While Connecting</h2><pre>' . $err . '</pre>\n';
	}
*/	
?>
<table class="table table-bordered">	
	<tr>
		<th width="200px">Khu vực</th>
		<td class="value"></td>
	</tr>
	<tr>
		<th>Ngày đi</th>
		<td class="value"></td>
	</tr>
	<tr>
		<th>Ngày về</th>
		<td class="value"></td>
	</tr>
	<tr>
		<th>Số ngày</th>
		<td class="value"></td>
	</tr>
	<tr>
		<th>Số người</th>
		<td class="value"></td>
	</tr>
	<tr>
		<th>Hình thức du lịch</th>
		<td class="value"></td>
	</tr>
	<tr>
		<th>Chi phí y tế</th>
		<td class="value"></td>
	</tr>
	<tr>
		<th>Tai nạn cá nhân</th>
		<td class="value"></td>
	</tr>
	<tr>
		<th>Bảo hiểm sự cố bất ngờ</th>
		<td class="value"></td>
	</tr>
	<tr>
		<th>Tổng chi phí</th>
		<td class="value">
			<?php echo number_format($list['unit_price']); ?>,000 x <?php echo $_POST['persons'] ;?> = <?php echo number_format($list['total_price'])?>,000 đ
		</td>
	</tr>

</tab>
