<?php
$my_t = getdate(date("U"));
session_start();
$hostname = $_SERVER['PHP_SELF'];
function wlog($s,$d){
	$file_name = "log/".$d["year"].$d["mon"].$d["mday"].".txt";
	file_put_contents($file_name,strftime("%b %d %Y %X").";".$s.";当前链接  "."http://".$_SERVER['HTTP_HOST'].$_SERVER['PHP_SELF'].";".$_SERVER['QUERY_STRING']."\r\n",FILE_APPEND);
}

if($_SESSION){
	$log_str = "用户  ".$_SESSION["num"];
	wlog($log_str,$my_t);
}
else if(substr($hostname,-8,8)=="home.php"){
	$_SESSION["num"] = "u".$my_t["year"].$my_t["yday"].$my_t["hours"].$my_t["minutes"].$my_t["seconds"].rand(100, 999);
	$log_str = "用户  ".$_SESSION["num"];
	wlog($log_str,$my_t);
	}
else{
header("Location: home.php");
}
?>