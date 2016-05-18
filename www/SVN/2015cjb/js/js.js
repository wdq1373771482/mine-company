// JavaScript Document

//图片翻滚
function huandengs_l(){
	var NEITU = $("#huandeng_z").css("left")
	var WAIKUANG = document.getElementById("huandengz");
	var WAIKUANGw = WAIKUANG.offsetWidth-2;
	if(NEITU != WAIKUANGw*0 + "px"){
		$("#huandeng_z").animate({left:'+=' + WAIKUANGw + "px"});
	}
	//var HUANDENGs
	//alert(WAIKUANGw)
}
function huandengs_r(){
	var NEITU = $("#huandeng_z").css("left")
	var WAIKUANG = document.getElementById("huandengz");
	var WAIKUANGw = WAIKUANG.offsetWidth-2;
	if(NEITU != -WAIKUANGw*5 + "px"){
		$("#huandeng_z").animate({left:'-=' + WAIKUANGw + "px"});
	}
}

function huandengs_ls(){
	var NEITU = $("#huandeng_z02").css("left")
	var WAIKUANG = document.getElementById("huandengz02");
	var WAIKUANGw = WAIKUANG.offsetWidth-2;
	if(NEITU != WAIKUANGw*0 + "px"){
		$("#huandeng_z02").animate({left:'+=' + WAIKUANGw + "px"});
	}
	//var HUANDENGs
	//alert(WAIKUANGw)
}
function huandengs_rs(){
	var NEITU = $("#huandeng_z02").css("left")
	var WAIKUANG = document.getElementById("huandengz02");
	var WAIKUANGw = WAIKUANG.offsetWidth-2;
	if(NEITU != -WAIKUANGw*5 + "px"){
		$("#huandeng_z02").animate({left:'-=' + WAIKUANGw + "px"});
	}
}

//我是高中生和我是大学生切换
function middleschool_on(n){
	for(var i=1;i<=2;i++){
		var MIDDLEBIG_A = document.getElementById("school_"+i);
		var MIDDLEBIG_D = document.getElementById("timeghz_"+i);
		if(n==i){
			MIDDLEBIG_A.className = "gaoschool_a";
			MIDDLEBIG_D.style.display = "block";
		}else{
			MIDDLEBIG_A.className = "daschool_a";
			MIDDLEBIG_D.style.display = "none";
		}
	}
}

function schad_on(){
	var SCIMG01 = document.getElementById("scim_1");
	var SCIMG02 = document.getElementById("scim_2");
	SCIMG01.style.display = "none";
	SCIMG02.style.display = "block";
}
function schad_off(){
	var SCIMG01 = document.getElementById("scim_1");
	var SCIMG02 = document.getElementById("scim_2");
	SCIMG01.style.display = "block";
	SCIMG02.style.display = "none";
}

//课程安排
function kechenganpai(n){
	for(var i=1;i<=8;i++){
		var KECHENG = document.getElementById("less_"+i);
		if(n==i){
			KECHENG.className = "vip_tatz_sa";
		}else{
			KECHENG.className = "vip_tatz_a";
		}
	}
}


$(function() { 
    var elm = $('.vip_tz'); 
    var startPos = $(elm).offset().top; 
	var ADS = $('.lismall_ad'); 
    var ADSPos = $(ADS).offset().top; 
    $.event.add(window, "scroll", function() { 
        var p = $(window).scrollTop(); 
        $(elm).css('position',((p) > startPos) ? 'fixed' : 'static'); 
        $(elm).css('top',((p) > startPos) ? '0px' : ''); 
    }); 
}); 

