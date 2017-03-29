<?php
include_once 'lib/php_lib/checkinput.php';
include_once 'session/session_build.php';
include_once 'session/massage.php';
include_once 'session/aadmi.php';
include_once 'mysql/mysqli.php';
include_once 'session/yazhengid.php';
include_once 'userconter/usertool.php';


//echo "sdafadsfas";

//��֤
//yazhengid();
//��������
//echo "woshi";
//$rr=new mythread("chen");
			//$rr->start();

work_thread1w();
function work_thread1w(){
	$xml_data=array();
	$user_data;
	if (isset($_POST['xml'])&&($_POST['xml']!='')){
	$user_data=$_POST['xml'];
	
	}else{
		//error_dump("");
		write_json::create_massage(array("xml","bucunzai","string","1","1","1"));
		exit();
		
	}
		
	$xml=new massage_xml();
	$xml->initxml($user_data);
	$xmlobj=$xml->xml_prase_array();
	//print_r($xmlobj);
//	echo $_SESSION['ya'];
//	echo strlen($xmlobj['un1']['data1']);
	if(check_html($xmlobj['un1']['data'])&&($xmlobj['un1']['data']=="")){
		//error_dump($str);
		write_json::create_massage(array("username","bucunzai","string","1","1","1"));
		exit();
		
		
	}else if(check_html($xmlobj['un2']['data'])&&($xmlobj['un2']['data']=="")){
		
		//error_dump($str);
		write_json::create_massage(array("power","bucunzai","string","1","1","1"));
		exit();
		
		
	}/*else if(check_html($xmlobj['un3']['data3'])&&($xmlobj['un3']['data3']!= session_data::getsession(session_id(),'ya'))){
		
		//error_dump($str);
		write_json::create_massage(array("yazhen","bucunzai","string","1","1","1"));
		exit();
		
		
	}*/

		//threa_update($up);
		//$dr=new updatedata($_SESSION['username']);
		$dr=new updatedata($xmlobj['un1']['data']);
		$dr->start();
		//$_SESSION['cash']=time();
		//ִ�и���
	
	
	
	

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
		$result=$mysql->read("select name,price,shop_link,follow,username from temp_shop  where pici ='123'");

		$er=$mysql->search_mc($result,"name,price,shop_link,follow,username");
//print_r($er);
//echo "ds";
		if(count($er)>0){
//echo "sds";
			//$this->result=$er;
		$er['hand']=array("size00"=>count($er));	
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
		//echo "sdsdsd";
		$xml=new massage_xml();
	$shenqing=$xml->prase_xml1(array("name"=>1,"error"=>2,"handle_type"=>3),"handle");
	$shenqing=$shenqing.$xml->prase_xml1(array("name"=>"shop","data"=>$this->username,"type"=>2),"body");
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
 //   print_r($arry);
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

  
 
 
    
   //print_r($f);
    //array_values($f);
    $fp=array();
  //  echo  "sdfs3";
    FOREACH($arry as $rtt=>$value){
    $fp[$rtt]=array("tp_link"=>$value["name00"],"title"=>$value["name00"],"miao"=>$value["name00"],"price"=>$value['price00'],"bb_link"=>$value['shop_link00']);
    
    }
  //  print_r($fp);
  //   echo  "sdfs4";
  //   
     //
     
     
     
   $mysql=new mysqli_("linbei_shop") ;
   
   $where=" where ";
   if($arry['un0']['assortment100']!=""){
   
   $where=$where." assortment1="."'".$arry['un0']['assortment100']."'";
   
   }
	if($arry['un0']['assortment200']!=""){
   
   $where=$where." and assortment2="."'".$arry['un0']['assortment200']."'";
   
   }
	if($arry['un0']['assortment300']!=""){
   
   $where=$where." and assortment3="."'".$arry['un0']['assortment300']."'";
   
   }
 //  echo $where;
   
  $resoo= $mysql->read("select id,brand,prices,condition1 from checkmu ".$where);
  $d= $mysql->search_m($resoo, "id,brand,prices,condition1");
     $mysql->mysql_c();
     $rq=array();
     foreach ($d as $value){
     foreach ($value as $key=> $fds){
     
   $sa=  explode(";", trim($fds));
   $json=new    write_json();
   $ar_json= $json->array_json($sa);
  $rq[$key]=$ar_json;
  
     }
     
     }
   // 
   $json=new    write_json();
  $tiaojian= $json->prase_json3($rq);
//print_r($rq);
     
     
    
     
    // $fp["classify"]=$rq;//分类
     
    $xml=new write_json();
    $size=count($f);
    $yeshu="";
    $temp=ceil($size/20);
    
    
    if($size>20){
    $size=20;
    
    }
   
    
    
    $fp['hand']=array("size"=>$size,"pici"=>$pici,"yeshu"=>$temp);
		$xml->name=$fp;
		$xml->prase_json4($tiaojian);
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

	$m=new mysqli_('username');
	FOREACH($this->data_array as $rtt){
		$rtt['optiontime00']=$gp;
		$rtt['username00']="chen";
		$rtt['xuhao00']="001";
		$rtt['pici00']=$this->pici;
		$m->insert1(array("insert into temp_shop ",$rtt));
	}
    
    $m->mysql_c();
	
	
	
	}
	
	
	
	
	
	}
