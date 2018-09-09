jQuery(document).ready(function ($) { 

	//NAV FUNCTIONALITY//
	$("#hamburger").click(function(){
		if (!$("nav").hasClass("active")) {
			$("nav").addClass("active");
			$("#hamburger").addClass("x");
			//$("body").css("overflow-y","hidden");
		} else {
			$("nav").removeClass("active");
			$("#hamburger").removeClass("x");
			//$("body").css("overflow-y","auto");
		}
	});
	$("nav a").click(function(){
		$("nav").removeClass("active");
		//$("body").css("overflow-y","auto");
	});
})