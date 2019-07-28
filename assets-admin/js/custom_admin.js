$(document).ready(function(){
	///$(".datepicker").datepicker();
	$( ".datepicker" ).datepicker({
		dateFormat: "yy-mm-dd",
		changeYear: true,
		changeMonth: true,
		yearRange: "c-90:c-0"
	});
	$('#all_notice').DataTable({
        select: true
    });
	$('#all_teacher').DataTable({
        select: true
    });
});