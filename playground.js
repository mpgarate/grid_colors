$(document).ready(function() {
	$('.col').mouseenter(function(){
		$(this).css("background", "#aaa");
		$(this).animate({backgroundColor: "#fff" }, function(){
			$(this).animate({backgroundColor: "#eee" });
		});
	});
});