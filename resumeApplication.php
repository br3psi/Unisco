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

if(!empty($_POST['firstName']))
{
	//$jobType = $_POST['jobType'];
/////////////////////////////////////////////////////////////////////////////////////////////////////////////

	$dbConn= getConnection();


	$sql = "INSERT INTO `basicApplication`(`firstName`, `lastName`, `middleName`, `maidenName`, `addressStreet`,
	 `addressCity`, `addressState`, `zipcode`, `timeLiving`, `SSN`, `phoneNum`, `DOB`, `availability`, `linkedIn`, `felony`, 
	 `backgroundCheck`, `transportation`, `driversLicense`, `driversLicenseNum`, `driversLicenseExpiration`, `LicenseType`, 
	 `accidents`, `movingViolations`, `refOneName`, `refOnePosition`, `refOneCompany`, `refOneAddress`, `refOnePhoneNum`, 
	 `refTwoName`, `refTwoPosition`, `refTwoCompany`, `refTwoAddress`, `refTwoPhoneNum`)

			VALUES (:firstName, :lastName, :middleName, :maidenName, :addressStreet, :addressCity, :addressState, :zipcode, 
					:presentAddressTime, :ssn, :phoneNum, :dob, :availability, :linkedIn, :felony, :backgroundCheck,
					 :transportation, :driverLicense, :licenseNumber, :licenseDate, :licenseType, :accidentsNumber, 
					:movingViolationsNumber, :refOneName, :refOnePosition, :refOneCompany, :refOneAddress, :refOnePhoneNum, 
					:refTwoName, :refTwoPosition, :refTwoCompany, :refTwoAddress, :refTwoPhoneNum)";
	$stmt = $dbConn->prepare($sql);
	$namedParameters = array(":firstName"=> $_POST['firstName'],
                         ":lastName"=> $_POST['lastName'],
                         ":middleName"=> $_POST['middleName'],
                         ":maidenName"=>$_POST['maidenName'],
                         ":addressStreet"=> $_POST['addressStreet'],
						 ":addressCity"=>$_POST['city'],
						 ":addressState"=>$_POST['state'],
						 ":zipcode"=>$_POST['zipcode'],
						 ":presentAddressTime"=>$_POST['presentAddressTime'],
						 ":ssn"=>$_POST['ssn'],
						 ":phoneNum"=>$_POST['phoneNum'],
						 ":dob"=>$_POST['dob'],
						 ":availability"=>$_POST['availability'],
						 ":linkedIn"=>$_POST['linkedIn'],
						 ":felony"=>$_POST['felony'],
						 ":backgroundCheck"=>$_POST['backgroundCheck'],
						 ":transportation"=>$_POST['transportation'],
						 ":driverLicense"=>$_POST['driverLicense'],
						 ":licenseNumber"=>$_POST['licenseNumber'],
						 ":licenseDate"=>$_POST['licenseDate'],
						 ":licenseType"=>$_POST['licenseType'],
						 ":accidentsNumber"=>$_POST['accidentsNumber'],
						 ":movingViolationsNumber"=>$_POST['movingViolationsNumber'],
						 ":refOneName"=>$_POST['refOneName'],
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
	// $_SESSION['phone'] = $_POST['phoneNum'];
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
	<link rel="stylesheet" type="text/css" href="css/fontello/css/home.css">
  <!-- Replace favicon.ico & apple-touch-icon.png in the root of your domain and delete these references -->
  <link rel="shortcut icon" href="/favicon.ico">
  <link rel="apple-touch-icon" href="/apple-touch-icon.png">
  <link href="prefixed.css" rel="stylesheet">
  <link href="bootstrap-3.3.4-dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
  <script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>

<script type="text/javascript" src="//platform.linkedin.com/in.js">
    api_key:   75mu9f6oip0v45
    authorize: true
    onLoad: onLinkedInLoad
</script>

<script type="text/javascript">
    
    // Setup an event listener to make an API call once auth is complete
    function onLinkedInLoad() {
        IN.Event.on(IN, "auth", getProfileData);
    }

    // Handle the successful return from the API call
    function onSuccess(data) {
        console.log(data);
        console.log(data['siteStandardProfileRequest'].url);
    }

    // Handle an error response from the API call
    function onError(error) {
        console.log(error);
    }

    // Use the API call wrapper to request the member's basic profile data
    function getProfileData() {
        IN.API.Raw("/people/~").result(onSuccess).error(onError);
    }

</script>
</head>
<body style='height:auto !important;'>
	<?php require 'header.php' ?>
	<div id = 'application'>
		<h2 class = 'title'>General Information Application</h2>
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
									<span class="input-group-addon">Last Name</span>
									<input type="text" class="form-control"  name="lastName" required aria-describe>
								</div>
							</div>
							<div class = 'col-md-4'>	
									<div class="input-group">
									<span class="input-group-addon">First Name</span>
									<input type="text" class="form-control"  name="firstName" required aria-describe>
								</div>
							</div>
						</div>
					<div class="row">
						<div class = 'col-md-6'>
							<div class="input-group">
								<span class="input-group-addon">Middle Name</span>
								<input type="text" class="form-control"  name="maidenName" aria-describe>
							</div>
						</div>
						<div class = 'col-md-6'>
							<div class="input-group">
								<span class="input-group-addon">Maiden Name</span>
								<input type="text" class="form-control"  name="middleName" aria-describe>
							</div>
						</div>
					</div>

					<div class="row">
						<div class = 'col-md-4'>
							<div class="input-group">
								<span class="input-group-addon">Present Address</span>
								<input type="text" class="form-control"  name="addressStreet"required aria-describe>
							</div>
						</div>
						<div class = 'col-md-4'>
							<div class="input-group">
								<span class="input-group-addon" >City</span>
								<input type="text" class="form-control"  required name="city" required aria-describe>
							</div>
						</div>
						<div class = 'col-xs-4'>
							<div class="input-group">
								<span class="input-group-addon" >State</span>
								<input type="text" class="form-control"  name="state"  requiredaria-describe>
							</div>
						</div>
						<div class = 'col-xs-4'>
							<div class="input-group">
								<span class="input-group-addon" >Zip code</span>
								<input type="text" class="form-control"  name="zipcode" required aria-describe>
							</div>
						</div>
						<div class = 'col-md-4'>
							<div class="input-group">
								<span class="input-group-addon">Time living at present address</span>
								<input type="text" class="form-control"  name="presentAddressTime" required aria-describe>
							</div>
						</div>
					</div>

					<div class="row">
						<div class = 'col-md-4'>
							<div class="input-group">
								<span class="input-group-addon">Social Security No.</span>
								<input type="text" class="form-control"  name="ssn" aria-describe required placeholder="###-##-####">
							</div>
						</div>

						<div class = 'col-md-4'>
							<div class="input-group">
								<span class="input-group-addon">Phone Number</span>
								<input name="phoneNum" type="text" class="form-control" required aria-describe placeHolder="(###)###-####">
							</div>
						</div>

						<div class = 'col-md-4'>
							<div class="input-group">
								<span class="input-group-addon">Date of Birth</span>
								<input name="dob" type="date" class="form-control"  required aria-describe placeholder="DD-MM-YYYY">
							</div>
						</div>

						<div class = 'col-md-4'>
							<div class="input-group">
								<span class="input-group-addon">Available to work</span>
								<select class="form-control" name="availability" required>
										<option value="part time">Part time</option>
										<option value="full time">Full time</option>
										<option value="part and full time">Both</option>
								</select>
							</div>
							<div class="row">
								<div class = 'col-lg-6'>
									<div class="input-group">
										<span class="input-group-addon" >What is your means of transportation to work?</span>
										<input type="text" class="form-control"  name="transportation" required aria-describe>
									</div>
								</div>
							</div>
						</div>
						<div class = 'col-md-4'>
							<div class="input-group">
								<script type="in/Login"></script>	
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
										<input type="radio" value="yes" name="felony">Yes
									</label>
									<label class="input-group-addon">
										<input type="radio" value="no" name="felony">No
									</label>
								</div>
							</div>
						</div>
						<div class="row">
							<div class = 'col-lg-6'>
								<div class="input-group">
									<span class="form-control">Do you authorize Unisco to conduct a background check?</span>
	
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
							<div class = 'col-lg-6'>
								<div class="input-group">
									<span class="form-control">Do you have a driver's license?</span>

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
			</div>
				<button id="finishingApplication" type="submit" class="btn btn-primary well-lg" >Finish Application</button>
			</div>
		</form>
		<div id = 'sendapp'>
		<span id="orSpan" style = 'margin: 50px;'>OR</span>
					<form method="POST" action="submitResume.php">
						<button id="finishingApplication" type="submit" class="btn btn-primary well-lg" href="submitResume.php">Upload Resume</button>
					</form>
		</div>
					
						
	</div>
</body>
</html>
