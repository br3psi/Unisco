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

$sql = "SElECT * FROM Job where jobId = :jobId";
		$namedParameters = array();
		$namedParameters[':jobId'] = $_GET['jobId'];
		$stmt = $dbConn->prepare($sql); 
		$stmt->execute($namedParameters); 
		$result = $stmt ->fetch();
		
		$jRes = new array();
		$jRes['description'] = $result['jobDescription'];
		json_encode($jRes);
?>