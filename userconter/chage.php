<?php

//设置支付密码
//error_reporting(E_ALL | E_STRICT);
include_once 'lib/php_lib/checkinput.php';
include_once 'session/session_build.php';
include_once 'session/massage.php';
include_once 'session/aadmi.php';
include_once 'mysql/mysqli.php';
include_once 'session/yazhengid.php';
include_once 'lib/php_lib/error.php';
include_once 'lib/network/socket_tcp.php';
yazhengid();
dowork12();


function dowork12(){
	//echo "chenggong";$username=session_data::getsession(session_id(),'username');
	$username=session_data::getsession(session_id(),'username');

if($username=="you"){
exit;
}
  $cash=session_data::getsession(session_id(),'cash');
  
  
	$xml_data=array();
	$user_data;
	if (isset($_POST['xml'])&&($_POST['xml']!='')){
	$user_data=$_POST['xml'];
	
	}else{
		
		//error_dump("");
		//write_json::create_massage(array("xml","bucunzai","string","1","1","1"));
		exit();
		
	}
		
	$xml=new massage_xml();
	$xml->initxml($user_data);
	$xmlobj=$xml->xml_prase_array();
	//print_r($xmlobj);
	//、、echo $_SESSION['ya'];
	//echo strlen($xmlobj['un1']['data1']);
	if(check_html($xmlobj['un1']['data'])&&($xmlobj['un1']['data']=="")){
		//error_dump($str);
		//write_json::create_massage(array("zhifumima","bucunzai","string","1","1","1"));
		exit();
		
		
	}else if(check_html($xmlobj['un2']['data'])&&($xmlobj['un2']['data']=="")){
		
		//error_dump($str);
		//write_json::create_massage(array("zhifumima","bucunzai","string","1","1","1"));
		exit();
		
		
	}
	//else if(check_html($xmlobj['un3']['data3'])&&($xmlobj['un3']['data3']!=$_SESSION['ya'])){
		
		//error_dump($str);
		//write_json::create_massage(array("yazhen","bucunzai","string","1","1","1"));
	//	exit();
		
		
	
	
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
 
	$xml= new massage_xml();
    $xml->initxml($r);
   // echo "3";
    $arry=$xml->z_prese_array();
    
	 if($arry['data']=='False'){
   // echo "123456";
    exit;
    }
 
 
	$xml=new massage_xml1();
	$xml->initxml($r);
echo 	$xml->prase_json1();
	
	
	}catch (error_exp $fq){
	
		
	}
	
	exit();
	
	
	
	

}//


