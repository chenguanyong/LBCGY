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
yazhengid();
rev_file_main();
function  rev_file_main(){


	if(@!isset($_POST['type'])&&$_POST['type'] != '0'){
	return ;
	}
	$txt = $_POST['txt'];
	$type = $_POST['type'];
$fileid = $_SESSION['titleid'];


$tempfile = new save_temp();
$tempfile-> setfileid($fileid);
$tempfile->settype($type);
$txt = $tempfile->recovery();

if(!is_array($txt)){
return ;
}

$tempfile->close();
$json = new write_json();
$json ->name =$txt;


return $json->prase_json(); 


}