<?php
//处理留言内容


//error_reporting(E_ALL | E_STRICT);
include_once 'lib/php_lib/checkinput.php';
include_once 'session/session_build.php';
include_once 'session/massage.php';
include_once 'session/aadmi.php';
include_once 'mysql/mysqli.php';
include_once 'session/yazhengid.php';
include_once 'lib/php_lib/error.php';
include_once 'lib/network/socket_tcp.php';
include_once 'conf/conf.php';


function ssdowork(){
	//echo "chenggong".$_POST['xml'];
	//$xml_data=array();
	$user_data;
	if (isset($_POST['xml'])&&($_POST['xml']!='')){
	echo $user_data=$_POST['xml'];
	
	}else{
		//error_dump("");
		write_json::create_massage(array("xml","bucunzai","string","1","1","1"));
		exit();
		
	}
		
	$xml=new massage_xml();
	$xml->initxml($user_data);
	$xmlobj=$xml->xml_prase_array();
	
	if(check_html($xmlobj['un1']['data'])&&($xmlobj['un1']['data']=="")){
		//error_dump($str);
		write_json::create_massage(array("username","bucunzai","string","1","1","1"));
		exit();
		
		
	}else if(check_html($xmlobj['un2']['data'])&&($xmlobj['un2']['data']=="")){
		
		//error_dump($str);
		write_json::create_massage(array("power","bucunzai","string","1","1","1"));
		exit();
		
		
	}else if(check_html($xmlobj['un3']['data'])&&($xmlobj['un3']['data']=="")){
		
		//error_dump($str);
		write_json::create_massage(array("power","bucunzai","string","1","1","1"));
		exit();
		
		
	}
	//$uername="";
	
	$xmlo=new massage_xml();

echo  $resul= 	$xmlo->array_prase_xml2(array("hand"=>array("name"=>"denu","error"=>"0","handle_type"=>"s"),"body"=>array("name"=>"liuyan","data_title"=>$xmlobj['un1']['data'],"data_mail"=>$xmlobj['un2']['data'],"data_neirong"=>$xmlobj['un3']['data'])), "root");
		//$my= new my_sql("userdata");
	$socket=new  socket_tcp("192.168.0.105", 3000);
	$socket->socket_tcp_send($resul);
 $r=	$socket->socket_tcp_rec();
  $e=strpos($r,'#');
$r= substr($r, 0,$e);
	//echo $r;
	 $xml2= new massage_xml();
    $xml2->initxml($r);
   // echo "3";
    $arry=$xml2->z_prese_array();
    
   
if($arry['data']=="True"){
		//echo "sdsd";
		
	write_json::create_massage(array("4","bucunzai","string","liu","true","1"));	
	}else{
		
	write_json::create_massage(array("mima","cuowu","string","liu","false","1"));

	exit();
	
	
	}
    
 

	exit();
	
	
	
	
}//

ssdowork();










