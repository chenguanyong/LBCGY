<?php

//初始化购物车
//error_reporting(E_ALL | E_STRICT);
include_once 'lib/php_lib/checkinput.php';
include_once 'session/session_build.php';
include_once 'session/massage.php';
include_once 'session/aadmi.php';
include_once 'mysql/mysqli.php';
include_once 'session/yazhengid.php';
include_once 'lib/php_lib/error.php';
include_once 'lib/network/socket_tcp.php';
dowork12();

function dowork12(){
	$username="d";
$username=	session_data::getsession(session_id(),'username');
	if($username=="you"){
	$username=session_id();
	
	}
	
$mysql=new mysqli_("username");
		$result=$mysql->read("SELECT `id`,`num`,`shop_name`,`prices`,`attr`,`size`,`dianpu`,`time` FROM`username`.`shop_car` where username ='".$username."'" );
//oj.dianpu,oj.shop_name,oj.attr,oj.prices,oj.size],[oj.num,oj.id,i]
		$er=$mysql->search_m($result,"id,num,shop_name,prices,attr,size,dianpu,time");
//print_r($er);
//echo "ds";
		if(count($er)>0){
//echo "sds";
			//$this->result=$er;
		$xml=new write_json();
		$xml->name=array("body"=>$er[0]);
		$xml->prase_json();
		echo $xml->getresult();
			//$this->isalive=true;

		}	else {
			//$this->result=null;
			//$this->isalive=false;


		}
		//$this->bool=true;

	}	
	
	
	

//


