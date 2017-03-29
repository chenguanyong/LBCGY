<?php
//初始化我的工作
include_once 'lib/php_lib/checkinput.php';
include_once 'session/session_build.php';
include_once 'session/massage.php';
include_once 'session/aadmi.php';
include_once 'mysql/mysqli.php';
include_once 'session/yazhengid.php';
include_once 'userconter/usertool.php';

//��֤
yazhengid();
 //echo $username=session_data::getsession(session_id(),'username');
//��������
//echo "woshi";
work_thread();
function work_thread(){
//$username=session_data::getsession(session_id(),'username');
$username="chenguan";

//echo "sds".$username."121";


//echo "ssss";


$time=@session_data::getsession(session_id(),'cash11');
	if(isset($time))
	{
		if(time()-$time>3600){
			
			//ִ�и���
			//$dr=new updatedata($_SESSION['username']);
			$dr=new updatedata($username);
		$dr->start();
		//$_SESSION['cash']=time();
			
		}else{
			//echo "ds";
			//ִ�л��棬����ݿ���鿴��Ϣ
			//chaxunsql($ca);
			//$rr=new mythread($_SESSION['username']);
			$rr=new mythread($username);
			$rr->start();
			
		}
		
		
	}else{
		//threa_update($up);
		//$dr=new updatedata($_SESSION['username']);
		//echo "w222";
		$dr=new updatedata($username);
		$dr->start();
		$_SESSION['cash11']=time();
		//ִ�и���
	}
	//�ȴ�ͬ��

	
	
	

exit;	
	
	
}



//查询数据裤
class mythread extends Thread{
	private  $mysql;
	private $name;
	public function __construct($name){
        $this->name=$name;
		
		
	}

	public function run(){
$mysql=new mysqli_("linbei_work");
		$result=$mysql->read("select mylink,myspread from work  where username ="."'".$this->name."' limit 1;");

		$er=$mysql->search_m($result,"mylink,myspread");
//print_r($er);
//echo "ds";
		if(count($er)>0){
//echo "sds";
			//$this->result=$er;
		$xml=new write_json();
		$xml->name=array("brody"=> array("mylink"=>$er["un0"]["mylink"],"myspread"=>$er["un0"]["myspread"]));
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
	$shenqing=$shenqing.$xml->prase_xml1(array("name"=>"workdata","data"=>$this->username,"type"=>2),"body");
 $shenqing=$xml->getft()."<root>".$shenqing."</root>";
	$socket=new  socket_tcp("192.168.0.105", 3000);
    $socket->socket_tcp_send($shenqing);
 echo	$r= $socket->socket_tcp_rec1(390);
     $e=strpos($r,"#");
  $r= substr($r, 0,$e);

 //向客户端返回数据
//echo "1";
    $xml= new massage_xml();
    $xml->initxml($r);
   // echo "3";
    $arry=$xml->z_prese_array();
    $f=array();
    $f=$arry;
   
   // array_values($f);
    $xml=new write_json();
		$xml->name=array("brody"=>$f);
		$xml->prase_json();
		echo $xml->getresult();
    
    
    $f['optiontime']=time();//添加操作时间
$f['username']=$this->username;
//print_r($f);

	$m=new mysqli_('linbei_work');
	
    $m->insert(array("insert into work ",$f));
    $m->mysql_c();
	//$m->
	
	
	
	}
	
	
	
	}
