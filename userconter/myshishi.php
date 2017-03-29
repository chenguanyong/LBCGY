<?php
include_once 'lib/php_lib/checkinput.php';
include_once 'session/session_build.php';
include_once 'session/massage.php';
include_once 'session/aadmi.php';
include_once 'mysql/mysqli.php';
include_once 'session/yazhengid.php';
work_thread1w();
function work_thread1w(){

$username=session_data::getsession(session_id(),'username');

if($username=="you"){
exit;
}
	$cash=session_data::getsession(session_id(),'cash_s');
	if(!empty($cash))
	{$time=$cash;
		if(time()-$time>360){
			//echo "update1";
			//ִ�и���
			//$dr=new updatedata($_SESSION['username']);
			$dr=new updatedata('chen');
		    $dr->start();
		$_SESSION['cash_s']=time();
			
		}else{
			
			//ִ�л��棬����ݿ���鿴��Ϣ
			//chaxunsql($ca);
			//$rr=new mythread($_SESSION['username']);
			if(!isset($_POST['pici'])){
			
			exit;
			
			}
			$rr=new mythread("chen",$_POST['pici']);
			$rr->start();
			$_SESSION['cash_s']=time();
		}
		
		
	}else{
		//threa_update($up);
		//$dr=new updatedata($_SESSION['username']);
		$dr=new updatedata('chen');
		$dr->start();
		$_SESSION['cash_s']=time();
		//ִ�и���
	}
	//�ȴ�ͬ��

	
	
	

exit;	
	
	
}



//查询数据裤
class mythread extends Thread{
	private  $mysql;
	private $name;
	private $pici;
	public function __construct($name,$pici){
        $this->name=$name;
	$this->pici=$pici;	
		
	}

	public function run(){
$mysql=new mysqli_("username");
		$result=$mysql->read("SELECT soure,link_,clicks,ip,createtime,city  FROM `username`.`temp_linkclick` where username ="."'".$this->name."' and pici=".$this->pici.";");

		$er=$mysql->search_m($result,"soure,link_,clicks,ip,createtime,city");
		//[oj.soure,oj.link_,oj.clicks,oj.ip,oj.createtime]
//print_r($er);
//echo "ds";
		if(count($er)>0){
//echo "sds";
			//$this->result=$er;
		$xml=new write_json();
		$xml->name=array("body"=>$er[0]);
		$xml->prase_json();
		echo $xml->getresult();
			//$this->isalive=true;

		}	else {
			//$this->result=null;
			//$this->isalive=false;


		}
		//$this->bool=true;

	}
}//
//获取初始化资料
class  updatedata extends Thread{
	public $t;
	public $username;
	function __construct($name){
	$this->t="ds";
	$this->username=$name;
	}
	function run(){
		//echo "sdsdsd";
		$xml=new massage_xml();
	$shenqing=$xml->prase_xml1(array("name"=>1,"error"=>2,"handle_type"=>3),"handle");
	$shenqing=$shenqing.$xml->prase_xml1(array("name"=>"shishi","data"=>'chen',"type"=>2),"body");
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
    $pici=rand(0, 10000);
    $f['hand']=array("size00"=>count($f),"id00"=>$id,"yeshu00"=>$ido,"pici00"=>$pici);
   //print_r($f);
    //array_values($f);
    $xml=new write_json();
		$xml->name=$f;
		$xml->prase_json1();
		echo $xml->getresult();
    
    $gp=time();//添加时间
   // $arry['optiontime']=time();//添加操作时间



	$m=new mysqli_('username');
	FOREACH($arry as $rtt){
		if(isset($rtt["id00"])){break;}
		$rtt['optiontime00']=$gp;
		$rtt['username00']="chen";
		$rtt['xuhao00']="001";
		$rtt['pici00']=$pici;
		$m->insert1(array("insert into temp_linkclick ",$rtt));
	}
    
    $m->mysql_c();
	//$m->
	
	
	
	}
	
	
	
	}
