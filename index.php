<?php

// if(isset($_POST['loginform']))
// {
// 	echo "Sent message {$message->sid}";
// }
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
<script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
<script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

<link rel="stylesheet" href="https://sdk.ttcdn.co/tt-uikit-0.11.0.min.css">  
<link rel="stylesheet" type="text/css" href="prefixed.css">
<script src="js/popup.js"></script>

<link rel="stylesheet" type="text/css" href="prefixed.css">
<link rel="stylesheet" type="text/css" href="css/fontello/css/fontello.css">
<style>
	.modal-header{
			background-color: #54E2BC;
		}

		.modal-footer button{
			background-color: #00FFC0;
		}
</style>

</head>
<body >

<!-- <div id="job-description" class="modal fade">
	  <div class="modal-dialog">
	    <div class="modal-content">
	      <div class="modal-header">
	        Job Description
	      </div>
	      <div class="modal-body">
	        Hello
	      </div>
	      <div class="modal-footer">
	        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
	      </div>
	    </div>
	  </div>
	</div> -->



<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      </div>
      <div class="modal-body">
             </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>



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
						
						<input class='form-control' type="text" name="phone" placeholder="Phone number" id="inputBox">
						</br>
						<input class='form-control' type="password" name="password" placeholder="Password" id="inputBox">
						</br>
						<input class = "btn btn-default" type="submit" value="Login!" id="inputBox"/>
						 
						<input class = "btn btn-primary" type="button" value="Not yet a member?" name="CreateAcc" onclick="show_reg()" id="inputBox"/>
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
		<!-- <p>We offer:</p> -->
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
			<span style="float:right" id="phoneCheck"></span>
			<br>
			<input class='form-control well-lg' id="password" name="password" placeholder="Create Password" type="password">
			<br>
			<input class='form-control well-lg' id="confirmPassword" name="password" placeholder="Retype Password" type="password">
			<br/> <br/>
			<!-- <button data-toggle=modal  class='eq-pad btn btn-default btn-sm'  onclick='javascript:check_empty()'>Description</button>
			<input class = "btn btn-primary well-lg"  type="button" onclick="check_empty()" id="submit" value="Create Account"/> -->
			<button id="myModal" type="button" class="btn btn-primary btn-lg" onClick="check_empty()" data-target="#myModal">Create Account</button>
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

<script>
	
	$('#phoneNum').change(checkPhoneNum);
</script>



</body>
</html>