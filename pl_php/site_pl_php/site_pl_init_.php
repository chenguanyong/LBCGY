<?php
/*
 * 
 * @评论初始化
 * @对网站初始化
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

site_pl_init_();

	function site_pl_init_(){
	
		if(isset($_POST['site_id'])&&($_POST["site_id"]=="")){
		
		
		exit;
		}
		$username="dd";
	   //[wen_id],[owername],[parntname],[data],[pl_id],xu,cha)
	   	$post=array("name"=>"sitepl","name1"=>"initpl","username"=>$username);
	   	$post["wen_id"]=$_POST['site_id'];
	   	
	  
	   	
	   //	exit;
	   	
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
   
       $arry=$xml->xml_prase_array();
      // echo "chenguanyong".PHP_EOL;
 //print_r($arry);
       $f=array();

    
    
        if($arry['un10']['data00']=="false"){
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
      
     //print_r($f);
    FOREACH($arry as $rtt=>$value){
   // $fp[$rtt]=array("si_name"=>$value["entry_name00"],"si_www"=>$value["link00"],"si_dianjilian"=>$value["dianjilian00"],"si_riqi"=>$value['createtime00'],"si_linknum"=>$value['linknum00']);
    //[id],[owername],[parntname],[data],[createtime],[state],[mas_type] ,tj,hf,pl_id
     $fp[$rtt]=array("pl_id"=>$value['pl_id00'],"owe"=>$value['owername00'],"parnt"=>$value['parntname00'],"data"=>$value['data00'],"riqi"=>$value['createtime00'],"tj"=>$value['tj00'],"type"=>$value['mas_type00'],"hf"=>$value['hf00']);
    }
/* [createtime00] => 1925-5-2 0:00:00
            [data00] => chenguanyong
            [hf00] => 
            [id00] => 0
            [mas_type00] => 0
            [owername00] => f
            [parntname00] => sys
            [pl_id00] => 
            [state00] => 0
            [tj00] => 
     
     
    */
     
  
     
    $xml=new write_json();
    $size=count($f);
    $linksize=$size;
    $yeshu="";
    $temp=ceil($size/20);
    
    
    if($size>20){
    $size=20;
    
    }
   
    
    
    $fp['hand']=array("size"=>$size,"pici"=>$pici,"yeshu"=>$temp,"linksize"=>$linksize);
    
   // print_r($fp);
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
		//echo "d";
		//print_r($rtt);
		$rtt['pici00']=$this->pici;
		$rtt['data100']=$rtt['data00'];
		$rtt['optiontime00']=time();
		//$red=array_values($this->data_array);
		unset($rtt['data00']);
		unset($rtt['id00']);
		//$red=array_values($rtt);
		//print_r($rtt);
		
		//echo "------------------";
		$m->insert1(array("insert into sitepl ",$rtt,array(0,1,1,0,0,1,1,1,1,0,1)));
	}
    
    $m->mysql_c();
	
	
	
	}
	
	
	
	
	
	}
	exit;