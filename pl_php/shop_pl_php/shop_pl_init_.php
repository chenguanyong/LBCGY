<?php
/*
 * 
 * @评论初始化
 * @对普通用户
 * */

include_once 'lib/php_lib/checkinput.php';
include_once 'session/session_build.php';
include_once 'session/massage.php';
include_once 'session/aadmi.php';
include_once 'mysql/mysqli.php';
include_once 'session/yazhengid.php';
include_once 'lib/php_lib/error.php';
include_once 'lib/network/socket_tcp.php';
include_once 'conf/conf.php';

shop_pl_init_();

	function shop_pl_init_(){
	
		if(isset($_POST['shop_id'])&&($_POST["shop_id"]=="")){
		
		
		exit;
		}
		
	   //[wen_id],[owername],[parntname],[data],[pl_id],xu,cha)
	   	$post=array("name"=>"shoppl","name1"=>"initpl","username"=>$username);
	   	$post["wen_id"]=$_POST['shop_id'];
	   	
	   	
		$xml=new massage_xml();
	    $shenqing=$xml->prase_xml1(array("name"=>1,"error"=>2,"handle_type"=>3),"handle");
	    $shenqing=$shenqing.$xml->prase_xml1($post,"body");
        $shenqing=$xml->getft()."<root>".$shenqing."</root>";
	    $socket=new  socket_tcp("192.168.0.105", 3000);
        $socket->socket_tcp_send($shenqing);
	    $r= $socket->socket_tcp_rec1(1500);

        $e=strpos($r,"#");
        $r= substr($r, 0,$e);

       
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
    
    
 
    
     $f=array();
     $f=$arry;
     $pici=rand(0, 10000);
     $ftr=new link_sql($f,$pici);
     $ftr->start();

     $fp=array();
 
    FOREACH($arry as $rtt=>$value){
   // $fp[$rtt]=array("si_name"=>$value["entry_name00"],"si_www"=>$value["link00"],"si_dianjilian"=>$value["dianjilian00"],"si_riqi"=>$value['createtime00'],"si_linknum"=>$value['linknum00']);
    //[id],[owername],[parntname],[data],[createtime],[state],[mas_type] ,tj,hf,pl_id
     $fp[$rtt]=array("pl_id"=>$value['id'],"owe"=>$value['owername'],"parnt"=>$value['parntname'],"data"=>$value['data'],"riqi"=>$value['createtime'],"tj"=>$value['tj'],"type"=>$value['mas_type']);
    }
 
     
     
    
     
  
     
    $xml=new write_json();
    $size=count($f);
    $linksize=$size;
    $yeshu="";
    $temp=ceil($size/20);
    
    
    if($size>20){
    $size=20;
    
    }
   
    
    
    $fp['hand']=array("size"=>$size,"pici"=>$pici,"yeshu"=>$temp,"linksize"=>$linksize);
		$xml->name=$fp;
		$xml->prase_json();
		echo $xml->getresult();
    
 // echo  "sdfs5";
	
	
	
	}
	
	
	
	
	class link_sql extends Thread{
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
		$rtt['pici00']=$this->pici;
		$rtt['data100']=$rtt['data'];
		$rtt['id100']=$rtt['id'];
		unset($rtt['data']);
		unset($rtt['id']);
		$red=array_values($rtt);
		$m->insert1(array("insert into shoppl ",$red));
	}
    
    $m->mysql_c();
	
	
	
	}
	
	
	
	
	
	}
	exit;