// Validating Empty Field
function check_empty()
{
	if (document.getElementById('fName').value == "" ||
     	document.getElementById('lName').value == "" || 
		document.getElementById('phoneNum').value == "" ||
		document.getElementById('password').value == "" ||
		document.getElementById('confirmPassword').value == "")
	{
		alert("Fill All Fields !");
	} 
	else if (document.getElementById('password').value != 
		document.getElementById('confirmPassword').value)
	{
		alert("Password is not the same! Retype password.");
		//document.getElementById('form').submit();
		//alert("Form Submitted Successfully...");
	}	
	else
	{
		$.ajax({
		type:"POST",
		url: "php/createAccount.php",
		data:{"firstName":$('#fName').val(),"lastName":$('#lName').val(),
			  "phoneNum":$('#phoneNum').val(),"password":$('#password').val()},

		success: function(data,status){
			if(data['message'] == "Phone number taken")
			{
				$('#phoneCheck').html("");
				$('#phoneCheck').append(data['message']);
				$('#phoneCheck').style("color","red");
				$('#phoneNum').focus();
			}
			else
			{
				$('#phoneCheck').html("<img src=img/availableicon.jpg style=width:14px;height:14px >");
			
				div_showCode();
			}
	  	}
	  	});
		
	}
	

}

function init(){
	$('#fader').on('click',function(){
		if(reg_vis == true) close_reg();
	}.bind(this))
}


var reg_vis = false;
function close_reg(){
	console.log('close reg')
	reg_vis = false;
	document.getElementById('signup').style.transform = 'translate(200%,0)';
	$('#fader').css('background','rgba(15,15,15,0)');
	$('#bot').css('transform','translate(0%,0)');
	$('.msg').css('color','rgba(255,255,255,0)');
	setTimeout(function(){
		$('#fader').css('display','none')
	}, 500)
	document.getElementById('abc').style.transform = 'translate(0%,0)';
	document.getElementById('numCode').style.transform = 'translate(100%,0)';
}

function show_reg(){
	console.log('show reg')
	reg_vis = true;
	document.getElementById('signup').style.transform = 'translate(100%,0)';
	$('#fader').css('display','block');
	$('#bot').css('transform','translate(-25%,0)');

	setTimeout(function() {
		$('#fader').css('background','rgba(15,15,15,0.95)');
		$('.msg').css('color','rgba(255,255,255,0.8)');		
	}, 10);

}

//Function To Display Popup
function div_show() {
	document.getElementById('abc').style.transform = 'translate(0%,0)';
}

//Function to Hide Popup
function div_hide(){
	document.getElementById('abc').style.transform = 'translate(200%,0)';

}


/////////////////////////////////////////////////
function check_code()
{
	if(document.getElementById('userCode').value == "")
	{
		alert("Enter code!");
	}
	else
	{
		$.ajax({
		type:"POST",
		url: "js/checkCode.php",
		data:{"num":$('#phoneNum').val(),"code":$('#userCode').val()},
		success: function(data,status){
			if(data['message'] == "wrong")
			{
				alert("You Entered the wrong code!!");
			}
			else
			{
				document.getElementById('codeForm').submit();
			}
	  	}
	  	});
		
	}
}


function div_hideCode()
{
	document.getElementById('numCode').style.display = "none";
	document.getElementById('abc').style.display = "none";
}


function div_showCode(){
	document.getElementById('numCode').style.transform = 'translate(0,0)';
	document.getElementById('abc').style.transform = 'translate(-100%,0)';
	sendCode();

}

function sendCode()
{
	$.ajax({
	type:"POST",
	url: "js/sendCode.php",
	data:{"num":$('#phoneNum').val()},
	success: function(data,status){
	
  	}
  	});
}

function showDescription(jobId)
{
	
	
	document.getElementById('jobDescription').style.display = "block";
}

function closeDescription()
{
	// $(".input-group").css('display','table-cell');
	$('.panel-body').css('display','block');
	document.getElementById('jobDescription').style.display = "none";
}

$(window).on('load',init);

function checkPhoneNum()
{

	$.ajax({
	type:"POST",
	dataType:"json",
	url: "php//checkPhoneAvailability.php",
	data:{"phoneNum":$('#phoneNum').val()},
	success: function(data,status){
		if(data['message'] == "Phone number taken")
		{
			$('#phoneCheck').html("");
			$('#phoneCheck').append(data['message']);
			$('#phoneCheck').css("color","red");
			$('#phoneNum').focus();
		}
		else
		{
			$('#phoneCheck').html("");
			$('#phoneCheck').append	("<img src=img/availableicon.jpg style=width:14px;height:14px >");
			

		}

  	}
  	});

}