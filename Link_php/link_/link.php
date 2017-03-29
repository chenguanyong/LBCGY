<?php
//添加链接
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
	//$username=session_data::getsession(session_id(),'username');
	//echo "chenggong";
	$xml_data=array();
	$user_data;
	if (isset($_POST['xml'])&&($_POST['xml']!='')){
	$user_data=$_POST['xml'];
	
	}else{
		echo "i";
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
		write_json::create_massage(array("username","bucunzai","string","1","1","1"));
		exit();
		
		
	}else if(check_html($xmlobj['un2']['data'])&&($xmlobj['un2']['data']=="")){
		
		//error_dump($str);
		write_json::create_massage(array("power","bucunzai","string","1","1","1"));
		exit();
		
		
	}
	//else if(check_html($xmlobj['un3']['data3'])&&($xmlobj['un3']['data3']!=$_SESSION['ya'])){
		
		//error_dump($str);
		//write_json::create_massage(array("yazhen","bucunzai","string","1","1","1"));
	//	exit();
		
		
	
	
	try{
$xml=new massage_xml();
	$shenqing=$xml->prase_xml1(array("name"=>1,"error"=>2,"handle_type"=>3),"handle");//xuhao
	$shenqing=$shenqing.$xml->prase_xml1(array("name"=>"buildlink","data"=>'fgsgdsfg',"xuhao"=>$xmlobj['un1']['data']),"body");
 $shenqing=$xml->getft()."<root>".$shenqing."</root>";
	$socket=new  socket_tcp("192.168.0.105", 3000);
	$socket->socket_tcp_send($shenqing);
//	echo "ewe";
$r=	$socket->socket_tcp_rec1(200);
	$socket->socket_tcp_close();
	 $e=strpos($r,"#");
 $r= substr($r, 0,$e);
	$xml=new massage_xml();
	$xml->initxml($r);
	$ro=$xml->z_prese_array();
	
	
	}catch (error_exp $fq){
	
	exit;	
	}
	$ro["createtime"]=time();
	
    $ms=new mysqli_("linbei_link");
 $result=   $ms->insert(array("insert into link ",$ro));
    
    $ms->mysql_c();
    if($result){
    
    write_json::create_massage(array("addlink","true","string","1","1","1"));
    }else {
    
    write_json::create_massage(array("addlink","false","string","1","1","1"));
    }
    
    
	exit();
	
	
	
	

}//


