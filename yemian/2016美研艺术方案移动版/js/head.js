(function($){
	var loading='<div id="preloader">'
	+'<div id="status"><p class="center-text">Loading ...</p></div></div>'
	+'<div class="header clearfix">'
	+'<a href="#" class="h1"><img src="images/logo.png" alt="" /></a>'
	+'<span><a href="tel:400-012-0038"><img src="images/tel1.png" alt="" /></a></span></div>';
	document.write(loading);
	
	$(document).on("click",function(e){
		$(".share").slideUp(250);
		
	});
	$(".shareBtn").on("click",function(e){
		e.stopPropagation();
		if($(".share").is(":visible")){
			$(".share").slideUp(250);
		}else{
			$(".share").slideDown(250);	
		}
	});
}(jQuery));