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
  			type:"get", 
  			url:"getJobs.php",
  			dataType: "json",
  			data:{"zip":$("#zipcode").val()},
  		success: function(data,status){
  			//console.log("hello");
			//$('#filtersDiv').css('background-color','red');
			$('#filtersDiv').html("");
			for(i in data)
			{
				$('#filtersDiv').append(data[i].jobCompany + ": " + data[i].jobPosition + "<input type=button value=Apply  name=Apply/>" + "<br/>");

			}
  		}})
				}	
   </script>
   
</head>
<body >
		
		Zipcode: <input type="texts" name="zipcode" id="zipcode"> 
				 
			<div id="filtersDiv">
				
						
			</div>		
		
		<script>
			$('#zipcode').change(getJobList);
		</script>
</body>
</html>
