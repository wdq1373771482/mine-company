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
	<section class="section-wrap section-wrap-1">
		<div class="main">
			<p class="cont_txt">金牛座学校比较保守，专业设置中规中矩，在就业方面为学生考虑很周到，所以就业率在同类大学中比较突出。另外，金牛座的学校很有艺术细胞，校园环境和建筑风格都非常赏心悦目。</p>
			<p class="cont_txt">学校推荐：麻省理工学院，布朗大学，普林斯顿大学，耶鲁大学，圣母大学，加州大学洛杉矶分校，纽约大学。</p>
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