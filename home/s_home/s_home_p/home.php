<?php



$re=array("game"=>array("a"=>array("num"=>"000011","data"=>"henanjinmaozheyexueyuan","riqi"=>"03/04")));
dh($re);
function dhhome($hf){

	$doc=new DOMDocument;
	
	$doc->loadHTMLFile("home.html");
	foreach ($hf as $key=>$value){
	
	switch($key)
	{
		case"changyong";{changyong($value,$doc);}break;
	case"game";{fenlei($value,$doc);}break;
	case"chan";{chan($value,$doc);}break;
	case"changyongw";{}break;
	case"changyongww";{}break;
	
	
	}
	}
	
	$doc->saveHTMLFile("index.html");
}


function fenlei($arr,$doc){


 
 //array("attr"=>array("attr1"=>array("yellow"=>"黄色","shou"=>"颜色")),"shop_other"=>array("num_1"=>array("src"=>"http://www.baidu.com")));
 $xml=$doc;
 
 $attr=$xml->getElementById("game");
 
 foreach($arr as $key=>$value){

 $div=$xml->createElement("div");
$div->setAttribute("num", $value["num"]);
 $div->setAttribute("style","width:100%; height:20px;" );
 $div->setAttribute("onclick","wen_click(this)");
 
 $a=$xml->createElement("a");
 //$a->setAttribute("id", "as");
 $a->setAttribute("style"," display:inline-block; width:88%; margin-left:2px; text-align:left" );
 $a->nodeValue=$value["data"];
 $div->appendChild($a);
 
 

 $a1=$xml->createElement("a");
//$a1->setAttribute("xu", $i);
// $a1->setAttribute("num", $value2);
 $a1->setAttribute("style"," display:inline-block; text-align:right;  margin-right:5px;  width:10%" );
 $a1->nodeValue=$value["riqi"];
 $div->appendChild($a1);

$attr->appendChild($div);
 
 }
 
 
  }
  

