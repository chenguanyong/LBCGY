<?php
//shop综合
//输入函数参数 值批次：pici；id:;
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

if(!isset($_POST['pc'])&&!check_pici($_POST['pc'])){

exit;

}
	
$pici=$_POST['pc'];	
	
	
	
	
$sql=new mysqli_("username");

try{
  $result=   $sql->read("select tp_link,name,describe_shop,price,shop_link from temp_shop where pici=$pici");

}catch(Exception $f){

$sql->mysql_c();
exit;

}
$sql->mysql_c();
//$vard=   $sql->search($result);
$vard=$sql->search_mc($result, "tp_link,name,describe_shop,price,shop_link");

//print_r($vard);






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
