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

<link href="assets/css/bootstrap-responsive.css" rel="stylesheet">

<link rel="stylesheet" type="text/css" href="style.css">
<link href="bootstrap-3.3.4-dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body background="img/UniscoWeb.png" class="img-responsive" >
		<form method="Post">
		
		<div class="row">
			<div class="col-md-3 col-md-offset-3">
				<div id="login">
					<h2>LOG IN </h2>
						 <span id="loginLetter"></span><input type="text" name="phone" placeholder="Phone number"><br/>	
						<span id="loginLetter"></span><input type="password" name="password" placeholder="Password"><br/>
					 
					 <input type="submit" value="Login!" name="loginform"/>
				</div>
			</div>
			<div class="col-md-4 ">
				<div id="signUpBox">
					<h2>SIGN UP </h2>
					Not yet a member? <br/>
					Start your job search in just minutes! <br/> <br/>
					<input type="button" value="CreateAccount" name="CreateAcc"/>
				</div>
			</div>
		</div>

	</form>
    
</body>
</html>
