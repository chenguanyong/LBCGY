<?php
include_once 'session/massage.php';

include_once 'mysql/mysqli.php';



include_once 'mysql/writesql.php';
include_once 'conf/conf.php';
include_once 'session/massage.php';

include_once 'session/yazhengid.php';

//yazhengid();

function deletecar(){

$num=$_POST['num'];

  $mysql=new mysqli_("username");
  
$re=  $mysql->insert("delete from temp_car where id=".$num);
 
if($re){

write_json::create_massage(array("xml","bucunzai","string","1","chenggong","1"));

}else{

write_json::create_massage(array("xml","bucunzai","string","1","chenggong","1"));

}
$mysql->mysql_c();
exit;

}