<?php
	require_once('lib/nusoap.php'); 
	$client = new nusoap_client("http://bluecross.com.vn/webservice/ws_globalink.php?wsdl");
	// Input value	
	$token = 'k1241124ffsd134';
	$ref_no = '2';
	$holder_name = 'Nguyen Van Test'; 
	$holder_address = 'TP. HCM';
	$phone = '898230548';
	$residence_country = 'VIETNAM';
	$departure_country = 'VIETNAM';
	$type = 'Individual'; //Individual , Family
	$date_from = "01/22/2016"; 
	$date_to = "01/28/2016";
	
	$plan_id = 'CW2CN';  //CW2CN = 548
	$error = '';
	$trial = 1;
	
	$inv_company = "Invoice Company";
	$inv_address = "Invoice Address";
	$inv_tax = "234523452345";


	//Initiate member list
	$member_list = array();
    $member_list[] = array(
        'firstname' => "Test1",
		'lastname' => "Nguyen Van",
		'gender'    => "M",
		'date_of_birth' => "12/10/1969",
		'member_type'    => "MBR_TYPE_A",
		'passport'    => "BA930948209"
	);
	
	$member_list[] = array(
        'firstname' => "Test2",
		'lastname' => "Duong Thi",
		'gender'    => "F",
		'date_of_birth' => "12/28/1968",
		'member_type'    => "MBR_TYPE_C",
		'passport'    => "BA934948292"
	);
	
	$member_list[] = array(
        'firstname' => "Test3",
		'lastname' => "Duong Thi",
		'gender'    => "M",
		'date_of_birth' => "10/04/1967",
		'member_type'    => "MBR_TYPE_C",
		'passport'    => "BA934948292"
	);
    
	$member_list[] = array(
        'firstname' => "Test4",
		'lastname' => "Duong Thi",
		'gender'    => "M",
		'date_of_birth' => "9/18/1966",
		'member_type'    => "MBR_TYPE_C",
		'passport'    => "BA934948292"
	);



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
	
//Print results	
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
	
?>
