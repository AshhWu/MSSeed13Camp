var main = function(){
	$('.modal .btn-components').click(function(){
		// Get resource name
		var data = { component: $(this).parent().closest('.modal').attr('id'), isTrans: false };
		// Update team resource
		$.post("composeResource.php", data)
		.done(function( result ) {
			if (result == "SUCCESS") { 
				alert("合成成功！");
				location.reload(true);
			}
			else {
				alert("合成失敗，請確認原料數量後再試一次！ (" + result + ")");
			}
		});
	});

	$('.modal .btn-transport').click(function(){
		// Get resource name
		var data = { component: $(this).parent().closest('.modal').attr('id'), isTrans: true };

		// Update team resource
		$.post("composeResource.php", data)
		.done(function( result ) {
			if (result == "SUCCESS") { 
				alert("合成成功！");
				location.reload(true);
			}
			else {
				alert("合成失敗，請確認原料數量後再試一次！ (" + result + ")");
			}
		});
	});
};

$(document).ready(main);