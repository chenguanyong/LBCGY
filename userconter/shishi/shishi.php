<?php
include_once 'lib/php_lib/checkinput.php';
include_once 'session/session_build.php';
include_once 'session/massage.php';
include_once 'session/aadmi.php';
include_once 'mysql/mysqli.php';
include_once 'session/yazhengid.php';
include_once 'userconter/usertool.php';


yazhengid();


//获取初始化资料
run();
	function run(){
		
		$pici=$_POST['pici'];
		if(strlen(trim($pici))>5){
		
		exit;
		}
	$username=	session_data::getsession(session_id(),'username');
		$id=$_POST['id0'];//xuhao
	if(!check_num(trim($id),0,10)){
	
	exit;
	}
		
		
		//echo "sdsdsd";
		$xml=new massage_xml();
	$shenqing=$xml->prase_xml1(array("name"=>1,"error"=>2,"handle_type"=>3),"handle");
	$shenqing=$shenqing.$xml->prase_xml1(array("name"=>"shishiupdate","data"=>'chen',"type"=>2,"id"=>$id),"body");
 $shenqing=$xml->getft()."<root>".$shenqing."</root>";
	$socket=new  socket_tcp("192.168.0.105", 3000);
    $socket->socket_tcp_send($shenqing);
 	$r= $socket->socket_tcp_rec1(5000);
 	//echo strlen($r)."---\n";
     $e=strpos($r,"#");
 $r= substr($r, 0,$e);

 //向客户端返回数据
//echo "1";
    $xml= new massage_xml();
    $xml->initxml($r);
   // echo "3";
    $arry=$xml->xml_prase_array();
   // print_r($arry);
    $size=count($arry);
   $id=$arry["un".($size-1)]["id"];
  $id0=$arry["un".($size-1)]["yeshu"];
 $id0= trim($id0);
  $ido=ceil(((int)$id0)/20);
 
    unset($arry["un".($size-1)]);
    array_values($arry);
    $f=array();
    $f=$arry;
    $ree=array();
    if(count($f)>20){
    $ree=array_chunk($f,20);
    $f=$ree[0];
    }
    
    
    $fds=new updatedata3($arry,$pici,$username,$r="0");
    $fds->start();
    
    
    
    $pici=rand(0, 10000);
    $f['hand']=array("size00"=>count($f),"id00"=>$id,"yeshu00"=>$ido,"pici00"=>$pici);
   //print_r($f);
    //array_values($f);
    $xml=new write_json();
		$xml->name=$f;
		$xml->prase_json1();
		echo $xml->getresult();
    
   // $gp=time();//添加时间
   // $arry['optiontime']=time();//添加操作时间



	
	//$m->
	
	
	
	}
	
	
	
	
	
	class updatedata3 extends Thread{
	private $data_array;
	private $pici;
	private $username;
	private $xuhao;
	public function __construct($r,$pici,$username,$xuhao){
	
	$this->data_array=$r;
	$this->pici=$pici;
	$this->username=$username;
	$this->xuhao=$xuhao;
	}
	
	public function run(){
	
	 $gp=time();//添加时间
   // $arry['optiontime']=time();//添加操作时间

//print_r($this->data_array);

	$m=new mysqli_('username');
	FOREACH($this->data_array as $rtt){
		if(isset($rtt["id00"])){break;}
		$rtt['optiontime00']=$gp;
		$rtt['username00']=$this->username;
		$rtt['xuhao00']=$this->xuhao;
		$rtt['pici00']=$this->pici;
		$m->insert1(array("insert into temp_linkclick ",$rtt));
	}
    
    $m->mysql_c();
	
	
	
	}
	
	
	
	
	
	}
	
