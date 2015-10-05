<?php
	//inserting basic information to database
session_start();
function getConnection()
	{
		$host = "localhost";
		$dbname = "Unisco";
		$username = "root";
		$password = "root";
		$dbConn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
		$dbConn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		return $dbConn;
	}

	//$jobType = $_POST['jobType'];
	if(isset($_POST['submitApp']))
	{
	echo "Goes through!";
	echo $_SESSION['lastId'];
	echo $_POST['highSchoolDiplomaGED'];
	echo $_POST['collegeEducation'];
	$dbConn= getConnection();
	//39
	$sql = "INSERT INTO application (applicantId, 
		highSchoolDiplomaGED, 
		collegeEducation ,
		'collegeGraduated',
		 'type', 
		 'typeWPM', 
		 'haveComputer', 
		'computerType',
		 'wordProcessing',
		  'wordProcessingWPM',
		   'military',
		    'miltarySpecialty',
		     'militaryStartDate',
		      'militaryEndDate',
		'nationalGuard',
		 'nationalGuardSpecialty', 
		 'nationalGuardStartDate', 
		 'nationalGuardEndDate',
		  'jobOneEmployerName',
		   'jobOneAddress',
		    'jobOnePhoneNum',
		'jobOneSupervisorName',
		 'jobOneStartDate',
		  'jobOneEndDate', 
		  'jobOneJobTitle', 
		  'jobOneLeavingReasons',
		   'jobOneDuties',
		    'jobTwoEmployerName',
		'jobTwoAddress',
		 'jobTwoPhoneNum',
		  'jobTwoSupervisorName', 
		  'jobTwoStartDate',
		   'jobTwoEndDate',
		    'jobTwoJobTitle', 
		    'jobTwoLeavingReasons',
		     'jobTwoDuties', 
		'contactLastEmployer',
		 'applicantCompletedApplication', 
		 'whoCompletedApplication'
		) 

	VALUES (:applicantId,
	 :highSchoolDiplomaGED,
	  :collegeEducation ,
	  :collegeGraduated, 
	  :type,
	   :typeWPM, 
	  :haveComputer,
	   :computerType,
	    :wordProcessing,
	     :wordProcessingWPM, 
		:military,
		:militarySpecialty,
		 :militaryStartDate,
		 :militaryEndDate ,
		 :nationalGuard, 
		  :nationalGuardSpecialty,
	 :nationalGuardStartDate,
	  :nationalGuardEndDate, 
	  :jobOneEmployerName, 
	  :jobOneAddress, 
	  :jobOnePhoneNum, 
	  :jobOneSupervisorName,
	   :jobOneStartDate, 
	 :jobOneEndDate,
	  :jobOneTitle, 
	  :jobOneLeavingReasons,
	   :jobOneDuties, 
	   :jobTwoEmployerName, 
	   :jobTwoAddress, 
	   :jobTwoPhoneNum, 
	   :jobTwoSupervisorName, 
	 :jobTwoStartDate, 
	 :jobTwoEndDate, 
	 :jobTwoTitle, 
	 :jobTwoLeavingReasons,
	  :jobTwoDuties, 
	  :contactLastEmployer, 
	  :applicantCompletedApplication,
	:whoCompletedApplication
	)"; //38
	$stmt = $dbConn->prepare($sql);
	$namedParameters = array(":applicantId"=> $_SESSION['lastId'],
						 ":highSchoolDiplomaGED"=> $_POST['highSchoolDiplomaGED'],
                         ":collegeEducation"=> $_POST['collegeEducation']
       //                   ":collegeGraduated"=> $_POST['collegeGraduated'],
       //                   ":type"=>$_POST['type'],
       //                   ":typeWPM"=> $_POST['typeWPM'],
						 // ":haveComputer"=>$_POST['haveComputer'],
						 // ":computerType"=>$_POST['computerType'],
						 // ":wordProcessing"=>$_POST['wordProcessing'],
						 // ":wordProcessingWPM"=>$_POST['wordProcessingWPM'],
						 // ":military"=>$_POST['military'],
						 // ":militarySpecialty"=>$_POST['militarySpecialty'],
						 // ":militaryStartDate"=>$_POST['militaryStartDate'],
						 // ":militaryEndDate"=>$_POST['militaryEndDate'],
						 // ":nationalGuard"=>$_POST['nationalGuard'],
						 // ":nationalGuardSpecialty"=>$_POST['nationalGuardSpecialty'],
						 // ":nationalGuardStartDate"=>$_POST['nationalGuardStartDate'],
						 // ":nationalGuardEndDate"=>$_POST['nationalGuardEndDate'],
						 // ":jobOneEmployerName"=>$_POST['jobOneEmployerName'],
						 // ":jobOneAddress"=>$_POST['jobOneAddress'],
						 // ":jobOnePhoneNum"=>$_POST['jobOnePhoneNum'],
						 // ":jobOneSupervisorName"=>$_POST['jobOneSupervisorName'],
						 // ":jobOneStartDate"=>$_POST['jobOneStartDate'],
						 // ":jobOneEndDate"=>$_POST['jobOneEndDate'],
						 // ":jobOneTitle"=>$_POST['jobOneTitle'],
						 // ":jobOneLeavingReasons"=>$_POST['jobOneLeavingReasons'],
						 // ":jobOneDuties"=>$_POST['jobOneDuties'],
						 // ":jobTwoEmployerName"=>$_POST['jobTwoEmployerName'],
						 // ":jobTwoAddress"=>$_POST['jobTwoAddress'],
						 // ":jobTwoPhoneNum"=>$_POST['jobTwoPhoneNum'],
						 // ":jobTwoSupervisorName"=>$_POST['jobTwoSupervisorName'],
						 // ":jobTwoStartDate"=>$_POST['jobTwoStartDate'],
						 // ":jobTwoEndDate"=>$_POST['jobTwoEndDate'],
						 // ":jobTwoTitle"=>$_POST['jobTwoTitle'],
						 // ":jobTwoLeavingReasons"=>$_POST['jobTwoLeavingReasons'],
						 // ":jobTwoDuties"=>$_POST['jobTwoDuties'],
						 // ":contactLastEmployer"=>$_POST['contactLastEmployer'],
						 // ":applicantCompletedApplication"=>$_POST['applicantCompletedApplication'],
						 // ":whoCompletedApplication"=>$_POST['whoCompletedApplication']
						 );
	$stmt->execute($namedParameters); 
	header("Location: jobListing.php");
}
?>

<!DOCTYPE HTML>
<html lang="en">
<head>
  <meta charset="utf-8">

  <!-- Always force latest IE rendering engine (even in intranet) & Chrome Frame 
       Remove this if you use the .htaccess -->
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

  <title>Job Application</title>
  <meta name="description" content="">
  <meta name="author" content="Monse">

  <meta name="viewport" content="width=device-width; initial-scale=1.0">

  <!-- Replace favicon.ico & apple-touch-icon.png in the root of your domain and delete these references -->
  <link rel="shortcut icon" href="/favicon.ico">
  <link rel="apple-touch-icon" href="/apple-touch-icon.png">
<!--   <link href="css/application.css" rel="stylesheet"> -->

  <link href="prefixed.css" rel="stylesheet">

	<link rel="stylesheet" type="text/css" href="css/fontello/css/home.css">
  <link rel="stylesheet" href="https://sdk.ttcdn.co/tt-uikit-0.11.0.min.css">
  <script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
</head>
<body >
	<?php require 'header.php' ?>
		<form method="POST" >
		<br>
		<br>
			<div class="panel panel-default">
				<div class=" title panel-heading">
					<h3>APPLICATION FOR EMPLOYMENT</h3>
				</div>
				<div class="panel-body">
				<div class="panel panel-default">
					<div class="panel-heading">
						<h4 class = 'title'>Education</h4>
					</div>
					<div class="panel-body">
						<div class="col-md-4 input-group">
							<span class="input-group-addon">Do you have a high school diploma/GED?</span>
							<label class="input-group-addon">
								<input type="radio" value="yes" name="highSchoolDiplomaGED">Yes
							</label>
							<label class="input-group-addon">
								<input type="radio" value="no" name="highSchoolDiplomaGED">No
							</label>
						</div>
						<div class="col-md-4 input-group">
							<span class="input-group-addon">College education:</span>
							<select class="form-control" name="collegeEducation" required>
								<option value="noValue">noVal</option>
								<option value="none">N/A</option>
								<option value="communityCollege">Community College</option>
								<option value="fourYearInstitution">4 year institution</option>
							</select>
						</div>
						<div class="col-md-4 input-group">
							<span class="input-group-addon">Have you graduated?</span>
							<label class="input-group-addon">
								<input type="radio" value="yes" name="collegeGraduated">Yes
							</label>
							<label class="input-group-addon">
								<input type="radio" value="no" name="collegeGraduated">No
							</label>
						</div>
						


					</div>
				</div>

				<div class="panel panel-default">
					<div class="panel-heading">
						<h4 class = 'title'>Office Skills</h4>
					</div>
					<div class="panel-body">
						<div class="col-md-4 input-group">
							<span class="input-group-addon">Can you type?</span>
							<label class="input-group-addon">
								<input type="radio" value="yes" name="type">Yes
							</label>
							<label class="input-group-addon">
								<input type="radio" value="no" name="type">No
							</label>
						</div>

						<div class="col-md-4 input-group">
							<span class="input-group-addon">WPM</span>
							<input  class="form-control" type="number" name="typeWPM">		
						</div>
						<div class="col-md-4 input-group">
							<span class="input-group-addon">Do you have a Personal Computer?</span>
							<label class="input-group-addon">
								<input type="radio" value="yes" name="haveComputer">Yes
							</label>
							<label class="input-group-addon">
								<input type="radio" value="no" name="haveComputer">No
							</label>
						</div>
						<div class="col-md-4 input-group">
							<span class="input-group-addon">Type of Computer</span>
							<select class="form-control" name="computerType">
									<option value="mac">Mac</option>
									<option value="pc">PC</option>
							</select>
						</div>
						<div class="col-md-4 input-group">
							<span class="input-group-addon">Word Processing?</span>
							<label class="input-group-addon">
								<input type="radio"  name="wordProcessing" value="yes">Yes
							</label>
							<label class="input-group-addon">
								<input type="radio"  name="wordProcessing" value="no">No
							</label>								
						</div>	
						<div class="col-md-4 input-group">
							<span class="input-group-addon">Word Processing WMP</span>
							
							<input class="form-control" type="number" name="wordProcessingWPM">
							
						</div>	
					</div>
				</div>
				<div class="panel panel-default">
					<div class="panel-heading">
						<h4 class = 'title'>Military</h4>
					</div>
					<div class="panel-body">
						<div class="col-md-4 input-group">
							<span class="input-group-addon">Have you ever been in the military?</span>
							
															<label class="input-group-addon">
								<input type="radio"  name="military" value="yes">Yes
							</label>
							<label class="input-group-addon">
								<input type="radio"  name="military" value="no">No
							</label>	
						</div>
						<div class="col-md-4 input-group">
							<span class="input-group-addon">Specialty</span>
							
							<input class="form-control" type="text" name="militarySpecialty">
							
						</div>
						<div class="col-md-4 input-group">
							<span class="input-group-addon">Date Enlisted</span>
							
							<input class="form-control" type="date" name="militaryStartDate">
							
						</div>
						<div class="col-md-4 input-group">
							<span class="input-group-addon">Discharge Date</span>
							
							<input class="form-control" type="date" name="militaryEndDate">	
						</div>	
						<div class="col-md-4 input-group">
							<span class="input-group-addon">Are you a member of the National Guard?</span>

							<label class="input-group-addon">
								<input type="radio" name="nationalGuard" value="yes" >Yes
							</label>
							<label class="input-group-addon">
								<input type="radio" name="nationalGuard" value="no" >No
							</label>	
						</div>
						<div class="col-md-4 input-group">
							<span class="input-group-addon">Specialty</span>
							
							<input class="form-control" type="text" name="nationalGuardSpecialty">
							
						</div>
						<div class="col-md-4 input-group">
							<span class="input-group-addon">Date Enlisted</span>
							
							<input class="form-control" type="date" name="nationalGuardStartDate">
							
						</div>
						<div class="col-md-4 input-group">
							<span class="input-group-addon">Discharge Date</span>
							
							<input class="form-control" type="date" name="nationalGuardEndDate">
							
						</div>	
					</div>
				</div>
				<div class="panel panel-default">
					<div class="panel-heading">
						<h4 class = 'title'>Work Experience</h4>
						Please list your last two jobs beginning with your most recent job held.
					</div>
					<div class="panel-body">

						<div class="panel panel-default">
							<div class="panel-heading">
								<h4 class = 'title'>Job 1</h4>
							</div>
							<div class="panel-body">
								
								<div class="col-md-4 input-group">
									<span class="input-group-addon">Name of employer</span>	
									<input class="form-control" type="text" name="jobOneEmployerName">
								</div>

								<div class="col-md-4 input-group">
									<span class="input-group-addon">Address</span>	
									<input  class="form-control" type="text" name="jobOneAddress">
								</div>

								<div class="col-md-4 input-group">
									<span class="input-group-addon">Phone number</span>	
									<input class="form-control" type="tel" name="jobOnePhoneNum">
								</div>

								<div class="col-md-4 input-group">
									<span class="input-group-addon">Name of last supervisor</span>	
									<input class="form-control" type="text" name="jobOneSupervisorName">
								</div>

								<div class="col-md-4 input-group">
									<span class="input-group-addon">Dates:</span>	
									<input class="form-control" type="text" name="jobOneStartDate">
									<span class="input-group-addon">to</span>
									<input class="form-control" type="text" name="jobOneEndDate">
								</div>

								<div class="col-md-4 input-group">
									<span class="input-group-addon">Your job title</span>	
									<input class="form-control" type="text" name="jobOneTitle"> 
								</div>

								<div class="col-md-4 input-group">
									<span class="input-group-addon">Reasons for leaving</span>	
									<input class="form-control" type="textarea" name="jobOneLeavingReasons">
								</div>	

								<div class="col-md-4 input-group">
									<span class="input-group-addon">List jobs you held, duties performed, skills used or learned, and advancements or promotions</span>	
									<input class="form-control" type="textarea" name="jobOneDuties">
								</div>																															
							</div>
						</div>
						<div class="panel panel-default">
							<div class="panel-heading">
								<h4 class = 'title'>Job 2</h4>
							</div>
							<div class="panel-body">
								
								<div class="col-md-4 input-group">
									<span class="input-group-addon">Name of employer</span>	
									<input class="form-control" type="text" name="jobTwoEmployerName">
								</div>

								<div class="col-md-4 input-group">
									<span class="input-group-addon">Address</span>	
									<input class="form-control" type="text" name="jobTwoAddress">
								</div>

								<div class="col-md-4 input-group">
									<span class="input-group-addon">Phone number</span>	
									<input class="form-control" type="tel" name="jobTwoPhoneNum">
								</div>

								<div class="col-md-4 input-group">
									<span class="input-group-addon">Name of last supervisor</span>	
									<input class="form-control" type="text" name="jobTwoSupervisorName">
								</div>

								<div class="col-md-4 input-group">
									<span class="input-group-addon">Dates:</span>	
									<input class="form-control" type="text" name="jobTwoStartDate">
									<span class="input-group-addon">to</span>
									<input class="form-control" type="text" name="jobTwoEndDate">
								</div>

								<div class="col-md-4 input-group">
									<span class="input-group-addon">Your job title</span>	
									<input class="form-control" type="text" name="jobTwoTitle"> 
								</div>

								<div class="col-md-4 input-group">
									<span class="input-group-addon">Reasons for leaving</span>	
									<input class="form-control" type="textarea" name="jobTwoLeavingReasons">
								</div>	

								<div class="col-md-4 input-group">
									<span class="input-group-addon">List jobs you held, duties performed, skills used or learned, and advancements or promotions</span>	
									<input class="form-control" type="textarea" name="jobTwoDuties">
								</div>																															
							</div>
						</div>
						<div class="panel panel-default">
							<div class="panel-body">
								<div class="col-md-4 input-group">
									<span class="input-group-addon">May we contact your present/last employer? </span>

									<label class="input-group-addon">
										<input type="radio" name="contactLastEmployer" value="yes" >Yes
									</label>
									<label class="input-group-addon">
										<input type="radio" name="contactLastEmployer" value="no" >No
									</label>											
								</div>
								<div class="col-md-4 input-group">
									<span class="input-group-addon">Did you complete this application yourself? </span>

									<label class="input-group-addon">
										<input type="radio" name="applicantCompletedApplication" value="yes" >Yes
									</label>
									<label class="input-group-addon">
										<input type="radio" name="applicantCompletedApplication" value="no" >No
									</label>											
								</div>
								<div class="col-md-4 input-group">
									<span class="input-group-addon">If not, who did? </span>
									
									<input class="form-control" type="text" name="whoCompletedApplication">
								
								</div>
							</div>
						</div>																								
					</div>
				</div>
				</div>
				<div id = 'sendapp'>
					<button id="finishingApplication" name="submitApp" value="yes" type="submit" class="btn btn-primary well-lg" >Submit</button>
				</div>
		</form>
			<script src="https://sdk.ttcdn.co/tt-uikit-0.11.0.min.js"></script>  
</body>
</html>
