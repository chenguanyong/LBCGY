<?php
//初始化文章
include_once 'lib/php_lib/checkinput.php';
include_once 'session/session_build.php';
include_once 'session/massage.php';
include_once 'session/aadmi.php';
include_once 'mysql/mysqli.php';
include_once 'session/yazhengid.php';
include_once 'lib/php_lib/error.php';
include_once 'lib/network/socket_tcp.php';
include_once 'lib/php_lib/brose.php';
//echo "sdsd";
//yazhengid();
initwz();
function initwz(){

$mxml=new massage_xml();
$mxml->initxmlfile("d.xml");
//echo $mxml[0];
$result=$mxml->xml_prase_array();
//print_r($result);
$arr=array();

foreach ($result as $value){
foreach ($value as$key=> $r){
	$arr[]=$value["name"]."/".$r;
}

}
//echo "df";
//print_r($arr);


$json=new write_json();
 $fa=$json->array_json($arr);

//$fa1=$json->array_json($result["un1"]);

$f=array("handle"=>array("name"=>"fd","error"=>"dfg","handle_type"=>"dsf"),"bordy"=>array("name"=>"fenlei","data"=>"ll","type"=>"dsfs"));
	$fr=new write_json();
	$fr->name=$f;
	$fr->prase_json2("'ds':$fa");
echo	$fr->getresult();
} 