<?php
	session_start();
	require 'php/dbConnection.php';
	//echo $_SESSION['storeNumber'];
	$dbConn = getConnection();

    $id = $_SESSION['lastId'];
    echo $id;

	//$sql = "INSERT INTO Applicant ('resume') VALUES ";
	//$namedParameters = array();
	//$namedParameters[':storeNumber'] = $_SESSION['storeNumber'];

	//$stmt = $dbConn->prepare($sql); 
	//$stmt->execute($namedParameters); 
	//$result = $stmt ->fetchAll();
    if (isset($_POST['uploadForm'])) {
		
        $temp = explode('.', $_FILES['file']['name']);
        $extn = strtolower(end($temp));
        if(($extn == "pdf")) {
        	echo "first if";
            // Filetype is correct. Check size
            if($_FILES['file']['size'] < 5632000) {
            	echo "2nd if";
                // Filesize is below maximum permitted. Add to the DB.
               /* $mime = $_FILES['file']['type'];
                $size = $_FILES['file']['size'];
                $name = $_FILES['file']['name'];
                $tmpf = $_FILES['file']['tmp_name'];*/
                $file = fopen($_FILES['file']['name'], "r");

                try {
                	echo "try";
                    $sql = ("INSERT INTO Applicant(resume) VALUES(:file) WHERE :id = Applicant.applicantId");
                    $namedParameters = array();
                    $namedParameters[':file'] = $file;
                    $stm = $dbConn->prepare($sql);
                    $stmt->execute($namedParameters);
                    $result = $stm -> fetch();


                    alert("Resume uploaded successfully!");
                    header("Location: jobListing.php");
                } catch(PDOException $e) { catchMySQLerror($e->getMessage()); }

            } else {
                // Filesize is over our limit. Send error message
                $error = "Your file is too large. Please read the instructions about file type and size, above.";
            }
        } else {
            $error = "Your file was the incorrect type. Please read the instructions about file type and size, above.";
        }
    }
?>

<!DOCTYPE HTML>
<html lang="en">
<head>
  <meta charset="utf-8">

  <!-- Always force latest IE rendering engine (even in intranet) & Chrome Frame 
       Remove this if you use the .htaccess -->
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

  <title>login</title>
  <meta name="description" content="">
  <meta name="author" content="Jose">

  <meta name="viewport" content="width=device-width; initial-scale=1.0">

  <!-- Replace favicon.ico & apple-touch-icon.png in the root of your domain and delete these references -->
  <link rel="shortcut icon" href="/favicon.ico">
  <link rel="apple-touch-icon" href="/apple-touch-icon.png">


<link rel="stylesheet" type="text/css" href="css/submitResume.css">
<link href="bootstrap-3.3.4-dist/css/bootstrap.min.css" rel="stylesheet">

</head>
<body>
	<div class = 'col-md-6 '>
		<div id="login" class = 'panel panel-primary'>
			<div class = 'panel-heading'>
				<h4>Upload Resume</h1>
			</div>
			<div class = 'panel-body'>
				<form  method="post" enctype="multipart/form-data" >
					Select resume: <input type='file' name="fileName" />
					</br>
          <div class = 'col-md-4'>
					 <input type="submit" name="uploadForm"/>
          </div>
					<div class = 'col-md-6'>
            <button type="submit" onclik="resumeApplication.php">Cancel</button>  
          </div>
				</form>
			</div>
		</div>
	</div>
</body>
</html>
