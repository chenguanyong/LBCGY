<?php

include_once 'lib/php_lib/checkinput.php';
include_once 'session/session_build.php';
include_once 'session/massage.php';
include_once 'session/aadmi.php';
include_once 'mysql/mysqli.php';
include_once 'session/yazhengid.php';
include_once 'lib/php_lib/error.php';
include_once 'lib/network/socket_tcp.php';
include_once 'lib/php_lib/brose.php';


function init(){

    if (isset($_GET['ia'])&&($_GET['ia']!='')){
        $daima=$_GET['ia'];
    	if(strlen($daima)>6){exit;}
    	
	//echo "sdfs333";
	     }else{
		//error_dump("");
	//	write_json::create_massage(array("xml","bucunzai","string","1","1","1"));
	//echo "sdf";
		  exit();
		
	   }
	
      $ip=getRealIpAddr();
      $rt=  $mm->read("select  cishu,time from roster where ip='$ip'");
      $result1=$mm->search($rt);  
      $mm->mysql_c();
 

      if(count($result1)==0){	
       exit;	
       }
        else{

          $ti=$result1[0][1];
 
           if($time-$ti>10){
// echo "kl";
// $ty=(int)$result1[0][0]+1;
 //$mm->insert0("UPDATE  `linbei`.`roster` SET`num` = '$daima',`time` = '$time',`cishu` = '$ty' WHERE `ip` = '$ip' ;");
           }else {
 
                   echo "11";
                   exit;//恶意链接
          }


        }

          $xml=new massage_xml();
	      $shenqing=$xml->prase_xml1(array("name"=>1,"error"=>2,"handle_type"=>3),"handle");
	      $shenqing=$shenqing.$xml->prase_xml1(array("name"=>"initdata","data"=>$this->username,"type"=>2),"body");
          $shenqing=$xml->getft()."<root>".$shenqing."</root>";

 
          try{
           $socketudp=new socket_udp("192.168.0.105", 3000);
          }catch (error_exp $g){
 
            exit;
 
         }
          $socketudp->socket_write($shenqing);
 
         exit;
   }