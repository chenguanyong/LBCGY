<?php
/*
function f($r,$t){

echo $r."dsff\n".$t=$t==null? 2:4;


}
f($t="f",null);
*/
include_once 'lib/php_lib/error_ex.php'; 



class my_sql {
	private $sql_name;
	private $sql_power;
	private $sql_server_ip;
	private $sql_hand;
	private $sql_data_name;
	function __construct($sql_data) {
		$this->sql_name="root";
		$this->sql_power="110";
		$this->sql_server_ip="localhost";
		$this->sql_data_name=$sql_data;
		
		$this->init();
	}
private 	function  init(){
	$this->sql_hand=@mysql_connect($this->sql_server_ip,$this->sql_name,$this->sql_power);
	if(!is_resource($this->sql_hand)){
		
		throw new error_exp("mysqljianlishibai", $this->sql_hand);
	}
	$this->sql_hand=mysql_select_db($this->sql_data_name,$this->sql_hand);
	
}
public function read($usename){
	
	$sql="select user_power from user_data where user_name='$username' ";
	$result=@mysql_query($sql,$ff);
	if($result===false&&$result!=0){
		return false;
		
	}
	
return 	$row=mysql_fetch_row($result);
	
	
	
}//½Ï¸´ÔÓµÄ²éÑ¯
public function ziyou_read($str_array,$mode,$where=""){
	
	$sql=create_function($str_array, $mode,$where);
	if($sql===false){
		return false;
	}
	$result=mysql_query($sql,$this->sql_hand);
	if($result===false){
		
		return false;
		
	}else {
		
		return $result;
	}
	
	
}
public function write($str_array,$mode,$where=""){
	
	$sql=create_function($str_array, $mode,$where);
	if($sql===false){
		return false;
	}
	$result=@mysql_query($sql,$this->sql_hand);
	if($result===false){
	
		return false;
	
	}else {
	if(mysql_affected_rows($this->sql_hand)===-1){
		return false;}
		else return true;
	}
	
	
}
public function update($str_array,$where=""){
	
	$sql=create_function($str_array, "update",$where);
	if($sql===false){
		return false;
	}
	$result=@mysql_query($sql,$this->sql_hand);
	if($result===false){
	
		return false;
	
	}else {
		if(mysql_affected_rows($this->sql_hand)===-1){
			return false;}
			else return true;
	}
	
	
}
public function delete($atr_array,$where=""){
	
	$sql=create_function($str_array, "delete",$where);
	if($sql===false){
		return false;
	}
	$result=@mysql_query($sql,$this->sql_hand);
	if($result===false){
	
		return false;
	
	}else {
		if(mysql_affected_rows($this->sql_hand)===-1){
			return false;}
			else return true;
	}
	
	
	
}
public function close(){
	
	mysql_close($this->handle);
}
private function creatstrsql($strarray,$mode,$where=""){
	$f="";
	switch($mode){
		case 'select':	$f="select";break;


        
	}
	if($f===""){
		return false;
		
	}
	$g="";
	foreach ($strarray as $key=>$value){
		$g=$g.$key;
		foreach ($value as $key1=>$value1){
			if($key==="from"){


				$g=$g." ".$value1." ";
			}
			if($key==="where"){

				$g=$g." ".$key1."=".$value1." ";

			}
			if($key===$mode){

				$g=$g." ".$value1." ";

			}
		}
		if($where==""){
			
			return $g;
			
		}else return $g.$where;
	}

	//return  $g;


}
}
 
//echo creatstrsql(array("select"=>array("user"=>"name"),"from"=>array("f"=>"ff"),"where"=>array("fd"=>"ee")), "select");


