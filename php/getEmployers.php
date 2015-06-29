<?php

	require 'dbConnection.php';

	$dbConn = getConnection();


	$sql = "SELECT firstName, lastName FROM Applicant where AccountType = 1";
	$stmt = $dbConn->prepare($sql); 
	$stmt->execute(); 
	$result = $stmt ->fetchAll();

	// $applicants =
	echo json_encode($result);
	// echo $applicants;
	
?>