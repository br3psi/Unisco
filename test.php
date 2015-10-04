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
	// if(isset($_POST['submitApp']))
	// {
	//echo "Goes through!";
	//echo $_POST['collegeEducation'];
	$dbConn= getConnection();

	// $sql = "INSERT INTO application (`applicantId`, `highSchoolDiplomaGED`, `collegeEducation`, `collegeGraduated`, `type`, `typeWPM`, `haveComputer`, 
	// 	`computerType`, `tenKeyComputer`, `wordProcessing`, `wordProcessingWPM`, `military`, `miltarySpecialty`, `militaryStartDate`, `militaryEndDate`,
	// 	`nationalGuard`, `nationalGuardSpecialty`, `nationalGuardStartDate`, `nationalGuardEndDate`, `jobOneEmployerName`, `jobOneAddress`, `jobOnePhoneNum`,
	// 	`jobOneSupervisorName`, `jobOneStartDate`, `jobOneEndDate`, `jobOneJobTitle`, `jobOneLeavingReasons`, `jobOneDuties`, `jobTwoEmployerName`,
	// 	`jobTwoAddress`, `jobTwoPhoneNum`, `jobTwoSupervisorName`, `jobTwoStartDate`, `jobTwoEndDate`, `jobTwoJobTitle`, `jobTwoLeavingReasons`, `jobTwoDuties`, 
	// 	`contactLastEmployer`, `applicantCompletedApplication`, `whoCompletedApplication`) 

	// VALUES (:applicantId, :highSchoolDiplomaGED, :collegeEducation, :collegeGraduated, :type, :typeWPM, :haveComputer, :computerType, :tenKeyComputer, 
	// :wordProcessing, :wordProcessingWPM, :military, :militarySpecialty, :militaryStartDate, :militaryEndDate, :nationalGuard, :nationalGuardSpecialty,
	//  :nationalGuardStartDate, :nationalGuardEndDate, :jobOneEmployerName, :jobOneAddress, :jobOnePhoneNum, :jobOneSupervisorName, :jobOneStartDate, 
	//  :jobOneEndDate, :jobOneTitle, :jobOneLeavingReasons, :jobOneDuties, :jobTwoEmployerName, :jobTwoAddress, :jobTwoPhoneNum, :jobTwoSupervisorName, 
	//  :jobTwoStartDate, :jobTwoEndDate, :jobTwoTitle, :jobTwoLeavingReasons, :jobTwoDuties, :contactLastEmployer, :applicantCompletedApplication, :whoCompletedApplication)";
	// $stmt = $dbConn->prepare($sql);
	// $namedParameters = array(":applicantId"=> $_SESSION['lastId'],
	// 					 ":highSchoolDiplomaGED"=> $_POST['highSchoolDiplomaGED'],
 //                         ":collegeEducation"=> $_POST['collegeEducation'],
 //                         ":collegeGraduated"=> $_POST['collegeGraduated'],
 //                         ":type"=>$_POST['type'],
 //                         ":typeWPM"=> $_POST['typeWPM'],
	// 					 ":haveComputer"=>$_POST['haveComputer'],
	// 					 ":computerType"=>$_POST['computerType'],
	// 					 ":tenKeyComputer"=>$_POST['tenKeyComputer'],
	// 					 ":wordProcessing"=>$_POST['wordProcessing'],
	// 					 ":wordProcessingWPM"=>$_POST['wordProcessingWPM'],
	// 					 ":military"=>$_POST['military'],
	// 					 ":militarySpecialty"=>$_POST['militarySpecialty'],
	// 					 ":militaryStartDate"=>$_POST['militaryStartDate'],
	// 					 ":militaryEndDate"=>$_POST['militaryEndDate'],
	// 					 ":nationalGuard"=>$_POST['nationalGuard'],
	// 					 ":nationalGuardSpecialty"=>$_POST['nationalGuardSpecialty'],
	// 					 ":nationalGuardStartDate"=>$_POST['nationalGuardStartDate'],
	// 					 ":nationalGuardEndDate"=>$_POST['nationalGuardEndDate'],
	// 					 ":jobOneEmployerName"=>$_POST['jobOneEmployerName'],
	// 					 ":jobOneAddress"=>$_POST['jobOneAddress'],
	// 					 ":jobOnePhoneNum"=>$_POST['jobOnePhoneNum'],
	// 					 ":jobOneSupervisorName"=>$_POST['jobOneSupervisorName'],
	// 					 ":jobOneStartDate"=>$_POST['jobOneStartDate'],
	// 					 ":jobOneEndDate"=>$_POST['jobOneEndDate'],
	// 					 ":jobOneTitle"=>$_POST['jobOneTitle'],
	// 					 ":jobOneLeavingReasons"=>$_POST['jobOneLeavingReasons'],
	// 					 ":jobOneDuties"=>$_POST['jobOneDuties'],
	// 					 ":jobTwoEmployerName"=>$_POST['jobTwoEmployerName'],
	// 					 ":jobTwoAddress"=>$_POST['jobTwoAddress'],
	// 					 ":jobTwoPhoneNum"=>$_POST['jobTwoPhoneNum'],
	// 					 ":jobTwoSupervisorName"=>$_POST['jobTwoSupervisorName'],
	// 					 ":jobTwoStartDate"=>$_POST['jobTwoStartDate'],
	// 					 ":jobTwoEndDate"=>$_POST['jobTwoEndDate'],
	// 					 ":jobTwoTitle"=>$_POST['jobTwoTitle'],
	// 					 ":jobTwoLeavingReasons"=>$_POST['jobTwoLeavingReasons'],
	// 					 ":jobTwoDuties"=>$_POST['jobTwoDuties'],
	// 					 ":contactLastEmployer"=>$_POST['contactLastEmployer'],
	// 					 ":applicantCompletedApplication"=>$_POST['applicantCompletedApplication'],
	// 					 ":whoCompletedApplication"=>$_POST['whoCompletedApplication']);
	// $stmt->execute($namedParameters); 
	// header("Location: jobListing.php");
//}

?>