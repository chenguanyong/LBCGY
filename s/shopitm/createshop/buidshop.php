<?php
//创建shop
buildshop();
function buildshop(){

	
	
	
//$data= array("attr"=>"sdfs","attr1"=>"dsfs","attr2"=>"sdfs","attr3"=>"sdfa","attr4"=>"sdfsf");

$shop_data=array("shop_img"=>"num","shop_data"=>array("biaoti"=>"sds","miaoshu"=>"sdfs","prices"=>"sdfs","beizhu"=>"sdf","fuwu"=>"sdf"));
//$shop_data2=array("attr"=>array("attr1"=>array("yellow"=>"黄色")),"shop_other"=>array("num_1"=>array("src"=>"http://www.baidu.com")));
$shop_data["shop_data2"]=array("attr1"=>array("yellow"=>"黄色","shou"=>"颜色"));
$shop_data["shop_other"]=array("attr1"=>array("src"=>"http://www.baidu.com"));
$dom= new  DOMDocument();
$dom->loadHTMLFile("shop_one1.html");

foreach ($shop_data as $key=>$value){
	
	
	switch($key){
	
		case"shop_img":{
		echo "sds1";
		fix_img($value,$dom);
		
		
		}break;
		case"shop_data":{
		
		echo "sds2";
		shop_data($value,$dom);
		
		
		}break;
		case"shop_data2":{
		echo "sds3";
		
		shop_data2($value,$dom);
		
		
		
		}break;
		
		case"shop_other":{
		echo "sds4";
		shop_other($value,$dom);
		}break;
	
	
	
	}

}

$dom->saveHTMLFile("index.html");








}

 function fix_img($arr,$doc){
 
 	$xml=$doc;
 	$node=$xml->getElementById("img_shop");
   
 $node->setAttribute("num", $arr);
 
 }
 
 function shop_data($arr,$doc){
 
 	//$doc=new DOMDocument;
 foreach ($arr as $key=>$value){
 
 $doc->getElementById($key)->nodeValue=$value;
 
 }

 }


 
  function shop_data2($arr,$doc){
 
 //array("attr"=>array("attr1"=>array("yellow"=>"黄色","shou"=>"颜色")),"shop_other"=>array("num_1"=>array("src"=>"http://www.baidu.com")));
 $xml=$doc;
 
 $attr=$xml->getElementById("attr");
 $div="";
 foreach($arr as $key=>$value){
 
 $div=$xml->createElement("div");
 //$div->setAttribute("id", "sds");
 $div->setAttribute("style"," width:100%; height:auto;" );
 
 
 $a=$xml->createElement("a");
 $a->setAttribute("id", "as");
 $a->setAttribute("style","display:inline-block; padding-top:5px; width:40px; height:30px;" );
 $a->nodeValue=$value["shou"];
 $div->appendChild($a);
 
 
 unset($value["shou"]);
$v= array_values($value);
 $i=0;
 foreach ($v as $ds=>$value2){
 
 $a1=$xml->createElement("a");
 $a1->setAttribute("id", "as");
 $a1->setAttribute("xu", $i);
 $a1->setAttribute("na", $ds);
 $a1->setAttribute("style","display:inline-block; width:40px; border:solid 1px #000; padding:5px 5px;  margin-left:5px; text-align:center;" );
 $a1->nodeValue=$value2;
 $div->appendChild($a1);
 $i++;
 }
 
 }
 $attr->appendChild($div);
 
  }
  
  function shop_other($arr,$doc){
  
  foreach ($arr as $key=>$value){
  	echo $key."11";
  $attr=$doc->getElementById($key);
  foreach ($value as $k=>$v){
  echo $k."22".$v;
  $attr->setAttribute($k, $v);
  
  }
  
  
  }
  	
  	
  
  }
  