<?php
include_once 'lib/php_lib/checkinput.php';
include_once 'session/session_build.php';
include_once 'session/massage.php';
include_once 'session/aadmi.php';
include_once 'mysql/mysql.php';
include_once 'session/yazhengid.php';
yazhengid();

function center(){
	
	
	$username=$_POST['username'];
	if($_POST['username']&&($_POST['username']!="")){
		
		
		
		
		
	}else{
		$f=array("handle"=>array("name"=>"username","error"=>"bucunzai","handle_type"=>"none"),"bordy"=>array("name"=>"id","data"=>"d","type"=>"text"));
		$fr=new write_json();
		$fr->name=$f;
		$fr->prase_json();
			$fr->getresult();
		exit();
		
	}
	
	$sql=new my_sql("username");//�û�����ݿ�
	$name=array("username","age");
	$result1=array();
    $result=$sql->ziyou_read(array("select"=>$name,"from"=>array("username"),"where"=>array("username"=>$_SESSION['username'])), $mode);
	if($result!=false){
    $fr1=mysql_fetch_row($result);
	for ($o=0;$o<count($name);$o++){
		
	$result1[$name[$o]]=$result[$o];	
		
		
	}
	$f=array("handle1"=>array("name"=>"1","error"=>2,"handle_type"=>3),"bordy1"=>$result1);
	$fr->name=$f;
	$fr->prase_json();
	echo $fr->getresult();
    
    
    
    
	
	}else{
		$f=array("handle"=>array("name"=>"username","error"=>"bucunzai","handle_type"=>"none"),"bordy"=>array("name"=>"id","data"=>"d","type"=>"text"));
		$fr=new write_json();
		$fr->name=$f;
		$fr->prase_json();
		$fr->getresult();
		exit();
		
		
		
	}
	
	
}