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
	echo $_POST['collegeEducation'];
	$dbConn= getConnection();

	$sql = "INSERT INTO application (applicantId, highSchoolDiplomaGED, collegeEducation, collegeGraduated, type, typeWPM, haveComputer, computerType, tenKeyComputer, 
									 wordProcessing, wordProcessingWPM, military, militarySpecialty, militaryStartDate, militaryEndDate, nationalGuard, 
									 nationalGuardSpecialty, nationalGuardStartDate, nationalGuardEndDate, jobOneEmployerName, jobOneAddress, jobOnePhoneNum,
									 jobOneSupervisorName, jobOneStartDate, jobOneEndDate, jobOneTitle, jobOneLeavingReasons, jobOneDuties, jobTwoEmployerName, 
									 jobTwoAddress, jobTwoPhoneNum, jobTwoSupervisorName, jobTwoStartDate, jobTwoEndDate, jobTwoTitle, jobTwoLeavingReasons, 
									 jobTwoDuties, contactLastEmployer, applicantCompletedApplication, whoCompletedApplication) 

	VALUES (:applicantId, :highSchoolDiplomaGED, :collegeEducation, :collegeGraduated, :type, :typeWPM, :haveComputer, :computerType, :tenKeyComputer, 
	:wordProcessing, :wordProcessingWPM, :military, :militarySpecialty, :militaryStartDate, :militaryEndDate, :nationalGuard, :nationalGuardSpecialty,
	 :nationalGuardStartDate, :nationalGuardEndDate, :jobOneEmployerName, :jobOneAddress, :jobOnePhoneNum, :jobOneSupervisorName, :jobOneStartDate, 
	 :jobOneEndDate, :jobOneTitle, :jobOneLeavingReasons, :jobOneDuties, :jobTwoEmployerName, :jobTwoAddress, :jobTwoPhoneNum, :jobTwoSupervisorName, 
	 :jobTwoStartDate, :jobTwoEndDate, :jobTwoTitle, :jobTwoLeavingReasons, :jobTwoDuties, :contactLastEmployer, :applicantCompletedApplication, :whoCompletedApplication)";
	$stmt = $dbConn->prepare($sql);
	$namedParameters = array(":applicantId"=>35,
						 ":highSchoolDiplomaGED"=> $_POST['highSchoolDiplomaGED'],
                         ":collegeEducation"=> $_POST['collegeEducation'],
                         ":collegeGraduated"=> $_POST['collegeGraduated'],
                         ":type"=>$_POST['type'],
                         ":typeWPM"=> $_POST['typeWPM'],
						 ":haveComputer"=>$_POST['haveComputer'],
						 ":computerType"=>$_POST['computerType'],
						 ":tenKeyComputer"=>$_POST['tenKeyComputer'],
						 ":wordProcessing"=>$_POST['wordProcessing'],
						 ":wordProcessingWPM"=>$_POST['wordProcessingWPM'],
						 ":military"=>$_POST['military'],
						 ":militarySpecialty"=>$_POST['militarySpecialty'],
						 ":militaryStartDate"=>$_POST['militaryStartDate'],
						 ":militaryEndDate"=>$_POST['militaryEndDate'],
						 ":nationalGuard"=>$_POST['nationalGuard'],
						 ":nationalGuardSpecialty"=>$_POST['nationalGuardSpecialty'],
						 ":nationalGuardStartDate"=>$_POST['nationalGuardStartDate'],
						 ":nationalGuardEndDate"=>$_POST['nationalGuardEndDate'],
						 ":jobOneEmployerName"=>$_POST['jobOneEmployerName'],
						 ":jobOneAddress"=>$_POST['jobOneAddress'],
						 ":jobOnePhoneNum"=>$_POST['jobOnePhoneNum'],
						 ":jobOneSupervisorName"=>$_POST['jobOneSupervisorName'],
						 ":jobOneStartDate"=>$_POST['jobOneStartDate'],
						 ":jobOneEndDate"=>$_POST['jobOneEndDate'],
						 ":jobOneTitle"=>$_POST['jobOneTitle'],
						 ":jobOneLeavingReasons"=>$_POST['jobOneLeavingReasons'],
						 ":jobOneDuties"=>$_POST['jobOneDuties'],
						 ":jobTwoEmployerName"=>$_POST['jobTwoEmployerName'],
						 ":jobTwoAddress"=>$_POST['jobTwoAddress'],
						 ":jobTwoPhoneNum"=>$_POST['jobTwoPhoneNum'],
						 ":jobTwoSupervisorName"=>$_POST['jobTwoSupervisorName'],
						 ":jobTwoStartDate"=>$_POST['jobTwoStartDate'],
						 ":jobTwoEndDate"=>$_POST['jobTwoEndDate'],
						 ":jobTwoTitle"=>$_POST['jobTwoTitle'],
						 ":jobTwoLeavingReasons"=>$_POST['jobTwoLeavingReasons'],
						 ":jobTwoDuties"=>$_POST['jobTwoDuties'],
						 ":contactLastEmployer"=>$_POST['contactLastEmployer'],
						 ":applicantCompletedApplication"=>$_POST['applicantCompletedApplication'],
						 ":whoCompletedApplication"=>$_POST['whoCompletedApplication']);
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
  <link href="bootstrap-3.3.4-dist/css/bootstrap.min.css" rel="stylesheet">

</head>
<body >
		<form method="POST" >

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
							<div class="md-3 input-group">
								<span class="form-control">Do you have a high school diploma/GED?</span>
								<label class="input-group-addon">
									<input type="checkbox" name="highSchoolDiplomaGED"  value="yes">
								</label>
							</div>
							<div class="md-3 input-group">
								<span class="input-group-addon">College education:</span>
								<select class="form-control" name="collegeEducation" required>
									<option value="noValue"></option>
									<option value="none">N/A</option>
									<option value="communityCollege">Community College</option>
									<option value="fourYearInstitution">4 year institution</option>
								</select>
							</div>
							<div class="md-3 input-group">
								<span class="form-control">Have you graduated?</span>
								<label class="input-group-addon">
									<input  type="checkbox" name="collegeGraduated" value="yes" >
								</label>
							</div>


						</div>
					</div>
					<div class="panel panel-default">
						<div class="panel-heading">
							<h4 class = 'title'>Office Skills</h4>
						</div>
						<div class="panel-body">
							<div class="md-3 input-group">
								<span class="form-control">Can you type?</span>
								<label class="input-group-addon">
									<input  type="checkbox" name="type" value="yes" >
								</label>
							</div>

							<div class="md-3 input-group">
								<span class="input-group-addon">WPM</span>
								<input  class="form-control" type="number" name="typeWPM">		
							</div>
							<div class="md-3 input-group">
								<span class="form-control">Do you have a Personal Computer?</span>
								<label class="input-group-addon">
									<input  type="checkbox" name="haveComputer" value="yes">
								</label>
							</div>
							<div class="md-3 input-group">
								<span class="input-group-addon">Type of Computer</span>
								<select class="form-control" name="computerType">
										<option value="mac">Mac</option>
										<option value="pc">PC</option>
								</select>
							</div>
							<div class="md-3 input-group">
								<span class="form-control">10 Key Computer?</span>
								<label class="input-group-addon">
									<input  type="checkbox" name="tenKeyComputer" value="yes">
								</label>
							</div>
							<div class="md-3 input-group">
								<span class="form-control">Word Processing?</span>
								<label class="input-group-addon">
									<input  type="checkbox" name="wordProcessing" value="yes">
								</label>
							</div>	
							<div class="md-3 input-group">
								<span class="input-group-addon">Word Processing WMP</span>
								
								<input class="form-control" type="number" name="wordProcessingWPM">
								
							</div>	
						</div>
					</div>
					<div class="panel panel-default">
						<div class="panel-heading">
							<h4 class = 'title'>Military</h4><span class="label label-warning">Check if applies</span>
						</div>
						<div class="panel-body">
							<div class="md-3 input-group">
								<span class="form-control">HAVE YOU EVER BEEN IN THE ARMED FORCES?</span>
								<label class="input-group-addon">
									<input  type="checkbox" name="military" value="yes">
								</label>
							</div>
							<div class="md-3 input-group">
								<span class="input-group-addon">Specialty</span>
								
								<input class="form-control" type="text" name="militarySpecialty">
								
							</div>
							<div class="md-3 input-group">
								<span class="input-group-addon">Date Enlisted</span>
								
								<input class="form-control" type="date" name="militaryStartDate">
								
							</div>
							<div class="md-3 input-group">
								<span class="input-group-addon">Discharge Date</span>
								
								<input class="form-control" type="date" name="militaryEndDate">	
							</div>	
							<div class="md-3 input-group">
								<span class="form-control">ARE YOU A MEMBER OF THE NATIONAL GUARD?</span>
								<label class="input-group-addon">
									<input  type="checkbox" name="nationalGuard" value="yes">
								</label>
							</div>
							<div class="md-3 input-group">
								<span class="input-group-addon">Specialty</span>
								
								<input class="form-control" type="text" name="nationalGuardSpecialty">
								
							</div>
							<div class="md-3 input-group">
								<span class="input-group-addon">Date Enlisted</span>
								
								<input class="form-control" type="date" name="nationalGuardStartDate">
								
							</div>
							<div class="md-3 input-group">
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
									
									<div class="md-3 input-group">
										<span class="input-group-addon">Name of employer</span>	
										<input class="form-control" type="text" name="jobOneEmployerName">
									</div>

									<div class="md-3 input-group">
										<span class="input-group-addon">Address</span>	
										<input  class="form-control" type="text" name="jobOneAddress">
									</div>

									<div class="md-3 input-group">
										<span class="input-group-addon">Phone number</span>	
										<input class="form-control" type="tel" name="jobOnePhoneNum">
									</div>

									<div class="md-3 input-group">
										<span class="input-group-addon">Name of last supervisor</span>	
										<input class="form-control" type="text" name="jobOneSupervisorName">
									</div>

									<div class="md-3 input-group">
										<span class="input-group-addon">Dates:</span>	
										<input class="form-control" type="text" name="jobOneStartDate">
										<span class="input-group-addon">to</span>
										<input class="form-control" type="text" name="jobOneEndDate">
									</div>

									<div class="md-3 input-group">
										<span class="input-group-addon">Your job title</span>	
										<input class="form-control" type="text" name="jobOneTitle"> 
									</div>

									<div class="md-3 input-group">
										<span class="input-group-addon">Reasons for leaving</span>	
										<input class="form-control" type="textarea" name="jobOneLeavingReasons">
									</div>	

									<div class="md-3 input-group">
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
									
									<div class="md-3 input-group">
										<span class="input-group-addon">Name of employer</span>	
										<input class="form-control" type="text" name="jobTwoEmployerName">
									</div>

									<div class="md-3 input-group">
										<span class="input-group-addon">Address</span>	
										<input class="form-control" type="text" name="jobTwoAddress">
									</div>

									<div class="md-3 input-group">
										<span class="input-group-addon">Phone number</span>	
										<input class="form-control" type="tel" name="jobTwoPhoneNum">
									</div>

									<div class="md-3 input-group">
										<span class="input-group-addon">Name of last supervisor</span>	
										<input class="form-control" type="text" name="jobTwoSupervisorName">
									</div>

									<div class="md-3 input-group">
										<span class="input-group-addon">Dates:</span>	
										<input class="form-control" type="text" name="jobTwoStartDate">
										<span class="input-group-addon">to</span>
										<input class="form-control" type="text" name="jobTwoEndDate">
									</div>

									<div class="md-3 input-group">
										<span class="input-group-addon">Your job title</span>	
										<input class="form-control" type="text" name="jobTwoTitle"> 
									</div>

									<div class="md-3 input-group">
										<span class="input-group-addon">Reasons for leaving</span>	
										<input class="form-control" type="textarea" name="jobTwoLeavingReasons">
									</div>	

									<div class="md-3 input-group">
										<span class="input-group-addon">List jobs you held, duties performed, skills used or learned, and advancements or promotions</span>	
										<input class="form-control" type="textarea" name="jobTwoDuties">
									</div>																															
								</div>
							</div>
							<div class="panel panel-default">
								<div class="panel-body">
									<div class="md-3 input-group">
										<span class="form-control">May we contact your present/last employer? </span>
										<label class="input-group-addon">
											<input  type="checkbox" name="contactLastEmployer" value="yes">
										</label>
									</div>
									<div class="md-3 input-group">
										<span class="form-control">Did you complete this application yourself? </span>
										<label class="input-group-addon">
											<input  type="checkbox" name="applicantCompletedApplication" value="yes">
										</label>
									</div>
									<div class="md-3 input-group">
										<span class="form-control">If not, who did? </span>
										<label class="input-group-addon">
											<input type="text" name="whoCompletedApplication">
										</label>
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
</body>
</html>
