<?php
include_once 'lib/php_lib/checkinput.php';
include_once 'session/session_build.php';
include_once 'session/massage.php';
include_once 'session/aadmi.php';
include_once 'mysql/mysqli.php';
include_once 'session/yazhengid.php';
include_once 'userconter/usertool.php';
//echo "sdsdsd";
//��֤
yazhengid();
 //echo $username=session_data::getsession(session_id(),'username');
//��������
//echo "woshi";
work_thread();
function work_thread(){
$username=session_data::getsession(session_id(),'username');
if($username=="you"){
exit;
}

$time=session_data::getsession(session_id(),'cash1');
	if(!empty($time))
	{
		if(time()-$time>360){
			
			
			$dr=new updatedata($username);
		$dr->start();
		$_SESSION['cash1']=time();
			
		}else{
			
			$rr=new mythread($username);
			$rr->start();
			$_SESSION['cash1']=time();
		}
		
		
	}else{
		
		$dr=new updatedata($username);
		$dr->start();
		$_SESSION['cash1']=time();
		
	}
	

	
	
	

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
$mysql=new mysqli_("username");
		$result=$mysql->read("select balance,integral from finance_temp where username ="."'".$this->name."' limit 1;");

		$er=$mysql->search_m($result,"balance,integral");
//print_r($er);
//echo "ds";
		if(count($er)>0){
//echo "sds";
			//$this->result=$er;
		$xml=new write_json();
		$xml->name=array("brody"=>$er[0]);
		$xml->prase_json();
		echo $xml->getresult();
			

		}	else {
			


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
	$shenqing=$shenqing.$xml->prase_xml1(array("name"=>"initfinance","data"=>$this->username,"type"=>2),"body");
 $shenqing=$xml->getft()."<root>".$shenqing."</root>";
	$socket=new  socket_tcp("192.168.0.105", 3000);
    $socket->socket_tcp_send($shenqing);
 	$r= $socket->socket_tcp_rec1(390);
     $e=strpos($r,"#");
  $r= substr($r, 0,$e);

 //向客户端返回数据
//echo "1";
    $xml= new massage_xml();
    $xml->initxml($r);
   // echo "3";
    $arry=$xml->z_prese_array();
    
	 if($arry['data']=='False'){
   // echo "123456";
    exit;
    }
    
    
    $f=array();
    $f=$arry;
    unset($f["createtime"]);
    unset($f["xuhao"]);
    array_values($f);
    $xml=new write_json();
		$xml->name=array("brody"=>$f);
		$xml->prase_json();
		echo $xml->getresult();
    
    
    $f['optiontime']=time();//添加操作时间

//print_r($f);

	$m=new mysqli_('username');
	
    $m->insert(array("insert into finance_temp ",$f));
    $m->mysql_c();
	//$m->
	
	
	
	}
	
	
	
	}
