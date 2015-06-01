// Validating Empty Field
function check_empty()
{
	if (document.getElementById('fName').value == "" ||
     	document.getElementById('lName').value == "" || 
		document.getElementById('phoneNum').value == "")
	{
		alert("Fill All Fields !");
	} 
	else 
	{
		//document.getElementById('form').submit();
		//alert("Form Submitted Successfully...");
			
		div_showCode();
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
		document.getElementById('codeForm').submit();
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
	type:"GET",
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
	document.getElementById('jobDescription').style.display = "none";
}

$(window).on('load',init);