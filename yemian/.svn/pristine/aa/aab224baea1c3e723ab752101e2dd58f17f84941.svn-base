$(function(){
	resizeScreen();
	$(window).resize(function(){
		resizeScreen();
	});
	$(".show-navigations").on("tap",function(){
			$(".blacks,.share").show();
	});
	$(".quxiao").on("tap",function(){
		$(".blacks,.share").hide();
	});
});
function resizeScreen(){
	var	screenW=document.documentElement.clientWidth ||　document.body.clientWidth,
		screenH=document.documentElement.clientHeight ||　document.body.clientHeight;
		$(".blacks").css("width",screenW);
		$(".blacks").css("height",screenH);
}