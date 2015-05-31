<?php

	
	
	

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
  <script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
  <script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
  <script>
				function getJobList() {  
					$.ajax({
						type: "get",
						url: "getJobs.php",
						dataType: "json",
						data:{"zip":$('#zipcode').val()},
						success: function(data,status) {
							$('filtersDiv').html("");
							for(i = 0 ;i < data.length; i++)
							{
								$('filtersDiv').append(data['jobCompany'] + " " + data['jobPosition'] + "<br/>");
							}
							// $('#timesTaken').html(data['times']);
							
						},
						complete: function(data,status) { //optional, used for debugging purposes
						}
					});
				}	
   </script>
   
</head>
<body >
		<form method="POST">
		Zipcode: <input type="texts" name="zipcode" id="zipcode"> 
				 
			<div id="filtersDiv">
				
						
			</div>		
		</form>
		<script>
			$('zipcode').change(getJobList);
		</script>
</body>
</html>
