<?php
//$r=array();

include_once 'lib/php_lib/checkinput.php';
include_once 'session/session_build.php';
include_once 'session/massage.php';
include_once 'session/aadmi.php';
include_once 'mysql/mysqli.php';
include_once 'session/yazhengid.php';
include_once 'lib/network/socket_tcp.php';


yazhengid();


work_thread();
function work_thread(){
  $pici=$_POST["pi"];
 
 //echo empty($pici);
 if(!is_numeric($pici)){
 
 write_json::create_massage(array("username","geshi","string","1","1","1"));
 exit;
 
 }else if(empty($pici)){
 
 write_json::create_massage(array("username","kong","string","1","1","1"));
 exit;
 
 }
 
 
	$username=session_data::getsession(session_id(),'username');
if($username=="you"){
exit;
}
	
  $cash=session_data::getsession(session_id(),'cash');
	if(!empty($cash))
	{$time=$cash;
		if(time()-$time>3){
			
			//echo "dd1";
			$dr=new updatedata($username);
		$dr->start();
		//$_SESSION['cash']=time();
		$_SESSION['cash']=time();	
		}else{
			
			//echo "dsd4";
			$rr=new mythread($username,$pici);
			$rr->start();
			$_SESSION['cash']=time();
		}
		
		
	}else{
		//echo "d5";
		//threa_update($up);
		//$dr=new updatedata($_SESSION['username']);
		$dr=new updatedata($username);
		$dr->start();
		$_SESSION['cash']=time();
		
	}
	

	
	
	

exit;	
	
	
}



//查询数据裤
class mythread extends Thread{
	private  $mysql;
	private $name;
	private  $pici;
	public function __construct($name,$pici){
        $this->name='chen';
		$this->pici='110';
		
	}

	public function run(){
		//echo "dsf55";
      $mysql=new mysqli_("username");
		//$result=$mysql->read("select username,nickname,age,phone,mail,sex,rank_,gexing,headp from userdata where username ="."'".$this->name."' and pici=".$this->pici.";");

	//	$er=$mysql->search_m($result,"username,nickname,age,phone,mail,sex,rank_,gexing,headp");
		
		$result=$mysql->read("select nickname,rank_,gexing,headp from userdata where username ="."'".$this->name."' and pici=".$this->pici.";");

		$er=$mysql->search_m($result,"nickname,rank_,gexing,headp");
//print_r($er);
//echo "ds";
		if(count($er)>0){
//echo "sds";
			//$this->result=$er;
			//echo $er["username"];
		$xml=new write_json();
		$xml->name=array("brody"=>$er['un0']);
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
	$shenqing=$shenqing.$xml->prase_xml1(array("name"=>"initdata","data"=>$this->username,"type"=>2),"body");
 $shenqing=$xml->getft()."<root>".$shenqing."</root>";
	$socket=new  socket_tcp("192.168.0.105", 3000);
    $socket->socket_tcp_send($shenqing);
 	$r= $socket->socket_tcp_rec1(500);
     $e=strpos($r,"#");
 $r= substr($r, 0,$e);

 //向客户端返回数据
//echo "1";
    $xml= new massage_xml();
    $xml->initxml($r);
   // echo "3";
    $arry=$xml->z_prese_array();
    //print_r($arry);
    //echo  $arry['data'];
    if($arry['data']=='False'){
   // echo "123456";
    exit;
    }
    
    $f=array();
    $f=$arry;
    unset($f["createtime"]);
    unset($f["xuhao"]);
   $f= array_values($f);
    $pici=rand(100,10000);
    $f['pici']=$pici;
    $xml=new write_json();
		$xml->name=array("brody"=>$f);
		$xml->prase_json();
		echo $xml->getresult();
    
    
    $arry['optiontime']=time();//添加操作时间
$arry["pici"]=$pici;


	$m=new mysqli_('username');
	
    $m->insert(array("insert into userdata",$arry));
    $m->mysql_c();
	//$m->
	
	
	
	}
	
	
	
	}
