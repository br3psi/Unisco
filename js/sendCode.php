<?php

function generateCode($length){

    $number = '';
    for ($i = 0; $i < $length; $i++){
        $number .= rand(0,9);
    }

    return (int)$number;

}


$codeNum = generateCode(4);
require "twilio-php-master/Services/Twilio.php";
	$AccountSid = "AC4991f00911beb00578efd8b8355fdc7d";
	$AuthToken = "b605b8121c246b4b64fe407255f50528";
	
	$client = new Services_Twilio($AccountSid, $AuthToken);
	
	$message = $client->account->messages->create(array(

				"From" => "+18315851661",
				"To" => $_POST['num'],
				"Body" => $codeNum
));

require '../php/dbConnection.php';

	$dbConn = getConnection();
	$sql = "UPDATE 	Applicant SET code = :code";
		$namedParameters = array();
		$namedParameters[':code'] = $codeNum;
		$stmt = $dbConn->prepare($sql); 
		$stmt->execute($namedParameters); 

		


?>
