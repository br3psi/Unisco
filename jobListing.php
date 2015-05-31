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
  <link href="jobListing.css" rel="stylesheet">
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
				
				$('#filtersDiv').append("<img src=img/availableIcon.jpg style=width:14px;height:14px" + " " + data[i].jobId + " " + "<span id=spaceSpan>"
					 +data[i].jobCompany + ": "
 					 + data[i].jobPosition + " " + data[i].jobDescription +  "</span> "
 					+ "<span id=buttonSpan></span>" 
					+ "<button onclick=appliedFunction()>Apply</button><br/><br/>");

			}
  		}})
				}	
   </script>
   
</head>
<body >
	<div id="allJobsDiv">			
		<h3>Start applying to jobs by inputing a zipcode </h3> <br/> 
		
		Select job type 
		<span id="jobTypeSpan"><select name="jobType">
			<option value="any">Any job</option
			<option value="retail">Retail</option>
			<option value="restaurant">Restaurants</option>
			<option value="transportation">Transportation</option>
			<option value="any">Customer Service</option>
		</select> </span>
		
		<span id="zipSpan">Zipcode: <input type="texts" name="zipcode" id="zipcode"> </span><br/><br/>
				 
			<div id="filtersDiv">
				
						
			</div>		
		
		<script>
			$('#zipcode').change(getJobList);

			function appliedFunction(){
				alert("Thank you for applying");
			}
		</script>
	</div>
</body>
</html>
