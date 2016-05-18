$(function(){
	$("figure a").on("click",function(){
		$("#inline1").removeClass("hide").show();

		$.ajax({
			url:"assets/js/json1.json",
			type:"POST",
			dataType:"json",
			async:false,
			success:function(data){
				var html="";
				$.each(data,function(i,obj){
				html+='<div class="p_txt">'
				+obj.content
				+'<p>'+ obj.time +'<strong>&nbsp;&nbsp;'+ obj.que+'<strong></p>'
				+'</div>';

				});
				$("#itemContainer").html(html);

				$(".holder").jPages({
				  containerID : "itemContainer",
				  fallback    : 500,
				  perPage : 10,  
				  delay : 100
				});
				$(".holder a:first").addClass("fa fa-chevron-left");
				$(".holder a:last").addClass("fa fa-chevron-right");
			},
			error:function(){}
		});
	});
});