<?php

$arr=array("site"=>array("title"=>"标题"),"attr"=>array("中国"=>"ddd","美国"=>"fsdafla"),"data"=>array("du0"=>"ddddadfa范德萨"),"yeshu"=>"d");
site_w($arr);

function site_w($arr){

$dom=new DOMDocument;
$dom->loadHTMLFile("site.html");

foreach ($arr as $key=>$value){
switch($key){
	case"site":{site($value,$dom);}break;
	case"attr":{attr_($value,$dom);}break;
	case"data":{data($value,$dom);}break;
	case"yeshu":{yeshu($value,$num,$dom);}break;//$num是文章的序号
}


}




$dom->saveHTMLFile("ind.html");



	
	

}


function site($attr,$doc){

//$xml=new DOMDocument;
$xml=$doc;
foreach( $attr as $key=>$value){


$node=$xml->getElementById($key);
$node->nodeValue=$value;



}



}

function attr_($arr,$doc){


//echo "sdsdf";
	$xml=$doc;
	$da=$xml->getElementById("ul_data");
	foreach ($arr as $f=>$value){
	
	 $li=$xml->createElement("li");
	$li->setAttribute("style", "float:left; display:block; width:50%; text-align:center; margin:0px; border: solid 0px #000000 ");
	
	$a1=$xml->createElement("a");
	$a1->setAttribute("style", "font-family:'Microsoft YaHei UI'; font-size:14px; display:inline-block; width:30%; text-align:center ");
	$a1->nodeValue=$f.":";
	
	
	$a2=$xml->createElement("a");
	$a2->setAttribute("style", "font-family:'Microsoft YaHei UI'; font-size:12px; display:inline-block; width:60%; text-align:left; ");
	$a2->nodeValue=$value;
	$li->appendChild($a1);
	$li->appendChild($a2);
	$da->appendChild($li);
	
	}
	



}
	
function data($arr,$doc){

$xml=$doc;
//$xml=new DOMDocument;
$dos=$xml->getElementById("wen_data");
foreach( $attr as $key=>$value){

      $er=$xml->createElement("p");
      $er->nodeValue=$value;
      $dos->appendChild($er);
}

}

function yeshu($yeshu,$num,$doc){

$xml=$doc;
//$xml=new DOMDocument;
$dos=$xml->getElementById("yeshu");
$yeshu=intval($yeshu);
for($i=0;$i<$yeshu;$i++){

      $er=$xml->createElement("a");
      $er->setAttribute("style", "border:1px solid #999; display: inline-block; width:20px; padding-top:3px; padding-bottom:2px; font-family:Arial; ");
      $er->nodeValue=$i++;
      $er->setAttribute("href",$num."_".$i.".html");
      $dos->appendChild($er);
      $i++;
}

}








