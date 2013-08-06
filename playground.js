$(document).ready(function() {
	$('.col').mouseenter(function(){
		var d = new Date();
		 var s = d.getSeconds();
		 var c = s*6;	//0-60 seconds --> 0-360 color range
		 
		 var decColor = c + ", 80%, 40%";
  	 var newColor = "hsl(" + decColor.toString(16) + ")";
		$(this).css("background", newColor);
		$(this).animate({background: + newColor }, 100, function(){
			/* $(this).animate({backgroundColor: "#eee" }); */
		});
		/*
	});
});