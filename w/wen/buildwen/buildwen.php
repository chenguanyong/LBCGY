<?php

buildwen(Array ("data_title" => "历史", "data_auth" => "d", "data_num"=> "10000004", "data_riqi" =>" August 21, 2016, 6:58 am ","data_main"=> "sda似的发射点第三代adfafasd" ) );
function buildwen($arr){
////"data_title" "data_auth" "data_num" "data_riqi" "data_main" "yeshu","num"
//Array ( [data_title] => 历史 [data_auth] => d [data_num] => 10000004 [data_riqi] => August 21, 2016, 6:58 am [data_main] => sdafasd ) 
$xml=new DOMDocument;

$xml->loadHTMLFile("wen.html");
$f=array();
$f=$arr;
//$xml->getElementById("data_title")->nodeValue="sssss";
//$xml->saveHTMLFile("d.html");

$tio=Array ("data_title", "data_auth" , "data_num", "data_riqi" );
print_r($f);
$ty=array("data_title");
$i=0;
foreach ($f as $key=>$value)
{
echo trim($key);
if($i==4){break;}
$xml->getElementById($tio[$i])->nodeValue=$value;
$i++;


}
//$xml->saveHTMLFile("d.html");


if(mb_strlen($arr["data_main"])>200){


echo "ssss";




}else {

$xml->getElementById("data_mian")->nodeValue=mb_strimwidth($arr["data_main"],0,200);
}


$yeshu=$xml->getElementById("yeshu");
echo  $page=ceil($arr["data_main"]/200);
if($page==0){

$page=1;
}

for($i=0;$i<$page;$i++){
  $a=$xml->createElement("a");
   $a->setAttribute("style"," border:1px solid #999; display: inline-block; width:20px; padding-top:3px; padding-bottom:2px; font-family:Arial, Verdana, 宋体 ");

   if($i==0){
   $a->setAttribute("href",$arr["data_num"].".html");
   }else{
   $a->setAttribute("href",$arr["data_num"]."_".$i.".html");
   
   
   }
   $a->nodeValue=$i+1;
   $yeshu->appendChild($a);
  // echo "sdf";
}
$num=$arr["data_num"];
$xml->saveHTMLFile($num.".html");

if($page==1){

exit;
}



$xml1=new DOMDocument;

$xml1->loadHTMLFile("w1.html");

$yeshu=$xml1->getElementById("yeshu");
//$page=ceil($arr["data_main"]/200);
for($i=0;$i<$page;$i++){
	
  $a=$xml->createElement("a");
   $a->setAttribute("style"," border:1px solid #999; display: inline-block; width:20px; padding-top:3px; padding-bottom:2px; font-family:Arial, Verdana, 宋体 ");

   if($i==0){
   $a->setAttribute("href",$arr["data_num"].".html");
   }else{
   $a->setAttribute("href",$arr["data_num"]."_".$i.".html");
   $yeshu->appendChild($a);
   }
}
for($i=1;$i<$page;$i++){

$xml->getElementById("data_main")->nodeValue=mb_strimwidth($arr["data_main"],$i*200,200);

$xml->saveHTMLFile($num."_".$i.".html");
}


}