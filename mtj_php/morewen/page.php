<?php


include_once 'lib/php_lib/checkinput.php';
include_once 'session/session_build.php';
include_once 'session/massage.php';
include_once 'session/aadmi.php';
include_once 'mysql/mysqli.php';
include_once 'session/yazhengid.php';


page_more();
function page_more(){

 $page=$_POST['page'];

 $pici=$_POST['pici'];
$type=$_POST['type'];

$page=(((int)$page)-1)*15;

run33($page,$pici,$type);
exit;
}

 function run33($page,$pici,$type){
$mysql=new mysqli_("linbei_ad");
$result="";
//echo "SELECT `num`,`createtime`,`link`,`id1`,`name`  FROM `linbei_ad`.`tuijian`  where  type=".$type."  and   pici =".$pici." LIMIT ".$page.", 15 ;";
	
$result=$mysql->read("SELECT `num`,`createtime`,`link`,`id1`,`name`  FROM `linbei_ad`.`tuijian`  where  type=".$type."  and   pici =".$pici." LIMIT ".$page.", 15 ;");
	


		
		$er=$mysql->search_mc1($result,"ad_num,riqi,ad_link,ad_id,ad_name");
   
		
		//print_r($er);
		if(count($er)>0){

		$er['hand']=array("size"=>count($er),"pici"=>"0","yeshu"=>"l");	
		$xml=new write_json();
		$xml->name=$er;
		$xml->prase_json();
		echo $xml->getresult();
			

		}	else {
			

		}
		
	}
//