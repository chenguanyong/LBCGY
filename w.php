<?php

include_once 'lib/network/socket_tcp.php';

$socket=new  socket_tcp("192.168.0.105", 3000);
        $socket->socket_tcp_send('cheng');
        
        

/*
include_once 'session/session_build.php';
include_once 'session/massage.php';
$xml=new massage_xml();
	echo 	$xml->array_prase_xml2(array("hand"=>array("name"=>"deng232lu","error"=>"0","handle_type"=>"s"),"body"=>array("username"=>"gh","power"=>"hjhg")), "root");