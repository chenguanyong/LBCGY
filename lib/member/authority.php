<?php
include_once 'mysql/mysqli.php';

class  memberauth {

 private $dbname;
 private $mysql;
 
 public function __construct(){
 $this->dbname = "mem_auth";//
 
 $this->mysql = new mysqli_($this->dbname);
 
 }

public function getmemautharray($id){

   $result = $this->mysql->read("select auth from mem_auth where id=".$id);
   
   if($result == false){
   
   return false;
   }
   $r=$this->mysql->search($result);
  return   parse_auth($r);
} 

public function getmemautharraybyname($username){

   $result = $this->mysql->read("select auth from mem_auth where username=".$id);
   
   if($result == false){
   
   return false;
   }
   $r=$this->mysql->search($result);
  return   parse_auth($r);
} 



private  function parse_auth($auth_sum){
	$array=array();
$a=0;
for($i=0;$i<10;$i++){

$a=6*$i+5;

$a+=$a;
$array[]=$i;
if($a==$auth_sum){
break;

}

}

return $array;
}

private  function setauth($g,$v,$flog){
	
	return$flog? $g=$g+6*$v+5:$g=$g-6*$v+5;


} 


public function setAuthbyname($g, $v, $flog,$username){

$f=setauth($g,$v,$flog);

$result = $this->mysql->insert("update from mem_auth set ('auth'=".$f.") where username = '".$username."'");

return $result==false? false:true;

}

public function setAuthbyname($g, $v, $flog,$id){

$f=setauth($g,$v,$flog);

$result = $this->mysql->insert("update from mem_auth set ('auth'=".$f.") where id = ".$id."");

return $result==false? false:true;

}

}


