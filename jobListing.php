<?php

	function getConnection(){
		$host = "http://52.8.2.193/";
		$dbname = "Unisco";
		$username = "root";
		$password = "root";
		$dbConn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
		$dbConn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		return $dbConn;
	}
	
	function getJobs{
		$dbConn= getConnection();
		$sql = "SElECT * FROM Job";
		$stmt = $dbConn->prepare($sql); 
		$stmt->execute(); 
		return $stmt ->fetchAll();
	}

?>

<!DOCTYPE HTML>
<html lang="en">
<head>
  <meta charset="utf-8">

  <!-- Always force latest IE rendering engine (even in intranet) & Chrome Frame 
       Remove this if you use the .htaccess -->
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

  <title>Job Listing</title>
  <meta name="description" content="">
  <meta name="author" content="Monse">

  <meta name="viewport" content="width=device-width; initial-scale=1.0">

  <!-- Replace favicon.ico & apple-touch-icon.png in the root of your domain and delete these references -->
  <link rel="shortcut icon" href="/favicon.ico">
  <link rel="apple-touch-icon" href="/apple-touch-icon.png">
</head>
<body >
		<form method="POST">
		Zipcode: <input type="number" name="zipcode"> <br/>
		
		<div id="filtersDiv">
			<script>
				function getJobs(score) {  
					$.ajax({
						type: "get",
						url: "http://52.8.2.193/",
						dataType: "json",
						data:{"score": score},
						success: function(data,status) { 
							$('#timesTaken').html(data['times']);
							
						},
						complete: function(data,status) { //optional, used for debugging purposes
						}
					});
				}	
   </script>
					
		</div>		
		</form>
</body>
</html>
