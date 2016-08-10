$(document).ready(function(){
	$('[data-toggle="popover"]').popover({container: 'body', html: true}).click(function(e) { 
		e.preventDefault(); 
		$(this).focus(); 
	});
});