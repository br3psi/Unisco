<?php


$codeNum = rand(1000, 9999);
require "twilio-php-master/Services/Twilio.php";
	$AccountSid = "AC4991f00911beb00578efd8b8355fdc7d";
	$AuthToken = "b605b8121c246b4b64fe407255f50528";
	
	$client = new Services_Twilio($AccountSid, $AuthToken);
	
	$message = $client->account->messages->create(array(

				"From" => "+18315851661",
				"To" => $_POST['num'],
				"Body" => "Thank you for signing up with Unisco. Your 4 digit code is: " . $codeNum
	));

require '../php/dbConnection.php';

	$dbConn = getConnection();
	$sql = "UPDATE 	Applicant SET code = :code";
		$namedParameters = array();
		$namedParameters[':code'] = $codeNum;
		$stmt = $dbConn->prepare($sql); 
		$stmt->execute($namedParameters); 

		


?>
