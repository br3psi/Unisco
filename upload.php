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
    if (isset($_POST['resume'])) {
		
        $temp = explode('.', $_FILES['file']['name']);
        $extn = strtolower(end($temp));
        if(($extn == "pdf")) {
            // Filetype is correct. Check size
            if($_FILES['file']['size'] < 5632000) {
                // Filesize is below maximum permitted. Add to the DB.
                $mime = $_FILES['file']['type'];
                $size = $_FILES['file']['size'];
                $name = $_FILES['file']['name'];
                $tmpf = $_FILES['file']['tmp_name'];
                $file = fopen($_FILES['file']['tmp_name'], "rb");

                try {
                    $sql = ("INSERT INTO Applicant (resume) VALUES (:file) WHERE :id = Applicant.applicantId);
                    $namedParameters = array();
                    $namedParameters[':file'] = $file;
                    $stm = $dbConn->prepare($sql);
                    $stmt->execute($namedParameters);
                    $result = $stm -> fetch();
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