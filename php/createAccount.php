<?php

	require 'dbConnection.php';

	$dbConn = getConnection();

	$firstName = $_POST['firstName'];
	$lastName = $_POST['lastName'];
	$phoneNum = $_POST['phoneNum'];
	$pass = sha1($_POST['password']);


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
	else
	{
		$sql = "INSERT INTO Applicant (firstName, lastName, phone, password)
			    VALUES (:firstName,:lastName,:phone,:password)";
		$namedParameters = array();
		$namedParameters[':firstName'] = $firstName;
		$namedParameters[':lastName'] = $lastName;
		$namedParameters[':phone'] = $phoneNum;
		$namedParameters[':password'] = $pass;
		$stmt = $dbConn->prepare($sql); 
		$stmt->execute($namedParameters); 
	}

?>