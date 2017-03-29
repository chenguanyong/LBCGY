<?php
include_once 'lib/php_lib/checkinput.php';
include_once 'session/session_build.php';
include_once 'session/massage.php';
include_once 'session/aadmi.php';
include_once 'mysql/mysql.php';
include_once 'session/yazhengid.php';
include_once 'lib/network/socket_tcp.php';
$xml=new massage_xml();
echo 	$user_data=	$xml->array_prase_xml2(array("hand"=>array("name"=>"deng232lu","error"=>"0","handle_type"=>"s"),"body"=>array("name"=>"power","data"=>"chen","power"=>"ere")), "root");
		
		$socket=new  socket_tcp("192.168.0.105", 3000);
	$socket->socket_tcp_send("#".$user_data."#");
	$ds= $socket->socket_tcp_rec();
	echo strlen($ds);
	$socket->socket_tcp_close();