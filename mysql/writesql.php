<?php

//转字符串
function writesql($fen,$array){
	$str=null;
foreach($array as $ar){


$str=$str.$fen.$ar;


}
return $str;
}
//转数组
function readsql($fen,$str){
$str=trim($str);
$arr=explode($fen,$str);
}