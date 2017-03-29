<?php
include_once 'lib/php_lib/checkinput.php';
include_once 'session/session_build.php';
include_once 'session/massage.php';
include_once 'session/aadmi.php';
include_once 'mysql/mysqli.php';
include_once 'session/yazhengid.php';
include_once 'lib/php_lib/error.php';
include_once 'lib/network/socket_tcp.php';

function fenye(){
if(!isset($_POST['xml'])&&$_POST['xml']==""){

write_json::create_massage(array("xml","cuowu","string","1","1","1"));
exit;

}
$xml=new massage_xml();
$xml->initxml($_POST['xml']);
$re_array=$xml->z_prese_array();
$mysql=new mysqli_("username");

$result=$mysql->read("select * from userdata where bianhao =".$re_array['bianhao']);
$er=$mysql->search($result);
if(count($er)>0){

		$aw=array("size"=>count($er));	//$this->result=$er;
		$xml=new write_json();
		$xml->name=array("hand"=>$aw,"body"=>$er);
		echo $xml->getresult();
			//$this->isalive=true;

		}	else {
			//$this->result=null;
			//$this->isalive=false;


		}

}
