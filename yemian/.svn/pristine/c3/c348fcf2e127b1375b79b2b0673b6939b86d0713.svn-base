(function($){
	$(window).load(function() { 
		$("#status").fadeOut();
		$("#preloader").delay(400).fadeOut("slow");
	});
	
	//form
	$(".form1 input").focus(function(){
		var inNum=$(this).data("id");
		var span=$(this).prev();
		span.css("visibility","hidden");
		$(this).css("background","#fff");
		if(inNum == 2){
			$(".date").slideDown(500);
			$(".date li").on("click",function(){
				var txt=$(this).text();
				$(".date em").removeClass("on");
				$(this).find("em").addClass("on");
				$(this).find("span").css("visibility","hidden");
				span.text(txt);
				$(".date").slideUp(500);
			});
		}else{
			$(".date").hide();	
		}
	}).blur(function(){
		var text=$(this).val();
		if(text == ""){
			$(this).prev().css("visibility","visible");
			$(this).css("background","transparent");
		}else{
			
		}
	});
	//
	
}(jQuery));