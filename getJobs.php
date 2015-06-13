<?php
	function getConnection()
	{
		$host = "localhost";
		$dbname = "Unisco";
		$username = "root";
		$password = "root";
		$dbConn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
		$dbConn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		return $dbConn;
	}

	$jobType = $_GET['jobType'];
	$zipCode = $_GET['zip'];

	$dbConn= getConnection();

	if($jobType == "any")
	{
		
		$sql = "SElECT * FROM Job WHERE jobZip = :zip";
		$namedParameters = array();
		$namedParameters[':zip'] = $zipCode;
		$stmt = $dbConn->prepare($sql); 
		$stmt->execute($namedParameters); 
		$result = $stmt ->fetchAll();
		
		$jRes = json_encode($result);
		print($jRes);
	}
	else
	{
		$sql = "SElECT * FROM Job WHERE jobZip = :zip AND jobType = :jobType";
		$namedParameters = array();
		$namedParameters[':zip'] = $zipCode;
		$namedParameters[':jobType'] = $jobType;
		$stmt = $dbConn->prepare($sql); 
		$stmt->execute($namedParameters); 
		$result = $stmt ->fetchAll();
		
		$jRes = json_encode($result);
		print($jRes);

	}
?>
