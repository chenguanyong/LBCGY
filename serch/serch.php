<?php
include_once 'lib/network/socket_tcp.php';
include_once 'session/massage.php';
include_once 'lib/php_lib/checkinput.php';
include_once 'lib/php_lib/error_ex.php';
//include_once '';
//echo $_GET['g'];
//echo $_POST['keyword'];
serch();
function serch(){
if(!isset($_POST['keyword']))	{
	write_json::create_massage(array("keyword","no null","string","1","1","1"));
	exit();
	
}
$key=$_POST['keyword'];
$xin=array("handle"=>array("name"=>"d","error"=>"d","handle_type"=>"d"),"bordy"=>array("name"=>"keyword","data"=>$key,"type"=>"string"));
$xml=new massage_xml();
	$user_data=	$xml->array_prase_xml2($xin);
	$socket;
	try{
		
	$socket=new socket_tcp("127.0.0.1", 3000);	
		
	}catch (error_exp $rt){
		
	$rt->err_obj1->socket_close();	
	exit();	
	}
	if($socket->socket_tcp_send($user_data)==false){
		
		echo "dd";
}
	
	$rec_data=null;
if($rec_data=$socket->socket_tcp_rec()==false){
	
	$socket->socket_tcp_close();
	exit();
}	

 $e=strpos($$rec_data,'#');
   $r1= substr($rec_data, 0,$e);
   
$xml_json=new massage_xml1($rec_data);
echo $xml_json->xml_prase_json();
	exit;
}


include_once 'lib/php_lib/checkinput.php';
include_once 'session/session_build.php';
include_once 'session/massage.php';
include_once 'session/aadmi.php';
include_once 'mysql/mysqli.php';
include_once 'session/yazhengid.php';
include_once 'lib/network/socket_tcp.php';
include_once 'userconter/usertool.php';
yazhengid();
//��������
function work_thread(){
if(!isset($_POST['xml'])&&$_POST['xml']==""){

write_json::create_massage(array("xml","cuowu","string","1","1","1"));
exit;

}	
$xml=new massage_xml();
$xml->initxml($_POST['xml']);
$re_array=$xml->z_prese_array();
	
			
			//ִ�и���
$dr=new updatedata($re_array['data']);
$dr->start();
		
		
	

	
	
	

exit;	
	
	
}//查询数据裤
class mythread extends Thread{
	private  $mysql;
	private $name;
	public function __construct($name){
        $this->name=$name;
		$this->mysql=new mysqli_();
		
	}

	public function run(){

		$result=$this->mysql->read("select * from userdata where username =".$this->name);

		$er=$this->mysql->search($result);

		if(count($er)>0){

			//$this->result=$er;
		$xml=new write_json();
		$xml->name=array("body"=>$er);
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
	$shenqing=$shenqing.$xml->prase_xml1(array("name"=>"initdata","data"=>$this->username,"type"=>2),"body");
	echo $shenqing=$xml->getft()."<root>".$shenqing."</root>";
	$socket=new  socket_tcp("192.168.0.105", 3000);
    $socket->socket_tcp_send($shenqing);
    echo 	$r= $socket->socket_tcp_rec();
     $e=strpos($r,"#");
echo $r= substr($r, 0,$e);

$xml1=new massage_xml1();
$xml1->initxml($r);
echo $xml1->prase_json1(); //向客户端返回数据

    $xml= new massage_xml();
    $xml->initxml($r);
    $arry=$xml->xml_prase_array();
 $unm=rand(0,9999);   
$fi=new fenfadata($arry,$unm);
$fi->start();
$ree=intval($arry['un0'][0]);
$arry['optiontime']=time();//添加操作时间
$m=new mysqli_('username');

$_SESSION['unm']=$unm;
for($i=1;$i<$ree+1;$i++){
	
	$eer=$arry['un'+i];$eer['optiontime']=time();
	$eer['bianhao']=i;
	$eer['unm']=$unm;
    $m->insert(array("insert into temp_shop",$eer));
}
	 $m->mysql_c();
	
	}
	
	
	
	}
	class fenfadata extends  Thread{
	public $arr;
	public $unm;
	public function __construct($arr,$unm){
	$this->arr=$arr;
	$this->unm=$unm;
	
	}
	
	
	function run(){
$r=	intval($this->arr['un0'][0])/10;
	if($r==0)
	{$this->arr['un0'][1]=1;}
	else{
	
	$this->arr['un0'][1]=$r+1;
	}
	$this->arr['un0'][2]=$this->unm;
	$fr=array_chunk($this->arr,10);
	
	$xml=new write_json();
	$xml->name=$fr[0];
	$xml->prase_json();
	echo $xml->getresult();
	
	}
	
	}

