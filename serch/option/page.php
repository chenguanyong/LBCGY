<?php
//shop新品
//输入函数参数 值批次：pici；id:
include_once 'lib/php_lib/checkinput.php';
include_once 'session/session_build.php';
include_once 'session/massage.php';
include_once 'session/aadmi.php';
include_once 'mysql/mysqli.php';
include_once 'session/yazhengid.php';
include_once 'lib/php_lib/error.php';
include_once 'lib/network/socket_tcp.php';
include_once 'lib/php_lib/brose.php';
//yazhengid();
xin();
function xin(){

if(!isset($_POST['xml'])&&$_POST['xml']==""){

exit;

}
//$xml=$_POST["xml"];
$xml =new massage_xml();
$xml->initxml($_POST['xml']);
$arr=$xml->xml_prase_array();
//

//print_r($arr);

if($arr['un2']['data']=="0"|| $arr['un1']['data']=="0" ){
exit;

}
	$page=((int)$arr['un2']['data']-1)*10;

$sql=new mysqli_("linbei_wen");



//echo" select tp_link,name,describe_shop,price,shop_link from temp_shop ".$where." LIMIT ".$page.", 20";

$where="where pici=".(int)$arr['un1']['data'];

try{
  $result=   $sql->read("select tp_link,name,describe_shop,price,shop_link from temp_w ".$where." LIMIT ".$page.", 10");

}catch(Exception $f){

$sql->mysql_c();
exit;

}

//$vard=   $sql->search($result);
$vard=$sql->search_mc($result, "tp_link,name,describe_shop,price,shop_link");
$sql->mysql_c();
//print_r($vard);

if(count($vard)==0){

 $fp=array();
  //  echo  "sdfs3";
  
    $fp["un0"]=array("title00"=>"-");
    
    
   // print_r($fp);
     //echo  "sdfs4";
    $xml=new write_json();
    $fp['hand']=array("size00"=>count($vard));
		$xml->name=$fp;
		$xml->prase_json1();
		echo $xml->getresult();

exit;

}




 $fp=array();
  //  echo  "sdfs3";
    FOREACH($vard as $rtt=>$value){
    $fp[$rtt]=array("tp_link00"=>$value["tp_link"],"title00"=>$value["name"],"miao00"=>$value["describe_shop"],"price00"=>$value['price'],"bb_link00"=>$value['shop_link']);
    
    }
   // print_r($fp);
     //echo  "sdfs4";
    $xml=new write_json();
    $fp['hand']=array("size00"=>count($vard));
		$xml->name=$fp;
		$xml->prase_json1();
		echo $xml->getresult();
    
 // echo  "sdfs5";
	
	
exit;

}
