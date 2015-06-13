<?php

	require 'dbConnection.php';

	$dbConn = getConnection();

	
	$phoneNum = $_POST['phoneNum'];

	$sql = "SELECT * FROM Applicant where phone = :phone";
		$namedParameters = array();
		$namedParameters[':phone'] = $phoneNum;
		$stmt = $dbConn->prepare($sql); 
		$stmt->execute($namedParameters); 
		$result = $stmt ->fetchAll();
		
	if(!empty($result))
	{
		$ara = new $arrayName();
		$ara['message'] = "Phone number taken";
		echo json_encode($ara);
	}
?>