$(function(){
	 $(window).load(function() { 
		$('#loader').fadeOut(); 
			$('#loader-wrapper').delay(350).fadeOut('slow'); 
		$('body').delay(350).css({'overflow-y':'visible'});
	});
});

//瀑布流
	function appendLi(ii){
		var wrap=document.getElementsByClassName('wdq')[0];
		var uls=wrap.children;
		var ul1_h=uls[0].offsetHeight;
		var ul2_h=uls[1].offsetHeight;
		var ul3_h=uls[2].offsetHeight;
		var minUl=null;
		var minH=Math.min(ul1_h,ul2_h,ul3_h);
		var oli=document.createElement('li');
		var arr=[
			{
				src:'images/u33.png',
				name:"李同学"
				
			},
			{
				src:'images/u58.png',
				name:'李同学2'
				
			},
			{
				src:'images/u66.png',
				name:'李同学3'

			},
			{
				src:'images/u92.png',
				name:'李同学4'
				
			},
			{
				src:'images/u118.png',
				name:'李同学5'
				
			}
		];
		for(var i=0;i<uls.length;i++){
			if(uls[i].offsetHeight==minH){
				minUl=uls[i];
			}
		}
		oli.innerHTML='<div><div class="post-thumb"><img src="' + arr[ii].src + ' " alt=""><div class="post-hover text-center"><div class="inside"><h4><a href="#">' + arr[ii].name + '</a></h4></div></div></div></div>';
		minUl.appendChild(oli);
	}
	window.onscroll=function (){
		var scrollTop=document.body.scrollTop||document.documentElement.scrollTop;
		var docH=document.documentElement.offsetHeight;//整个文档高度
		var winH=document.documentElement.clientHeight;//窗口高度
		if (docH-winH-500<scrollTop) {
			for (var i = 0; i < 5; i++) {
				appendLi(i);
			};
		}
	}