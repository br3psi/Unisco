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

<link rel="stylesheet" type="text/css" href="prefixed.css">
<link href="bootstrap-3.3.4-dist/css/bootstrap.min.css" rel="stylesheet">

<script src="js/popup.js"></scrnipt>
</head>
<body >
	<div id="applicantListDiv">
		<nav>
			<a href="">My Jobs</a>
		</nav>
		
		<div id="applicantList"> <!--Get from database-->
			
			
		</div>
	</div>
</body>
</html>