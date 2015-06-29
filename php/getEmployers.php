<?php

	require 'dbConnection.php';

	$dbConn = getConnection();


	$sql = "SELECT * FROM Applicant where AccountType = 3";
	$stmt = $dbConn->prepare($sql); 
	$stmt->execute(); 
	$result = $stmt ->fetchAll();

	$applicants = json_encode($result);
	echo $applicants;
	
?>