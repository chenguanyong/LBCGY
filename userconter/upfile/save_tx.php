<?php
include_once 'lib/file_lib/go_file.php';
include_once "session/yazhengid.php";
include_once 'lib/php_lib/checkinput.php';
include_once 'session/session_build.php';
include_once 'session/massage.php';
include_once 'session/aadmi.php';
include_once 'mysql/mysqli.php';
yazhengid();

function  save(){
$str="";
$ic=$_POST['ic'];
$ic=substr($ic,0,1);
switch($ic){
	case"0":$str="1.jpg";break;
	case"1":$str="2.jpg";break;
	case"2":$str=session_data::getsession(session_id(),'tx');break;
	default:exit;



}

$xml=new massage_xml();
$shenqing=$xml->prase_xml1(array("name"=>1,"error"=>2,"handle_type"=>3),"handle");
	$shenqing=$shenqing.$xml->prase_xml1(array("name"=>"baseuser","data"=>"","name1"=>"tx","tx"=>$str),"body");
 $shenqing=$xml->getft()."<root>".$shenqing."</root>";
	$socket=new  socket_tcp("192.168.0.105", 3000);
    $socket->socket_tcp_send($shenqing);
 	$r= $socket->socket_tcp_rec1(250);
     $e=strpos($r,"#");
 $r= substr($r, 0,$e);
$xml1=new massage_xml1();
$xml1->initxml($r);
echo $xml1->xml_prase_json();
	

}