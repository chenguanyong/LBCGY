<?php
/*
include_once 'lib/php_lib/checkinput.php';
include_once 'session/session_build.php';
include_once 'session/massage.php';
include_once 'session/aadmi.php';
include_once 'mysql/mysql.php';
include_once 'session/yazhengid.php';
session_data::init();
session_start();
//$g= session_id();
//$_SESSION["fff"]="sfsdfs";
$ew=gy2("869857852858861855855864917849854855852863867864869919914860863858850850907913#36595#241#35");

session_id($ew);
echo $_SESSION["fff"];*/
include_once 'lib/network/socket_tcp.php';
$fd=new socket_tcp("127.0.0.1", 3000);
$fd->socket_tcp_send("11111111111dffffffffffffffffffd");