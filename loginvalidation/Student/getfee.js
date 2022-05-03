$(document).ready(function(){  
	// code to get all records from table via select box
	$("#bus-route").change(function() {    
		var name = $(this).find(":selected").val();
		var dataString = 'name='+ name;    
		$.ajax({
			url: 'student_regi.php',
			dataType: "json",
			data: dataString,  
			cache: false,
			success: function(employeeData) {
			   if(amount) {
					$("#bus-fee").show();		  
				}   	
			} 
		});
 	}) 
});