<?php
require "twilio-php-master/Services/Twilio.php";
	$AccountSid = "AC4991f00911beb00578efd8b8355fdc7d";
	$AuthToken = "b605b8121c246b4b64fe407255f50528";
	
	$client = new Services_Twilio($AccountSid, $AuthToken);
	
	$message = $client->account->messages->sendMessage(array(
				"From" => "8315851661",
				"To" => "+18315120937",
				"Body" => "Thank you for signing up. Your 4 digit code is: 4747",
));
echo "Good Call";
return;
?>