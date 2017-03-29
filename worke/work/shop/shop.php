<?php

/**
 * 发布商品
 * 
 * */
include_once 'lib/php_lib/checkinput.php';
include_once 'session/session_build.php';
include_once 'session/massage.php';
include_once 'session/aadmi.php';
include_once 'mysql/mysqli.php';
include_once 'session/yazhengid.php';
include_once 'lib/php_lib/error.php';
include_once 'lib/network/socket_tcp.php';
include_once 'conf/conf.php';
include_once 's/shopitm/createshop/buidshop.php';
include_once 's/shopitm/createshop/d.php';


function __dowork(){
	//echo "chenggong".$_POST['xml'];
	//$xml_data=array();
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
	
	if(check_html($xmlobj["shop_type"])&&($xmlobj["shop_type"]=="")){
		
		write_json::create_massage(array("username","bucunzai","string","1","1","1"));
		exit();
		
		
	}else if(check_html($xmlobj["shop_adress"])&&($xmlobj["shop_adress"]=="")){
		
		//error_dump($str);
		write_json::create_massage(array("power","bucunzai","string","1","1","1"));
		exit();
		
		
	}else if(check_html($xmlobj["shop_postfree"])&&($xmlobj["shop_postfree"]!="")){
		
		//error_dump($str);
		write_json::create_massage(array("yazhen","bucunzai","string","1","1","1"));
		exit();
		
		
	}else if(check_html($xmlobj["shou_0"])&&($xmlobj["shou_0"]!="")){
		
		//error_dump($str);
		write_json::create_massage(array("yazhen","bucunzai","string","1","1","1"));
		exit();
		
		
	}else if(check_html($xmlobj["shou_1"])&&($xmlobj["shou_1"]!="")){
		
		//error_dump($str);
		write_json::create_massage(array("yazhen","bucunzai","string","1","1","1"));
		exit();
		
		
	}else if(check_html($xmlobj["shou_2"])&&($xmlobj["shou_2"]!="")){
		
		//error_dump($str);
		write_json::create_massage(array("yazhen","bucunzai","string","1","1","1"));
		exit();
		
		
	}else if(check_html($xmlobj["shou_3"])&&($xmlobj["shou_3"]!="")){
		
		//error_dump($str);
		write_json::create_massage(array("yazhen","bucunzai","string","1","1","1"));
		exit();
		
		
	}else if(check_html($xmlobj["shou_4"])&&($xmlobj["shou_4"]!="")){
		
		//error_dump($str);
		write_json::create_massage(array("yazhen","bucunzai","string","1","1","1"));
		exit();
		
		
	}else if(check_html($xmlobj["shop_title_1"])&&($xmlobj["shop_title_1"]!="")){
		
		//error_dump($str);
		write_json::create_massage(array("yazhen","bucunzai","string","1","1","1"));
		exit();
		
		
	}else if(check_html($xmlobj["shop_mai"])&&($xmlobj["shop_mai"]!="")){
		
		//error_dump($str);
		write_json::create_massage(array("yazhen","bucunzai","string","1","1","1"));
		exit();
		
		
	}else if(check_html($xmlobj["shop_price"])&&($xmlobj["shop_price"]!="")){
		
		//error_dump($str);
		write_json::create_massage(array("yazhen","bucunzai","string","1","1","1"));
		exit();
		
		
	}else if(check_html($xmlobj["shop_size"])&&($xmlobj["shop_size"]!="")){
		
		//error_dump($str);
		write_json::create_massage(array("yazhen","bucunzai","string","1","1","1"));
		exit();
		
		
	}else if(check_html($xmlobj["shop_xiang"])&&($xmlobj["shop_xiang"]!="")){
		
		//error_dump($str);
		write_json::create_massage(array("yazhen","bucunzai","string","1","1","1"));
		exit();
		
		
	}else if(check_html($xmlobj["shop_xianqing"])&&($xmlobj["shop_xianqing"]!="")){
		
		//error_dump($str);
		write_json::create_massage(array("yazhen","bucunzai","string","1","1","1"));
		exit();
		
		
	}
	
	try{
$arrt=array("name"=>"wen","data"=>"username");
$arrt["shop_type"]=$xmlobj["shop_type"];
$arrt["shop_adress"]=$xmlobj["shop_adress"];
$arrt["shop_postfree"]=$xmlobj["shop_postfree"];
$arrt["shou_0"]=$xmlobj["shou_0"];
$arrt["shou_1"]=$xmlobj["shou_1"];
$arrt["shou_2"]=$xmlobj["shou_2"];
$arrt["shou_3"]=$xmlobj["shou_3"];

$arrt["shop_title_1"]=$xmlobj["shop_title_1"];
$arrt["shop_mai"]=$xmlobj["shop_mai"];
$arrt["shop_price"]=$xmlobj["shop_price"];
$arrt["shop_size"]=$xmlobj["shop_size"];

$arrt["shop_xianqing"]=$xmlobj["shop_xianqing"];

$xml=new massage_xml();
	$shenqing=$xml->prase_xml1(array("name"=>1,"error"=>2,"handle_type"=>3),"handle");
	$shenqing=$shenqing.$xml->prase_xml1($arrt,"body");
echo  $shenqing=$xml->getft()."<root>".$shenqing."</root>";


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
	if($re['data']!="false"){
		//echo "sdsd";
			$arr=array();
buildshop($arr);
		
		
		
		
	}else{
		
	write_json::create_massage(array("mima","cuowu","string","1","1","1"));

	exit();
	
	
	}
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
//__yazhengid("Location: http://www.example.com/");
//echo "er";
yazhengid();
__dowork();
