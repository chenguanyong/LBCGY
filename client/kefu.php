<?php
include_once 'session/massage.php';
include_once 'lib/network/socket_tcp.php';
include_once 'lib/network/socket_udp.php';
/*<root>
* <handle>
* <name></name>
* <error></error>
* <handle_type></handle_type>
* </handle>
* <bordy>
* 
* <name></name>
* <data></data>
* <type></type>
* <time></time>
* 
* 
* </bordy>
* </root>*/
class kefu{
	private $socket;
	private $mas;
public function __construct(){
$this->socket=new socket_tcp("", "");
$this->mas="";	
}	
public function revdata(){
	
	$xml=$this->socket->socket_tcp_rec();
	if($xml===false){return false;}else{
	$xml2=new massage_xml1();
	$xml2->initxml($re);
	$xml2->xml_prase_json();
	return $xml2;}
	
	
}	
public function senddata($n){
	if(!($d=$this->socket->socket_tcp_send($n)===false)){
	
	
		return false;
	
	}else return true;
	
	
	
	
	
}	
	
public function woshou($id){
	
	$shenqing=$xml->prase_xml1(array("name"=>1,"error"=>2,"handle_type"=>3),"handle");
	//$shenqing=$shenqing.$xml->prase_xml1(array("name"=>"shenqing","data"=>$d,"type"=>2), bordy);
	$shenqing=$xml->array_prase_xml2(array("user"=>array("name"=>"username","data"=>$id,"type"=>"crc")));
	$shenqing=$xml->getft()."<root>".$shenqing."</root>";	
	if(!($d=$this->socket->socket_tcp_send($shenqing)===false)){
	
	
		return false;
	
	}else return true;
	
	
	
}	
	
}
