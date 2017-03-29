<?php
/*
 * 
 * @点击回复
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

wen_pl_hf();

	function wen_pl_hf(){
	
		if(isset($_POST['hf'])&&($_POST["hf"]=="")){
		
		
		exit;
		}
		
	   //[wen_id],[owername],[parntname],[data],[pl_id],xu,cha)
	   	$post=array("name"=>"wenpl","name1"=>"updatehf","username"=>$username);
	   	$post["hf"]=$_POST['hf'];
	   
	   	
		$xml=new massage_xml();
	    $shenqing=$xml->prase_xml1(array("name"=>1,"error"=>2,"handle_type"=>3),"handle");
	    $shenqing=$shenqing.$xml->prase_xml1($post,"body");
        $shenqing=$xml->getft()."<root>".$shenqing."</root>";
	    $socket=new  socket_tcp("192.168.0.105", 3000);
        $socket->socket_tcp_send($shenqing);
	    $r= $socket->socket_tcp_rec1(299);

        $e=strpos($r,"#");
        $r= substr($r, 0,$e);

        $xml= new massage_xml();
        $xml->initxml($r);
  
        $result=$xml->z_prase_array();

        if($result["data"]=="true"){
    
    	write_json::create_massage(array("xml","true","string","1","1","1"));
    	
        }else{
    
         write_json::create_massage(array("xml","false","string","1","1","1"));
        }
    
    
	}
	exit;