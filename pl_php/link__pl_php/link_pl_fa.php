<?php
/*
 * 
 * @发表评论
 * @对文章
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


link_pl_fa();
	function link_pl_fa(){
	
		if(isset($_POST['xml'])&&($_POST["xml"]=="")){
		
		
		exit;
		}
		$xml= new massage_xml();
        $xml->initxml($_POST['xml']);
        $xmlobj=$xml->z_prase_array();
        
	    if(check_html($xmlobj['link_id'])&&($xmlobj['link_id']=="")){
		//error_dump($str);
		write_json::create_massage(array("username","bucunzai","string","1","1","1"));
		exit();
		
		
	    }
	   if(check_html($xmlobj['owe'])&&($xmlobj['owe']=="")){
		//error_dump($str);
		write_json::create_massage(array("username","bucunzai","string","1","1","1"));
		exit();
       }
	   if(check_html($xmlobj['pant'])&&($xmlobj['pant']=="")){
		//error_dump($str);
		write_json::create_massage(array("username","bucunzai","string","1","1","1"));
		exit();
		
		
	   }
	   if(check_html($xmlobj['pant_id'])&&($xmlobj['pant_id']=="")){
		//error_dump($str);父辈的id
		write_json::create_massage(array("username","bucunzai","string","1","1","1"));
		exit();
		
		
	   }
	if(check_html($xmlobj['super_id'])&&($xmlobj['super_id']=="")){
		//error_dump($str);父辈的id
		write_json::create_massage(array("username","bucunzai","string","1","1","1"));
		exit();
		
		
	   }
	if(check_html($xmlobj['data_id'])&&($xmlobj['data_id']=="")){
		//error_dump($str);父辈的id
		write_json::create_massage(array("username","bucunzai","string","1","1","1"));
		exit();
		
		
	   }
	   //[wen_id],[owername],[parntname],[data],[pl_id],xu,cha)
	   	$post=array("name"=>"linkpl","name1"=>"fabiaopl","username"=>$username);
	   	$post["wen_id"]=$xmlobj['link_id'];
	   	$post["owername"]=$xmlobj['owe'];
	   	$post["parntname"]=$xmlobj['pant'];
	   	//$post["xu"]=$xmlobj['pant_id'];
	   	$post["pl_id"]=$xmlobj['super_id'];
	   	$post["data"]=$xmlobj['data_id'];
	   	//$post["cha"]="1";
	   	
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