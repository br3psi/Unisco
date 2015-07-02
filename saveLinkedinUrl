<?php
	session_start();
	require 'php/dbConnection.php';
	$dbConn = getConnection();
	$linkedinUrl = $_POST['linkedinUrl'];
	$applicantId = $_SESSION['lastId'];

	$sql = "UPDATE Applicant SET linkedinUrl = :linkedinUrl WHERE applicantId = :applicantId";
	$namedParameters = array();
	$namedParameters[':linkedinUrl'] = $linkedinUrl;
	$namedParameters[':applicantId'] = $applicantId;

	$stmt = $dbConn->prepare($sql); 
	$stmt->execute($namedParameters); 

?>