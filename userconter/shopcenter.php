<?php
include_once 'lib/php_lib/checkinput.php';
include_once 'session/session_build.php';
include_once 'session/massage.php';
include_once 'session/aadmi.php';
include_once 'mysql/mysql.php';
include_once 'session/yazhengid.php';
include_once 'userconter/usertool.php';

//��֤
yazhengid();
//��������
function work_thread(){
	$tool=new usertool();//usertool
	$ca=new mythread($array_str, $mode);
	$up=new updatethread($tool);
	$boo=false;
	if(isset($_SESSION['cash']))
	{$time=$_SESSION['cash'];
		if(time()-$time>360){
			
			//ִ�и���
			threa_update($up);
			
		}else{
			
			//ִ�л��棬�����ݿ���鿴��Ϣ
			chaxunsql($ca);
		}
		
		
	}else{
		threa_update($up);
		
		
		//ִ�и���
	}
	//�ȴ�ͬ��
if($boo){	while(!$ca->bool){}

$a=array();
for($r=0;$r<count($a);$r++){
	
	
	
}
$xml2=new massage_xml1();
$xml2->initxml($a);
$xml2->xml_prase_json();

exit();


}
	
else{while(!$up->bool){}
$xml=$up->result;

$xml2=new massage_xml1();
$xml2->initxml($xml);
$xml2->xml_prase_json();

exit();	
	
	
	
	
}	
	
	
	
}
class mythread extends Thread{
	private  $mysql;
	public  $bool;
	private $arr;
	private $mode;
	private $where;
	public $isalive;
	public $result;
	public function __construct($array_str,$mode,$where=''){

		$this->mysql=new mysqli_();
		$this->bool=true;
		$this->mode=$mode;
		$this->arr=$array_str;
		$this->where=$where;
	}

	public function run(){

		$result=$this->mysql->read2($this->arr, $$this->mode,$this->where);

		$er=$this->mysql->search($result);

		if(count($er)>0){

			$this->result=$er;
			$this->isalive=true;

		}	else {
			$this->result=null;
			$this->isalive=false;


		}
		$this->bool=true;

	}








}

function chaxunsql($my){
	//$sql="select * from data";
	//$my=new mythread($array_str, $mode);
	$my->start();	
}
class updatethread extends Thread{
	
	//private $msocket;
	public $result;
	public  $bool;//�ж�ִ�н��
	private $usertool;
	private $sql;
	public function __construct($tool){
		//$this->msocket=new socket_tcp("127", $dd);
		$this->bool=false;
		$this->usertool=$tool;
		$this->sql=new mysqli_();
	}
	public function run(){
		
	$this->result=$this->usertool->showuserdata();
		
		$this->bool=true;
		$xml_array=new massage_xml();
		$xml_array->initxml($this->result);
		$re1=$xml_array->z_prese_array();
		$s=array("insert into SESSION_TB3",$re1);
	if(	$this->sql->insert($s)){
		
		$_SESSION['cash']=time();
	}
		
		
		
	}

}
function threa_update($tr,$tool){
	
	//$tr=new updatethread($tool);
	$tr->start();
	
	
}
