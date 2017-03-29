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
dowork199();

function dowork199(){
	//echo "chenggong";
	$xml_data=array();
	$user_data;
	if (isset($_POST['xml'])&&($_POST['xml']!='')){
	$user_data=$_POST['xml'];
	
	}else{
		//echo "i";
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
		write_json::create_massage(array("xingbie","bucunzai","string","1","1","1"));
		exit();
		
		
	}else if(check_html($xmlobj['un2']['data'])&&($xmlobj['un2']['data']=="")){
		
		//error_dump($str);
		write_json::create_massage(array("career","bucunzai","string","1","1","1"));
		exit();
		
		
	}else if(check_html($xmlobj['un3']['data'])&&($xmlobj['un3']['data']=="")){
		
		//error_dump($str);
		write_json::create_massage(array("gexing","bucunzai","string","1","1","1"));
		exit();
		
		
	}
else if(check_html($xmlobj['un4']['data'])&&($xmlobj['un4']['data']=="")){
		
		//error_dump($str);
		write_json::create_massage(array("aihao","bucunzai","string","1","1","1"));
		exit();
		
		
	}else if(check_html($xmlobj['un5']['data'])&&($xmlobj['un5']['data']=="")){
		
		//error_dump($str);
		write_json::create_massage(array("guanzhu","bucunzai","string","1","1","1"));
		exit();
		
		
	}
	
	
	
	
	//else if(check_html($xmlobj['un3']['data3'])&&($xmlobj['un3']['data3']!=$_SESSION['ya'])){
		
		//error_dump($str);
		//write_json::create_massage(array("yazhen","bucunzai","string","1","1","1"));
	//	exit();
		

	try{
$xml=new massage_xml();
	$shenqing=$xml->prase_xml1(array("name"=>1,"error"=>2,"handle_type"=>3),"handle");
	$shenqing=$shenqing.$xml->prase_xml1(array("name"=>"ziliao","username"=>'chen',"sex"=>$xmlobj['un1']['data'],"carer"=>$xmlobj['un2']['data'],"gexing"=>$xmlobj['un3']['data'],"xingqu"=>$xmlobj['un4']['data'],"guanzhu"=>$xmlobj['un5']['data']),"body");
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
	
		//$fq->err_obj1->close();
	}
	//if($user_pow===$my->read()){
	//error_dump($str);
		//write_json::create_massage(array("1","1","1","denglu","chenggu","2"));
		//exit();
	//	$_SESSION['username']=$user_name;
		 
	//}
	//echo "chenggong";
	exit();
	
	
	
	

}//


