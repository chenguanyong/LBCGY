<?php
include_once 'lib/php_lib/checkinput.php';
include_once 'session/session_build.php';
include_once 'session/massage.php';
include_once 'session/aadmi.php';
include_once 'mysql/mysqli.php';
include_once 'session/yazhengid.php';
include_once 'userconter/usertool.php';

//��֤
yazhengid();
//��������
//echo "woshi";
//$rr=new mythread('chenguan');
			//$rr->start();
work_thread11();
function work_thread11(){
 //echo 	$_POST["pici"];
	if(!isset($_POST["pici"])&&$_POST['pici']==""){
	//echo "dd";
	exit;
	
	
	}
	
	
	
$username=session_data::getsession(session_id(),'username');
$time=session_data::getsession(session_id(),'cash2');
	if($time)
	{
		if(time()-$time>3600){
			
			//ִ�и���
			//$dr=new updatedata($_SESSION['username']);
			$dr=new updatedata($username);
		$dr->start();
		//$_SESSION['cash']=time();
		
		}else{
			//echo "dd";
			//ִ�л��棬����ݿ���鿴��Ϣ
			//chaxunsql($ca);
			//$rr=new mythread($_SESSION['username']);
			$rr=new mythread($username);
			$rr->start();
			$_SESSION['cash2']=time();
		}
		
		
	}else{
		//threa_update($up);
		//$dr=new updatedata($_SESSION['username']);
		//echo "ad";
		$dr=new updatedata($username);
		$dr->start();
		$_SESSION['cash2']=time();
		//ִ�и���
	}
	//�ȴ�ͬ��

	
	
	

exit;	
	
	
}



//查询数据裤
class mythread extends Thread{
	private  $mysql;
	private $name;
	private $cai;
	public function __construct($name){
        $this->name=$name;
		//$this->cai=$cai;
		
	}

	public function run(){
		$pici=2884;
$mysql=new mysqli_("username");
//$pici=$_POST['pici'];

//echo "hhh";
	 	$result=$mysql->read("select `mincheng`,`integral`,`balance`,`state_m`,`amount`,`num_`,`optiontime` from userfinance where username ='chenguan' and pici=2884 limit 5;");

		$er=$mysql->search_m($result,"mincheng,integral,balance,state_m,amount,num_,optiontime");
//print_r($er);
//echo "ds";
		if(count($er)>0){
//echo "sds";
			//$this->result=$er;
			$er['hand']=array("size"=>count($er));
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
		echo "sdsdsd";
		$xml=new massage_xml();
	$shenqing=$xml->prase_xml1(array("name"=>1,"error"=>2,"handle_type"=>3),"handle");
	$shenqing=$shenqing.$xml->prase_xml1(array("name"=>"zhandan","data"=>$this->username,"type"=>2),"body");
 $shenqing=$xml->getft()."<root>".$shenqing."</root>";
	$socket=new  socket_tcp("192.168.0.105", 3000);
    $socket->socket_tcp_send($shenqing);
 	$r= $socket->socket_tcp_rec1(2000);
     $e=strpos($r,"#");
 echo  $r= substr($r, 0,$e);

 //向客户端返回数据
//echo "1";
    $xml= new massage_xml();
    $xml->initxml($r);
   // echo "3";
    $arry=$xml->xml_prase_array();
    print_r($arry);
    
    if($arry["un0"]["data"]=="false"){
    
    exit;
    
    }
    
    
    $f=array();
    $f=$arry;
    $pici=rand(1000, 10000);
    $f['hand']=array("size00"=>count($f),"pici"=>$pici);
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
		$rtt['lasttime00']=$gp;
		//$rtt['username00']="chen";
		//$rtt['xuhao00']="001";
		$rtt['pici00']=$pici;
		$m->insert1(array("insert into userfinance ",$rtt));
	}
    
    $m->mysql_c();
	//$m->
	$_SESSION['cash2']=time();	
	
	
	}
	
	
	
	}
