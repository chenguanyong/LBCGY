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


site_pl_fa();
	function site_pl_fa(){
	
		if(isset($_POST['xml'])&&($_POST["xml"]=="")){
		
		
		exit;
		}
		$xml= new massage_xml();
        $xml->initxml($_POST['xml']);
        $xmlobj=$xml->z_prese_array();
        
        print_r($xmlobj);
       
	    if(check_html($xmlobj['site_id'][0])&&($xmlobj['site_id'][0]=="")){
		//error_dump($str);
		write_json::create_massage(array("username","bucunzai","string","1","1","1"));
		exit();
		
		
	    }
	   if(check_html($xmlobj['owe'][0])&&($xmlobj['owe'][0]=="")){
		//error_dump($str);
		write_json::create_massage(array("username1","bucunzai","string","1","1","1"));
		exit();
       }

	   if(check_html($xmlobj['pant'][0])&&($xmlobj['pant'][0]=="")){
		//error_dump($str);父辈的id
		write_json::create_massage(array("username3","bucunzai","string","1","1","1"));
		exit();
		
		
	   }
	if(check_html($xmlobj['super_id'][0])&&($xmlobj['super_id'][0]=="")){
		//error_dump($str);父辈的id
		write_json::create_massage(array("username4","bucunzai","string","1","1","1"));
		exit();
		
		
	   }
	if(check_html($xmlobj['data'][0])&&($xmlobj['data'][0]=="")){
		//error_dump($str);父辈的id
		write_json::create_massage(array("username5","bucunzai","string","1","1","1"));
		exit();
		
		
	   }
	   
	   
	   //[wen_id],[owername],[parntname],[data],[pl_id],xu,cha)
	   	$post=array("name"=>"sitepl","name1"=>"fabiaopl");
	   	$post["wen_id"]=$xmlobj['site_id'];//网站id
	   	$post["owername"]=$xmlobj['owe'];//自己的用户名
	   	$post["parntname"]=$xmlobj['pant'];//父辈的用户名
	   	//$post["xu"]=$xmlobj['pant_id'];
	   	$post["pl_id"]=$xmlobj['super_id'];//评论id
	   	$post["data"]=$xmlobj['data'];//评论内容
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