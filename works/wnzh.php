<?php

//提交文章
include_once 'lib/php_lib/checkinput.php';
include_once 'session/session_build.php';
include_once 'session/massage.php';
include_once 'session/aadmi.php';
include_once 'mysql/mysqli.php';
include_once 'session/yazhengid.php';
include_once 'lib/php_lib/error.php';
include_once 'lib/network/socket_tcp.php';
include_once 'lib/php_lib/brose.php';
//echo "sdsd";
//yazhengid();
initwz();
function initwz(){

$mxml=new massage_xml();
$mxml->initxmlfile("d.xml");
//echo $mxml[0];
$result=$mxml->xml_prase_array();
//print_r($result);
$arr=array();

foreach ($result as $value){
foreach ($value as$key=> $r){
	$arr[]=$value["name"]."/".$r;
}

}

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
	$le=$xmlobj['un1']['data'];
	if(strlen($le)>3){
	
	exit;
	}
if(check_html($xmlobj['un1']['data'])&&($xmlobj['un1']['data']=="")){
		//error_dump($str);
		write_json::create_massage(array("username","bucunzai","string","1","1","1"));
		exit();
		
		
	}else if(check_html($xmlobj['un2']['data'])&&($xmlobj['un2']['data']=="")){
		
		//error_dump($str);
		write_json::create_massage(array("power","bucunzai","string","1","1","1"));
		exit();
		
		
	}else if(check_html($xmlobj['un3']['data'])&&($xmlobj['un3']['data']!= "")){
		
		//error_dump($str);
		write_json::create_massage(array("yazhen","bucunzai","string","1","1","1"));
		exit();
		
		
	}
	$fd=(int)$xmlobj['un1']['data'];
$re=$arr[$fd];
$result0=rand(1, 10000);
$arraa=array("title"=>$rew,"riqi"=>date("Y-m-d H:i:s"),"leibie"=>"$re","zuo"=>"官用","lan"=>"0","wen_span"=>$xmlobj["un4"]["data"]);
$htmlthread=new createhtml($arraa, $result0);


$htmlthread->start();

try{
$username=	session_data::getsession(session_id(),'username');
$resul= 	$xml->array_prase_xml2(array("hand"=>array("name"=>"denglu","error"=>"0","handle_type"=>"s"),"body"=>array("name"=>"denglu","data"=>$username,"title_type"=>$re,"title"=>$xmlobj['un2']['data'],"keyword"=>$xmlobj["un3"]['data'],"data_"=>$result0)), "root");
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
		//setcookie("username",$xmlobj['un1']['data1'],time()+3600,"/");
	//$_SESSION['username']=$xmlobj['un1']['data1'];
	//header(conf::$yu."u/usercenter.html?id=dfg")  ;		
	write_json::create_massage(array("4","bucunzai","string","1","u/usercenter.html?id=dfg","1"));	
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
	
class createhtml extends  Thread{
private $arr_;
private $name1;
public function __construct($arr,$name){
$this->arr_=$arr;
$this->name1=$name;
}
public function run(){
$xml=new DOMDocument();
$xml->loadHTMLFile("wy_1.html");
 //$rew=mb_convert_encoding("论三民主义", "UTF-8");


foreach($this->arr_ as $key=>$value){

echo $key;
$xml->getElementById($key)->nodeValue=$value;



}
$xml->saveHTMLFile("$this->name1.html");

}

}	
	
	
	
	


