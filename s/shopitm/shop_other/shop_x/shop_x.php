<?php
$arr=array("attr"=>array("fsdf"=>"sdfsd","sdfs"=>"sdfasdf"),"xian"=>array());
shop_x("d",$arr);
function  shop_x($num,$arr){


$doc=new DOMDocument;

   $doc->loadHTMLFile("shop_x.html");
   
   //$node=$doc->getElementById("ul_data");
   
   foreach ($arr as $key=>$value){
   
   
   switch($key){
   	case"attr":{attr($value,$doc);}break;
   	case"xian":{xian($value,$doc);}break;
   }
 
   }
   
   
   
   
   
   
   
   
   
   
   
   
 $node=$doc->getElementById("data_nei");


  $doc->saveHTMLFile($num."_x.html");

}
function xian($arr,$doc){

    $xml=$doc;
	$da=$xml->getElementById("data_nei");
	$da->nodeValue=$arr;


}

function attr($arr,$doc){
//echo "sdsdf";
	$xml=$doc;
	$da=$xml->getElementById("ul_data");
	foreach ($arr as $f=>$value){
	
	 $li=$xml->createElement("li");
	$li->setAttribute("style", "float:left; display:block; width:20%; margin-left:20px;");
	
	$a1=$xml->createElement("a");
	$a1->setAttribute("style", "font-family:'Microsoft YaHei UI'; font-size:14px");
	$a1->nodeValue=$f.":";
	
	
	$a2=$xml->createElement("a");
	$a2->setAttribute("style", "font-family:'Microsoft YaHei UI'; font-size:12px");
	$a2->nodeValue=$value;
	$li->appendChild($a1);
	$li->appendChild($a2);
	$da->appendChild($li);
	
	}
	



}














