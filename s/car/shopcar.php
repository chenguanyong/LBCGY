<?php
//加入购物车


include_once 'lib/php_lib/checkinput.php';
include_once 'session/session_build.php';
include_once 'session/massage.php';
include_once 'session/aadmi.php';
include_once 'mysql/mysql.php';
include_once 'session/yazhengid.php';
include_once 'userconter/usertool.php';
include_once 'lib/image_php/iamge_create.php';
include_once 'mysql/writesql.php';
include_once 'conf/conf.php';
include_once 'session/massage.php';
include_once 'home/s_home/s_home_p/home.php';
include_once 'session/yazhengid.php';
yazhengid();
function addcar(){

	$username="";
	$shop_num=$_POST["num"];
	
	$xml=new massage_xml();
	$xml->initxml($_POST['xml']);
    $arr=	$xml->z_prese_array();
	
    $mysql=new mysqli_("username");

    $result=$mysql->read("SELECT `shop_name`,attr,size FROM username`.`shop_car` where username=' ".$username."and num='".$shop_num."'"); 
    $r=$mysql->search($result);
    if($r[0]==""){
    
    $mysql->insert0("INSERT INTO `username`.`shop_car` (`num`,`shop_name`,`prices`,`attr`,`size`,`dianpu`,`time`,`username`) VALUES('num','shop_name','prices', 'attr','size','dianpu','time','username')");//charu
  	
    	
    	
    
    
    }else{
    
   $ree= explode(";", trim($r[1]));
  foreach ($ree as $v){
    if($v==""){break;}  
  
  $ree= explode("=", trim($v));
  
  
  } 
  
  if($f){
  $mysql->insert0("INSERT INTO `username`.`shop_car` (`num`,`shop_name`,`prices`,`attr`,`size`,`dianpu`,`time`,`username`) VALUES('num','shop_name','prices', 'attr','size','dianpu','time','username')");//charu
  
  }else{
  $mysql->insert0("UPDATE `username`.`shop_car` SET `size` = 'size' WHERE  num =' ".$num."'");
  
  }
   
   
   
   
   
    }
    
    $mysql->mysql_c();
exit; 
}