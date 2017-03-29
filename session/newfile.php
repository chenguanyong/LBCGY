<?php
include_once 'lib/php_lib/checkinput.php';
include_once 'session/session_build.php';
include_once 'session/massage.php';
include_once 'session/aadmi.php';
include_once 'mysql/mysql.php';
include_once 'session/yazhengid.php';
session_data::init();
session_start();
$g= session_id();
echo gy1($g);
//$_SESSION["fff"]="sfsdfs";
//$ew=gy2(gy1($g));

//session_id($ew);
// $_SESSION["fff"];
//$f=gy2($f);
//







//session_id($f);
function setcookie1($key,$value,$time1){

	setcookie($key, $value, time()+$time1, "/", "localhost", 1);


}
function setcookie2($key,$value){

	setcookie1($key,$value,3600);


}