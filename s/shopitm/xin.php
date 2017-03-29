<?php
//shop新品
//输入函数参数 值批次：pici；id:
include_once 'lib/php_lib/checkinput.php';
include_once 'session/session_build.php';
include_once 'session/massage.php';
include_once 'session/aadmi.php';
include_once 'mysql/mysqli.php';
include_once 'session/yazhengid.php';
include_once 'lib/php_lib/error.php';
include_once 'lib/network/socket_tcp.php';
include_once 'lib/php_lib/brose.php';
//yazhengid();
xin();
function xin(){

if(!isset($_POST['xml'])&&$_POST['xml']==""){

exit;

}
//$xml=$_POST["xml"];
$xml =new massage_xml();
$xml->initxml($_POST['xml']);
$arr=$xml->xml_prase_array();
//

//print_r($arr);
 $mysql=new mysqli_("linbei_shop") ;
   
 
  $resoo= $mysql->read("select brand,prices from checkmu "."where id= ".intval($arr["un0"]["id"]));
  $d= $mysql->search_m($resoo, "brand,prices");
     $mysql->mysql_c();
     $rq=array();
     foreach ($d as $value){
     foreach ($value as $key=> $fds){
     
   $sa=  explode(";", trim($fds));
  
  $rq[$key]=$sa;
  
     }
     
     }
     
 // print_r($rq);   
     
   // 



$where="where ";
$i=0;
$shereq="";
for(;$i<5;$i++){

switch($arr['un'.$i]["name"]){

	case"zo":{ }break;
	case"xiao":{$shereq=" order by salse DESC";}break;
    case"price":{
     if($arr['un'.$i]["data"]=="1")	
    {$shereq=" order by price ASC";
    
    }ELSE  if($arr['un'.$i]["data"]=="2"){
    
    $shereq=" order by price DESC";
    
    }
    
    
    
    }break;
    case"new":{
    	
    if($arr['un'.$i]["data"]=="true")	
    {
    
    if($where=="where "){
	$where=$where."  newshop='true'";}
	else{
	$where=$where." and  newshop='true'";
	
	}
    
    }
    
    }break;
    case"baoyou":{
    if($arr['un'.$i]["data"]=="true")	
    {
    
    if($where=="where "){
	$where=$where."  freeshipping='true'";}
	else{
	$where=$where." and freeshipping='true'";;
	
	}
    
    
    }
    
    
    
    }break;
    case"youhuo":{
    
     if($arr['un'.$i]["data"]=="true")	
    {//$where=$where." and goods='true'";
     if($where=="where "){
	$where=$where." goods='true'";}
	else{
	$where=$where." and goods='true'";
	
	}
    }
    
    }break;
    case"huodao":{
    
    if($arr['un'.$i]["data"]=="true")	
    {
    if($where=="where "){
	$where=$where."  huodao='true'";}
	else{
	$where=$where." AND huodao='true'";
	
	}
    }
    
    
    }break;
}

}

//echo $i;

foreach ($rq as $key=>$value){
	$fe=$arr["un".$i]["data"];
	if($arr["un".$i]["name"]=="1"&&$arr["un".$i]["data"]!="a"){
	$fe=(int)$fe;
	$fa=$value[$fe];
	
	$fa=explode("-",$fa);
	//print_r($fa);
	if($where=="where "){
	$where=$where." prices >".(int)$fa[0].""." and prices <".(int)$fa[1];}
	else{
	$where=$where." and prices >".(int)$fa[0]." and prices <".(int)$fa[1];
	
	}
	continue;
	}

if($fe!="a"){

$fe=(int)$fe;
 
if($where=="where "){
	$where=$where." $key= "."\"".$value[$fe]."\"";}
	else{
	$where=$where."and  $key= "."\"".$value[$fe]."\"";
	
	}

}
$i++;
}


if($where=="where "){
	$where=$where." pici=".(int)$arr['un4']['data']; }
	else{
	$where=$where." and  pici=".(int)$arr['un4']['data']; 
	
	}    
     
     
 // $where=$where."and  pici=".(int)$arr['un4']['data'];  
     
     
$where=$where." ".$shereq;
//echo $where;

	$page=((int)$arr['un4']['yeshu']-1)*20;

$sql=new mysqli_("username");



//echo" select tp_link,name,describe_shop,price,shop_link from temp_shop ".$where." LIMIT ".$page.", 20";



try{
  $result=   $sql->read("select tp_link,name,describe_shop,price,shop_link from temp_shop ".$where." LIMIT ".$page.", 20");

}catch(Exception $f){

$sql->mysql_c();
exit;

}

//$vard=   $sql->search($result);
$vard=$sql->search_mc($result, "tp_link,name,describe_shop,price,shop_link");
$sql->mysql_c();
//print_r($vard);

if(count($vard)==0){

 $fp=array();
  //  echo  "sdfs3";
  
    $fp["un0"]=array("title00"=>"-");
    
    
   // print_r($fp);
     //echo  "sdfs4";
    $xml=new write_json();
    $fp['hand']=array("size00"=>count($vard));
		$xml->name=$fp;
		$xml->prase_json1();
		echo $xml->getresult();

exit;

}




 $fp=array();
  //  echo  "sdfs3";
    FOREACH($vard as $rtt=>$value){
    $fp[$rtt]=array("tp_link00"=>$value["tp_link"],"title00"=>$value["name"],"miao00"=>$value["describe_shop"],"price00"=>$value['price'],"bb_link00"=>$value['shop_link']);
    
    }
   // print_r($fp);
     //echo  "sdfs4";
    $xml=new write_json();
    $fp['hand']=array("size00"=>count($vard));
		$xml->name=$fp;
		$xml->prase_json1();
		echo $xml->getresult();
    
 // echo  "sdfs5";
	
	
exit;

}
