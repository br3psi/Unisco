<?php


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
		<form method="POST" action="jobListing.php">
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
							<div class="input-group">
								<span class="form-control">Do you have a high school diploma/GED?</span>
								<label class="input-group-addon">
									<input type="checkbox" name="highSchool" value="no" value="yes">
								</label>
							</div>
							<div class="input-group">
								<span class="input-group-addon">College education:</span>
								<select class="form-control" name="collegeEducation">
									<option valye="none">N/A</option>
									<option value="communityCollege">Community College</option>
									<option value="fourYearInstitution">4 year institution</option>
								</select>
							</div>
							<div class="input-group">
								<span class="form-control">Have you graduated?</span>
								<label class="input-group-addon">
									<input  type="checkbox" name="ollegeGraduated" value="no" name="crime">
								</label>
							</div>


						</div>
					</div>
					<div class="panel panel-default">
						<div class="panel-heading">
							<h4 class = 'title'>Office Skills</h4>
						</div>
						<div class="panel-body">
							<div class="input-group">
								<span class="form-control">Can you type?</span>
								<label class="input-group-addon">
									<input  type="checkbox" name="typing" value="no" >
								</label>
							</div>

							<div class="input-group">
								<span class="input-group-addon">WPM</span>
								<input  class="form-control" type="number" name="wpmTyping">		
							</div>
							<div class="input-group">
								<span class="form-control">Do you have a Personal Computer?</span>
								<label class="input-group-addon">
									<input  type="checkbox" name="computer" value="no">
								</label>
							</div>
							<div class="input-group">
								<span class="input-group-addon">Type of Computer</span>
								<select class="form-control" name="computerType">
										<option value="mac">Mac</option>
										<option value="pc">PC</option>
								</select>
							</div>
							<div class="input-group">
								<span class="form-control">10 Key Computer?</span>
								<label class="input-group-addon">
									<input  type="checkbox" name="10key" value="no">
								</label>
							</div>
							<div class="input-group">
								<span class="form-control">Word Processing?</span>
								<label class="input-group-addon">
									<input  type="checkbox" name="wordProcessing" value="no">
								</label>
							</div>	
							<div class="input-group">
								<span class="input-group-addon">Word Processing WMP</span>
								
								<input class="form-control" type="number" name="wpmWordProcessing">
								
							</div>	
						</div>
					</div>
					<div class="panel panel-default">
						<div class="panel-heading">
							<h4 class = 'title'>Military</h4><span class="label label-warning">Check if applies</span>
						</div>
						<div class="panel-body">
							<div class="input-group">
								<span class="form-control">HAVE YOU EVER BEEN IN THE ARMED FORCES?</span>
								<label class="input-group-addon">
									<input  type="checkbox" name="armedForces" value="no">
								</label>
							</div>
							<div class="input-group">
								<span class="form-control">ARE YOU A MEMBER OF THE NATIONAL GUARD?</span>
								<label class="input-group-addon">
									<input  type="checkbox" name="nationalGuard" value="no">
								</label>
							</div>
							<div class="input-group">
								<span class="input-group-addon">Specialty</span>
								
								<input class="form-control" type="text" name="nationalGuardSpecialty">
								
							</div>
							<div class="input-group">
								<span class="input-group-addon">Date Enlisted</span>
								
								<input class="form-control" type="date" name="nationalGuardEnterDate">
								
							</div>
							<div class="input-group">
								<span class="input-group-addon">Discharge Date</span>
								
								<input class="form-control" type="date" name="nationalGuardDischargeDate">
								
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
									
									<div class="input-group">
										<span class="input-group-addon">Name of employer</span>	
										<input class="form-control" type="text" name="jobEmployerName1">
									</div>

									<div class="input-group">
										<span class="input-group-addon">Address</span>	
										<input  class="form-control" type="text" name="jobStreetAddress1" placeholder="number and street">
										<input   class="form-control" type="text" name="jobCity1" placeholder="city"> 
										<input  class="form-control" type="text" name="jobState1" placeholder="state">
										<input  class="form-control" type="text" name="jobzipcode1" placeHolder="zipcode">
									</div>

									<div class="input-group">
										<span class="input-group-addon">Phone number</span>	
										<input class="form-control" type="tel" name="jobPhoneNumber1">
									</div>

									<div class="input-group">
										<span class="input-group-addon">Name of last supervisor</span>	
										<input class="form-control" type="text" name="jobSupervisorName1">
									</div>

									<div class="input-group">
										<span class="input-group-addon">Dates:</span>	
										<input class="form-control" type="text" name="jobStartDate1">
										<span class="input-group-addon">to</span>
										<input class="form-control" type="text" name="jobEndDate1">
									</div>

									<div class="input-group">
										<span class="input-group-addon">Your job title</span>	
										<input class="form-control" type="text" name="jobTitle1"> 
									</div>

									<div class="input-group">
										<span class="input-group-addon">Reasons for leaving</span>	
										<input class="form-control" type="textarea" name="jobLeavingReasons1">
									</div>	

									<div class="input-group">
										<span class="input-group-addon">List jobs you held, duties performed, skills used or learned, and advancements or promotions</span>	
										<input class="form-control" type="textarea" name="jobDuties1">
									</div>																															
								</div>
							</div>
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class = 'title'>Job 2</h4>
								</div>
								<div class="panel-body">
									
									<div class="input-group">
										<span class="input-group-addon">Name of employer</span>	
										<input class="form-control" type="text" name="jobEmployerName2">
									</div>

									<div class="input-group">
										<span class="input-group-addon">Address</span>	
										<input class="form-control" type="text" name="jobStreetAddress2" placeholder="number and street">
										<input class="form-control" type="text" name="jobCity2" placeholder="city"> 
										<input class="form-control" type="text" name="jobState2" placeholder="state">
										<input class="form-control" type="text" name="jobzipcode2" placeHolder="zipcode">
									</div>

									<div class="input-group">
										<span class="input-group-addon">Phone number</span>	
										<input class="form-control" type="tel" name="jobPhoneNumber2">
									</div>

									<div class="input-group">
										<span class="input-group-addon">Name of last supervisor</span>	
										<input class="form-control" type="text" name="jobSupervisorName2">
									</div>

									<div class="input-group">
										<span class="input-group-addon">Dates:</span>	
										<input class="form-control" type="text" name="jobStartDate2">
										<span class="input-group-addon">to</span>
										<input class="form-control" type="text" name="jobEndDate2">
									</div>

									<div class="input-group">
										<span class="input-group-addon">Your job title</span>	
										<input class="form-control" type="text" name="jobTitle2"> 
									</div>

									<div class="input-group">
										<span class="input-group-addon">Reasons for leaving</span>	
										<input class="form-control" type="textarea" name="jobLeavingReasons2">
									</div>	

									<div class="input-group">
										<span class="input-group-addon">List jobs you held, duties performed, skills used or learned, and advancements or promotions</span>	
										<input class="form-control" type="textarea" name="jobDuties2">
									</div>																															
								</div>
							</div>
							<div class="panel panel-default">
								<div class="panel-body">
									<div class="input-group">
										<span class="form-control">May we contact your present/last employer? </span>
										<label class="input-group-addon">
											<input  type="checkbox" name="contactEmployer" value="no">
										</label>
									</div>
									<div class="input-group">
										<span class="form-control">Did you complete this application yourself? </span>
										<label class="input-group-addon">
											<input  type="checkbox" name="selfCompletedApplication" value="no">
										</label>
									</div>
									<div class="input-group">
										<span class="form-control">If not, who did? </span>
										<label class="input-group-addon">
											<input  type="text" name="personCompletedApplication">
										</label>
									</div>
								</div>
							</div>																								
						</div>
					</div>
				</div>
				<div id = 'sendapp'>
					<button id="finishingApplication" type="submit" class="btn btn-primary well-lg" href="jobListing.php">Upload Resume</button>
				</div>
		</form>
</body>
</html>
