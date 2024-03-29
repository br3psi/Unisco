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

	if($jobType == "Medical assistant")
	{
		$jobType = 'Medical assistant';
	}
	elseif($jobType == 'Dental assistant')
	{
		$jobType = 'Dental assistant';
	}
	elseif($jobType == 'Welding')
	{
		$jobType = 'Welding';
	}
	elseif($jobType == 'Cosmetology')
	{
		$jobType = 'Cosmetology';
	}
	elseif($jobType == 'Truck driving')
	{
		$jobType = 'Truck driving';
	}
	$dbConn= getConnection();

	if($jobType == "Any job")
	{
		
		$sql = "SElECT * FROM ropJobs WHERE jobZip = :zip";
		$namedParameters = array();
		$namedParameters[':zip'] = $zipCode;
		$stmt = $dbConn->prepare($sql); 
		$stmt->execute($namedParameters); 
		$result = $stmt ->fetchAll();
		
		$jRes = json_encode($result);
		
		echo($jRes);
	}
	else
	{
		$sql = "SElECT * FROM ropJobs WHERE jobZip = :zip AND jobType = :jobType";
		$namedParameters = array();
		$namedParameters[':zip'] = $zipCode;
		$namedParameters[':jobType'] = $jobType;
		$stmt = $dbConn->prepare($sql); 
		$stmt->execute($namedParameters); 
		$result = $stmt ->fetchAll();
		
		$jRes = json_encode($result);
		
		echo($jRes);

	}
?>
