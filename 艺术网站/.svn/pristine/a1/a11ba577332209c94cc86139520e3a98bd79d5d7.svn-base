$(function(){
	 $(window).load(function() { 
		$('#loader').fadeOut(); 
			$('#loader-wrapper').delay(350).fadeOut('slow'); 
		$('body').delay(350).css({'overflow-y':'visible'});
	});
});
	var arr=[
			{
				src:'images/1.jpg',
				name:"李同学"
				
			},
			{
				src:'images/2.jpg',
				name:'李同学2'
				
			},
			{
				src:'images/5.jpg',
				name:'李同学3'

			},
			{
				src:'images/6.jpg',
				name:'李同学4'
				
			},
			{
				src:'images/9.jpg',
				name:'李同学5'
				
			}
		];
//瀑布流
	function appendLi(ii){
		var wrap=$(".wdq ul");
		var ul1_h=wrap[0].offsetHeight;
		var ul2_h=wrap[1].offsetHeight;
		var ul3_h=wrap[2].offsetHeight;
		var minUl=null;
		var minH=Math.min(ul1_h,ul2_h,ul3_h);
		console.log(ul1_h+"."+ul2_h+"."+ul3_h);
		var oli=document.createElement('li');
		for(var i=0;i<wrap.length;i++){
			if(wrap[i].offsetHeight==minH){
				minUl=wrap[i];
				
			}
		}
		oli.innerHTML='<div><div class="post-thumb"><img src="' + arr[ii].src + ' " alt=""><div class="post-hover text-center"><div class="inside"><h4><a href="#">' + arr[ii].name + '</a></h4></div></div></div></div>';
		minUl.appendChild(oli);
	}
	window.onscroll=function (){
		var scrollTop=document.body.scrollTop||document.documentElement.scrollTop;
		var docH=document.documentElement.offsetHeight;//整个文档高度
		var winH=document.documentElement.clientHeight;//窗口高度
		if (docH-winH-700<scrollTop) {
			for (var i = 0; i < 5; i++) {
				appendLi(i);
			};
		}
	}