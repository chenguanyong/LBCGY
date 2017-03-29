<?php

include_once 'lib/php_lib/checkinput.php';
include_once 'session/session_build.php';
include_once 'session/massage.php';
include_once 'session/aadmi.php';
include_once 'mysql/mysqli.php';
include_once 'session/yazhengid.php';







$page=$_POST["pici"];
$pici=((int)$_POST["page"]-1)*20;
$link_id=$_POST['link_id'];
run1($page,$pici,$link_id);

 
function run1($page,$pici,$link_id){
$mysql=new mysqli_("username");
		$result=$mysql->read("SELECT  `owername`,`parntname`,`data1`,`createtime`, `mas_type`,`tj`,`hf`,`pl_id`,`id1`  FROM `linbei_work`.`wenpl`  where wen_id='".$link_id."' and  pici =".$pici." LIMIT ".$page.", 20 ;");

		$er=$mysql->search_m($result,"owe,parnt,data,riqi, mas_type,tj,hf,pl_id,id ");

		if(count($er)>0){

		$er['hand']=array("size00"=>count($er),"pici"=>"0","yeshu"=>"l");	
		$xml=new write_json();
		$xml->name=$er;
		$xml->prase_json();
		echo $xml->getresult();
			

		}	else {
			

		}
		
exit;
	}