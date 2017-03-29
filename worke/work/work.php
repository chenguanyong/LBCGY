<?php
include_once 'mysql/mysqli.php';
//链接跳转系统


function work(){

$re=$_GET["ia"];

$xml=new massage_xml();
	$shenqing=$xml->prase_xml1(array("name"=>1,"error"=>2,"handle_type"=>3),"handle");
	$shenqing=$shenqing.$xml->prase_xml1(array("name"=>"initdata","data"=>$re,"type"=>2),"body");
 $shenqing=$xml->getft()."<root>".$shenqing."</root>";
	$socket=new  socket_tcp("192.168.0.105", 3000);
    $socket->socket_tcp_send($shenqing);
 	$r= $socket->socket_tcp_rec1(500);
     $e=strpos($r,"#");
 $r= substr($r, 0,$e);
 $xml= new massage_xml();
    $xml->initxml($r);
   // echo "3";
    $arry=$xml->z_prese_array();



}