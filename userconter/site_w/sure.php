<?php
//确定提交账号 我的链接

include_once 'lib/php_lib/checkinput.php';
include_once 'session/session_build.php';
include_once 'session/massage.php';
include_once 'session/aadmi.php';
include_once 'mysql/mysqli.php';
include_once 'session/yazhengid.php';
include_once 'userconter/usertool.php';








echo "dsd22".$_POST['value'];

function sure(){

$xml=new massage_xml();
	$shenqing=$xml->prase_xml1(array("name"=>1,"error"=>2,"handle_type"=>3),"handle");
	$shenqing=$shenqing.$xml->prase_xml1(array("name"=>"myspread","data"=>$this->username,"type"=>$this->type),"body");
 $shenqing=$xml->getft()."<root>".$shenqing."</root>";
	$socket=new  socket_tcp("192.168.0.105", 3000);
    $socket->socket_tcp_send($shenqing);
	$r= $socket->socket_tcp_rec1(2000);
 	//echo strlen($r)."---\n";
     $e=strpos($r,"#");
     $r= substr($r, 0,$e);

 //向客户端返回数据
//echo "1";

// echo  "sdfs1";
     $xml= new massage_xml();
    $xml->initxml($r);
   // echo "3";
    $arry=$xml->xml_prase_array();




}