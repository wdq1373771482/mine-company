<?php
include "function.php";
?>
<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1.0,user-scalable=0" />
	<!-- 强制竖屏 -->
	<meta name="screen-orientation" content="portrait">
	<title>超准星座Dream School测试！红米手机快来拿</title>
	<link rel="stylesheet" href="css/reset-min.css" media="all" />
	<link rel="stylesheet" href="css/style.css" media="all" />
	<script src="js/jquery-1.9.1.min.js"></script>
    <script language="javascript" type="text/javascript">
    var newStr = "";
    </script>
	
</head>
<body>
	<div class="section-wrap section-wrap22">
		<ul>
			<li class="section cur" data-index="0">
				<div class="title">
					<p class="tit">什么是你想出国留学的最重要原因? </p>
				</div>
				<div class="cont">
					<p><a href="javascript:;" data-index="3"><span class=" btn1"></span>A</a><span>就业、改变自我、面子</span></p>
					<p><a href="javascript:;" data-index="2"><span class=" btn1"></span>B</a><span>环境、展示自我、体验不同的教育方式</span></p>
				</div>
			</li>
			<li class="section" data-index="2">
				<div class="title">
					<p class="tit">如果有一个实习让你选择，你会选团队合作还是个人性质的?</p>
				</div>
				<div class="cont">
					<p><a href="javascript:;"  data-index="10"><span class=" btn1"></span>A</a><span>团队</span></p>
					<p><a href="javascript:;"  data-index="4"><span class=" btn1"></span>B</a><span>个人</span></p>
				</div>
			</li>
			<li class="section" data-index="3" >
				<div class="title">
					<p class="tit">你有过主动参与公益活动的经历吗?</p>
				</div>
				<div class="cont">
					<p><a href="javascript:;"  data-index="6"><span class=" btn1"></span>A</a><span>有</span></p>
					<p><a href="javascript:;"  data-index="5"><span class=" btn1"></span>B</a><span>没有</span></p>
				</div>
			</li>
			 <li class="section" data-index="4">
				<div class="title">
					<p class="tit">留学准备过程，你觉得多长时间合适?</p>
				</div>
				<div class="cont">
					<p><a href="chunv.php""><span class=" btn1"></span>A</a><span>一年以上</span></p>
					<p><a href="shuiping.php""><span class=" btn1"></span>B</a><span>一年以内</span></p>
				</div>
			</li>
			<li class="section" data-index="5">
				<div class="title">
					<p class="tit">选校的时候，你更重视哪个方面??</p>
				</div>
				<div class="cont">
					<p><a href="mojie.php"><span class=" btn1"></span>A</a><span>排名</span></p>
					<p><a href="jinniu.php"><span class=" btn1"></span>B</a><span>就业</span></p>
				</div>
			</li>
			<li class="section" data-index="6">
				<div class="title">
					<p class="tit">如果两个男生同时向你表白，你会喜欢哪一个？</p>
				</div>
				<div class="cont">
					<p><a href="#"><span onclick=go1("tianping.php",newStr) class=" btn1"></span>A</a><span>你依赖的人</span></p>
					<p><a href="javascript:;"  data-index="8"><span class=" btn1"></span>B</a><span>依赖你的人</span></p>
				</div>
			</li>
			<li class="section" data-index="7">
				<div class="title">
					<p class="tit">出国留学费用是你需要重点考虑的因素吗?</p>
				</div>
				<div class="cont">
					<p><a href="javascript:;"  data-index="11"><span class=" btn1"></span>A</a><span>是</span></p>
					<p><a href="baiyang.php"><span class=" btn1"></span>B</a><span>不是</span></p>
				</div>
			</li>
			<li class="section" data-index="8">
				<div class="title">
					<p class="tit">你最好的朋友是怎么评价你的??</p>
				</div>
				<div class="cont">
					<p><a href="shuangyu.php"><span class=" btn1"></span>A</a><span>善良感性，多愁善感 </span></p>
					<p><a href="juxie.php"><span class=" btn1"></span>B</a><span>外表强大，内心柔软</span></p>
				</div>
			</li>
			<li class="section" data-index="9">
				<div class="title">
					<p class="tit">出国留学后，你会考虑加入学校的学生会及各种社团吗?</p>
				</div>
				<div class="cont">
					<p><a href="shizhi.php"><span class=" btn1"></span>A</a><span>会</span></p>
					<p><a href="tianxie.php"><span class=" btn1"></span>B</a><span>不会</span></p>
				</div>
			</li>
			<li class="section" data-index="10">
				<div class="title">
					<p class="tit">做一件事情之前有比较明确的计划吗?</p>
				</div>
				<div class="cont">
					<p><a href="javascript:;" data-index="7"><span class=" btn1"></span>A</a><span>有</span></p>
					<p><a href="javascript:;" data-index="9"><span class=" btn1"></span>B</a><span>没有</span></p>
				</div>
			</li>
			<li class="section" data-index="11">
				<div class="title">
					<p class="tit">更喜欢什么样的专业?</p>
				</div>
				<div class="cont">
					<p><a href="sheshou.php"><span class=" btn1"></span>A</a><span>研究型的</span></p>
					<p><a href="shuangzi.php"><span class=" btn1"></span>B</a><span>实用型的</span></p>
				</div>
			</li> 
		</ul>
	</div>
	
	<script>

	$(function(){	
$(".cont a .btn1").on("click",function(){
			var _this=$(this),
				Index=_this.parent().data("index"),
				oParent=_this.parents("li");
				//console.log(Index);
				$(this).addClass("on");
				newStr=newStr+"|"+Index;
				//alert(newStr);
				if(isNaN(Index)){	//判断data-index里是否有"-"，（存在时）
					var path=_this.parent().attr("href");
						//locationPath=path+"?"+newStr;
						//_this.parent().attr("href", locationPath);
				}else{
		
			$(".section").each(function(){
						if($(this).data("index") == Index){
							oParent.hide("slow");
							$(this).show("slow");
						}
					})
				}
				
				
				
		});

	})
	
	function go1(aaa,bbb){
		window.location.href=aaa+bbb;
		}
	</script>
</body>
</html>