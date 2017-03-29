<?php
//初始化推广
include_once 'lib/php_lib/checkinput.php';
include_once 'session/session_build.php';
include_once 'session/massage.php';
include_once 'session/aadmi.php';
include_once 'mysql/mysqli.php';
include_once 'session/yazhengid.php';
require_once 'lib/network/socket_tcp.php';


work_thread();
function work_thread(){
//$username=session_data::getsession(session_id(),'username');
$username="chenguan";


$time=@session_data::getsession(session_id(),'a3');
	if(isset($time))
	{
		if(time()-$time>3600){
			
			//ִ�и���
			//$dr=new updatedata($_SESSION['username']);
			$dr=new updatedata($_POST["type"]);
		$dr->start();
		$_SESSION['a3']=time();
			
		}else{
			//echo "ds";
			//ִ�л��棬����ݿ���鿴��Ϣ
			//chaxunsql($ca);
			//$rr=new mythread($_SESSION['username']);
			$pici=$_POST["pici"];
			$type=$_POST["type"];
			
			$rr=new mythread($type,$pici);
			$rr->start();
			$_SESSION['a3']=time();
		}
		
		
	}else{
		//echo $_POST["type"]."dsdsd\n";
		$dr=new updatedata($_POST["type"]);
		$dr->start();
		$_SESSION['a3']=time();
		
	}
	

	
	
	

exit;	
	
	
}



//查询数据裤
class mythread extends Thread{
	private  $mysql;
	private $type;
	private $pici;
   public function __construct($ty,$pici){
    
		
		$this->pici=$pici;
		$this->type=$ty;
	}

	public function run(){
$mysql=new mysqli_("linbei_ad");
$result="";

$result=$mysql->read("SELECT `num`,`createtime`,`link`,`id1`,`name`  FROM `linbei_ad`.`tuijian` where 'type'=".$this->type." and   pici =".$this->pici." LIMIT  10 ;");
	


//createshop([oj.createtime,oj.or_num],[oj.sh_num,oj.sh_name,oj.sh_num,oj.sh_attr],[oj.sh_attr,oj.or_cash,oj.or_state,oj.or_num]);	
		
		$er=$mysql->search_mc1($result,"ad_num,riqi,ad_link,ad_id,ad_name");
//print_r($er);
//echo "ds"; $fp[$rtt]=array("ad_id"=>$value["id00"],"ad_num"=>$value["num00"],"ad_name"=>$value["name00"],"ad_link"=>$value['link00'],"riqi"=>$value['createtime00']);
    
		if(count($er)>0){
//echo "sds";
			//$this->result=$er;
		$er['hand']=array("size"=>count($er),"pici"=>"0","yeshu"=>"l");	
		$xml=new write_json();
		$xml->name=$er;
		$xml->prase_json();
		echo $xml->getresult();
			//$this->isalive=true;

		}	else {
			//$this->result=null;
			//$this->isalive=false;


		}
		//$this->bool=true;

	}
}
/*
*
*@return false
*@auth 
*/


//
//获取初始化资料
class  updatedata extends Thread{
	public $t;
	public $username;
	private $type;
	function __construct($type){
	$this->t="ds";

	$this->type=$type;
	}
	function run(){
		//echo "sdsdsd";
		$xml=new massage_xml();
	$shenqing=$xml->prase_xml1(array("name"=>1,"error"=>2,"handle_type"=>3,"fdg"=>'f'),"handle");
	$shenqing=$shenqing.$xml->prase_xml1(array("name"=>"tj","name1"=>"init1","data"=>"is","type"=>$this->type),"body");
  $shenqing=$xml->getft()."<root>".$shenqing."</root>";
	
try{
$socket=new  socket_tcp("192.168.0.105", 3000);
    $socket->socket_tcp_send($shenqing);
    
}catch (Exception $g){


//echo "aaa1111111dsfsdfss";

}
	$r= $socket->socket_tcp_rec1(1000);
	$socket->socket_tcp_close();
 	//echo strlen($r)."---\n";
     $e=strpos($r,"#");
     $r= substr($r, 0,$e);

 //向客户端返回数据
//echo "1";

// echo  "sdfs1";
     $xml= new massage_xml();
    $xml->initxml($r);
   // echo "3";
    $arry=$xml->xml_prase_array();
 //print_r($arry);
    $f=array();

    
    
    if($arry['un0']['data00']=="kong"){
     $arry['hand']=array("size00"=>count($arry));
    	$xml=new write_json();
		$xml->name=$arry;
		$xml->prase_json1();
		echo $xml->getresult();
    exit;
    }
    
    
  //  echo  "sdfs2";
    
    $f=array();
     $f=$arry;
      $pici=rand(0, 10000);
    $ftr=new updatedata3($f,$pici);
 $ftr->start();

    $fp=array();
  //  echo  "sdfs3";
    FOREACH($arry as $rtt=>$value){
    	
    	$rs=	explode(" ",trim($value['createtime00']));
	$ti=$rs[0];
    $fp[$rtt]=array("ad_id"=>$value["id00"],"ad_num"=>$value["num00"],"ad_name"=>$value["name00"],"ad_link"=>$value['link00'],"riqi"=>$ti);
    
    }

    $xml=new write_json();
    $size=count($f);
    $linksize=$size;
    $yeshu="";
    $temp=ceil($size/15);
    
    
    if($size>15){
    $size=15;
    
    }
   
    
    
    $fp['hand']=array("size"=>$size,"pici"=>$pici,"yeshu"=>$temp,"linksize"=>$linksize);
		$xml->name=$fp;
		$xml->prase_json();
		echo $xml->getresult();
    
  //echo  "sdfs5";
	
	
	
	}
	
	
	
	}
	
	
	
	
	
	class updatedata3 extends Thread{
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

	$m=new mysqli_('linbei_ad');
	FOREACH($this->data_array as $rtt){
		$rtt['optiontime00']=$gp;
		$rtt['pici00']=$this->pici;
	$rs=	explode(" ",trim($rtt['createtime00']));
	$rtt['createtime00']=$rs[0];
		$m->insert1(array("insert into tuijian ",$rtt));
	}
    
    $m->mysql_c();
	
	
	
	}
	
	
	
	
	
	}