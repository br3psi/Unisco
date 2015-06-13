<?php

	require 'php/dbConnection.php';

	$dbConn = getConnection();
	$storeNum = $_POST['storeNumber'];
	$applicantId = $_POST['applicantId'];
	$sql = "INSERT INTO Applied (applicantId, storeNumber) VALUES (':applicantId',':storeNumber')";
	$namedParameters = array();
	$namedParameters[':applicantId'] = $applicantId;
	$namedParameters[':storeNumber'] = $storeNum;
	$stmt = $dbConn->prepare($sql); 
	$stmt->execute($namedParameters); 



?>