<?php
	require 'php/dbConnection.php';

	$dbConn = getConnection();
	$code = $_POST['code'];
	$phone = $_POST['num'];
	$sql = "SELECT * FROM Applicant where phone = :phone AND code = :code";
	$namedParameters = array();
	$namedParameters[':code'] = $code;
	$namedParameters[':phone'] = $phone;
	$stmt = $dbConn->prepare($sql); 
	$stmt->execute($namedParameters); 
	$result = $stmt ->fetchAll();
		
	if(!empty($result))
	{

		$ara = new $arrayName();
		$ara['message'] = "wrong";
		echo json_encode($ara);
	}
	else
	{
		$ara = new $arrayName();
		$ara['message'] = "right";
		echo json_encode($ara);
	}


?>