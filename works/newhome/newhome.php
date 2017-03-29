<?php
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



function createhome(){

$resul= 	$xml->array_prase_xml2(array("hand"=>array("name"=>"denglu","error"=>"0","handle_type"=>"s"),"body"=>array("name"=>"updatehome","data"=>"sys","power"=>"3")), "root");
		//$my= new my_sql("userdata");
	$socket=new  socket_tcp("192.168.0.105", 3000);
	$socket->socket_tcp_send($resul);
 $r=	$socket->socket_tcp_rec();
  $e=strpos($r,'#');
$r= substr($r, 0,$e);















}
