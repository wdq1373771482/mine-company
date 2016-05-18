	$(function(){
		//set();
		//设置地图的自适应位置（该处的切换利用absolute；不能用display：none）
		screen();
		$(window).resize(function(){
			screen();
		});		
	});
	function first(){
		$(".map li").on("click",function(){
			var index=$(this).index();
			if(index==0 || index== 2 || index==3){
				$(".cc").height(444);
			}else{
				$(".cc").height(612);
			}
			$(this).addClass("cur").siblings().removeClass();	
			$(".con_1").eq(index).css("zIndex",1).show().siblings().css("zIndex",0).hide();
		});
	} 
	function set2(){
		var hhh=Number($(".c1").height() + $(".con_1:first").height() + 20);
		$(".cc").height(hhh);
	}
	function screen(){
		var ww=document.body.clientWidth || document.documentElement.clientWidth;
		if(ww <1000){
			set2();
			$(".map li").on("click",function(){
				var index=$(this).index(),
					h2=$(".con_1").eq(index).height(),
					hhh=Number($(".c1").height()+h2+20);
					$(".cc").height(hhh);
					$(this).addClass("cur").siblings().removeClass();
					$(".con_1").eq(index).css("zIndex",1).show().siblings().css("zIndex",0).hide();
			});
			$(".list4").addClass("jianbian");
	
		}else{
			$(".map li").on("click",function(){
				var index=$(this).index();
				if(index==0 || index== 2 || index==3){
					$(".cc").height(444);
				}else{
					$(".cc").height(612);
				}
				$(this).addClass("cur").siblings().removeClass();
				$(".con_1").eq(index).css("zIndex",1).show().siblings().css("zIndex",0).hide();
			});
			$(".c1 li").each(function(){
				if($(this).hasClass("cur")){
					var ind=$(this).index();
					if(ind==0 || ind== 2 || ind==3){
						$(".cc").height(444);
					}else{
						$(".cc").height(612);
					
					}
					
				}
			});
			$(".list4").removeClass("jianbian");
		}
	}
	//标注点数组
	var markerArr = [{title:"天道教育",content:"北京·苹果社区",point:"116.475358|39.905718",isOpen:0,icon:{w:21,h:21,l:0,t:0,x:6,lb:5}}
	 ,{title:"天道教育",content:"北京·中关村",point:"116.318541|39.989567",isOpen:0,icon:{w:21,h:21,l:0,t:0,x:6,lb:5}}
	 ,{title:"天道教育",content:"上海",point:"121.477011|31.23525",isOpen:0,icon:{w:21,h:21,l:0,t:0,x:6,lb:5}}
	 ,{title:"天道教育",content:"广州",point:"113.328856|23.147424",isOpen:0,icon:{w:21,h:21,l:0,t:0,x:6,lb:5}}];
	  
	//地图初始化 
	var map1 = new BMap.Map("cont1");
	map1.centerAndZoom(new BMap.Point(116.475358,39.905718),18);
	map1.enableScrollWheelZoom();
	addMarker(map1, markerArr[0]);
	
	var map2 = new BMap.Map("cont2");
	map2.centerAndZoom(new BMap.Point(116.318541,39.989567),18);
	map2.enableScrollWheelZoom();
	addMarker(map2, markerArr[1]);
	
	var map3 = new BMap.Map("cont3");
	map3.centerAndZoom(new BMap.Point(121.477011,31.23525),18);
	map3.enableScrollWheelZoom();
	addMarker(map3, markerArr[2]);
	
	var map4 = new BMap.Map("cont4");
	map4.centerAndZoom(new BMap.Point(113.328856,23.147424),18);
	map4.enableScrollWheelZoom();
	addMarker(map4, markerArr[3]);

		//创建marker
		function addMarker(map, json){
			var p0 = json.point.split("|")[0];
			var p1 = json.point.split("|")[1];
			var point = new BMap.Point(p0,p1);
			var iconImg = createIcon(json.icon);
			var marker = new BMap.Marker(point,{icon:iconImg});
			var label = new BMap.Label(json.title,{"offset":new BMap.Size(json.icon.lb-json.icon.x+10,-20)});
			marker.setLabel(label);
			map.addOverlay(marker);
			label.setStyle({
						borderColor:"#808080",
						color:"#333",
						cursor:"pointer"
			});
			
			(function(){
				var _iw = createInfoWindow(json);
				var _marker = marker;
				_marker.addEventListener("click",function(){
					this.openInfoWindow(_iw);
				});
				_iw.addEventListener("open",function(){
					_marker.getLabel().hide();
				})
				_iw.addEventListener("close",function(){
					_marker.getLabel().show();
				})
				label.addEventListener("click",function(){
					_marker.openInfoWindow(_iw);
				})
				if(!!json.isOpen){
					label.hide();
					_marker.openInfoWindow(_iw);
				}
			})()
		}
		//创建InfoWindow
		function createInfoWindow(marker){
			var json = marker;
			var iw = new BMap.InfoWindow("<b class='iw_poi_title' title='" + json.title + "'>" + json.title + "</b><div class='iw_poi_content'>"+json.content+"</div>");
			return iw;
		}
		//创建一个Icon
		function createIcon(json){
			var icon = new BMap.Icon("http://app.baidu.com/map/images/us_mk_icon.png", new BMap.Size(json.w,json.h),{imageOffset: new BMap.Size(-json.l,-json.t),infoWindowOffset:new BMap.Size(json.lb+5,1),offset:new BMap.Size(json.x,json.h)})
			return icon;
		}