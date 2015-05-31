<?php

if(isset($_POST['loginform']))
{
	
	echo "Sent message {$message->sid}";
}
if(isset($_POST['info']))
{
	echo "Hello";
	echo "<script> div_showCode();</script>";
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

<script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
<script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>

<link rel="stylesheet" type="text/css" href="style.css">
<link href="bootstrap-3.3.4-dist/css/bootstrap.min.css" rel="stylesheet">
<link type="text/css" href="popup.css" rel="stylesheet">
<script src="js/popup.js"></script>
</head>
<body >
		<form method="Post" action="jobListing.php">
		
		<div class="row">
			<div class="col-xs-4">
				<div id="login">
					<span id="title">LOG IN </span>
						 <span id="loginLetter"></span><input type="text" name="phone" placeholder="Phone number" id="inputBox"><br/>	
						<span id="loginLetter"></span><input type="password" name="password" placeholder="Password" id="inputBox"><br/>
					 
					 <input type="submit" value="Login!" id="inputBox"/>
				</div>
			</div>
			<div class="col-xs-4" id="loginBox">
				<div id="signUpBox">
					<span id="title">SIGN UP </span>
					<br/>
					Not yet a member? <br/>
					Start your job search in just minutes! <br/> <br/>
					<input type="button" value="CreateAccount" name="CreateAcc" onclick="div_show()" id="inputBox"/>
				</div>
			</div>
		</div>

	</form>
    <div id="abc">
		Popup Div Starts Here 
		<div id="popupContact">
			<form  id="form" method="post" name="form">
				<img id="close" src="img/close.png" onclick ="div_hide()">
				<h2>Get Started Now</h2>
				
				<input id="fName" name="fName" placeholder="First Name" type="text">
				<input id="lName" name="lName" placeholder="Last Name" type="text">
				<input id="phoneNum" name="phoneNum" placeholder="Phone Number" type="text">
				<input id="password" name="password" placeholder="Create Password" type="password">
				<input id="password" name="password" placeholder="Retype Password" type="password">
				<br/> <br/>
				<input type="button" onclick="check_empty()" id="submit" value="Create Account"/>
			</form>
		</div> 
            <!-- Popup Div Ends Here -->
    </div>
	
	<div id="numCode">
		<div id="popupCode">
			<form action="submitResume.php" id="codeForm" method="post" name="codeForm">
				<img id="close" src="img/close.png" onclick ="div_hideCode()">
				<h2>Enter code</h2>
				<input id="userCode" type="text" name="userCode" placeholder="Enter code">
				<a href="javascript:%20check_code()" id="submitCode">Submit Code</a>
			</form>
		</div>
	</div>
		
</body>
</html>
