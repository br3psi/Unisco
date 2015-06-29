<?php
	session_start();
	require 'php/dbConnection.php';
	//echo $_SESSION['storeNumber'];
	$dbConn = getConnection();
	$idValue = $_GET[id];
	echo $id;

	$sql = "SELECT * FROM basicApplication WHERE :idValue = applicantId";
	$namedParameters = array();
	$namedParameters[':idValue'] = $idValue;

	$stmt = $dbConn->prepare($sql); 
	$stmt->execute($namedParameters); 
	$result = $stmt ->fetch();
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

</head>
<body >
	
	<nav>
		<div>
			<span><?php echo $_GET['firstName']; echo "&nbsp"; echo $_GET['lastName']; ?></span>
			
		</div>
	<nav>
		<div>
		<?php
			echo "Phone Number: " . $result['phoneNum']; echo "<br/>";
			echo "Availability: " . $result['availability']; echo "<br/>";
			echo "LinkedIn: " . $result['linkedIn'];

		?>
		<div id="leftSideMenu">
		<div>
			<span>Interest Level</span>
			<br/>
			<input type="submit" value="yes"></input>
			<input type="submit" value="no"></input>
			<input type="submit" value="maybe"></input>
		</div>

	</div>

			
		</div>
	
</body>
</html>