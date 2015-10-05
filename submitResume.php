<?php
// 	session_start();
// 	require 'php/dbConnection.php';
// 	//echo $_SESSION['storeNumber'];
// 	$dbConn = getConnection();
//   define("__ROOT__",dirname(dirname(__FILE__)));
//   //echo __ROOT__;
//  // echo $_SESSION['username'];
// if(isset($_POST['uploadForm']))
// {
  
//  // echo $_FILES['fileName']['tmp_name'];

//   $path = 'Unisco/resume/' . $_SESSION['username'];
//   // mkdir('Unisco/resume/' . $_SESSION['username']);
//   // if(!file_exists($path)) //checks if the user's folder exists
//   // {
//   //   mkdir('Unisco/resume/' . $_SESSION['username']);
//   // }

//   else
//   {

//    // move_uploaded_file($_FILES['fileName']['tmp_name'], $path. "/" . $_FILES['fileName']['name']);
    
//    //  $completePath = $path. "/" . $_FILES['fileName']['name'];
//    //  //$_SESSION['']
//    //  $file = fopen($_FILES['file']['name'], "r");
//    //  $dbConn = getConnection();
//    // // $sql = "INSERT INTO Applicant (resume) VALUES(:file) WHERE :id = Applicant.applicantId)";
//    //  $namedParameters = array();
//    //  // $namedParameters[':file'] = $file;
//     // $stm = $dbConn->prepare($sql);
//     // $stmt->execute($namedParameters);

//     // $stmt = $dbConn->prepare($sql);
//     // $stmt->execute(array(":username"=>$_SESSION['username'],
//     //         ':profilePicture'=>$completePath));
    
//     // $_SESSION['profilePicture']=$completePath;
//   }

// }
//  //    $id = $_SESSION['lastId'];
//  //    echo $id;

// 	// //$sql = "INSERT INTO Applicant ('resume') VALUES ";
// 	// //$namedParameters = array();
// 	// //$namedParameters[':storeNumber'] = $_SESSION['storeNumber'];

// 	// //$stmt = $dbConn->prepare($sql); 
// 	// //$stmt->execute($namedParameters); 
// 	// //$result = $stmt ->fetchAll();
//  //    if (isset($_POST['uploadForm'])) {
		
//  //        $temp = explode('.', $_FILES['file']['name']);
//  //        $extn = strtolower(end($temp));
//  //        if(($extn == "pdf")) {
//  //        	echo "first if";
//  //            // Filetype is correct. Check size
//  //            if($_FILES['file']['size'] < 5632000) {
//  //            	echo "2nd if";
//  //                // Filesize is below maximum permitted. Add to the DB.
//  //               /* $mime = $_FILES['file']['type'];
//  //                $size = $_FILES['file']['size'];
//  //                $name = $_FILES['file']['name'];
//  //                $tmpf = $_FILES['file']['tmp_name'];*/
//  //                $file = fopen($_FILES['file']['name'], "r");

//  //                try {
//  //                	echo "try";
//  //                    $sql = ("INSERT INTO Applicant(resume) VALUES(:file) WHERE :id = Applicant.applicantId");
//  //                    $namedParameters = array();
//  //                    $namedParameters[':file'] = $file;
//  //                    $stm = $dbConn->prepare($sql);
//  //                    $stmt->execute($namedParameters);
//  //                    $result = $stmt -> fetch();


//  //                    alert("Resume uploaded successfully!");
//  //                    header("Location: jobListing.php");
//  //                } catch(PDOException $e) { catchMySQLerror($e->getMessage()); }

//  //            } else {
//  //                // Filesize is over our limit. Send error message
//  //                $error = "Your file is too large. Please read the instructions about file type and size, above.";
//  //            }
//  //        } else {
//  //            $error = "Your file was the incorrect type. Please read the instructions about file type and size, above.";
//  //        }
//  //    }

  
 
 

  session_start();
  require 'php/dbConnection.php';
  $dbConn = getConnection();

  $sql = "INSERT INTO application (resume) VALUES (:fileName) WHERE Applied.applicantId = :applicantId";

  $namedParameters = array();
  $namedParameters[':applicantId'] = $_SESSION['applicantId'];
  $stmt = $dbConn->prepare($sql); 
  $stmt->execute($namedParameters); 
  $result = $stmt ->fetchAll();

       




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

<script>
function goBack() {
    window.history.back();
}
function saveFileName(){
  <?php

  ?>
}
</script>

</head>
<body>
	<div class = 'col-md-6 '>
		<div id="login" class = 'panel panel-primary'>
			<div class = 'panel-heading'>
				<h4>Upload Resume</h1>
			</div>
			<div class = 'panel-body'>
				<form  method="post" enctype="multipart/form-data" >
					Select resume: <input type='text' name="fileName" />
					</br>
          <div class = 'col-md-4'>
					 <input type="submit" name="uploadForm" onClick = "saveFileName()"/>
          </div>

				</form>
            <div class = 'col-md-6'>
              <button  onclick="goBack()">Cancel</button>  
            </div>
			</div>
		</div>
	</div>
</body>
</html>
