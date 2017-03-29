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
//echo "sdsd";
jump();
function jump(){

//$_GET['ia'];
$time=time();
if (isset($_GET['ia'])&&($_GET['ia']!='')){
	$daima=$_GET['ia'];
	//echo "sdfs333";
	}else{
		//error_dump("");
	//	write_json::create_massage(array("xml","bucunzai","string","1","1","1"));
	//echo "sdf";
		exit();
		
	}
	
    $mm=new mysqli_("linbei");
    
  echo  $ip=getRealIpAddr();
 $rt=  $mm->read("select  cishu,time from roster where ip='$ip'");
 $result1=$mm->search($rt);  
 if(count($result1)==0){
 echo "k";
 $mm->insert0("INSERT INTO `linbei`.`roster` ( `ip`, `num`, `time`, `cishu`) values ( '$ip', '$daima', '$time', '0');");
 
 
 }else {
 $ti=$result1[0][1];
 
 if($time-$ti>10){
 echo "kl";
 $ty=(int)$result1[0][0]+1;
 $mm->insert0("UPDATE  `linbei`.`roster` SET`num` = '$daima',`time` = '$time',`cishu` = '$ty' WHERE `ip` = '$ip' ;");
 }else {
 
 echo "11";
 exit;//恶意链接
 }
 
 
 }
 
 
   
    $result=$mm->read("select link from wordbooks where num='$daima'");	
    if($result==false){
    $mm->mysql_c();
   // echo "dsd";
     exit;
    }	
$re=array();
$re=$mm->search($result);
$mm->mysql_c();
//rintf($re);
if(count($re)==0){exit;}
    if($re[0][0]!=""){
   $str="location:http://".$re[0][0];
    header($str);
    }
    else{
    exit;
    
    }



}

