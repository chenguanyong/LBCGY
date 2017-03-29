<?php
include_once 'session/massage.php';

include_once 'mysql/mysqli.php';



include_once 'mysql/writesql.php';
include_once 'conf/conf.php';
include_once 'session/massage.php';

include_once 'session/yazhengid.php';

//yazhengid();

function deleteallcar(){

$xml=$_POST['xml'];

$xml_a=new massage_xml();
$xml_a->initxml($xml);
$arra=$xml_a->z_prese_array();
$where="where ";
   foreach( $arra as $key=>$value){
   
   $where =$where." id =".$value." and";
   
   }
   $where=substr($where, 0,strlen($where)-3);


  $mysql=new mysqli_("username");
  
$re=  $mysql->insert("delete from temp_car ".$where);
 
if($re){

write_json::create_massage(array("xml","bucunzai","string","1","chenggong","1"));

}else{

write_json::create_massage(array("xml","bucunzai","string","1","chenggong","1"));

}
$mysql->mysql_c();
exit;

}