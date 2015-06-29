<?php
	session_start();
	require 'php/dbConnection.php';
	//echo $_SESSION['storeNumber'];
	$dbConn = getConnection();

	$sql = "SELECT * FROM Applicant inner JOIN Applied on Applied.applicantId = Applicant.applicantId 
			where Applied.storeNumber = :storeNumber";
	$namedParameters = array();
	$namedParameters[':storeNumber'] = $_SESSION['storeNumber'];

	$stmt = $dbConn->prepare($sql); 
	$stmt->execute($namedParameters); 
	$result = $stmt ->fetchAll();
	//print_r($result);
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

<!-- <script src="js/___jquery-2.1.3.js"></script>

<link rel="stylesheet" type="text/css" href="prefixed.css">
<link href="bootstrap-3.3.4-dist/css/bootstrap.min.css" rel="stylesheet">

<script src="js/popup.js"></script> -->
<link rel="stylesheet" type="text/css" href="css/employerSheet.css">
<script>
function getApplicantInfo(applicantId)
{
	$('#jobDescription').css('display','block');
	// $(".input-group").css('display','none');
	$('.panel-body').css('display','none');
	$.ajax({
	type:"POST",
	url: "getDescription.php",
	dataType:"json",
	data:{"applicantId":applicantId},
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

	<nav>
		<div>
			<span>My Jobs</span>

		</div>
	</nav>

	<div id="leftSideMenu">
		<div>
			<span>Interest Level</span>
			<br/>
			<input type="checkbox" value="yes">Yes</input>
			<br/>
			<input type="checkbox" value="no">No</input>
			<br/>
			<input type="checkbox" value="maybe">Maybe</input>
		</div>

	</div>

	<div id="applicants">
		<?php
			foreach ($result as $applicant) {
		?>
				<div>
					<?php
						 echo "<a href=applicantInfo.php?firstName=".$applicant['firstName']."&lastName=". $applicant['lastName'] . " >" . $applicant['firstName'];
						 echo "&nbsp";
						echo $applicant['lastName'];
						echo "</a>";
						echo "<br/>";
						echo $applicant['phone'];
						echo "<br/>"
						echo $applicant['score'];
					?>
				</div>
				<br/>
				<br/>
		<?php
			}
		?>
	</div>


</body>
</html>