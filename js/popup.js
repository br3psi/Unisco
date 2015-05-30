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
		document.getElementById('form').submit();
		alert("Form Submitted Successfully...");
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