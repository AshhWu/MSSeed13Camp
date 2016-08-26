var main = function(){

	$('#btn-change-pwd').click(function(){
		// Get Password
		var data = { pwd1: $('#pwd1').val(), pwd2: $('#pwd2').val() };
		// Update team resource
		$.post("backend/login/changePassword.php", data)
		.done(function( result ) {
			if (result == "SUCCESS") { 
				alert("更改成功！");
			}
			else {
				alert("更改失敗！" + result);
			}
		});
	});

};

$(document).ready(main);