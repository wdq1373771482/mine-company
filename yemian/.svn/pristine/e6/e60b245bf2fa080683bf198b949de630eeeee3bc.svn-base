// JavaScript Document

(function ($) {

	$(window).load(function() { 
		$("#status").fadeOut(); // will first fade out the loading animation
		$("#preloader").delay(400).fadeOut("slow"); // will fade out the white DIV that covers the website.
	});
	$(".list1 li").on("touchstart",function(){
		$(this).addClass("on").siblings().removeClass();
	});
	$(".div1 div").on("touchstart",function(e){
		var w=$(this).width(),
		h=$(this).height();
		$(this).find("em").css({"width":(w)+"px","height":h+"px"});
		$(this).find("em").fadeIn("slow");
	}).on("touchend",function(){
		$(this).find("em").fadeOut("slow");
	});	
	$(".hhhBtn").on("click",function(e){
		e.stopPropagation();
		if($(".share").is(":visible")){
			$(".share").slideUp(250);
			$(this).css("color","#fff");
		}else{
			$(".share").slideDown(250);
			$(this).css("color","#fff661");		
		}
	});
}(jQuery));
		