<?php
//确认支付密码and 订单编号
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

function dodo(){

$user_data;
	if (isset($_POST['pay'])&&($_POST['pay']!='')){
	$user_data=$_POST['pay'];
	
	}else{
		//error_dump("");
		write_json::create_massage(array("xml","bucunzai","string","1","1","1"));
		exit();
		
	}
		
	
	
	try{
$resul= 	$xml->array_prase_xml2(array("hand"=>array("name"=>"i","error"=>"0","handle_type"=>"s"),"body"=>array("name"=>"finance","name1"=>"checkpower","data"=>$username,"pay"=>$user_data)), "root");
		//$my= new my_sql("userdata");
	$socket=new  socket_tcp("192.168.0.105", 3000);
	$socket->socket_tcp_send($resul);
 $r=	$socket->socket_tcp_rec();
  $e=strpos($r,'#');
$r= substr($r, 0,$e);
	$xml->initxml($r);
	$re=$xml->z_prese_array();
	
	if($re['data']=="True"){
		
		
	write_json::create_massage(array("4","ai","g","pay","success","1"));	
	}else{
		
	write_json::create_massage(array("g","g","g","pay","off","1"));

	exit();
	
	
	}
	}catch (error_exp $fq){
	
		
	}
	
	exit();
	
	
	








}