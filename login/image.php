<?php
include_once 'session/aadmi.php';
include_once 'lib/php_lib/checkinput.php';
include_once 'session/session_build.php';
include_once 'lib/image_php/iamge_create.php';
include_once 'session/massage.php';
//echo $_POST['id1'];
//$f=$_COOKIE('id');
function fu(){
	// $_POST['id1'];
if(isset($_POST['id1'])&&($_POST['id1']!="")){
	
if(!check_html($_POST['id1'])){
	
		exit();
	
	}
	//echo "ds";
	//$id1=check_html($_POST['id1']);
	//  $_POST['id1'];
	
	$id=gy2($_POST['id1']);
	session_data::init();
	session_start();
	
	session_id($id);
	
$jk=iamge_opt::randimage();
	
	$_SESSION['ya']="".$jk[0];
write_json::create_massage(array("1","s","k","image","/jj/image/check_image/".$jk[1].".png","path"));
//echo "sd123";
	exit();
	
}else exit;
	
	
	
	
	
	
}
//echo "fdf";
fu();
//write_json::create_massage(array("1","s","k","image","/jj/image/check_image/".$jk[1].".png","path"));