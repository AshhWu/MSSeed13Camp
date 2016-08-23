$(document).ready(function(){
	$('[data-toggle=dropdown]').each(function() {
 		this.addEventListener('click', function() {}, false);
	});

	$('.logout-btn').click(function(){
		$.post("/backend/login/logout.php");
	});
});