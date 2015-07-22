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

	$_SESSION['username'] = $result['applicantId'];
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
	<link rel="stylesheet" type="text/css" href="css/fontello/css/fontello.css">
	<script type="text/javascript">
		var aplicantId = 0;
	</script>
	<script type="text/javascript">
		var aplicantId = <?php $applicantId =  $_SESSION['applicantId']; Print($applicantId); ?>;
	</script>

	<script type="text/javascript">




		/*
		
		setApply(storeNumb,data[i].jobCompany,data[i].jobPosition)
		
		call this function on click, it will show popup

		*/

		function getJobList()
		{ 
			$.ajax({
				type:"GET", 
				url:"getJobs.php",
				dataType: "json",
				data:{"zip":$("input[name=zipcode]").val(), "jobType":$('.select2-chosen').text()},
				success: function(data,status)

				{
					console.log(data)
					console.log("Retrieved Jobs");
				//$('#filtersDiv').css('background-color','red');
					$('#jobList').html("");
				for(i in data)
				{
					var storeNumb = data[i].storeNumber;
					$('#jobList').append("<tr> <td ><span  >Hiring</span></td><td>" + " " + data[i].jobId + " " + "</td><td><b>"
						+data[i].jobCompany + "</b></td><td><b> "
						+ data[i].jobPosition + "</b></td>" + "<td class ='job-options-td'><div class ='job-options'> "
						+ " <button data-toggle=modal href = '#job-confirmation' class='eq-pad btn btn-primary btn-sm' onclick='javascript:setApply(" + storeNumb + ",\"" + data[i].jobCompany + "\",\"" + data[i].jobPosition + "\"  )' >Apply</button> "
						+ "<button data-toggle=modal  class='eq-pad btn btn-default btn-sm' href='#job-description' onclick='javascript:setDescription(" + data[i].jobId 
						+ ")'>Description</button></div></td></tr>");
						//$(".status").fadeIn(100).fadeOut(100).fadeIn(100).fadeOut(100);
						// +"<a href=javascript:%20getDescription("+data[i].jobId+") id=description>Description</a>" +  "</span> "
						// + "<span id=buttonSpan></span>" 
						// + "<button onclick=appliedFunction(" + storeNumb + ")>Apply</button><br/><br/>");

				}
				/*$(".btn btn-primary").click(function(){
					while (true){
					    $(".status").fadeTo('slow', 0.5).fadeTo('slow', 1.0);
					  }
				}); */

			}
		});
			//$(".status").fadeIn(100).fadeOut(100).fadeIn(100).fadeOut(100);
	
			console.log("Retrieved Jobs outside");

		}


	
	</script>
</head>









<body>

	<style>


		#allJobsDiv{
			height: auto;
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
	      </div>
	    </div>
	  </div>
	</div>


	<style>
/*	#job-confirmation{

		}*/
		
		.modal-header{
			background-color: #54E2BC;
		}

		.modal-footer button{
			background-color: #00FFC0;
		}

		.check{
			position: absolute;
			top:50%;
			left: 50%;
			-webkit-transform: translate(-50%,-50%);
			    -ms-transform: translate(-50%,-50%);
			        transform: translate(-50%,-50%);		
		}
		.success-check {

/*			stroke-dasharray: 1000;
			stroke-dashoffset: 1000;
			animation: dash 0.5s ease-in forwards;*/
		}
		.success-check2 {

			stroke-dasharray: 1000;
			stroke-dashoffset: 1000;

			-webkit-transition: stroke-dashoffset 1s linear;

			        transition: stroke-dashoffset 1s linear;
		}

		.apply-description{
			-webkit-perspective: 20em;
			        perspective: 20em;
			font-family: Raleway;
			font-size: 20px;
			position: absolute;
			top: 80%;
			left: 0;
			text-align: center;
			-webkit-transform: translate(0%,-50%);
			    -ms-transform: translate(0%,-50%);
			        transform: translate(0%,-50%);
			width: 100%;
			height: 100px;
			vertical-align: middle;
			color: #fff;
		}

		.com-name, .pos-name{
			font-size: 25px;
			color: #00DD00;
			display: inline-block;

		}

		.dynamic-text{

			padding: 15px;
			-webkit-transform: translateY(2px) rotateX(90deg);
			        transform: translateY(2px) rotateX(90deg);
			-webkit-transform-origin: top;
			    -ms-transform-origin: top;
			        transform-origin: top;
			-webkit-animation: flip-out 0.5s cubic-bezier(.41,1.89,.52,.9) forwards;
			        animation: flip-out 0.5s cubic-bezier(.41,1.89,.52,.9) forwards;
		}

		.pos-name .dynamic-text{
			-webkit-animation-delay: 0.1s;
			        animation-delay: 0.1s;
		}

		@-webkit-keyframes flip-out {
		  to {
		    -webkit-transform: translateY(2px) rotateX(0deg);
		            transform: translateY(2px) rotateX(0deg);
		  }
		}

		@keyframes flip-out {
		  to {
		    -webkit-transform: translateY(2px) rotateX(0deg);
		            transform: translateY(2px) rotateX(0deg);
		  }
		}

	</style>

	<div id="job-confirmation" class="modal fade">
		<div class="success-circle">
			<svg class = 'check' width="160" height="160" xmlns="http://www.w3.org/2000/svg" version="1.1">
				<polyline i begin="indefinite" class = 'success-check' points="30 80 70 120 130 40" stroke="black" stroke-width="13" stroke-linecap="round" fill="none" stroke-linejoin="round">
				</polyline>
				
			</svg>
			<svg class = 'check' width="160" height="160" xmlns="http://www.w3.org/2000/svg" version="1.1">
				<polyline class = 'success-check2' points="30 80 70 120 130 40" stroke="#00DD00" stroke-width="13" stroke-linecap="round" fill="none" stroke-linejoin="round">
				
				</polyline>
				
			</svg>

		</div>
		<div class = 'apply-description'>

			Thank you for applying to <span class = 'com-name'><div class='dynamic-text'><b>TARGET </b></div></span><span class = 'pre-text'>as</span><span class = 'pos-name' ><div class='dynamic-text'><b> MANAGER</b></div></span>. You will receive a message shortly.
		</div>
	</div>


	<script>
		$('.success-circle').on('mouseenter',function(){
			$(this).css('transform','translate(-50%,-50%) scale(1)')
		}).on('mouseleave',function(){
			$(this).css('transform','translate(-50%,-50%) scale(0.7)')
		});
	</script>



	<?php
		include('header.php')
	?>

	










	<div id = "allJobsDiv">
		

		
		
		<form class="search-bar form-inline row">
			<div class="col-xs-3 col-md-3">
				<select  name="jobType">
					<option value="any">Any job</option>
					<option value="Medical assistant">Medical assistant</option>
					<option value="Dental assistant">Dental assistant</option>
					<option value="Welding">Welding</option>
					<option value="Cosmetology">Cosmetology</option>
					<option value="Truck driving">Truck driving</option>
				</select>
			</div>
			<div class="col-xs-3 col-md-3">
				<input type="search" name="zipcode" placeholder="Enter a Zip Code" class="form-control">
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

				function setApply(jobId,com,pos)
				{
					$('#job-confirmation .success-check2').css('stroke-dashoffset',1000);
					$('.success-circle').css({'pointer-events':'all'});
					
					$('.com-name b').text(com);
					$('.pos-name b').text(pos);

					$('#job-confirmation .success-circle').off('click');
					$('#job-confirmation .success-circle').on('click',function()
					{
					
						$('.success-check2').css('stroke-dashoffset',0);
						$('#job-confirmation .success-circle').off('click');

						$.ajax(
						{
							type:"POST",
							url: "php/apply.php",
							dataType:"json",
							data:{"storeNumber":jobId,"applicantId": <?php echo $_SESSION['applicantId'] ?>},
							success: function(data,status){
								$('.success-circle').css({'pointer-events':'none'});
							}
						});
						
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
// <script>
// $(document).ready(function() {
//     var f = document.getElementById('blink');
//     setInterval(function() {
//         f.style.display = (f.style.display == 'none' ? '' : 'none');
//     }, 1000); 
    
// });
// </script>
</html>