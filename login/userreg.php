<?php
include_once 'session/massage.php';
include_once 'session/aadmi.php';
include_once 'session/session_build.php';
include_once 'session/yazhengid.php';
include_once 'lib/network/socket_tcp.php';
include_once 'lib/php_lib/error_ex.php';
include_once 'lib/php_lib/checkinput.php';
include_once 'conf/conf.php';
/*function run(){
$username=$_POST["username"];
$power=$_POST["power"];
$age=$_POST["age"];
$borth=$_POST["borhy"];//生日
$mail=$_POST["mail"];
$phone=$_POST["phone"];//手机号
$alipay=$_POST["alipay"];//支付宝
$hobby=$_POST["hobby"];
$signature=$_POST["signature"];//个性签名
$realname=$_POST["realname"];
$sex=$_POST["sex"];//性别
$adress=$_POST["adress"];//地址	



$socket_data=array("username"=>$username,"power"=>$power,"age"=>$age,"borhy"=>$borth,"mail"=>$mail,"phone"=>$phone,"adress"=>$adress,"alipay"=>$alipay,"signature"=>$signature,"realname"=>$realname,"sex"=>$sex);;
$fd=new massage_xml();
$data=$fd->array_prase_xml2(array("handle"=>array("name"=>3,"error"=>4,"hand_type"=>3),"body"=>$socket),"root");
	$socket= new socket_tcp("127.0.0.1",3000);
	
	try {
	$socket->socket_tcp_send($socket_data);}
	catch (error_exp $e){
	$socket->socket_tcp_close();
	}
	if($e){
		$fe="chenggong";
		
	}
	exit();
	
}
__yazhengid("location");//检验id是否合法
run();
*/
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
	else if(!check_name($ew['un1']['data'])){
		//echo "鐢ㄦ埛鍚嶅紓甯�;
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

	}/* else if(check_text($realname)){
			
		write_json::create_massage(array("userrealname","buheguige","string","1","1","1"));
		exit();
			
	} else if(check_text($alipay)){
		write_json::create_massage(array("useridcar","buheguige","string","1","1","1"));
		exit();


	} else if(check_text($sex)){
			
		write_json::create_massage(array("usersex","buheguige","string","1","1","1"));
		exit();
			

	} else if(check_text($adress)){
		write_json::create_massage(array("useradress","buheguige","string","1","1","1"));
		exit();


	}
*/

}

yazhengid();
echo session_id();
worked();

function worked(){
	if(!isset($_POST['xml'])){
	write_json::create_massage(array("xml","bucunzai","string","1","1","1"));
		exit();
	
	}
	
$xml =new massage_xml();
$xml->initxml($_POST['xml']);
$arr=$xml->xml_prase_array();
print_r($arr);
//checkf($arr);
/*
echo "---------". session_data::getsession(session_id(),'ya_reg');
if($arr['un3']['data3']!=session_data::getsession(session_id(),'ya_reg')){

write_json::create_massage(array("yanzhenma","bucunzai","string","1","1","1"));
exit();
}*/
if($arr['un6']['data']=="true"&&$arr['un7']['data']=="true"){
write_json::create_massage(array("xingbie","budouxuan","string","1","1","1"));
exit();

}else 
if($arr['un6']['data']=="false"&&$arr['un7']['data']!="false"){
write_json::create_massage(array("xingbie","budoubuxuan","string","1","1","1"));
exit();

}
if($arr['un8']['data']!="true"){
write_json::create_massage(array("yinsi","budoubuxuan","string","1","1","1"));
exit();

}
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
array_values($arr);//重新排列
print_r($arr);
$shengf=array();
foreach ( $arr as $g=> $value){
print_r($value);

	$cf=trim( $value['name']);
   
	$shengf[$cf]=$value['data'];
	
	
}
echo "3333";
print_r($shengf);
$shengf['name']="insertbase";
$bv =new massage_xml();  
$fggd= $bv->array_prase_xml($shengf);
echo $fggd;
try{
    $socket=new  socket_tcp("192.168.0.105", 3000);
     
     
	 $socket->socket_tcp_send($fggd);
	 
	 
 $r=	$socket->socket_tcp_rec();}
	 
	 
 catch (error_exp $f){
	 
	 
 $socket->socket_tcp_close();
	 
	 }
	 $socket->socket_tcp_close();
	 
 $e=strpos($r,'#');
   
 $r= substr($r, 0,$e);
   
  $xml->initxml($r);
   
$re=$xml->z_prese_array();
	$lp=conf::$yu;
	if($re['data']=='success'){
		
	
		//注册成功的页面
		write_json::create_massage(array("yd","budoubuxuan","string","1","1","1"));
		
	}else{
		
	header($lp."lo/regfalse.html?sys=false");	
		
	}
	
	
	
	
	
	
	
		//header("location:.susess.html?id=".$id);	
	
	

exit;
	
	
	
}//




