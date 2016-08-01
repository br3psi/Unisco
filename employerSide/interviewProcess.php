

<!DOCTYPE HTML>
<html lang="en" style="height:100%">
<head>
  <meta charset="utf-8">

  <!-- Always force latest IE rendering engine (even in intranet) & Chrome Frame 
       Remove this if you use the .htaccess -->
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

  <title>Job aplicant</title>
  <meta name="description" content="">
  <meta name="author" content="Monse">

  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- Replace favicon.ico & apple-touch-icon.png in the root of your domain and delete these references -->
  <link rel="shortcut icon" href="/favicon.ico">
  <link rel="apple-touch-icon" href="/apple-touch-icon.png">
<!--   <link href="css/application.css" rel="stylesheet"> -->

  <!-- <link href="prefixed.css" rel="stylesheet"> -->
 <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script type="text/javascript" src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css" />
</head>
<body style="height:100%">

	<?php require '../headerinit.php' ?>
	<ul class="nav nav-tabs" style="margin-top:5%">
  <li role="presentation" class="active"><a href="#">Home</a></li>
  <li role="presentation"><a href="jobAplicant.php">View job aplicant</a></li>
  <li role="presentation"><a href="interviewProcess.php">Interview Process</a></li>
</ul>

<div class="row" style="height:50%">
 <div class="col-md-2" style="margin-top:10%; border-right:solid;height:100%">
 	<!-- Single button -->
<div class="btn-group">
  <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Job #123 <span class="caret"></span>
  </button>
  <ul class="dropdown-menu">
    <li><button id="jose" onclick="displayInfo(1)">Jose</button></li>
    <li><button onclick="displayInfo(2)">Nataly</button></li>
    <li><button onclick="displayInfo(3)">Mike</button></li>
  </ul>
</div>
</br>
<div class="btn-group">
  <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Job #321 <span class="caret"></span>
  </button>
  <ul class="dropdown-menu">
    <li><button id="jose" onclick="displayInfo(4)">Jose</button></li>
    <li><button onclick="displayInfo(5)">Nataly</button></li>
  </ul>
</div>


 </div> 
  <div class="col-md-5"  style="margin-top:10%; height:100%">
  	<p style="text-align:center" id="info" ></p>

  	<!-- <button style="visibility:hidden" id="hireButton">Hire</button> -->

  	<!-- Trigger the modal with a button -->
  <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal" style="visibility:hidden; margin-left:40%" id="hireButton">Hire</button>

  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <!-- <h4 class="modal-title">Modal Header</h4> -->
        </div>
        <div class="modal-body">
          Enter hourly pay rate:  <div class="form-group">
    <label class="sr-only" for="exampleInputAmount">Amount (in dollars)</label>
    <div class="input-group">
      <div class="input-group-addon">$</div>
      <input type="text" class="form-control" id="exampleInputAmount" placeholder="Amount" style="width:18%">
    </div>
  </div>

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
  
</div>

  </div>
  <!--  <div class="col-md-5">.col-md-5</div> -->
</div>











<script>
	function displayInfo(person)
	{
		document.getElementById("hireButton").style.visibility = "visible";
		if(person == 1)
		{
			document.getElementById("info").innerHTML="Name: Jose Diaz <br/> Time of Interview: 3pm <br/>Notes:<p id=joseNotes></p> <input type=text id=inputNote></input><button onclick=addNote(1)>Add</button><br/>Potential: 3";
		}
		else if(person == 2)
			document.getElementById("info").innerHTML="Name: Nataly Reng<br/> Time of Interview: 5pm <br/>Notes:<p id=joseNotes></p> <input type=text id=inputNote></input><button onclick=addNote(1)>Add</button><br/>Potential: 4";
		else if(person == 3)
			document.getElementById("info").innerHTML="Name: Mike  Rubio<br/> Time of Interview: 6pm <br/>Notes:<p id=joseNotes></p> <input type=text id=inputNote></input><button onclick=addNote(1)>Add</button><br/>Potential: 2";
		else if(person ==4)
			document.getElementById("info").innerHTML="Name: Jose Diaz <br/> Time of Interview: 1pm <br/>Notes:<p id=joseNotes></p> <input type=text id=inputNote></input><button onclick=addNote(1)>Add</button><br/>Potential: 2";

		else if (person == 5)
			document.getElementById("info").innerHTML="Name: Nataly Reng <br/> Time of Interview: 2pm <br/>Notes:<p id=joseNotes></p> <input type=text id=inputNote></input><button onclick=addNote(1)>Add</button><br/>Potential: 2";

		else
			document.getElementById("info").innerHTML="";

	}
	function addNote(person)
	{
		if (person == 1)
		{
			var note = document.getElementById("joseNotes").innerHTML.concat(" ");
			document.getElementById("joseNotes").innerHTML = note.concat(document.getElementById("inputNote").value);
			document.getElementById("inputNote").value = "";
		}
	}
</script>
</body>
</html>
