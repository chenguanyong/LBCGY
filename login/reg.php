<?php
include_once 'session/massage.php';
include_once 'session/aadmi.php';
include_once 'session/session_build.php';
include_once 'session/yazhengid.php';
include_once 'lib/network/socket_tcp.php';
include_once 'lib/php_lib/error_ex.php';
include_once 'lib/php_lib/checkinput.php';
include_once 'conf/conf.php';
include_once 'lib/php_lib/brose.php';

function checkf($ew){
	if($ew['un1']['data']==""){
		write_json::create_massage(array("username","kong","string","1","1","1"));
		exit();

	}else if($ew['un5']['data']=""){write_json::create_massage(array("usermail","kong","string","1","1","1"));
	exit();}
	else if($ew['un4']['data']=""){

		write_json::create_massage(array("userphone","kong","string","1","1","1"));
		exit();

	}else if($ew['un2']['data']==""){
			
		write_json::create_massage(array("userpower","kong","string","1","1","1"));
		exit();

	}
	else if(check_name($ew['un1']['data'])){
		//echo "鐢ㄦ埛鍚嶅紓甯�;
		echo $ew['un1']['data'];
		write_json::create_massage(array("username","bufuhegeifan","string","1","1","1"));
		exit();

	}else if(!check_power($ew['un2']['data'])){

		write_json::create_massage(array("userpower","buheguifan","string","1","1","1"));
		exit();


	}else if(check_phone($ew['un4']['data'])){
		write_json::create_massage(array("userphone","buheguige","string","1","1","1"));
		exit();
			
	} else if(check_mail($ew['un5']['data'])){

		write_json::create_massage(array("usermail","buheguige","string","1","1","1"));
		exit();

	}

}

//yazhengid();
//echo "dd";
//echo getRealIpAddr();
worked1();

function worked1(){
	if(!isset($_POST['xml'])){
	write_json::create_massage(array("xml","bucunzai","string","1","1","1"));
		exit();
	
	}
	//echo $_POST['xml'];
	
	//echo "dd1";
$xml =new massage_xml();
$xml->initxml($_POST['xml']);
$arr=$xml->xml_prase_array();
//print_r($arr);

if($arr['un6']['data']=="true"&&$arr['un7']['data']=="true"){
write_json::create_massage(array("xingbie","budouxuan","string","1","1","1"));
exit();

}

if($arr['un6']['data']=="false"&&$arr['un7']['data']!="false"){
write_json::create_massage(array("xingbie","budoubuxuan","string","1","1","1"));
exit();

}
if($arr['un8']['data']!="true"){
write_json::create_massage(array("yinsi","budoubuxuan","string","1","1","1"));
exit();

}
//echo "dddd";



checkf($arr);



if($arr['un6']['data']=="true")
{
$arr['un6']['data']=1;
unset($arr['un7']);


}else
if($arr['un7']['data']=="true")
{
$arr['un7']['data7']=1;
unset($arr['un6']);


}

unset($arr['un8']);
unset($arr['un3']);
$arr=array_values($arr);//重新排列
print_r($arr);

$shengf=array();
foreach ( $arr as $g=> $value){
//print_r($value);

	$cf=strip_tags (trim( $value['name']));
   
	$shengf[$cf]=strip_tags ($value['data']);
	
	
}

$shengf['name']="insertbase1";
$shengf['data']="chen";
/*
$ip=getRealIpAddr();

$ipxian=getipxian($ip);
if($ipxian==false){
write_json::create_massage(array("ip","budoubuxuan","string","1","1","1"));
exit();

}
*/
//$ipf=$ipxian[3]."/".$ipxian[4]."/".$ipxian[5];
//$shengf['ip']=$ip;
//$shengf['ipxian']=$ipf;

$bv =new massage_xml();  
$fggd= $bv->array_prase_xml($shengf);



try{
$socket=new  socket_tcp("192.168.0.105", 3000);
    $socket->socket_tcp_send($fggd);
    
}catch (Exception $g){


//echo "aaa1111111dsfsdfss";

}
	$r= $socket->socket_tcp_rec1(200);
	$socket->socket_tcp_close();
 	//echo strlen($r)."---\n";
     $e=strpos($r,"#");
   echo   $r= substr($r, 0,$e);
 
  $xml->initxml($r);
   
$re=$xml->z_prese_array();
	$lp=conf::$yu;
	if($re['data']=='success'){
		
	
		//注册成功的页面
		write_json::create_massage(array("4","bucunzai","string","1","lo/regok.html"."?sys=ok","1"));
		
		
	}else{
		
	write_json::create_massage(array("4","bucunzai","string","1","lo/regfalse.html"."?sys=ok","1"));
		
	}
	
	
	
	
	
	
	
		//header("location:.susess.html?id=".$id);	
	
	

exit;
	
	
	
}//




