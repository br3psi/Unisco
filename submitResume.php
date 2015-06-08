<?php
session_start();

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


<link rel="stylesheet" type="text/css" href="css/submitResume.css">
<link href="bootstrap-3.3.4-dist/css/bootstrap.min.css" rel="stylesheet">

</head>
<body>
	<div class = 'col-md-6 '>
		<div id="login" class = 'panel panel-primary'>
			<div class = 'panel-heading'>
				<h4>Upload Resume</h1>
			</div>
			<div class = 'panel-body'>
				<form action="resumeApplication.php" method="post" enctype="multipart/form-data" >
					Select resume: <input type='file' name="fileName" />
					</br>
					<input type="submit" name="uploadForm"/>
					</br>
				</form>
			</div>
		</div>
	</div>
</body>
</html>
