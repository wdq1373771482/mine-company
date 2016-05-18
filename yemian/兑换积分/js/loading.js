$(function(){
	$(window).load(function() { 
		$("#status").fadeOut(); 
		$("#preloader").delay(400).fadeOut("slow"); 
	});
	//点击分享
	$(".shareBtnss").on("click",function(e){
		e.stopPropagation();
		if($(".share").is(":visible")){
			$(".share").slideUp(250);
			$(this).css("color","#fff");
		}else{
			$(".share").slideDown(250);
			$(this).css("color","#fff661");		
		}
	});
});