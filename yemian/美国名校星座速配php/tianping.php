<?php
include "function.php";
?>
<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1.0,user-scalable=0" />
	<title>超准星座Dream School测试！红米手机快来拿</title>
	<link rel="stylesheet" href="css/reset-min.css" media="all" />
	<link rel="stylesheet" href="css/style.css" media="all" />
	<script src="js/jquery-1.9.1.min.js"></script>
</head>
<body>
	<section class="section-wrap section-wrap-11">
		<div class="main">
			<p class="cont_txt">水瓶座学校最大的特点就是革新，他们致力于追求独特的生活方式，个人主义倾向明显，非常欣赏有想法，有活力的同学。另外，水瓶座学校不喜欢循规蹈矩的教学方式，在教学方式上多有创新。</p>

			<p class="cont_txt">推荐学校：加州大学圣地亚哥分校，布兰迪斯大学，斯坦福大学，加州大学。</p>
			<p><a href="home.php" class="btn2">开始测试</a><a href="http://mp.weixin.qq.com/s?__biz=MzA3ODc1NzMxMw==&mid=202605619&idx=1&sn=58e6a138920396afec3a256cb7df525e#rd" class="btn2 sec_a">参加抽奖</a><a href="#" class="btn2 share">分享奇缘</a></p>
		</div>
	</section>
	<div class="meng">
		<div>
			<div class="arrow"></div>
				<div class="txt">
					<p>分享星座奇缘到朋友圈，</p>
					<p>展现你与名校的特殊缘分</p>
				</div>
		</div>
	</div>
	<script type="text/javascript">
		$(".share").on("click",function(){
			$(".meng").show();
		});
		$(".meng").on("click",function(e){
				$(this).hide();
			});
	</script>
</body>
</html>