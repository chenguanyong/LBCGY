<?php
include_once 'lib/file_lib/go_file.php';
include_once "session/yazhengid.php";
include_once 'lib/php_lib/checkinput.php';
include_once 'session/session_build.php';
include_once 'session/massage.php';
include_once 'session/aadmi.php';
include_once 'mysql/mysqli.php';


yazhengid();
function upfile(){

$str=time().'.png';
	
$flie=new gofile("shop_tx\\".$str, 'un');

if($flie->do_file()){

$_SESSION['tx']=$str;

setcookie("tx",$str,1000,'/');


}else{
write_json::create_massage(array("image","bucunzai","string","1","1","1"));
}
exit;

}
upfile();