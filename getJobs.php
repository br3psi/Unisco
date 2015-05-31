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
	$dbConn= getConnection();
	$sql = "SElECT * FROM Job where jobZip = :zip";
	$namedParameters = array();
	$namedParameters[':zip'] = $_GET['zip'];
	$stmt = $dbConn->prepare($sql); 
	$stmt->execute($namedParameters); 
	$result = $stmt ->fetchAll();
	
	json_encode($result);
?>