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
	$id = $_GET['jobId'];
	$sql = "SElECT * FROM Job WHERE jobId = :jobId";
		$namedParameters = array();
		$namedParameters[':jobIdNum'] = $id;
		$stmt = $dbConn->prepare($sql); 
		$stmt->execute($namedParameters); 
		$result = $stmt ->fetch();
		
		$jRes = new array();
		$jRes['description'] = $result['jobDescription'];
		$jsonRes = json_encode($jRes);
		print ($jsonRes);
?>