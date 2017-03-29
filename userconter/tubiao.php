<?php
include_once 'lib/php_lib/checkinput.php';
include_once 'session/session_build.php';
include_once 'session/massage.php';
include_once 'session/aadmi.php';
include_once 'mysql/mysql.php';
include_once 'session/yazhengid.php';
include_once 'userconter/usertool.php';
include_once 'lib/image_php/iamge_create.php';
include_once 'mysql/writesql.php';//֤
//yazhengid();
//��������
//echo "sd";
work_thread1();
function work_thread1(){
	$username=session_data::getsession(session_id(),'username');
if($username=="you"){
exit;
}
	
  $cash=session_data::getsession(session_id(),'cash_b');

	if(!empty($cash))
	{$time=$cash;
		if(time()-$time>360){
			
			//ִ�и���
			$rr1=new updatedata("username");
			$rr1->start();
			$_SESSION['cash_b']=$time;
		}else{
			
			//ִ�л��棬����ݿ���鿴��Ϣ
			//chaxunsql($ca);
			$ru=new mythread('username');
			$ru->start();
			$_SESSION['cash_b']=$time;
		}
		
		
	}else{
		//threa_update($up);
		$rr11=new updatedata('username');
			$rr11->start();
			$_SESSION['cash_b']=$time;
		//echo"123456";
		//ִ�и���
	}
	//�ȴ�ͬ��

}	
	
	
	

class mythread extends Thread{
	private  $mysql;
	private $name;
	public function __construct($name){
        $this->name=$name;
		
		
	}

	public function run(){
$mysql=new mysqli_("username");
		$result=$mysql->read("select username,data0,data1 from temp_tubiao where username ="."'".$this->name."';");

		$er=$mysql->search_m($result,"username,data0,data1");
//print_r($er);
//echo "ds";
		if(count($er)>0){
//echo "sds";
			//$this->result=$er;
		write_json::create_massage(array("1","s","k","image",$er[0][1],$er[0][2]));
			//$this->isalive=true;

		}	else {
			//$this->result=null;
			//$this->isalive=false;


		}
		//$this->bool=true;

	}
}//


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
	$shenqing=$shenqing.$xml->prase_xml1(array("name"=>"tubiao","data"=>'week',"username"=>'chen'),"body");
 $shenqing=$xml->getft()."<root>".$shenqing."</root>";
	$socket=new  socket_tcp("192.168.0.105", 3000);
    $socket->socket_tcp_send($shenqing);
	$r= $socket->socket_tcp_rec1(270);
     $e=strpos($r,"#");
 $r= substr($r, 0,$e);
 $xml= new massage_xml();
    $xml->initxml($r);
   // echo "3";
    $arry=$xml->z_prese_array();
   // print_r($arry);
   // echo $arry['k4']."---";
 //向客户端返回数据
//echo "1";
 $r9=array();
 foreach ($arry as $r8=>$r7){
 
 $r9[]=array($r8,$r7);
 }
  // print_r($r9);
   // $arry['optiontime']=time();//添加操作时间
   
  //  ECHO "chenggong";
   $jk0=iamge_opt::tiaoxing($r9); 
    $jk1=iamge_opt::zhexiantu($r9);
	write_json::create_massage(array("1","s","k","image",$jk0.".png",$jk1.".png"));
    

$at=array("username"=>"sd","data0"=>"image/image/".$jk0.".png","data1"=>"image/image/".$jk1.".png","optiontime"=>time());

$m=new mysqli_('username');
	
    $m->insert(array("insert into temp_tubiao",$at));
    $m->mysql_c();
	//$m->
	
	
	
	}
	
	
	
	}