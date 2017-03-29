<?php
/*
 * 
 * @评论初始化
 * @细节
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
site_pl_init1();

	function site_pl_init1(){
	
		if(isset($_POST['site_id'])&&($_POST["site_id"]=="")){
		
		
		exit;
		}
	if(isset($_POST['pl_id'])&&($_POST["pl_id"]=="")){
		
		
		exit;
		}
	   //[wen_id],[owername],[parntname],[data],[pl_id],xu,cha)
	   	$post=array("name"=>"sitepl","name1"=>"initplitem");
	   	$post["wen_id"]=$_POST['site_id'];
	    //$post["pl_id"]=$_POST['pl_id'];
	     $post["pl_id"]=0;
	   	
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
       $f=array();

    
    
        if($arry['un10']['data00']=="kong"){
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
     

     $fp=array();
 
    FOREACH($arry as $rtt=>$value){
   // $fp[$rtt]=array("si_name"=>$value["entry_name00"],"si_www"=>$value["link00"],"si_dianjilian"=>$value["dianjilian00"],"si_riqi"=>$value['createtime00'],"si_linknum"=>$value['linknum00']);
    //[id],[owername],[parntname],[data],[createtime],[state],[mas_type] ,tj,hf,pl_id
     $fp[$rtt]=array("pl_id"=>$value['id00'],"owe"=>$value['owername00'],"parnt"=>$value['parntname00'],"data"=>$value['data00'],"riqi"=>$value['createtime00'],"tj"=>$value['tj00'],"type"=>$value['mas_type00']);
    }
 
   // [id],[owername],[parntname],[data],[createtime],[state],[mas_type] ,tj,hf,cha,xu 
     
    
     
  
     
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
	
	
	
	
	
	exit;