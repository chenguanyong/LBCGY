<?php

include_once 'lib/network/socket_tcp.php';
include_once 'session/massage.php';
include_once 'lib/php_lib/checkinput.php';
include_once 'lib/php_lib/error_ex.php';
//include_once '';

function serch1(){
	if(!(isset($_POST['xml'])&&$_POST['xml']!=""&&check_html('xml')))	{
		write_json::create_massage(array("xml","no null","string","1","1","1"));
		exit();

	}
	$key1=$_POST['xml'];
	//$xin=array("handle"=>array("name"=>"d","error"=>"d","handle_type"=>"d"),"bordy"=>array("name"=>"keyword","data"=>$key,"type"=>"string"));
	//=new massage_xml($xin);
	echo $key1;
	$socket;
	try{

		$socket=new socket_tcp($ip, $port);

	}catch (error_exp $rt){

		$rt->err_obj1->socket_close();
		exit();
	}
	if($socket->socket_tcp_send($mas)===false){


	}
	
		$rec_data;
		if($rec_data=$socket->socket_tcp_rec()===false){

			$socket->socket_tcp_close();
			exit();
		}
		$xml_json=new massage_xml1($rec_data);
		echo $xml_json->xml_prase_json();
		exit;
}