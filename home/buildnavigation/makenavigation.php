<?php

include_once 'lib/php_lib/checkinput.php';
include_once 'session/session_build.php';
include_once 'session/massage.php';
include_once 'session/aadmi.php';
include_once 'mysql/mysql.php';
include_once 'session/yazhengid.php';
include_once 'userconter/usertool.php';
include_once 'lib/image_php/iamge_create.php';
include_once 'mysql/writesql.php';
include_once 'conf/conf.php';
include_once 'session/massage.php';


include_once 'session/yazhengid.php';

include_once 'daohang/buildnavigation/builddh.php';
//$re=array("changyong"=>array("a1"=>array("src"=>"www.baidu.com","nodevalue"=>"dsfdsf"),"a2"=>array("src"=>"www.baidu.com","nodevalue"=>"dsfdsf")),"chan"=>array("a1"=>array("src"=>"www.baidu.com","nodevalue"=>"dsfdsf")),"fenlei"=>array("游戏"=>array("shou"=>"游戏","linbei"=>"http://www.baidu.com")));
make();
function make(){


		//echo "sdsdsd";
		$xml=new massage_xml();
	$shenqing=$xml->prase_xml1(array("name"=>1,"error"=>2,"handle_type"=>3),"handle");
	$shenqing=$shenqing.$xml->prase_xml1(array("name"=>"daohang","data"=>"sys","type"=>2),"body");
 $shenqing=$xml->getft()."<root>".$shenqing."</root>";
	$socket=new  socket_tcp("192.168.0.105", 3000);
    $socket->socket_tcp_send($shenqing);
 	$r= $socket->socket_tcp_rec1(1998);
     $e=strpos($r,"#");
 echo      $r= substr($r, 0,$e);

 //向客户端返回数据
//echo "1";
    $xml= new massage_xml();
    $xml->initxml($r);
   // echo "3";
    $arry=$xml->xml_prase_array();
$data=array();   
print_r($arry);//$re=array("changyong"=>array("a1"=>array("src"=>"www.baidu.com","nodevalue"=>"dsfdsf")),"chan"=>array("a1"=>array("src"=>"www.baidu.com","nodevalue"=>"dsfdsf")),"fenlei"=>array("游戏"=>array("shou"=>"游戏","linbei"=>"http://www.baidu.com")));

foreach($arry as $k=> $value){


echo $k;
print_r($value);

if(@$data[$value["module"]]){


}else{
echo "1";
$data[$value["module"]]=array();

}
      
$fg=$data[$value["module"]];
if(@$fg[$value["project"]]){

echo "d";
}else{
echo "2";
$data[$value["module"]][$value["project"]]=array();

}

 $data[$value["module"]][$value["project"]][]=$value["data"];     





}

print_r($data);
//$i=0;
          foreach ($data as $key=>$value){
	
                  foreach ($value as $k=>$v){
                  		foreach ($v as $g=> $r0){
                  			//echo"4444444". $r0;
                         switch($key){	
        	                   case"chan":
        		
        	                   	{  $data[$key]=create4($r0);
        	                   		echo"4444444";
        	                   	}
       
        	                          
        	                   break;
        	                   case"changyong":{	
        		
        		                        $data[$key]=create4($r0);
       echo "3333333";
        	                          
        	                   }break;
                             }  
                          }   
                   }


           }

print_r($data);
dh($data);

}


//2
function create2 ($str){
$i=0;
   $rx=array();
            $r1=explode(";", trim('chen="dd";cheg="dsd22"'));//item 的个数
             if(count($r1)>0){
             	echo "d";
        print_r($r1);
         $rrr="1";
             foreach ($r1 as $rr){
             if($rr==""){$rrr="";break;}
              //$rx1=array();
           $rp1=explode("=", trim($rr));
                     $rx[$rp1[0]]=$rp1[1];
                    // $rx=$rx.$rp1[0]."="."\"".$rp1[1]."\"";
                     echo "chen";
                      print_r($rp1); 
               }

            
              }
return $rx;
}

//3
function create3 ($str){
$i=0;
   $rx=array();
            $r1=explode(";", trim($str));//item 的个数
             if(count($r1)>0){
             	echo "d";
        print_r($r1);
         $rrr="1";
             foreach ($r1 as $rr){
             if($rr==""){$rrr="";break;}
              //$rx1=array();
           $rp1=explode("=", trim($rr));
                     $rx[$rp1[0]]=$rp1[1];
                     echo "chen";
                      print_r($rp1); 
               }

            
              }
return $rx;
}
//4
function create4 ($str){
$i=0;
   $rx=array();
            $r1=explode(";", trim($str));//item 的个数
             if(count($r1)>0){
             	echo "d";
        //print_r($r1);
         $rrr="1";
             foreach ($r1 as $rr){
             if($rr==""){$rrr="";break;}
              $rx1=array();
             $rp=explode(",", trim($rr));
             echo "v";
          //   print_r($rp);
             
           
                   foreach ($rp as $ds){
             
                     $rp1=explode("=", trim($ds));
                     $rx1[$rp1[0]]=$rp1[1];
                     echo "chen";
                    //  print_r($rp1);
            // $rx1[$i]=$rx1;
            //
           
                   }
               
                  
              $rx[$i]=$rx1;  
             $i++; 
              
               }

            
              }
return $rx;
}

