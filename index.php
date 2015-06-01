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

  <title>unisco - login</title>
  <meta name="description" content="">
  <meta name="author" content="Jose">

  <meta name="viewport" content="width=device-width; initial-scale=1.0">

  <!-- Replace favicon.ico & apple-touch-icon.png in the root of your domain and delete these references -->
  <link rel="shortcut icon" href="/favicon.ico">
  <link rel="apple-touch-icon" href="/apple-touch-icon.png">

<script src="js/___jquery-2.1.3.js"></script>


<link href="bootstrap-3.3.4-dist/css/bootstrap.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="prefixed.css">
<script src="js/popup.js"></script>
</head>
<body >







<!-- CONTENT-->
<form id = 'lander-forms' method="Post" action="jobListing.php">
	<div id = 'lander-content'>
		<div id = 'top'></div>
		<div id = 'bot'>
		<!-- LOGIN FORM -->
			<div class = 'col-md-6 '>
				<div id="login" class = 'panel panel-default'>
					<div class = 'panel-heading'>
						<h4>LOG IN</h1>
					</div>
					<div class = 'panel-body'>
						<row>
								<div class = 'col-md-6 '>
									<input class='form-control' type="text" name="phone" placeholder="Phone number" id="inputBox">
								</div>
								<div class = 'col-md-6 '>
									<input class='form-control' type="password" name="password" placeholder="Password" id="inputBox">
								</div>
						</row>
						</br>
						</br>
						</br>
						<input class = "btn btn-default " type="submit" value="Login!" id="inputBox"/>   
						<input class = "btn btn-primary " type="button" value="Not yet a member?" name="CreateAcc" onclick="show_reg()" id="inputBox" style = 'float:right'/>
								
							
						
						
						
					</div>
					
				</div>
			
			</div>
		</div>
	</div>
</form>



<div id = 'fader'>
	<div class = 'msg'>
		<h3>GET STARTED NOW</h3>
		<p>Dont worry, registration only takes a few minutes!</p>
		</br>
		<p>We offer:</p>
	</div>

</div>



<!-- REGISTRATION FORMS POPUP -->
<div id = 'signup'>

	<!-- SIGNUP FORM -->
	<div id="abc">
		
		<form  id="form" method="post" name="form">
			<input class='form-control well-lg' id="fName" name="fName" placeholder="First Name" type="text">
			<br>
			<input class='form-control well-lg' id="lName" name="lName" placeholder="Last Name" type="text">
			<br>
			<input class='form-control well-lg' id="phoneNum" name="phoneNum" placeholder="Phone Number" type="text">
			<br>
			<input class='form-control well-lg' id="password" name="password" placeholder="Create Password" type="password">
			<br>
			<input class='form-control well-lg' id="password" name="password" placeholder="Retype Password" type="password">
			<br/> <br/>
			<input class = "btn btn-primary well-lg" type="button" onclick="check_empty()" id="submit" value="Create Account"/>
		</form>
		
	</div>

	<!-- TEXT VALIDATION FORM -->
	<div id="numCode">
		<div id="popupCode">
			<form action="resumeApplication.php" id="codeForm" method="post" name="codeForm">
				<h2>Enter Code</h2>
				<br>
					you should recieve a text message with your verification code shortly.
				<br>
				<br>
				<input class='form-control input-lg' id="userCode" type="text" name="userCode" placeholder="Enter code">
				<br>
				<br>
				<div id = 'numCode-enter'>
					<a class = "btn btn-primary well-lg" href="javascript:%20check_code()" id="submitCode">Submit Code</a>
				</div>
				
			</form>
		</div>
	</div>	
</div>





</body>
</html>