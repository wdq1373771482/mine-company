// JavaScript Document

(function ($) {

$(window).load(function() { 
	$("#status").fadeOut(); // will first fade out the loading animation
	$("#preloader").delay(400).fadeOut("slow"); // will fade out the white DIV that covers the website.
});

$(document).ready(function() {
    
    //Top Menu 
    //点击分享
	$(document).on("click",function(e){
		$(".share").slideUp(250);
		$(".show-navigations").css("color","#fff");
		
	});
	$(".show-navigation").on("click",function(e){
		e.stopPropagation();
	});
	$(".show-navigations").on("click",function(e){
		e.stopPropagation();
		if($(".share").is(":visible")){
			$(".share").slideUp(250);
			$(".show-navigations").css("color","#fff");
		}else{
			$(".share").slideDown(250);
			$(this).css("color","#fff661");		
		}
	});
	
    var swiper = new Swiper('.swiper-container', {
        pagination: '.swiper-pagination',
        paginationClickable: true
    });
	
	
    var swiper2 = new Swiper('.swiper-container2', {
        spaceBetween:5,
		slidesPerView: 1.5
    });
    
});

}(jQuery));