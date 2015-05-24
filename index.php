<?php
session_start();
if(isset($_POST['loginform']))
{
	require "twilio-php-master/Services/Twilio.php";
	$AccountSid = "AC4991f00911beb00578efd8b8355fdc7d";
	$AuthToken = "b605b8121c246b4b64fe407255f50528";
	
	$client = new Services_Twilio($AccountSid, $AuthToken);
	
	$message = $client->account->messages->create(array(
				"From" => "8315851661",
				"To" => "8315850288",
				"Body" => "Testing",
));
	echo "Sent message {$message->sid}";
}

?>

<!DOCTYPE HTML>
<html lang="en">
<head>
  <meta charset="utf-8">

  <!-- Always force latest IE rendering engine (even in intranet) & Chrome Frame 
       Remove this if you use the .htaccess -->
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

  <title>login</title>
  <meta name="description" content="">
  <meta name="author" content="Jose">

  <meta name="viewport" content="width=device-width; initial-scale=1.0">

  <!-- Replace favicon.ico & apple-touch-icon.png in the root of your domain and delete these references -->
  <link rel="shortcut icon" href="/favicon.ico">
  <link rel="apple-touch-icon" href="/apple-touch-icon.png">

<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap-theme.min.css">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body background="img/UniscoLogo.jpg" >
  <div>
    <header>
      
    </header>
    
	<form method="Post">
    <div id="login">
     <br/>
     <span id="loginLetter">Username</span><input type="text" name="username"> <br/>
	 <span id="loginLetter">Password</span><input type="password" name="password"><br/>
	 <span id="loginLetter">Phone</span><input type="text" name="phone"><br/>	

     
     <input type="submit" value="Login!" name="loginform"/>
	 <input type="button" value="CreateAccount" name="CreateAcc"/>
    </div>
	</form>
    
  </div>
</body>
</html>