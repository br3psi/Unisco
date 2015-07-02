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
	$id = $_GET['jobIdNum'];
	$sql = "SElECT * FROM ropJobs WHERE jobId = :jobIdNum";

$namedParameters = array();
		$namedParameters[':jobIdNum'] = $id;
		$stmt = $dbConn->prepare($sql); 
		$stmt->execute($namedParameters);		
		$user = $stmt->fetch();
		$ara = array();
		$ara['des'] = $user['jobDescription'];
		echo json_encode($ara);


?>
