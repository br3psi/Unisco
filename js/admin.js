function displayActiveUsers()
{
	$.ajax({
		type:"POST",
		url: "php/getEmployers.php",
		data:{},
		dataType: "json",
		success: function(data,status)
		{
			$('#activeEmployers').html("");
			for(i in data)
			{
				$('#activeEmployers').append("Employer Name: " + data[i].firstName + "  " + 
				   data[i].lastName) + "<br/>";
			}
	  	}
	  	});
}