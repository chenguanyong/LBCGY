<?php
//保存临时文章
//2016 -12- 7 9:57
include_once 'lib/temp_save_txt.php';
include_once 'lib/php_lib/checkinput.php';
include_once 'session/session_build.php';
include_once 'session/massage.php';
include_once 'session/aadmi.php';
include_once 'mysql/mysqli.php';
include_once 'session/yazhengid.php';
include_once 'lib/php_lib/error.php';
include_once 'lib/network/socket_tcp.php';
include_once 'lib/php_lib/brose.php';
//yazhengid();
//file_main();
//function  file_main(){
//
//	if(@!isset($_POST['txt'])&&$_POST['txt'] != ''){
//	return ;
//	}
//	if(@!isset($_POST['type'])&&$_POST['type'] != '0'){
//	return ;
//	}
//	$txt = $_POST['txt'];
//	$type = $_POST['type'];
//$username = $_SESSION['username'];
$type = 0;
$txt = "dddddddddddddddd";
$username = '';
$times = time();
$_SESSION['titleid'] =$username.$times; 
$tempfile = new save_temp();
$tempfile-> setfileid($username.$times);
$tempfile->settype($type);
$tempfile->save_update($username.$times, $txt);
$tempfile->close();

echo "dddddd";

//}