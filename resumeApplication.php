<?php
	//inserting basic information to database

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
if(!empty($_POST['firstName']))
{
	//$jobType = $_POST['jobType'];
/////////////////////////////////////////////////////////////////////////////////////////////////////////////
echo "hello";
	$dbConn= getConnection();

	$sql = "INSERT INTO basicApplication (firstName, lastName, middleName, maidenName, addressStreet, addressCity, addressState, zipcode, 
											timeLiving, SSN, phoneNum, DOB, availability, linkedIn, backgroundCheck, transportation, 
											driversLicense, driverLicenseNum, driverLicenseExpiration, licenseType, accidents, movingViolations,
											refOneName, refOnePosition, refOneCompany, refOneAddress, refOnePhoneNum, refTwoName,
											 refTwoPosition, refTwoCompany, refTwoAddress, refTwoPhoneNum) 

			VALUES (:firstName, :lastName, :middleName, :maidenName, :addressStreet, :addressCity, :addressState, :zipcode, 
					:presentAddressTime, :ssn, :phoneNum, :dob, :availability, :linkedIn, :backgroundCheck,
					 :transportation, :driverLicense, :licenseNumber, :licenseDate, :licenseType, :accidentsNumber, 
					:movingViolationsNumber, :refOneName, :refOnePosition, :refOneCompany, :refOneAddress, :refOnePhoneNum, 
					:refTwoName, :refTwoPosition, :refTwoCompany, :refTwoAddress, :refTwoPhoneNum)";
	$stmt = $dbConn->prepare($sql);
	$namedParameters = array(":firstName"=> $_POST['firstName'],
                         ":lastName"=> $_POST['lastName'],
                         ":middleName"=> $POST['middleName'],
                         ":maidenName"=>$POST['maidenName'],
                         ":addressStreet"=> $POST['addressStreet'],
						 ":addressCity"=>$_POST['city'],
						 ":addressState"=>$_POST['state'],
						 ":zipcode"=>$_POST['zipcode'],
						 ":presentAddressTime"=>$_POST['presentAddressTime'],
						 ":ssn"=>$_POST['ssn'],
						 ":phoneNum"=>$_POST['phoneNum'],
						 ":dob"=>$_POST['dob'],
						 ":availability"=>$_POST['availability'],
						 ":linkedIn"=>$_POST['linkedIn'],
						 ":backgroundCheck"=>$_POST['backgroundCheck'],
						 ":transportation"=>$_POST['transportation'],
						 ":driverLicense"=>$_POST['driverLicense'],
						 ":licenseNumber"=>$_POST['licenseNumber'],
						 ":licenseDate"=>$_POST['licenseDate'],
						 ":licenseType"=>$_POST['licenseType'],
						 ":accidentsNumber"=>$_POST['accidentsNumber'],
						 ":movingViolationsNumber"=>$_POST['movingViolationsNumber'],
						 ":refOneName"=>$_POST['licenseType'],
						 ":refOnePosition"=>$_POST['refOnePosition'],
						 ":refOneCompany"=>$_POST['refOneCompany'],
						 ":refOneAddress"=>$_POST['refOneAddress'],
						 ":refOnePhoneNum"=>$_POST['refOnePhoneNum'],
						 ":refTwoName"=>$_POST['refTwoName'],
						 ":refTwoPosition"=>$_POST['refTwoPosition'],
						 ":refTwoCompany"=>$_POST['refTwoCompany'],
						 ":refTwoAddress"=>$_POST['refTwoAddress'],
						 ":refTwoPhoneNum"=>$_POST['refTwoPhoneNum']);
	$stmt->execute($namedParameters);
	header("Location: application.php");
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
  <link href="prefixed.css" rel="stylesheet">
  <link href="bootstrap-3.3.4-dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body style='height:auto !important;'>
	<div id = 'header'>
	
	</div>
	<div id = 'application'>
		<h2 class = 'title'>General Information Application</h2>
				<form method="post" action="application.php">
					<button id="finishingApplication" type="submit" class="btn btn-warning" href="application.php" >Skip Application</button>
				</form>
		<form method="post" >
			<div>
				
				<br>
				<br>
				<div class="panel panel-default">
					<div class="panel-heading title">
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
								<input type="text" class="form-control"  name="addressStreet" aria-describe>
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
								<input name="phoneNum" type="text" class="form-control"  aria-describe placeHolder="(###)###-####">
							</div>
						</div>

						<div class = 'col-md-4'>
							<div class="input-group">
								<span class="input-group-addon">Date of Birth</span>
								<input name="dob" type="date" class="form-control"  aria-describe placeholder="DD-MM-YYYY">
							</div>
						</div>

						<div class = 'col-md-4'>
							<div class="input-group">
								<span class="input-group-addon">Available to work</span>
								<select class="form-control" name="availability">
										<option value="partTime">Part time</option>
										<option value="fullTime">Full time</option>
										<option value="bothTimes">Both</option>
										</select>
							</div>
						</div>
						<div class = 'col-md-4'>
							<div class="input-group">
								<input class = "btn btn-info" type="button" name="linkedIn" value="connect to linkedIn"/>	
							</div>
						</div>
									
					</div>
				</div>
					
				<div class="panel panel-default">
					<div class="panel-heading title ">
						<h4>Crimes and License</h4> <span class="label label-warning">Check if applies</span>
					</div>
					<div class="panel-body">
						<div class="row">
							<div class = 'col-lg-6'>
								<div class="input-group">
									<span class="form-control">Have you ever  been convicted of a misdemeanor or felony?</span>
									<label class="input-group-addon">
										<input  type="checkbox" name="felony" value="yes" >
									</label>
								</div>
							</div>
						</div>
						<div class="row">
							<div class = 'col-lg-6'>
								<div class="input-group">
									<span class="form-control">Do you authorize Unisco to conduct a background check?</span>
									<label class="input-group-addon">
										<input  type="checkbox" value="yes" name="backgroundCheck">
									</label>
								</div>
							</div>
						</div>
						<div class="row">
							<div class = 'col-lg-6'>
								<div class="input-group">
									<span class="form-control">DO YOU HAVE A DRIVER'S LICENSE?</span>
									<label class="input-group-addon">
										<input  type="checkbox" value="yes" name="driverLicense">
									</label>
								</div>
							</div>
						</div>

						<div class="row">
							<div class = 'col-lg-6'>
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
							<div class = 'col-lg-6'>
								<div class="input-group">
									<span class="input-group-addon" >Have you had any accidents during the past three years? If so, how many?</span>
									<input type="number" class="form-control" name="accidentsNumber">
								</div>
							</div>
							<div class = 'col-lg-6'>
								<div class="input-group">
									<span class="input-group-addon" >Have you had any moving violations during the past three years? If so, how many?</span>
									<input class="form-control" type="number" name="movingViolationsNumber">
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="panel panel-default" >
					<div class="panel-heading title">
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
										<input class="form-control" type="text" name="refOneName">
									</div>
								</div>
								<div class = 'col-md-6'>
									<div class="input-group">
										<span class="input-group-addon" >Position</span>
										<input class="form-control" type="text" name="refOnePosition">
									</div>
								</div>
								<div class = 'col-md-6'>
									<div class="input-group">
										<span class="input-group-addon" >Company</span>
										<input class="form-control" type="text"name="refOneCompany">
									</div>
								</div>
								<div class = 'col-md-6'>
									<div class="input-group">
										<span class="input-group-addon" >Address</span>
										<input class="form-control" type="text" name="refOneAddress">
									</div>
								</div>
								<div class = 'col-md-6'>
									<div class="input-group">
										<span class="input-group-addon" >Telephone</span>
										<input class="form-control" type="text" name="refOnePhoneNum">
									</div>
								</div>																								
							</div>
						</div>
					</div>
					<div class="panel-body">
						<div class="panel panel-info"  >
							<div class="panel-heading">
								Reference # 2
							</div>
							<div class="panel-body">
								<div class = 'col-md-6'>
									<div class="input-group">
										<span class="input-group-addon" >Name</span>
										<input class="form-control" type="text" name="refTwoName">
									</div>
								</div>
								<div class = 'col-md-6'>
									<div class="input-group">
										<span class="input-group-addon" >Position</span>
										<input class="form-control" type="text" name="refTwoPosition">
									</div>
								</div>
								<div class = 'col-md-6'>
									<div class="input-group">
										<span class="input-group-addon" >Company</span>
										<input class="form-control" type="text"name="refTwoCompany">
									</div>
								</div>
								<div class = 'col-md-6'>
									<div class="input-group">
										<span class="input-group-addon" >Address</span>
										<input class="form-control" type="text" name="refTwoAddress">
									</div>
								</div>
								<div class = 'col-md-6'>
									<div class="input-group">
										<span class="input-group-addon" >Telephone</span>
										<input class="form-control" type="text" name="refTwoPhoneNum">
									</div>
								</div>																								
							</div>
						</div>
					</div>
				</div>

				<div id = 'sendapp'>
					
						<button id="finishingApplication" type="submit" class="btn btn-primary well-lg" href="submitResume.php">Upload Resume</button>
					
					<span id="orSpan" style = 'margin: 50px;'>OR</span>
					
					<button id="finishingApplication" type="submit" class="btn btn-primary well-lg" >Finish Application</button>
					
				</div>	
				 
				 
			</div>
				
		</form>
			
	</div>
</body>
</html>
