$(document).ready(function(){
	$('[data-toggle="popover"]').popover({html: true}).click(function(e) { 
		e.preventDefault(); 
		$(this).focus(); 
	});
});