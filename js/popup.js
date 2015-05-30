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
		alert("Form Submitted Successfully...");
		div_showCode();
		
	}
	
}

//Function To Display Popup
function div_show() 
{
	document.getElementById('abc').style.display = "block";
}

//Function to Hide Popup
function div_hide()
{
	document.getElementById('abc').style.display = "none";
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
function div_showCode()
{
	document.getElementById('numCode').style.display = "block";
}