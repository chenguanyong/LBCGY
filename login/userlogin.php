<?php
//error_reporting(0);
include_once 'lib/php_lib/checkinput.php';
include_once 'session/session_build.php';
include_once 'session/massage.php';
include_once 'session/aadmi.php';
include_once 'mysql/mysql.php';
include_once 'session/yazhengid.php';
include_once 'lib/network/socket_tcp.php';
include_once 'conf/conf.php';
  $username =$_POST['username'];
 $power=$_POST['power'];
 
 // $_COOKIE['id'];
 
 
//yazhengid();

 $yazhen=$_POST["yazhen"];
 //"----------".$_SESSION['ya'];
// $_SESSION['ya'];
/*if(check_ya($yazhen)&&($_SESSION['ya']!=$yazhen)){
	//echo "dafljadslk";
	//write_json::create_massage(array("yazhen","bucunzai","string","1","1","1"));
	exit("wpso");	
	//echo "%%%%%%%%%%%%%%%%";
	//echo "dafljadslk1";
}*/
login();
function login(){
	//echo "rere";
	$user_name="";
	$user_pow="";
	$id="";
if(isset($_POST['username'])&&isset($_POST['power'])){
	$user_name=$_POST['username'];
	$user_pow=$_POST['power'];
//	echo "eeeeeeeeeee1";
}else {
	//echo "eeeeeeeeeee5";
	//echo "";
	//write_json::create_massage(array("username","bucunzai","string","1","1","1"));
	header(conf::$yu."lo/Login.html"."?error=bucunzai")  ;
	exit();
}	
if(!check_html($user_name)){
//write_json::create_massage(array("username","nuhege","string","1","1","1"));
	header(conf::$yu."lo/Login.html"."?error=username")  ;
	//echo "eeeeeeeeeee2";
	exit();	
}else if(!check_power($user_pow)){
	//write_json::create_massage(array("power","buhege","string","1","1","1"));
	//echo "eeeeeeeeeee3";
	header(conf::$yu."lo/Login.html"."?error=powerbu")  ;
	exit();	
	
	
}

	
	
	$my;
	try{
		$xml=new massage_xml();
echo	$user_data=	$xml->array_prase_xml2(array("hand"=>array("name"=>"deng232lu","error"=>"0","handle_type"=>"s"),"body"=>array("name"=>"power","data"=>$user_name,"power"=>$user_pow)), "root");
		
		$socket=new  socket_tcp("192.168.0.105", 3000);
	$socket->socket_tcp_send($user_data);
 $r=	$socket->socket_tcp_rec();
  $e=strpos($r,'#');
$r= substr($r, 0,$e);

		//echo "eeeeeeeeeee";
	}catch (error_exp $fq){
		
		$fq->err_obj1->close();
	}
	//if($user_pow===$my->read()){
		
	//	write_json::create_massage(array("1","1","1","denglu","chenggu","2"));
	//exit();
	//    $_SESSION['username']=$user_name;
	// header("Location: http://www.example5.com/")  ; 
	$xml->initxml($r);
	$re=$xml->z_prese_array();
	print_r($re);
	echo $re['data'];
	if($re['data']=="success"){
		echo "sdsd";
		$t=conf::$yu;
		$ty=substr($_COOKIE['id'],0,30);
		$u=substr($_COOKIE['id'],30);
	 header($t."u/usercenter.html?id=".$ty."&id2=".$u)  ;	
		
	}else {
		
	header(conf::$yu."lo/Login.html"."?error=power")  ;	
		
		
	}
	if(true){}
	}
	exit();
	

	
	
	
	
//}

		
		
		
?>
