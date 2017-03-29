<?php
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
	//print_r($xmlobj);
//	echo $_SESSION['ya'];
//	echo strlen($xmlobj['un1']['data1']);
	if(check_html($xmlobj['un1']['data'])&&($xmlobj['un1']['data']=="")){
		//error_dump($str);
		write_json::create_massage(array("username","bucunzai","string","1","1","1"));
		exit();
		
		
	}else if(check_html($xmlobj['un2']['data'])&&($xmlobj['un2']['data']=="")){
		
		//error_dump($str);
		write_json::create_massage(array("power","bucunzai","string","1","1","1"));
		exit();
		
		
	}/*else if(check_html($xmlobj['un3']['data3'])&&($xmlobj['un3']['data3']!= session_data::getsession(session_id(),'ya'))){
		
		//error_dump($str);
		write_json::create_massage(array("yazhen","bucunzai","string","1","1","1"));
		exit();
		
		
	}*/
	//echo "hgfhfdgfdgfd";
	
$resul= 	$xml->array_prase_xml2(array("hand"=>array("name"=>"denu","error"=>"0","handle_type"=>"s"),"body"=>array("name"=>"serch","data"=>$xmlobj['un1']['data'])), "root");
		//$my= new my_sql("userdata");
	$socket=new  socket_tcp("192.168.0.105", 3000);
	$socket->socket_tcp_send($resul);
 $r=	$socket->socket_tcp_rec1(2000);
  $e=strpos($r,'#');
$r= substr($r, 0,$e);
	//echo $r;
	 $xml2= new massage_xml();
    $xml2->initxml($r);
   // echo "3";
    $arry=$xml2->xml_prase_array();
    $f=array();
    $f=$arry;
    
    
    $pici=rand(0, 10000);
    $thread=new updatedata4($arry, $pici);
    $thread->start();
    $page= ceil(count($f)/10);//所有页数
    
    $f['hand']=array("size00"=>count($f),"pici00"=>$pici,"page00"=>$page);
   //print_r($f);
    //array_values($f);
    $xml=new write_json();
		$xml->name=$f;
		$xml->prase_json1();
		echo $xml->getresult();
	

	exit();
	
	
	
	
}//
//echo "hgfhfdgfdgfd";
//yazhengid();
__dowork();



class updatedata4 extends Thread{
	private $data_array;
	private $pici;
	public function __construct($r,$pici){
	
	$this->data_array=$r;
	$this->pici=$pici;
	}
	
	public function run(){
	
	 $gp=time();//添加时间
   // $arry['optiontime']=time();//添加操作时间

//print_r($this->data_array);

	$m=new mysqli_('linbei_wen');
	FOREACH($this->data_array as $rtt){
		$rtt['optiontime00']=$gp;
		//$rtt['username00']="chen";
		//$rtt['xuhao00']="001";
		$rtt['pici00']=$this->pici;
		$m->insert1(array("insert into temp_w ",$rtt));
	}
    
    $m->mysql_c();
	
	
	
	}
	
	
	
	
	
	}









