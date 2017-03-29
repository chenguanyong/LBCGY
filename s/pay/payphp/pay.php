<?php
//输入密码确认订单


error_reporting(E_ALL | E_STRICT);
include_once 'lib/php_lib/checkinput.php';
include_once 'session/session_build.php';
include_once 'session/massage.php';
include_once 'session/aadmi.php';
include_once 'mysql/mysqli.php';
include_once 'session/yazhengid.php';
include_once 'lib/php_lib/error.php';
include_once 'lib/network/socket_tcp.php';
include_once 'conf/conf.php';

__dowork();
function __dowork(){
	
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
	
	if($xmlobj['un2']['data']==""&& strlen($xmlobj['un2']['data'])>1){
	
		write_json::create_massage(array("username","bucunzai","string","1","1","1"));
		exit();
		
		
	}else if(!check_power($xmlobj['un1']['data'])&&($xmlobj['un1']['data']=="")){
		
		write_json::create_massage(array("power","bucunzai","string","1","1","1"));
		exit();
		
		
	}
     else if(($xmlobj['un1']['data']=="")){
		
		write_json::create_massage(array("orderID","bucunzai","string","1","1","1"));
		exit();
		
		
	}
	try{
$resul= 	$xml->array_prase_xml2(array("hand"=>array("name"=>"d","error"=>"0","handle_type"=>"s"),"body"=>array("name"=>"zhipay","data"=>$username,"power"=>$xmlobj['un1']['data'],"orderid"=>$xmlobj['un0']['data'],"paytype"=>$xmlobj['un2']['data'])), "root");
		//$my= new my_sql("userdata");
	$socket=new  socket_tcp("192.168.0.105", 3000);
	$socket->socket_tcp_send($resul);
 $r=	$socket->socket_tcp_rec();
  $e=strpos($r,'#');
$r= substr($r, 0,$e);
	$xml->initxml($r);
	$re=$xml->z_prese_array();
	//print_r($re);
	//$cook=substr($_COOKIE('id'),0,30)."&id2=".substr($_COOKIE('id'),30);
	//echo $re['data'];
	if($re['data']=="True"){
		//echo "sdsd";
			
	write_json::create_massage(array("mima","bucunzai","string","1","true","1"));	
	}else{
		
	write_json::create_massage(array("mima","cuowu","string","1","false","1"));

	exit();
	
	
	}
	}catch (error_exp $fq){
	
		
	}
	
	exit();
	
	
	
	
}