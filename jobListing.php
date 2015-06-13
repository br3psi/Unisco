<?php

	if(isset($_POST['phone']))
	{
		session_start();
		require 'php/dbConnection.php';

		$dbConn = getConnection();

		$sql = "SELECT * FROM Applicant WHERE password = :password AND phone = :phone";
		$namedParameters = array();
		$namedParameters[':password'] = sha1($_POST['password']);
		$namedParameters[':phone'] = $_POST['phone'];

		$stmt = $dbConn->prepare($sql); 
		$stmt->execute($namedParameters); 
		$result = $stmt ->fetch();

		$_SERVER['applicantId'] = $result['applicantId'];
	}
	else
	{
		header("Location: index.php");
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
  <script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
  <script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
  <script type="text/javascript" src="js/popup.js"></script>

	<link rel="stylesheet" type="text/css" href="prefixed.css">
	<link href="bootstrap-3.3.4-dist/css/bootstrap.min.css" rel="stylesheet">
	<link href="jobListing.css" rel="stylesheet">


  <link rel="stylesheet" type="text/css" href="descriptionPopup.css">


  <script>
		function getJobList() {  
					$.ajax({
  			type:"get", 
  			url:"getJobs.php",
  			dataType: "json",
  			data:{"zip":$("#zipcode").val(), "jobType":$('#jobTypeSpan :selected').val()},
  		success: function(data,status){
  			//console.log("hello");
			//$('#filtersDiv').css('background-color','red');
			$('#filtersDiv').html("");
			for(i in data)
			{
				var storeNumb = data[i].storeNumber;
				$('#filtersDiv').append("<img src=img/availableIcon.jpg style=width:14px;height:14px" + " " + data[i].jobId + " " + "<span id=spaceSpan>"
					 +data[i].jobCompany + ": "
 					 + data[i].jobPosition + ": " + "<a href=javascript:%20getDescription("+data[i].jobId+") id=description>Description</a>" +  "</span> "
 					+ "<span id=buttonSpan></span>" 
					+ "<button onclick=appliedFunction(" + storeNumb + ")>Apply</button><br/><br/>");

			}
  		}})
				}

	function getDescription(jobId)
{
	$('#jobDescription').css('display','block');
	$.ajax({
	type:"GET",
	url: "getDescription.php",
	dataType:"json",
	data:{"jobIdNum":jobId},
	success: function(data,status){
		$('#descriptionDiv').html("");
		$('#descriptionDiv').append(data['des']);
		console.log(data['des']);
		console.log("hello");
  	}
  	});
}	
   </script>
   
</head>
<body >
	<div id = 'header'>
		<div id = 'options_wrapper'>
			<div id = 'options'>
				<div class = 'option'>
					<a href=""><span class = 'glyphicon  glyphicon-open-file'></span>
					<p>Update Resume</p></a>
				</div>

				<div class = 'option'>
					<a href="resumeApplicationEdit.php"><span class = 'glyphicon  glyphicon-edit'></span>
					<p>Edit Account</p></a>
				</div>

				<div class = 'option'><a href="logout.php" >
					<span class = 'glyphicon  glyphicon-log-out'></span>
					<p>Log Out</p></a>

				</div>				
				
			</div>
		</div>
		
	</div>

	<div class="panel panel-default" id = "allJobsDiv">
		<div class="panel-heading title">
		<h4>Start applying to jobs by inputing a zipcode</h4>
		</div>
			<div class="panel-body">
				<div class = 'col-md-3'>
					<div class="input-group">
						<span class="input-group-addon" >Job type</span>
						 <select class="form-control" name="jobType">
							<option value="any">Any job</option>
							<option value="retail">Retail</option>
							<option value="restaurant">Restaurants</option>
							<option value="management">Management</option>
							<option value="customer service">Customer Service</option>
							<option value="janitorial service"> Janitorial Service</option>
					 	 </select>
					</div>
				</div>
				<div class = 'col-xs-3'>
					<div class="input-group">
				      <input name="zipcode" id="zipcode" type="text" class="form-control" placeholder="Enter a Zipcode">
				      <span class="input-group-btn">
				        <button class="btn btn-default" type="button" onclick='getJobList()'>Search</button>
				      </span>
				    </div><!-- /input-group -->
				</div>
			</div>
			


		
		
		<div id="jobDescription">
			<div id="descriptionPopup">
				<h2>Job Description</h2>
				<div id="descriptionDiv">

				</div>
			<button onclick="closeDescription()" id="closeDes">Close</button>

			</div>
		</div>
	</div>
	<script>
		function appliedFunction(storeNumber)
		{
			var aplicantId = <?php $_SERVER['applicantId'] ?>;

			$.ajax({
				type:"POST",
				url: "php/apply.php",
				data:{"storeNumber":storeNumber,"applicantId": aplicantId },

				success: function(data,status){
					
					alert("Thank you for applying");
			  	}
	  		});

			


		}
	</script>	


</body>
</html>
