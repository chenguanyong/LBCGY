<?php

//初始化付款订单
//error_reporting(E_ALL | E_STRICT);
include_once 'lib/php_lib/checkinput.php';
include_once 'session/session_build.php';
include_once 'session/massage.php';
include_once 'session/aadmi.php';
include_once 'mysql/mysqli.php';
include_once 'session/yazhengid.php';
include_once 'lib/php_lib/error.php';
include_once 'lib/network/socket_tcp.php';
dowork12();

function dowork12(){
	//echo "chenggong";$username=session_data::getsession(session_id(),'username');
	$xml_data=array();
	$user_data;
	if (isset($_POST['xml'])&&($_POST['xml']!='')){
	$user_data=$_POST['xml'];
	
	}else{
		
		
		exit();
		
	}
		
	$xml=new massage_xml();
	$xml->initxml($user_data);
	$xmlobj=$xml->z_prese_array();
	
	foreach ($xmlobj as $key=>$value){
	
	
	
	
	
	}
	
	
	try{
$xml=new massage_xml();
	$shenqing=$xml->prase_xml1(array("name"=>1,"error"=>2,"handle_type"=>3),"handle");
	$shenqing=$shenqing.$xml->prase_xml1(array("name"=>"paypower","data"=>'fgsgdsfg',"paypower"=>$xmlobj['un2']['data'],"oldpower"=>$xmlobj['un2']['data'],"newpower"=>$xmlobj['un3']['data']),"body");
 $shenqing=$xml->getft()."<root>".$shenqing."</root>";
	$socket=new  socket_tcp("192.168.0.105", 3000);
	$socket->socket_tcp_send($shenqing);
//	echo "ewe";
$r=	$socket->socket_tcp_rec1(200);
	$socket->socket_tcp_close();
	 $e=strpos($r,"#");
 $r= substr($r, 0,$e);
	$xml=new massage_xml1();
	$xml->initxml($r);
echo 	$xml->prase_json1();
	
	
	}catch (error_exp $fq){
	
		
	}
	
	exit();
	
	
	
	

}//


