(function ($) {
	$(window).load(function() { 
		$("#status").fadeOut(); 
		$("#preloader").delay(400).fadeOut("slow"); 
	});
	$(".list1 li").on("click",function(){
		$(this).addClass("on").siblings().removeClass();
	});
	//点击放大
	$(".txt img").toggle(function(){
		$(this).css("width","100%");
	},function(){
		$(this).css("width","80%");
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