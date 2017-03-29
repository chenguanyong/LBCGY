<?php
include_once 'conf/conf.php';


function dump($id_){
 echo $gg=conf::$yu;
$id_=trim($id_);
switch($id_){
	case "12": echo  $gg=$gg."pl/morepl.html";break;
	case"11": $gg=$gg."lo/reger.html";break;



}

header($gg);







}
echo $_GET['jp'];
dump($_GET['jp']);
exit;