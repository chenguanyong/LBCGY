<?php
include_once 'lib/php_lib/checkinput.php';
include_once 'session/session_build.php';
include_once 'session/massage.php';
include_once 'session/aadmi.php';
include_once 'mysql/mysqli.php';
include_once 'session/yazhengid.php';
include_once 'lib/network/socket_udp.php';
 include_once 'conf/conf.php';

function suoyin(){
$xuhao=$_POST['ia'];
$m=new mysqli_("linbei_link");

$result=  $m->read("select link from link where xuhao='".$xuhao."'");

$ree=  $m->search_m($result, "link");

if($ree["link"]==""|| $ree["link"]==NULL){

header("location:".conf::$link_error_path."");

}

$t=new send_link($xuhao,getRealIpAddr());

$lo="location:".$ree["link"];
header($lo);





}
class  send_link extends  Thread{
private $xuhao;
private $ip;
public function __construct($xuhao,$ip){
$this->ip=$ip;
$this->xuhao=$xuhao;


}

public function run(){
 if(count(explode(".",$this->ip))!=3){
 exit;
 }
	
	
$arr=getipxian($this->ip);
$data=array("name"=>"link","data"=>$this->xuhao);
$data["ipg"]=$arr[3];
$data["ipc"]=$arr[4];
$data["ipx"]=$arr[5];

$xml=new massage_xml();
	$shenqing=$xml->prase_xml1(array("name"=>1,"error"=>2,"handle_type"=>3),"handle");//xuhao
	$shenqing=$shenqing.$xml->prase_xml1($data,"body");
 $shenqing=$xml->getft()."<root>".$shenqing."</root>";

$udp=new socket_udp("192.168.0.105", 3001);
$udp->socket_write($shenqing);

}






}
