$(function(){
	//右边课程分类
	$(".xh_list a").on("click",function(e){
		e.preventDefault();
		var index=$(this).index();
		if(index == 0){
			$(".list_1").hide();
			return false;
		}else{
		$(".list_1").eq(index-1).show().siblings().hide();
		$(".list_1").eq(index-1).find("a:first").addClass("cur1").siblings("a").removeClass("cur1");
		}
	});
	$(".list_1 a,.xh_list a").on("click",function(){
		$(this).addClass("cur1").siblings().removeClass();
	});
	
	//点击右边最新更新
	$(".social-list li").on("click",function(){
		$(this).addClass("cur2").siblings().removeClass("cur2");
		
	});
	
	//左边课程分类
	var sortIndex,_this;
	$(".list_cont li").hover(function(){
		sortIndex=$(this).index(),
		_this=$(this);
		_this.addClass("cur").siblings().removeClass("cur");
		$(".list_contss .list_c1").eq(sortIndex).show().siblings().hide();
		tab(_this);
	},function(){
		$(".list_cont li").removeClass("cur");
		$(".list_contss .list_c1").hide();
		tab(_this);
	});
	//点击左边课程分类
	$(".list_cont a").on("click",function(e){
		e.preventDefault();
		var dataIndex=$(this).data("index");
		$(".list_1").eq(dataIndex).show().siblings().hide();
		$(".list_1").eq(dataIndex).find("a:first").addClass("cur1");
		$(".xh_list a").each(function(){
			addClass($(this), dataIndex, dataIndex, false);
		});
		
	});
	function tab(_this){
		$(".list_contss .list_c1").hover(function(){
			_this.addClass("cur").siblings().removeClass("cur");
			$(this).show().siblings().hide();
			//点击所分类里面的内容
			$(".list_c1 p a,.list_c1 h4 a").on("click",function(e){
				var dataIndex=$(this).data("index"),
					oPIndex=$(this).parents(".list_c1").index();
					if(isNaN(dataIndex)){
						var oPIndex=$(this).parents(".list_c1").index();
						$(".xh_list a").each(function(){
							addClass($(this), oPIndex, oPIndex, false);
						});
					}
				$(this).parents(".list_c1").hide();
				changeTab(e, dataIndex, oPIndex);
			});
			function changeTab(e, dataIndex, oPIndex){
				e.preventDefault();
				$(".xh_list a").each(function(){
					addClass($(this), dataIndex, oPIndex, false);
				});
				$(".list_1 a").each(function(){
					addClass($(this), dataIndex, oPIndex, true);
					$(".list_1").eq(oPIndex).show().siblings().hide();
				});
			}
		},function(){
			$(".list_cont li").removeClass("cur");
			$(".list_contss .list_c1").hide();
		});
	}
	function addClass(_this, dataIndex, oPIndex, as){
		if(as == false){
			if(_this.data("index") == oPIndex){//上一行
				_this.addClass("cur1").siblings().removeClass("cur1");
			}	
		}else{//下一行
			if(_this.data("index") == dataIndex){
				_this.addClass("cur1").siblings().removeClass("cur1");
			}
		}
	}
	//显示所有分类
	$(window).resize(function(){
		if($("button.sort_btn").is(":visible")){
			$(".list_cont").hide();
			$("button.sort_btn").find("span").removeClass("fa-angle-double-up").addClass("fa-angle-double-down")
		}else{
			$(".list_cont").show();
		}
	});
	//点击所有分类btn
	var inds = 0;
	$(".sort_btn").on("click",function(){
		if(inds == 0){
			$(".list_cont").show();
			$(this).find("span").removeClass("fa-angle-double-down").addClass("fa-angle-double-up");
			inds++;
		}else{
			$(".list_cont").hide();
			$(this).find("span").removeClass("fa-angle-double-up").addClass("fa-angle-double-down");
			inds--;
		}
		
	});
	
	//分页
	executAjax.setPage();
	
});


/**
 *
 *
 *
 **/
 (function(a){
	a. executAjax=function(w,$){
		return {
			setPage:function(container, count, pageindex,url) {
				var container = container;
				var count = count;
				var pageindex = pageindex;
				var a = [];
				var t=this;
					t.Ajax(url);
				  //总页数少于10 全部显示,大于10 显示前3 后3 中间3 其余....
				  if (pageindex == 1) {
					a[a.length] = "<a href=\"javascript:;\" class=\"prev unclick fa fa-chevron-left\"></a>";
				  } else {
					a[a.length] = "<a href=\"javascript:;\" class=\"prev fa fa-chevron-left\"></a>";
				  }
				  function setPageList() {
					if (pageindex == i) {
					  a[a.length] = "<a href=\"javascript:;\" class=\"on\">" + i + "</a>";
					} else {
					  a[a.length] = "<a href=\"javascript:;\">" + i + "</a>";
					}
				  }
				  //总页数小于10
				  if (count <= 10) {
					for (var i = 1; i <= count; i++) {
					  setPageList();
					}
				  }
				  //总页数大于10页
				  else {
					if (pageindex <= 4) {
					  for (var i = 1; i <= 5; i++) {
						setPageList();
					  }
					  a[a.length] = "...<a href=\"javascript:;\">" + count + "</a>";
					} else if (pageindex >= count - 3) {
					  a[a.length] = "<a href=\"javascript:;\">1</a>...";
					  for (var i = count - 4; i <= count; i++) {
						setPageList();
					  }
					}
					else { //当前页在中间部分
					  a[a.length] = "<a href=\"javascript:;\">1</a>...";
					  for (var i = pageindex - 2; i <= pageindex + 2; i++) {
						setPageList();
					  }
					  a[a.length] = "...<a href=\"javascript:;\">" + count + "</a>";
					}
				  }
				  if (pageindex == count) {
					a[a.length] = "<a href=\"javascript:;\" class=\"next unclick fa fa-chevron-right\"></a>";
				  } else {
					a[a.length] = "<a href=\"javascript:;\" class=\"next fa fa-chevron-right\"></a>";
				  }
				  container.innerHTML = a.join("");
				  //事件点击
				  var pageClick = function() {
					var oAlink = container.getElementsByTagName("a");
					var inx = pageindex; //初始的页码
					oAlink[0].onclick = function() { //点击上一页
					  if (inx == 1) {
						return false;
					  }
					  inx--;
					  t.setPage(container, count, inx,url);
					  return false;
					}
					for (var i = 1; i < oAlink.length - 1; i++) { //点击页码
					  oAlink[i].onclick = function() {
						inx = parseInt(this.innerHTML);
						t.setPage(container, count, inx,url);
						return false;
					  }
					}
					oAlink[oAlink.length - 1].onclick = function() { //点击下一页
					  if (inx == count) {
						return false;
					  }
					  inx++;
					  t.setPage(container, count, inx,url);
					  return false;
					}
				  } ()
			},
			Ajax:function(url){
				var pageConut = 10;
				$.ajax({
					url:url,
					type:"POST",
					async:false,
					dataType:"json",
					success:function(data){
						var html="";
						$.each(data,function(i,obj){
							html+='<div class="item" id="item"><div class="t">'
								+'<a href="javascript:;">'
								+'<img src="' + obj.src + '">'
								+'</a><div class="desc"></div><p class="h_9"><span><i class="fa fa-clock-o"></i><em>'
								+  obj.update + '</em>天前上线</span><span class="r_span"><i class="fa fa-comment"></i><em>' + obj.updateH + '</em>小时前更新</span></p></div>'
								+'<div class="d_box">' + obj.jj + '<a class="c_btn1" href="#">了解详情</a></div></div>';
						})
						$("#gallery").html(html);
					}, 
					error:function(){}
				}).done(function(){
					var buildGallery = function(){
						$("#gallery").gridalicious({
						  animate: true,
						  gutter: 15,
						  width: 250
						});
					}
					buildGallery();
				});
			}
		}
		
	}(window,jQuery);
	
 }(window));



