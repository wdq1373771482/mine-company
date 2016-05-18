(function(){var G=function(H){return document.getElementById(H)};var F=function(K,J){for(var I=0,H=K.length;I<H;I++){J.apply(K[I],[I,K[I]])}};var D=function(K,J,I,H){F(I,function(L,M){if(L!=H){M.className=J}});I[H].className=K};var C=function(J){var H=[];for(var I=0;I<20;I++){if(G(J+"-"+I)){H.push(G(J+"-"+I))}else{return H}}return H};var A=function(H,J){var K=C(J.tabctrl+H);var I=C(J.tab+H);if(H==1){F(K,function(L,M){M.onclick=function(){D("","hide",I,L);D("on","",K,L);return false;}})}else{F(K,function(L,M){M.onclick=function(){D("","hide",I,L);D("on","",K,L)}})}};var B={tabctrl:"tbc",tab:"tb",num:6};for(var E=0;E<B.num;E++){A(E,B)}})();

var ele=document.getElementById("goTop");
var hide = document.getElementById('hide');
function goTop(){    
    if(ele){
		ele.onclick = function(){
		  var doc = (document.documentElement.scrollTop) ? document.documentElement : document.body;
	      var time;
	      time = setInterval(function(){								  
          doc.scrollTop -= Math.ceil(doc.scrollTop * 0.7);
		  if(doc.scrollTop <= 0)  clearInterval(time);
	      }, 1);
        }
    }
}
goTop();
window.onscroll = function(){
	        if(ele && hide){
			  var doc = (document.documentElement.scrollTop) ? document.documentElement : document.body;
			  ele.style.visibility = doc.scrollTop ? 'visible' : 'hidden';
              hide.innerHTML = '';  
			}    
}

$(document).ready(function(){
   //这里定义您得分享目标方
	var shareico = {
			"tqq"		:"http://v.t.qq.com/share/share.php?title={title}&url={url}&appkey=801cf76d3cfc44ada52ec13114e84a96",
			"tsina"		:"http://service.weibo.com/share/share.php?title={title}&url={url}&source=bookmark&appkey=1343713053",
			"qzone"		:"http://sns.qzone.qq.com/cgi-bin/qzshare/cgi_qzshare_onekey?url={url}&title={title}",
			"renren"	:"http://widget.renren.com/dialog/share?resourceUrl={url}&srcUrl={url}&title={title}&pic=&description=",
			"kaixin"	:"http://www.kaixin001.com/rest/records.php?content={title}%20&url={url}&starid=&aid=100018706&style=11&pic=",
			"baidu"		:"http://cang.baidu.com/do/add?it={title}&iu={url}&fr=ien#nw=1",
			"t115"		:"http://sc.115.com/add?url={url}&title={title}",
			"tsohu"		:"http://t.sohu.com/third/post.jsp?url={url}&title={title}&content=utf-8",
			"taobao"	:"http://share.jianghu.taobao.com/share/addShare.htm?url={url}",
			"xiaoyou"	:"http://sns.qzone.qq.com/cgi-bin/qzshare/cgi_qzshare_onekey?to=pengyou&url={url}",
			"hi"		:"http://apps.hi.baidu.com/share/?url={url}&title={title}",
			"fanfou"	:"http://fanfou.com/sharer?u={url}&t={title}",
			"sohubai"	:"http://bai.sohu.com/share/blank/add.do?link={url}",
			"feixin"	:"http://space3.feixin.10086.cn/api/share?title={title}&url={url}",
			"youshi"	:"http://www.ushi.cn/feedShare/feedShare!sharetomicroblog.jhtml?type=button&loginflag=share&title={title}&url={url}",
			"tianya"	:"http://share.tianya.cn/openapp/restpage/activity/appendDiv.jsp?app_id=jiathis&ccTitle={title}&ccUrl={url}&jtss=tianya&ccBody=",
			"msn"		:"http://profile.live.com/P.mvc#!/badge?url={url}&screenshot=",
			"douban"	:"http://shuo.douban.com/!service/share?image=&href={url}&name={title}",
			"twangyi"	:"http://t.163.com/article/user/checkLogin.do?source={title}&info={title}+{url}&images=",
			"mop"		:"http://tk.mop.com/api/post.htm?url={url}&title={title}"
	};
	 
	//此处可以自定义分享语title和分享地址url
	//var title = document.title;
	var title = "";
	//var url = window.location.href;
	var url = "http://tiandaoedu.com/topic/";
	
	$('.sha-xw-btns a').live('click',function(){
	  var dataSN=$(this).attr('data-shareName');
	  window.open(formatmodel(shareico[dataSN],{title:title,url:url}));
	});
	
	function formatmodel(str,model){
		for(var k in model){
			var re = new RegExp("{"+k+"}","g");
			str = str.replace(re,model[k]);
		}
		return str;
	}
});
