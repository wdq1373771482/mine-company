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
	<section class="section-wrap section-wrap-2">
		<div class="main">
			<p class="cont_txt">处女座学校是公认的“完美主义者”，他们的各个方面都尽量追求完美，比如说地域，校园环境，排名，设施……当然，处女座学校的申请条件也很苛刻哦，达不到学校的申请条件，就不要轻易尝试啦！</p>
			<p class="cont_txt">推荐学校：哈佛大学，普林斯顿大学，斯坦福大学，杜克大学，达特茅斯大学。</p>
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