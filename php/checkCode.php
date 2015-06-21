<?php
	require 'dbConnection.php';

	$dbConn = getConnection();
	$code = $_POST['userCode'];
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

		$ara = array();
		$ara['message'] = "wrong";
		echo json_encode($ara);
	}
	else
	{
		$ara = array();
		$ara['message'] = "right";
		echo json_encode($ara);
	}


?>