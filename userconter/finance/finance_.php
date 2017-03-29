<?php
//处理转账程序
include_once 'lib/php_lib/checkinput.php';
include_once 'session/session_build.php';
include_once 'session/massage.php';
include_once 'session/aadmi.php';
include_once 'mysql/mysqli.php';
include_once 'session/yazhengid.php';
include_once 'lib/php_lib/error.php';
include_once 'lib/network/socket_tcp.php';
include_once 'lib/php_lib/brose.php';

yazhengid();
dodo();
function dodo(){
$username=session_data::getsession(session_id(),'username');
$user_data;
	if (isset($_POST['xml'])&&($_POST['xml']!='')){
	$user_data=$_POST['xml'];
	
	}else{
		//error_dump("");
		write_json::create_massage(array("xml","bucunzai","string","1","1","1"));
		exit();
		
	}
		
	$xml=new massage_xml();
	$xml->initxml($user_data);
	$xmlobj=$xml->xml_prase_array();
	//print_r($xmlobj);
//	echo $_SESSION['ya'];
//	echo strlen($xmlobj['un1']['data1']);
	if(check_html($xmlobj['un1']['data'])&&($xmlobj['un1']['data']=="")){
		//error_dump($str);
		write_json::create_massage(array("username","bucunzai","string","1","1","1"));
		exit();
		
		
	}else if(check_num($xmlobj['un2']['data'])&&($xmlobj['un2']['data']=="")){
		
		//error_dump($str);
		write_json::create_massage(array("power","bucunzai","string","1","1","1"));
		exit();
		
		
	}else if(!check_power($xmlobj['un3']['data'])&&($xmlobj['un3']['data']!="")){
		
		//error_dump($str);
		
		write_json::create_massage(array("yazhen","bucunzai","string","1","1","1"));
		exit();
		
		
	}
	
	try{
$resul= 	$xml->array_prase_xml2(array("hand"=>array("name"=>"denglu","error"=>"0","handle_type"=>"s"),"body"=>array("name"=>"finance","name1"=>"zhuanzhang","data"=>$username,"cash"=>$xmlobj['un2']['data'],"paypower"=>$xmlobj['un3']['data'])), "root");
		//$my= new my_sql("userdata");
	$socket=new  socket_tcp("192.168.0.105", 3000);
	$socket->socket_tcp_send($resul);
 $r=	$socket->socket_tcp_rec();
  $e=strpos($r,'#');
$r= substr($r, 0,$e);
	$xml->initxml($r);
	$re=$xml->z_prese_array();
	
	if($re['data']=="True"){
		
		
	write_json::create_massage(array("4","ai","g","zhuanzhan","success","1"));	
	}else{
		
	write_json::create_massage(array("g","g","g","zhuanzhan","off","1"));

	exit();
	
	
	}
	}catch (error_exp $fq){
	
		
	}
	
	exit();
	
	
	








}