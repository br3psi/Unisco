<?php
  session_start();
  require 'php/dbConnection.php';
  $dbConn = getConnection();

  $sql = "SELECT * FROM `Job` INNER JOIN Applied on Applied.storeNumber = Job.storeNumber WHERE Applied.applicantId = :applicantId";

  $namedParameters = array();
  $namedParameters[':applicantId'] = $_SESSION['applicantId'];
  $stmt = $dbConn->prepare($sql); 
  $stmt->execute($namedParameters); 
  $result = $stmt ->fetchAll();

      

?>
<?php require 'header.php' ?>
<!DOCTYPE HTML>
<html lang="en">
<head>
  <meta charset="utf-8">

  <!-- Always force latest IE rendering engine (even in intranet) & Chrome Frame 
       Remove this if you use the .htaccess -->
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

  <title>unisco </title>
  <meta name="description" content="">
  <meta name="author" content="Jose">

  <meta name="viewport" content="width=device-width; initial-scale=1.0">

  <!-- Replace favicon.ico & apple-touch-icon.png in the root of your domain and delete these references -->
  <link rel="shortcut icon" href="/favicon.ico">
  <link rel="apple-touch-icon" href="/apple-touch-icon.png">

<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

<script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
<script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>


<link rel="stylesheet" type="text/css" href="css/fontello/css/fontello.css">

<style>
  
  .nav{
    margin-top: 5%;
  }

  i{
    font-size: 30px;
    color: #253F4B;
    text-shadow: 0px 0px 2px #fff;

}

</style>
</head>
<body >

<span><button  onclick="goBack()" class="btn btn-link" data-placement="bottom" data-toggle="tooltip" title="back"><i class = 'icon-back'></i></a></button>


<div>

  <!-- Nav tabs -->
  <ul class="nav nav-tabs" role="tablist">
    <li role="presentation" class="active"><a href="#applied" aria-controls="applied" role="tab" data-toggle="tab">Applied</a></li>
    <li role="presentation"><a href="#pending" aria-controls="pending" role="tab" data-toggle="tab">Pending</a></li>
    <li role="presentation"><a href="#denied" aria-controls="denied" role="tab" data-toggle="tab">Denied</a></li>
    <li role="presentation"><a href="#settings" aria-controls="settings" role="tab" data-toggle="tab">Settings</a></li>
  </ul>

  <!-- Tab panes -->
  <div class="tab-content">
  <div role="tabpanel" class="tab-pane fade in active" id="applied">
    <table  class="table table-striped">
      <thead>
          <tr>            
            <th>Company</th>
            <th>Position</th>
          </tr>
        </thead>
        <tbody id = 'jobList'>
    <?php

      foreach ($result as $job)
      {
        echo "<tr><td>" . $job[jobCompany] . "</td><td> " . $job[jobPosition] . "</td></tr>";
      }

    ?>
    
        
        </tbody>
      </table>
  </div>
  <div role="tabpanel" class="tab-pane fade" id="pending">.Pending.</div>
  <div role="tabpanel" class="tab-pane fade" id="denied">.Denied.</div>
  <div role="tabpanel" class="tab-pane fade" id="settings">...</div>
</div>

</div>

</body>

<script>
function goBack() {
    window.history.back();
}
</script>

</html>