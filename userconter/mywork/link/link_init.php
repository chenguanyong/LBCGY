<?php
//初始化link
include_once 'lib/php_lib/checkinput.php';
include_once 'session/session_build.php';
include_once 'session/massage.php';
include_once 'session/aadmi.php';
include_once 'mysql/mysqli.php';
include_once 'session/yazhengid.php';
include_once 'userconter/usertool.php';
//echo "sd";
//$page=$_POST["pici"];
//��֤
//yazhengid();
 //echo $username=session_data::getsession(session_id(),'username');
//��������
//echo "woshi";
work_thread();
function work_thread(){
//$username=session_data::getsession(session_id(),'username');
$username="chenguan";

//echo "sds".$username."121";


//echo "ssss";


$time=@session_data::getsession(session_id(),'c6');
	if(isset($time))
	{
		if(time()-$time>3600){
			
			//ִ�и���
			//$dr=new updatedata($_SESSION['username']);
			$dr=new updatedata($username);
		$dr->start();
		//$_SESSION['cash']=time();
		$_SESSION['c6']=time();	
		}else{
			//echo "ds";
			//ִ�л��棬����ݿ���鿴��Ϣ
			//chaxunsql($ca);
			//$rr=new mythread($_SESSION['username']);
	$page=$_POST["pici"];
			$pici=((int)$_POST["page"]-1)*15;
			$rr=new mythread($username,$page,$pici,$_POST['type']);
			$rr->start();
			$_SESSION['c6']=time();
		}
		
		
	}else{
		//threa_update($up);
		//$dr=new updatedata($_SESSION['username']);
		//echo "w222";
		$dr=new updatedata($username,$_POST['type']);
		$dr->start();
		$_SESSION['c6']=time();
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
	private $page;
	private $type;
	public function __construct($name,$page,$pici,$type){
        $this->name=$name;
		$this->page=$page;
		$this->pici=$pici;
		$this->type=$type;
		
	}

	public function run(){
$mysql=new mysqli_("username");
$result ="";
if($this->type=="5"){
		$result=$mysql->read("SELECT `linknum`,`site`,`acount`,`createtime`,`mylink`,`norz`,`notask`,`www` FROM`linbei_work`.`mylink` where username='".$this->name."' and pici =".$this->pici." LIMIT 5");
}else{

$result=$mysql->read("SELECT `linknum`,`site`,`acount`,`createtime`,`mylink`,`norz`,`notask`,`www` FROM`linbei_work`.`mylink` where username='".$this->name."' and pici =".$this->pici." LIMIT ".$this->page.", 20 ;");
	
}
		$er=$mysql->search_mc($result,"linknum,site,acount,createtime,mylink,norz,notask,www");
//print_r($er);
//echo "ds";
		if(count($er)>0){
//echo "sds";
			//$this->result=$er;
		$er['hand']=array("size00"=>count($er),"pici"=>"0","yeshu"=>"l");	
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
	private $type;
	function __construct($name,$type){
	$this->t="ds";
	$this->username=$name;
	$this->type=$type;
	}
	function run(){
		//echo "sdsdsd";
		$xml=new massage_xml();
	$shenqing=$xml->prase_xml1(array("name"=>1,"error"=>2,"handle_type"=>3),"handle");
	$shenqing=$shenqing.$xml->prase_xml1(array("name"=>"mylink","data"=>$this->username,"type"=>$this->type),"body");
 $shenqing=$xml->getft()."<root>".$shenqing."</root>";
	$socket=new  socket_tcp("192.168.0.105", 3000);
    $socket->socket_tcp_send($shenqing);
	$r= $socket->socket_tcp_rec1(3000);
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
  // print_r($arry);
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

  
 /*
  * <un11><acount11>sdfas               </acount11><createtime11>2016-8-9 16:44:19</createtime11><mylink11>1</mylink11><norz11>0</norz11><notask11>1</notask11><site11>kk4                 </site11><www11>sdfs                          </www11></un11>
  * 
  * 
  * */
 
    
   //print_r($f);
    //array_values($f);
    $fp=array();
  //  echo  "sdfs3";
    FOREACH($arry as $rtt=>$value){
    $fp[$rtt]=array("si_name"=>$value["site00"],"si_www"=>$value["www00"],"si_acunt"=>$value["acount00"],"si_riqi"=>$value['createtime00'],"si_renzheng"=>$value['norz00'],"si_linknum"=>$value['linknum00']);
    
    }
 
     
     
    
     
    // $fp["classify"]=$rq;//分类
     
    $xml=new write_json();
    $size=count($f);
    $yeshu="";
    $temp=ceil($size/15);
    
    
    if($size>20){
    $size=20;
    
    }
   
    
    
    $fp['hand']=array("size"=>$size,"pici"=>$pici,"yeshu"=>$temp);
		$xml->name=$fp;
		$xml->prase_json($tiaojian);
		echo $xml->getresult();
    
 // echo  "sdfs5";
	
	
	
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

	$m=new mysqli_('linbei_work');
	FOREACH($this->data_array as $rtt){
		$rtt['optiontime00']=$gp;
		$rtt['username00']="chen";
		$rtt['xuhao00']="001";
		$rtt['pici00']=$this->pici;
		$m->insert1(array("insert into mylink ",$rtt));
	}
    
    $m->mysql_c();
	
	
	
	}
	
	
	
	
	
	}