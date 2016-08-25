var main = function(){
	// Compose Transportation
	$.post("backend/stronghold/getTime.php")
	.done(function( result ) {
		var buttons = document.getElementsByClassName("btn-transport");
		if (result == "true") { 
			for (var i = 0; i < buttons.length; ++i) {
				buttons[i].disabled = false;
			}
		}
		else {
			for (var i = 0; i < buttons.length; ++i) {
				buttons[i].disabled = true;
			}
		}
	});


	// Reload Current Tab
	$('a[data-toggle="tab"]').on('show.bs.tab', function(e) {
        localStorage.setItem('activeTab', $(this).attr('href'));
    });
    var activeTab = localStorage.getItem('activeTab');
    if(activeTab){
        $('[href="' + activeTab + '"]').tab('show');
    }


	$('.modal .btn-components').click(function(){
		// Get resource name
		var data = { component: $(this).parent().closest('.modal').attr('id'), isTrans: false };
		// Update team resource
		$.post("backend/stronghold/composeResource.php", data)
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
		$.post("backend/stronghold/composeResource.php", data)
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
