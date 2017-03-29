<?php



//$re=array("changyong"=>array("a1"=>array("src"=>"www.baidu.com","nodevalue"=>"dsfdsf")),"chan"=>array("a1"=>array("src"=>"www.baidu.com","nodevalue"=>"dsfdsf")),"fenlei"=>array("游戏"=>array("shou"=>"游戏","linbei"=>"http://www.baidu.com")));
//dh($re);
function dh($hf){

	$doc=new DOMDocument;
	
	$doc->loadHTMLFile("daohang.html");
	foreach ($hf as $key=>$value){
	
	switch($key)
	{
		case"changyong";{changyong($value,$doc);}break;
	case"fenlei";{fenlei($value,$doc);}break;
	case"chan";{chan($value,$doc);}break;
	case"changyongw";{}break;
	case"changyongww";{}break;
	
	
	}
	}
	$doc->saveHTMLFile("index.html");
}
function changyong($arr,$doc){
//echo "sdsdf";

	$xml=$doc;
	$da=$xml->getElementById("changyong");
	foreach ($arr as $f=>$value){
	
	 $li=$xml->createElement("li");
	$li->setAttribute("style", "display:block; border:solid 1px #00F; text-align:center;  width:50px; float:left");
	
	$a2=$xml->createElement("a");
	$a2->setAttribute("style", "font-family:'Microsoft YaHei UI'; font-size:12px");
	foreach ($value as $key=>$value1){
	
		//echo $key."1dsds1".$value1;
		if($key=="nodevalue"){
			//print_r($value1);
		$a2->nodeValue=$value1;
		}else{
	$a2->setAttribute($key,$value1);}
	
	}
	
	//$li->appendChild($a1);
	$li->appendChild($a2);
	
	$da->appendChild($li);
	
	}
}

function chan($arr,$doc){
$xml=$doc;
	$da=$xml->getElementById("site_w");
	foreach ($arr as $f=>$value){
	
	 $li=$xml->createElement("li");
	$li->setAttribute("style", "display:block;  text-align:center; margin-left:20px; margin-right:20px; float:left; width:80px;");
	
	$a2=$xml->createElement("a");
	$a2->setAttribute("style", "font-family:'Microsoft YaHei UI'; font-size:14px");
	foreach ($value as $key=>$value1){
	
		//echo $key."1dsds1".$value1;
		if($key=="nodevalue"){
			//print_r($value1);
		$a2->nodeValue=$value1;
		}else{
	$a2->setAttribute($key,$value1);}
	
	}
	
	//$li->appendChild($a1);
	$li->appendChild($a2);
	
	$da->appendChild($li);
	
	}




}


function fenlei($arr,$doc){


 
 //array("attr"=>array("attr1"=>array("yellow"=>"黄色","shou"=>"颜色")),"shop_other"=>array("num_1"=>array("src"=>"http://www.baidu.com")));
 $xml=$doc;
 
 $attr=$xml->getElementById("list_data");
 $div="";
 foreach($arr as $key=>$value){
 
 $div=$xml->createElement("div");
 //$div->setAttribute("id", "sds");
 $div->setAttribute("style"," border:solid 1px #00FFFF ; margin-left:20px; margin-right:0px; margin-top:10px;" );
 
 
 $a=$xml->createElement("a");
 $a->setAttribute("id", "as");
 $a->setAttribute("style","width:40px; border:solid 1px #0033FF; display:inline-block ; margin-right:10px;" );
 $a->nodeValue=$value["shou"];
 $div->appendChild($a);
 
 
 unset($value["shou"]);
$v= array_values($value);
 $i=0;
 foreach ($v as $ds=>$value2){
 
 $a1=$xml->createElement("a");
$a1->setAttribute("xu", $i);
 $a1->setAttribute("href", $value2);
 $a1->setAttribute("style","width:60px; border:solid 1px #0033FF; margin-left:10px; margin-right:10px;  text-align:center; display:inline-block" );
 $a1->nodeValue=$key;
 $div->appendChild($a1);
 $i++;
 }
 
 }
 $attr->appendChild($div);
 
  }
  

