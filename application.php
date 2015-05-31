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
  <link href="css/application.css" rel="stylesheet">



</head>
<body >
		<form method="POST" action="jobListing.php">
			<div>
				<h2>APPLICATION FOR EMPLOYMENT</h2> 
				<div id="personalInformationDiv">
					<h3>Basic Information</h3> <br/>
					Date: <input type="date" name="appDate"> <br/><br/>
					Last Name: <input type="text" name="lastName"> First Name: <input type="text" name="firstName">
					Middle:<input type="text" name="middleName"> Maiden: <input type="text" name="maidenName"> <br/> <br/>
					Present Address: <input type="text" name="address" placeholder="Number and street"> City: <input type="text" name="city">
					State: <input type="text" name="state"> Zipcode: <input type="number" name="zipcode"> <br/> <br/>
					How long <input type="text" name="presentAddressTime"> Social Security No. <input type="text" name="ssn" placeholder="###-##-####"><br/><br/>
					Phone Number: <input type="text" name="phoneNumber" placeHolder="(###)###-####"> <br/> <br/>
					Date of Birth: <input type="date" name="dob" placeholder="DD-MM-YYYY"> <br/> <br/> <br/>
					Available to work: <select name="workTime">
										<option value="partTime">Part time</option>
										<option value="fullTime">Full time</option>
										<option value="bothTimes">Both</option>
										</select> <br/> <br/>
					Please provide your LinkedIn <input type="text" name="linkedIn" value="">
										
				</div>
				<br/>
				
				<div id="educationDiv">
					<h3>Education </h3>
					Do you have a high school diploma/GED? <input type="radio" name="highSchool" value="yes">yes 
														<input type="radio" name="highSchool" value="no">no <br/> <br/>
					College education: <select name="collegeEducation">
										<option valye="none">N/A</option>
										<option value="communityCollege">Community College</option>
										<option value="fourYearInstitution">4 year institution</option>
										</select> <br/> <br/>
					Have you graduated? <input type="radio" name="collegeGraduated" value="yes">yes 
														<input type="radio" name="collegeGraduated" value="no">no <br/>				
				</div>
				 <br/>
				<div id="crimesAndLicenseDiv">
					Have you ever  been convicted of a misdemeanor or felony? <input type="radio" name="crime" value="yes">yes 
														<input type="radio" name="crime" value="no">no <br/> <br/>
					
					Do you authorize Unisco to conduct a background check?<input type="radio" name="backgroundCheck" value="yes">yes 
														<input type="radio" name="backgroundCheck" value="no">no <br/> <br/> <br
>
					
					DO YOU HAVE A DRIVER'S LICENSE? <input type="radio" name="driverLicense">yes
													<input type="radio" name="driverLicense">no <br/> <br/>
					What is your means of transportation to work? <input type="text" name="transportation"> <br/> <br/>
					
					Driver's license Number: <input type="text" name="licenseNumber"> State of issue <input type="text" name="licenseState">
					License type: <select name="licenseType">
										<option value="operator"> Operator</option>
										<option value="commercial"> Commercial (CDL)</option>
										<option value="Cheuffer"> Chauffer </option>
								  </select>
					Expiration Date: <input type="date" name="licenseDate"> <br/> <br/>
					
					Have you had any accidents during the past three years? If so, how many? <input type="number" name="accidentsNumber"> <br/> <br/>
					Have you had any moving violations during the past three years? If so, how many? <input type="number" name="movingViolationsNumber"> <br/> </br>
				</div> 
				<div id="officeSkillsDiv">	
					<h3 id="officeSkillsDiv"> Office Skills </h3> <br/>
					 Typing? <input type="radio" name="typing">yes
							 <input type="radio" name="typing">no	<br/>
							 WPM <input type="number" name="wpmTyping"> <br/> <br/>
					Personal Computer? <input type="radio" name="personalComputer">yes	
									   <input type="radio" name="personalComputer">no <br/>   
					Computer type <select name="computerType">
										<option value="mac">Mac</option>
										<option value="pc">PC</option>
								  </select> <br/> <br/>
					10-key <input type="radio" name="10key">yes
						   <input type="radio" name="10key">no	<br/> 
					Word Processing <input type="radio" name="wordProcessing">yes
							 <input type="radio" name="wordProcessing">no	<br/>
							 WPM <input type="number" name="wpmWordProcessing"> <br/> 
				</div>	
				<br/>
				<div id="twoReferencesDiv">
					<h3>References </h3> <br/> 
					Please list two references other than relatives or previous employers <br/><br/>
					<div id="relativeOneDiv">
						Name <input type="text" name="refeName1"> <br/> <br/>
						Position <input type="text" name="refPosition1"> <br/> <br/>
						Company <input type="text" name="refCompany1"> <br/><br/>
						Address <input type="text" name="refAddress1"> <br/><br/>
						Telephone <input type="tel" name="refPhoneNumber1"> <br/><br/>
					</div>
					
					<br/> <br/>
				
					<div id="relativeTwoDiv">
						Name <input type="text" name="refeName2"> <br/> <br/>
						Position <input type="text" name="refPosition2"> <br/> <br/>
						Company <input type="text" name="refCompany2"> <br/><br/>
						Address <input type="text" name="refAddress2"> <br/><br/>
						Telephone <input type="tel" name="refPhoneNumber2"> <br/><br/> 
					</div>
				</div>
				
				 <br/>
				 <div id="miltaryDiv">
					 
					 <h3>Military</h3>
					 HAVE YOU EVER BEEN IN THE ARMED FORCES? <input type="radio" name="armedForces">yes
							 <input type="radio" name="armedForces">no	<br/> <br/>
					ARE YOU A MEMBER OF THE NATIONAL GUARD? <input type="radio" name="nationalGuard">yes
							 <input type="radio" name="nationalGuard">no	<br/>
					Specialty <input type="text" name="nationalGuardSpecialty"> 
					Date Entered <input type="date" name="nationalGuardEnterDate">
					Discharge Date <input type="date" name="nationalGuardDischargeDate"> <br/> <br/> <br/>
					
				</div>
				<br/> 
				<div id="workExperienceDiv">
				<h3>Work Experience</h3>
				Please list your last two jobs beginning with your most recent job held. <br/> <br/>
				
				<div id="jobOneDiv">
						Job 1: <br/><br/>
						Name of employer: <input type="text" name="jobEmployerName1"> <br/> <br/>
						Address <input type="text" name="jobStreetAddress1" placeholder="number and street">
								<input type="text" name="jobCity1" placeholder="city"> 
								<input type="text" name="jobState1" placeholder="state">
								<input type="text" name="jobzipcode1" placeHolder="zipcode"> <br/><br/>
						Phone number <input type="tel" name="jobPhoneNumber1"> <br/><br/>
						Name of last supervisor  <input type="text" name="jobSupervisoName1"> <br/> <br/>
						Dates <input type="date" name="jobStartDate1"> to  <input type="date" name="jobEndDate1"> <br/> <br/>
						Your job title  <input type="text" name="jobTitle1"> <br/> <br/>
						Reasons for leaving  <input type="textarea" name="jobLeavingReasons1"> <br/><br/>
						List jobs you held, duties performed, skills used or learned, and advancements or promotions  <input type="textarea" name="jobDuties1"> <br/> <br/>
					</div>
					<br/> <br/>
					<div id="jobTwoDiv">
						Job 2: <br/> <br/>
						Name of employer: <input type="text" name="jobEmployerName2"> <br/> <br/>
						Address <input type="text" name="jobStreetAddress2" placeholder="number and street">
								<input type="text" name="jobCity2" placeholder="city"> 
								<input type="text" name="jobState2" placeholder="state">
								<input type="text" name="jobzipcode2" placeHolder="zipcode"> <br/><br/>
						Phone number <input type="tel" name="jobPhoneNumber2"> <br/><br/>
						Name of last supervisor  <input type="text" name="jobSupervisoName2"> <br/> <br/>
						Dates <input type="date" name="jobStartDate2"> to  <input type="date" name="jobEndDate2"> <br/> <br/>
						Your job title  <input type="text" name="jobTitle2"> <br/> <br/>
						Reasons for leaving  <input type="textarea" name="jobLeavingReasons2"> <br/><br/>
						List jobs you held, duties performed, skills used or learned, and advancements or promotions  <input type="textarea" name="jobDuties2"> <br/> <br/>					
						May we contact your present/last employer? <input type="radio" name="contactEmployer">yes
															<input type="radio" name="contactEmployer">no	<br/> <br/>
					</div>
				</div>
				<br/>
				Did you complete this application yourself? <input type="radio" name="selCompletedApplication">yes
															<input type="radio" name="selfCompletedApplication">no	<br/> <br/>
				If not, who did? <input type="text" name="personCompletedApplication"> <br/> <br/>
				
				<input type="submit" name="submitApplication" value="Submit" id="submitButton">
			</div>
			
		</form>
</body>
</html>
