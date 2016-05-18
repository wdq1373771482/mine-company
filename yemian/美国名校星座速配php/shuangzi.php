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
	<section class="section-wrap section-wrap-7">
		<div class="main">
			<p class="cont_txt">双子座学校喜爱变化，充满理性又不安现状，他们希望自己的学生更加关注社会，乐于与人沟通，并且有一定的社会敏感度和责任感。适合双子座的学生有一个最明显的特征：随时掌握最新信息是他们感到最有乐趣的事情之一。</p>
			<p class="cont_txt">学校推荐：宾夕法尼亚大学，纽约大学，加州大学伯克利分校，乔治城大学，维克森林大学。</p>
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