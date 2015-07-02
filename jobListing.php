<?php
session_start();

if(isset($_POST['phone']) || $_SESSION['phone'])
{
	require 'php/dbConnection.php';

	$dbConn = getConnection();

	$sql = "SELECT * FROM Applicant WHERE password = :password AND phone = :phone";
	$namedParameters = array();
	if(isset($_POST['phone']))
	{
		$namedParameters[':password'] = sha1($_POST['password']);
		$namedParameters[':phone'] = $_POST['phone'];

	}
	elseif(isset($_SESSION['phone']))
	{

		$namedParameters[':password'] = $_SESSION['password'];
		$namedParameters[':phone'] = $_SESSION['phone'];
	}
	$stmt = $dbConn->prepare($sql); 
	$stmt->execute($namedParameters); 
	$result = $stmt ->fetch();
			//echo $result['applicantId'];
	$_SESSION['applicantId'] = $result['applicantId'];


	if($result['AccountType'] == 1)
	{
		$_SESSION['storeNumber'] = $result['storeNumber'];
		header("Location: employer.php");
	}
	elseif($result['AccountType'] == 3)
	{
		header("Location: admin.php");
	}
	if(isset($_POST['phone']))
	{
		$_SESSION['phone'] = $_POST['phone'];
	}
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

	
	<!-- Put this at the bottom of <body> -->  


	
	<!-- <link href="jobListing.css" rel="stylesheet"> -->
	<link rel="stylesheet" type="text/css" href="descriptionPopup.css">



	<!-- styles -->
	<link rel="stylesheet" href="https://sdk.ttcdn.co/tt-uikit-0.11.0.min.css">  
	<link rel="stylesheet" type="text/css" href="prefixed.css">
	<link rel="stylesheet" type="text/css" href="css/fontello/css/home.css">
	<script type="text/javascript">
		var aplicantId = <?php $applicantId =  $_SESSION['applicantId']; Print($applicantId); ?>;
	</script>

	<script type="text/javascript">


		/*
			Hey there,

			You should probably use a template for fetching job data or put everything in a php function loop. 
			If you perfer to use  RESTful php approach i would recomment either using underscore templates (best idea) or rewriting everything in angular.
			
			--

			Otherwise, you can uncomment it and set the strings according to the static content of the #jobList element.
		*/




		function getJobList()
		{  
			$.ajax({
				type:"GET", 
				url:"getJobs.php",
				dataType: "json",
				data:{"zip":$("#zipcode").val(), "jobType":$('.input-group :selected').val()},
				success: function(data,status)
				{
					console.log("Retrieved Jobs");
				//$('#filtersDiv').css('background-color','red');
				$('#jobList').html("");
				for(i in data)
				{
					var storeNumb = data[i].storeNumber;
					$('#jobList').append("<tr> <td class=status><span class=on></span></td><td>" + " " + data[i].jobId + " " + "</td><td><b>"
						+data[i].jobCompany + "</b></td><td><b> "
						+ data[i].jobPosition + "</b></td>" + "<td class = 'job-options-td'><div class = 'job-options'> "
						+ " <button class=eq-pad btn btn-primary btn-sm onclick='appliedFunction(" + storeNumber + ")'>Apply</button> "
						+ "<button data-toggle=modal  class=eq-pad btn btn-default btn-sm href='#job-description' onclick='javascript:setDescription(" + data[i].jobId 
						+ ")'>Description</button></div></td></tr>");
						// +"<a href=javascript:%20getDescription("+data[i].jobId+") id=description>Description</a>" +  "</span> "
						// + "<span id=buttonSpan></span>" 
						// + "<button onclick=appliedFunction(" + storeNumb + ")>Apply</button><br/><br/>");

				}
			}
		});
			console.log("Retrieved Jobs outside");

		}

		// <tr>			
		// 	<td class="status"><span class="on"></span></td>
		// 	<td>112</td>
		// 	<td><b>Target</b></td>
		// 	<td><b>Manager</b></td>
			
		// 	<td class = 'job-options-td'>
		// 		<div class = 'job-options'>
		// 			<button class="eq-pad btn btn-primary btn-sm" onclick='appliedFunction(5)'>Apply</button>
		// 			<button data-toggle="modal"  class="eq-pad btn btn-default btn-sm" href='#job-description' onclick='javascript:setDescription(5)'>Description</button>
		// 		</div>
		// 	</td>
		// </tr>

		function appliedFunction(storeNumber){
			$.ajax({
				type:"POST",
				url: "php/apply.php",
				data:{"storeNumber":storeNumber,"applicantId": aplicantId },
				success: function(data,status){alert("Thank you for applying");}
			});
		}	
	</script>

</head>









<body>

	<style>


		#allJobsDiv{
			height: 2000px;
			margin-top: 65px;
			background-color: #F4F5F5;
		}

		#allJobsDiv h3{

			margin-left: 20px;
		}

		.search-bar{
			
		}
		.form-inline{
			margin: 4px;
			border-radius: 0px;
		}

		#filtersDiv{
			margin: 4px;
			
			
			background-color: #EFF0F1;
			border: 1px solid rgba(0,0,0,0.1);
			border-radius: 0px;
		}

	


		.job-options-td{
			width: 300px;
		}

		.job-options button{
			float: right;
		}


	</style>


	<div id="job-description" class="modal fade">
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
	        <button type="button" class="btn btn-primary">Apply</button>
	      </div>
	    </div>
	  </div>
	</div>

	<?php
		include('header.php')
	?>

	










	<div id = "allJobsDiv">
		

		
		
		<form class="search-bar form-inline row">
			<div class="col-xs-3 col-md-3">
				<select  name="jobType">
					<option value="any">Any job</option>
					<option value="retail">Retail</option>
					<option value="restaurant">Restaurants</option>
					<option value="management">Management</option>
					<option value="customer service">Customer Service</option>
					<option value="janitorial service"> Janitorial Service</option>
				</select>
			</div>
			<div class="col-xs-3 col-md-3">
				<input type="search" placeholder="Enter a Zip Code" class="form-control">
			</div>
			<button type="button" class="btn btn-primary" onclick="getJobList()">Search</button>
		</form>

		<div id="filtersDiv">
			<script>
				function setDescription(jobId){
					$('#job-description .modal-body').html('loading...')
					$.ajax({
						type:"GET",
						url: "getDescription.php",
						dataType:"json",
						data:{"jobIdNum":jobId},
						success: function(data,status){
							$('#job-description .modal-body').html(data['des']);
							console.log(data['des']);
							console.log("hello");
						}
					});
				}
			</script>
			<table  class="table table-striped">
				<thead>
					<tr>
						<th>Availability</th>
						<th>Id</th>
						<th>Company</th>
						<th>Position</th>
						<th>Options</th>
					</tr>
				</thead>
				<tbody id = 'jobList'>
					<!-- <tr>
						
						<td class="status"><span class="on"></span></td>
						<td>112</td>
						<td><b>Target</b></td>
						<td><b>Manager</b></td>
						
						<td class = 'job-options-td'>
							<div class = 'job-options'>
								<button class="eq-pad btn btn-primary btn-sm" onclick='appliedFunction(5)'>Apply</button>
								<button data-toggle="modal"  class="eq-pad btn btn-default btn-sm" href='#job-description' onclick='javascript:setDescription(5)'>Description</button>
							</div>
						</td>
					</tr>
					<tr>
						<td class="status"><span class="on"></span></td>
						<td>112</td>
						<td><b>Target</b></td>
						<td><b>Manager</b></td>

						<td class = 'job-options-td'>
							<div class = 'job-options'>
								<button class="eq-pad btn btn-primary btn-sm" onclick='appliedFunction(5)'>Apply</button>
								<button data-toggle="modal"  class="eq-pad btn btn-default btn-sm" href='#job-description' onclick='javascript:setDescription(5)'>Description</button>
							</div>
						</td>
					</tr>
					<tr>
						<td class="status"><a href='javascript:%20getDescription(5)' id='description>escription'><span class="on"></span></a></td>
						<td>112</td>
						<td><b>Target</b></td>
						<td><b>Manager</b></td>

						<td class = 'job-options-td'>
							<div class = 'job-options'>
								<button class="eq-pad btn btn-primary btn-sm" onclick='appliedFunction(5)'>Apply</button>
								<button data-toggle="modal"  class="eq-pad btn btn-default btn-sm" href='#job-description' onclick='javascript:setDescription(5)'>Description</button>
							</div>
						</td>
					</tr> -->
				</tbody>
			</table>
		</div>





		<script src="https://sdk.ttcdn.co/tt-uikit-0.11.0.min.js"></script>  
</body>

<script>
	$('#filtersDiv tbody tr .job-options').css('opacity',0);
	$('#filtersDiv tbody tr').on('mouseenter',function(){
		//console.log($('.job-options').html())
		$(this).find('.job-options').css('opacity',1)
	}).on('mouseleave',function(){
		$(this).find('.job-options').css('opacity',0)
	});
</script>

</html>