<?php
//发表文章


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
include_once 'w/wen/buildwen/buildwen.php';

function sdowork(){
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
		
		
	}else if(check_html($xmlobj['un4']['data'])&&($xmlobj['un4']['data']=="")){
		
		//error_dump($str);
		write_json::create_massage(array("power","bucunzai","string","1","1","1"));
		exit();
		
		
	}
	//$uername="";
	
	$arrt=array("name"=>"wen","data"=>"username","data_type"=>$xmlobj['un1']['data'],"data_title"=>$xmlobj['un2']['data'],"data_keyword"=>$xmlobj['un3']['data'],"data_reirong"=>$xmlobj['un4']['data'],"link8"=>"wen","user"=>"sds","auth"=>"d");
	
$xml=new massage_xml();
	$shenqing=$xml->prase_xml1(array("name"=>1,"error"=>2,"handle_type"=>3),"handle");
	$shenqing=$shenqing.$xml->prase_xml1($arrt,"body");
echo  $shenqing=$xml->getft()."<root>".$shenqing."</root>";
 
	$socket=new  socket_tcp("192.168.0.105", 3000);
	$socket->socket_tcp_send($shenqing);
 $r=	$socket->socket_tcp_rec();
  $e=strpos($r,'#');
echo $r= substr($r, 0,$e);
	//echo $r;
	 $xml2= new massage_xml();
    $xml2->initxml($r);
   // echo "3";
    $arry=$xml2->z_prese_array();
   
	
    if($arry["data"]!="false"){
    
    
    $ret=array("data_title"=>$arrt["data_type"], "data_auth"=>$arrt["auth"], "data_num"=>trim($arry["data"]),"data_riqi"=>date("F j, Y, g:i a"), "data_main"=>$arrt["data_reirong"]);
    print_r($ret);		
    buildwen(array("data_title"=>$arrt["data_type"], "data_auth"=>$arrt["auth"], "data_num"=>trim($arry["data"]),"data_riqi"=>date("F j, Y, g:i a"), "data_main"=>$arrt["data_reirong"]));	
    	
    	
    	
    	
    	
    
    
    }
    
    
    

	exit();
	
	
	
	
}//
//echo "hgfhfdgfdgfd";
//yazhengid();
sdowork();










