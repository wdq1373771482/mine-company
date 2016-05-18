$(function(){
	 $(window).load(function() { 
		$('#loader').fadeOut(); 
			$('#loader-wrapper').delay(350).fadeOut('slow'); 
		$('body').delay(350).css({'overflow-y':'visible'});
	});
});

//瀑布流
	function appendLi(){
		$.ajax({
			url:"js/js.json",
			type:"GET",
			dataType:"json",
			success:function(data){
				 $(data).each(function(ii, obj){
					 	var wrap=$(".wdq ul");
						var ul1_h=wrap[0].offsetHeight;
						var ul2_h=wrap[1].offsetHeight;
						var ul3_h=wrap[2].offsetHeight;
						var minUl=null;
						var minH=Math.min(ul1_h,ul2_h,ul3_h);
						var lis;
						for(var i=0;i<wrap.length;i++){
							if(wrap[i].offsetHeight==minH){
								minUl=wrap[i];
							}
						}
					lis='<li><div><div class="post-thumb"><img src="' + obj.src + ' " alt=""><div class="post-hover text-center"><div class="inside"><h4><a href="#">' + obj.name + '</a></h4></div></div></div></div></li>';
					$(minUl).append(lis);
				}); 
			}	
		});
	}
	window.onscroll=function (){
		var scrollTop=document.body.scrollTop||document.documentElement.scrollTop;
		var docH=document.documentElement.offsetHeight;//整个文档高度
		var winH=document.documentElement.clientHeight;//窗口高度
		if (docH-winH-800<scrollTop) {
			appendLi();
		}
	}