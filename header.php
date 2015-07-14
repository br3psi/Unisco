<?php ?>

<style>


#header{
  position: fixed;
  z-index: 10;
  background-color: #E9EAEB;
  width: 100%;
  height: 60px;
  border-bottom: 1px solid #D1D2D3;
}

#header i{
    font-size: 30px;
    color: #253F4B;
    text-shadow: 0px 0px 2px #fff;

}

#header .nav{
    float: right;
    width: 50%;
    height: 100%;
}

#header .nav li{
  height: 100%;
  border-left: 1px solid #D1D2D3;
  float: right;
}
#header .nav li:hover{
    background: rgba(20,0,0,0.01);
}

#header-logo{
    float: left;
    width: 220px;
    height: 100%;
    background: url(img/temp-logo-small.png) no-repeat center;
    background-color: #000;
}

#header .option div > a{
  margin-top: -13px;

}

#header .option a{
	padding:20px;

}

</style>
<div id = 'header' >
	<a href='index.php' style = 'cursor:pointer;'>
	<div id = 'header-logo'></div>
	</a>
	<ul class="nav navbar-nav">

		<li class = 'option'>
			<div style = 'padding:0;margin:0;'>
				<a href="logout.php" class="btn btn-link" data-placement="bottom" data-toggle="tooltip" title="Logout"><i class = 'icon-logout'></i></a>
			</div>
		</li>	

		<li class = 'option'>
			<div style = 'padding:0;margin:0;'>
				<a href="resumeApplicationEdit.php" class="btn btn-link" data-placement="bottom" data-toggle="tooltip" title="Edit Account"><i class = 'icon-cog'></i></a>
			</div>
		</li>

		<li class = 'option'>
			<div data-toggle=modal href='#submit-resume' style = 'padding:0;margin:0;'>
				<a href="submitResume.php" class="btn btn-link" data-placement="bottom" data-toggle="tooltip" title="Update Resume"><i class = 'icon-doc-text-inv'></i></a>
			</div>
		</li>

	</ul>
</div>

<!-- submit resume module -->
<style>
	@-webkit-keyframes jump {
	  	0%   {				-webkit-transform: translate(-50%,-50%);
		    -ms-transform: translate(-50%,-50%);
		        transform: translate(-50%,-50%);}
			50% {				-webkit-transform: translate(-50%,-55%);
		    -ms-transform: translate(-50%,-55%);
		        transform: translate(-50%,-55%);}
			100% {				-webkit-transform: translate(-50%,-50%);
		    -ms-transform: translate(-50%,-50%);
		        transform: translate(-50%,-50%);}
	}
	#submit-resume  i{
		color: #113939;
		
		-webkit-animation:         jump 1s infinite;
		        animation:         jump 1s infinite;
		position: absolute;
		top:50%;
		left: 50%;

		font-size: 70px;
		pointer-events: none;	
	}

	.custom-in{
		content: 'asd' !important;
		border: none;
		outline:none;

	}

	.custom-in::-webkit-file-upload-button {
	  visibility: hidden;
	}
	.custom-in:before {
		cursor: hand;
		padding-top: 210px;
		border: none;
		font-size: 15px;
	}
	.custom-in:focus {
		outline: none !important; 

	}

	.custom-in{
		  cursor: pointer;
		padding-top: 210px;
		content: ' ' !important;
		border: none;
		font-size: 15px;
		 -webkit-transition: background 0.3s linear;
		         transition: background 0.3s linear;				
	}

	.custom-in:hover{
		background-color: #00FFC0;
	}
	.custom-in:active:before {
	  background: rgba(0,0,0,0);
	  outline: none;
	}
	.custom-in:active:before {
		border: none;
		background: -webkit-linear-gradient(top, #e3e3e3, #f9f9f9);
	}

	.submit-description{
		position: absolute;
		top:35%;
		left: 50%;
		-webkit-transform: translate(-50%,-50%);
		    -ms-transform: translate(-50%,-50%);
		        transform: translate(-50%,-50%);
		font-size: 16px;
		pointer-events: none;
		color: #fff;
		text-shadow: 0px 0px 10px rgba(0,0,0,1);

	}
	.submit-description2{
		position: absolute;
		top:65%;
		left: 50%;
		-webkit-transform: translate(-50%,-50%);
		    -ms-transform: translate(-50%,-50%);
		        transform: translate(-50%,-50%);
		font-size: 16px;
		
		color: #fff;
		text-shadow: 0px 0px 10px rgba(0,0,0,1);

	}
	.submit-description2 input:hover{
		outline: none !important; 
	}

	.submit-description2 input{
		  background-color: #FFFFFF;
  margin-top: 40px;

  padding: 20px;
  box-shadow: 0px 0px 20px rgba(0,0,0,0.3);
  border-radius: 20px;
  border: none;
  font-weight: bold;
  font-family: Raleway;
  color: #113939;
  cursor: pointer;
  -webkit-transition: background 0.3s linear;
          transition: background 0.3s linear;
	}
	.submit-description2 input:hover{
		
		background-color: #00FFC0;
	}
</style>
<div id="submit-resume" class="modal fade">
	<div class = 'submit-description'>
		<span>Click or drag to select a file...</span>
	</div>
	<form  method="post" enctype="multipart/form-data" >
		<input class="success-circle custom-in" type='file' name="fileName" >
			<i class = 'center icon-doc-text-inv'></i>
		</input>
		<div class = 'submit-description2'>
			<input type="submit" name="uploadForm"/>
		</div>
	</form>
</div>