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

	$sql = "INSERT INTO application (`applicantId`, `highSchoolDiplomaGED`, `collegeEducation`, `collegeGraduated`, `type`, `typeWPM`, `haveComputer`, 
		`computerType`, `tenKeyComputer`, `wordProcessing`, `wordProcessingWPM`, `military`, `miltarySpecialty`, `militaryStartDate`, `militaryEndDate`,
		`nationalGuard`, `nationalGuardSpecialty`, `nationalGuardStartDate`, `nationalGuardEndDate`, `jobOneEmployerName`, `jobOneAddress`, `jobOnePhoneNum`,
		`jobOneSupervisorName`, `jobOneStartDate`, `jobOneEndDate`, `jobOneJobTitle`, `jobOneLeavingReasons`, `jobOneDuties`, `jobTwoEmployerName`,
		`jobTwoAddress`, `jobTwoPhoneNum`, `jobTwoSupervisorName`, `jobTwoStartDate`, `jobTwoEndDate`, `jobTwoJobTitle`, `jobTwoLeavingReasons`, `jobTwoDuties`, 
		`contactLastEmployer`, `applicantCompletedApplication`, `whoCompletedApplication`) 

	VALUES (:applicantId, :highSchoolDiplomaGED, :collegeEducation, :collegeGraduated, :type, :typeWPM, :haveComputer, :computerType, :tenKeyComputer, 
	:wordProcessing, :wordProcessingWPM, :military, :militarySpecialty, :militaryStartDate, :militaryEndDate, :nationalGuard, :nationalGuardSpecialty,
	 :nationalGuardStartDate, :nationalGuardEndDate, :jobOneEmployerName, :jobOneAddress, :jobOnePhoneNum, :jobOneSupervisorName, :jobOneStartDate, 
	 :jobOneEndDate, :jobOneTitle, :jobOneLeavingReasons, :jobOneDuties, :jobTwoEmployerName, :jobTwoAddress, :jobTwoPhoneNum, :jobTwoSupervisorName, 
	 :jobTwoStartDate, :jobTwoEndDate, :jobTwoTitle, :jobTwoLeavingReasons, :jobTwoDuties, :contactLastEmployer, :applicantCompletedApplication, :whoCompletedApplication)";
	$stmt = $dbConn->prepare($sql);
	$namedParameters = array(":applicantId"=> $_SESSION['lastId'],
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
 	<link rel="stylesheet" type="text/css" href="css/fontello/css/home.css">

	<script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
  <link rel="stylesheet" href="https://sdk.ttcdn.co/tt-uikit-0.11.0.min.css"> 
    <link href="prefixed.css" rel="stylesheet">
</head>
<body style='height:auto !important;'>
	<?php require 'header.php' ?>
	<div id = 'application'>
		<form method="POST" action="jobListing.php">
			
				<h2 class = 'title'>General Information Application</h2>
				
				<!--<form action="application.php">
					<button id="finishingApplication" type="submit" class="btn btn-warning" href="submitResume.php">Skip Application</button>
				</form>-->
				<br>

				<br>
			<div class="panel panel-default">
					<div class="title panel-heading">
						<h4>Basic Information</h4>
					</div>
					<div class="panel-body">
						<div class=" row">
							<div class = 'col-md-4'>
								<div class="input-group">
									<span class="input-group-addon">Date</span>
									<input type="text" class="form-control"  name="appDate" aria-describe>
								</div>
							</div>
							<div class = 'col-md-4'>
								<div class="input-group">
									<span class="input-group-addon">Last Name</span>
									<input type="text" class="form-control"  name="lastName" aria-describe>
								</div>
							</div>
							<div class = 'col-md-4'>	
								<div class="input-group">
									<span class="input-group-addon">First Name</span>
									<input type="text" class="form-control"  name="firstName" aria-describe>
								</div>
							</div>
						</div>
					<div class="row">
						<div class = 'col-md-6'>
							<div class="input-group">
								<span class="input-group-addon">Maiden Name</span>
								<input type="text" class="form-control"  name="middleName" aria-describe>
							</div>
						</div>
						<div class = 'col-md-6'>
							<div class="input-group">
								<span class="input-group-addon">Middle Name</span>
								<input type="text" class="form-control"  name="maidenName" aria-describe>
							</div>
						</div>
					</div>

					<div class="row">
						<div class = 'col-md-4'>
							<div class="input-group">
								<span class="input-group-addon">Present Address</span>
								<input type="text" class="form-control"  name="address" aria-describe>
							</div>
						</div>
						<div class = 'col-md-4'>
							<div class="input-group">
								<span class="input-group-addon" >City</span>
								<input type="text" class="form-control"  name="city" aria-describe>
							</div>
						</div>
						<div class = 'col-xs-4'>
							<div class="input-group">
								<span class="input-group-addon" >State</span>
								<input type="text" class="form-control"  name="state" aria-describe>
							</div>
						</div>
						<div class = 'col-xs-4'>
							<div class="input-group">
								<span class="input-group-addon" >Zipcode</span>
								<input type="text" class="form-control"  name="zipcode" aria-describe>
							</div>
						</div>
						<div class = 'col-md-4'>
							<div class="input-group">
								<span class="input-group-addon">How Long?</span>
								<input type="text" class="form-control"  name="presentAddressTime" aria-describe>
							</div>
						</div>
					</div>

					<div class="row">
						<div class = 'col-md-4'>
							<div class="input-group">
								<span class="input-group-addon">Social Security No.</span>
								<input type="text" class="form-control"  name="ssn" aria-describe placeholder="###-##-####">
							</div>
						</div>

						<div class = 'col-md-4'>
							<div class="input-group">
								<span class="input-group-addon">Phone Number</span>
								<input name="phoneNumber" type="text" class="form-control"  aria-describe placeHolder="(###)###-####">
							</div>
						</div>

						<div class = 'col-md-4'>
							<div class="input-group">
								<span class="input-group-addon">Date of Birth</span>
								<input name="phoneNumber" type="date" class="form-control"  aria-describe placeholder="DD-MM-YYYY">
							</div>
						</div>

						<div class = 'col-md-4'>
							<div class="input-group">
								<span class="input-group-addon">Available to work</span>
								<select class="form-control" name="workTime">
										<option value="partTime">Part time</option>
										<option value="fullTime">Full time</option>
										<option value="bothTimes">Both</option>
										</select>
							</div>
						</div>
						<div class = 'col-md-4'>
							<div class="input-group">
								<input class = "btn btn-primary" type="button" value="connect to linkedIn"/>	
							</div>
						</div>
									
					</div>
				</div>
					

			</div>

				<div class="panel panel-default">
					<div class="title panel-heading">
						<h4>Crimes and License</h4> 
					</div>
					<div class="panel-body">
						<div class="row">
							<div class = 'col-lg-12'>
								<div class="input-group">
									<span class="input-group-addon">Have you ever  been convicted of a misdemeanor or felony?</span>

									<label class="input-group-addon">
										<input type="radio" name="crime" value="yes" id="crime-yes">Yes
									</label>
									<label class="input-group-addon">
										<input type="radio" name="crime" value="no" id="crime-no">No
									</label>
								</div>
							</div>
						</div>
						<div class="row">
							<div class = 'col-lg-12'>
								<div class="input-group">
									<span class="input-group-addon">Do you authorize Unisco to conduct a background check?</span>
									<label class="input-group-addon">
										<input type="radio" value="yes" name="backgroundCheck">Yes
									</label>
									<label class="input-group-addon">
										<input type="radio" value="no" name="backgroundCheck">No
									</label>

								</div>
							</div>
						</div>
						<div class="row">
							<div class = 'col-lg-12'>
								<div class="input-group">
									<span class="input-group-addon">DO YOU HAVE A DRIVER'S LICENSE?</span>
									<label class="input-group-addon">
										<input type="radio" value="yes" name="driverLicense">Yes
									</label>
									<label class="input-group-addon">
										<input type="radio" value="no" name="driverLicense">No
									</label>
									
								</div>
							</div>
						</div>

						<div class="row">
							<div class = 'col-lg-12'>
								<div class="input-group">
									<span class="input-group-addon" >What is your means of transportation to work?</span>
									<input type="text" class="form-control"  name="transportation" >
								</div>
							</div>
						</div>

						<div class="row">
							<div class = 'col-md-6'>
								<div class="input-group">
									<span class="input-group-addon" >Driver's license Number</span>
									<input type="text" class="form-control" name="licenseNumber">
								</div>
							</div>
							<div class = 'col-md-6'>
								<div class="input-group">
									<span class="input-group-addon" >License type</span>
									 <select class="form-control" name="licenseType">
										<option value="operator"> Operator</option>
										<option value="commercial"> Commercial (CDL)</option>
										<option value="Cheuffer"> Chauffer </option>
								  </select>
								</div>
							</div>
							<div class = 'col-md-6'>
								<div class="input-group">
									<span class="input-group-addon" >Expiration Date</span>
									<input class="form-control" type="date" name="licenseDate">
								</div>
							</div>
						</div>
						<div class="row">
							<div class = 'col-lg-12'>
								<div class="input-group">
									<span class="input-group-addon" >Have you had any accidents during the past three years? If so, how many?</span>
									<input type="number" class="form-control" name="accidentsNumber">
								</div>
							</div>
							<div class = 'col-lg-12'>
								<div class="input-group">
									<span class="input-group-addon" >Have you had any moving violations during the past three years? If so, how many?</span>
									<input class="form-control" type="number" name="movingViolationsNumber">
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="panel panel-default" >
					<div class="title panel-heading">
						<h4>References </h4><p>Please list two references other than relatives or previous employers</p>
					</div>
					<div class="panel-body">
						<div class="panel panel-info"  >
							<div class="panel-heading">
								Reference # 1
							</div>
							<div class="panel-body">
								<div class = 'col-md-6'>
									<div class="input-group">
										<span class="input-group-addon" >Name</span>
										<input class="form-control" type="text" name="refeName1">
									</div>
								</div>
								<div class = 'col-md-6'>
									<div class="input-group">
										<span class="input-group-addon" >Position</span>
										<input class="form-control" type="text" name="refPosition1">
									</div>
								</div>
								<div class = 'col-md-6'>
									<div class="input-group">
										<span class="input-group-addon" >Company</span>
										<input class="form-control" type="text"name="refCompany1">
									</div>
								</div>
								<div class = 'col-md-6'>
									<div class="input-group">
										<span class="input-group-addon" >Address</span>
										<input class="form-control" type="text" name="refAddress1">
									</div>
								</div>
								<div class = 'col-md-6'>
									<div class="input-group">
										<span class="input-group-addon" >Telephone</span>
										<input class="form-control" type="text" name="refPhoneNumber1">
									</div>
								</div>																								
							</div>
						</div>
					</div>
					<div class="panel-body">
						<div class="title panel panel-info"  >
							<div class="panel-heading">
								Reference # 2
							</div>
							<div class="panel-body">
								<div class = 'col-md-6'>
									<div class="input-group">
										<span class="input-group-addon" >Name</span>
										<input class="form-control" type="text" name="refeName2">
									</div>
								</div>
								<div class = 'col-md-6'>
									<div class="input-group">
										<span class="input-group-addon" >Position</span>
										<input class="form-control" type="text" name="refPosition2">
									</div>
								</div>
								<div class = 'col-md-6'>
									<div class="input-group">
										<span class="input-group-addon" >Company</span>
										<input class="form-control" type="text"name="refCompany2">
									</div>
								</div>
								<div class = 'col-md-6'>
									<div class="input-group">
										<span class="input-group-addon" >Address</span>
										<input class="form-control" type="text" name="refAddress2">
									</div>
								</div>
								<div class = 'col-md-6'>
									<div class="input-group">
										<span class="input-group-addon" >Telephone</span>
										<input class="form-control" type="text" name="refPhoneNumber2">
									</div>
								</div>																								
							</div>
						</div>
					</div>
				</div>

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
								<option value="noValue"></option>
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
			</div>
					
				
		</form>
		<div id = 'sendapp'>
			<form action="jobListing.php">
					<button type="submit" id="finishingApplication"  class="btn btn-primary well-lg" href="jobListing.php">Save and Apply</button>
			</form>
			<form action="index.php">
					<button  type="submit" class="btn btn-primary well-lg" onclick="index.php">Save and Log out</button>
			</form>
		</div>
	<script src="https://sdk.ttcdn.co/tt-uikit-0.11.0.min.js"></script>  
	</body>
</html>
