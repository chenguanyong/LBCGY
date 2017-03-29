<?php
/*
 * 检测user
 * */
include_once  'session/session_build.php'; 
include_once 'session/aadmi.php';
include_once 'session/massage.php';
include_once 'lib/php_lib/checkinput.php';
function jian(){
	$r=0;
	$e=0;
	$e3=0;
	if(isset($_COOKIE['username'])||isset($_GET['id'])||isset($_POST['id'])){
		
		//如果存在返回username//否则返回提示请登录
		$fd=$_COOKIE['username'];
		if(check_html($fd)){
		$f=array("handle"=>array("name"=>"1","error"=>"2","handle_type"=>"none"),"bordy"=>array("name"=>"username","data"=>$fd,"type"=>"text"));
		$fr=new write_json();
		$fr->name=$f;
		$fr->prase_json();
	echo	$fr->getresult();
		
		}else{
		$r=1;	
			
		}	
	}elseif (isset($_POST['id'])){
		
		$fa=$_POST['id'];
		if(check_html($fa)){
		$str1=gy2($fa);//jiemi
		@session_id($str1);
		$str2=$_SESSION['username'];
		$f=array("handle"=>array("name"=>"1","error"=>"2","handle_type"=>"none"),"bordy"=>array("name"=>"username","data"=>$str2,"type"=>"text"));
		$fr=new write_json();
		$fr->name=$f;
		$fr->prase_json();
		echo	$fr->getresult();
		}else $e=1;	
	}elseif (isset($_GET['id'])){
		$fa=$_GET['id'];
		if(check_html($fa)){
			$str1=gy2($fa);//jiemi
			@session_id($str1);
			$str2=$_SESSION['username'];
			$f=array("handle"=>array("name"=>"1","error"=>"2","handle_type"=>"none"),"bordy"=>array("name"=>"username","data"=>$str2,"type"=>"text"));
			$fr=new write_json();
			$fr->name=$f;
			$fr->prase_json();
			echo	$fr->getresult();
		}else $e3=1;
	
	}else{
		@session_data::init();
		@session_start();
		$id=@session_id();
		$_SESSION['username']="you";
		$fq=gy1($id);
		$f=array("handle"=>array("name"=>"1","error"=>"2","handle_type"=>"none"),"bordy"=>array("name"=>"id","data"=>$fq,"type"=>"id"));
		$fr=new write_json();
		$fr->name=$f;
		$fr->prase_json();
		echo	$fr->getresult();
		
		
		
		
	}
	if($r==1){
		if (isset($_POST['id'])){
		
			$fa=$_POST['id'];
			if(check_html($fa)){
				$str1=gy2($fa);//jiemi
				@session_id($str1);
				$str2=$_SESSION['username'];
				$f=array("handle"=>array("name"=>"1","error"=>"2","handle_type"=>"none"),"bordy"=>array("name"=>"username","data"=>$str2,"type"=>"text"));
				$fr=new write_json();
				$fr->name=$f;
				$fr->prase_json();
				echo	$fr->getresult();
			}else $e=1;
		}elseif (isset($_GET['id'])){
			$fa=$_GET['id'];
			if(check_html($fa)){
				$str1=gy2($fa);//jiemi
				@session_id($str1);
				$str2=$_SESSION['username'];
				$f=array("handle"=>array("name"=>"1","error"=>"2","handle_type"=>"none"),"bordy"=>array("name"=>"username","data"=>$str2,"type"=>"text"));
				$fr=new write_json();
				$fr->name=$f;
				$fr->prase_json();
				echo	$fr->getresult();
			}else $e3=1;
		
		}else{
			@session_data::init();
			@session_start();
			$id=@session_id();
			$_SESSION['username']="you";
			$fq=gy1($id);
			$f=array("handle"=>array("name"=>"1","error"=>"2","handle_type"=>"none"),"bordy"=>array("name"=>"id","data"=>$fq,"type"=>"id"));
			$fr=new write_json();
			$fr->name=$f;
			$fr->prase_json();
			echo	$fr->getresult();
		}
		
		
		
	}elseif ($e==1){
		if (isset($_GET['id'])){
			$fa=$_GET['id'];
			if(check_html($fa)){
				$str1=gy2($fa);//jiemi
				@session_id($str1);
				$str2=$_SESSION['username'];
				$f=array("handle"=>array("name"=>"1","error"=>"2","handle_type"=>"none"),"bordy"=>array("name"=>"username","data"=>$str2,"type"=>"text"));
				$fr=new write_json();
				$fr->name=$f;
				$fr->prase_json();
				echo	$fr->getresult();
			}else $e3=1;
		
		}else{
			@session_data::init();
			@session_start();
			$id=@session_id();
			$_SESSION['username']="you";
			$fq=gy1($id);//fq 是session——id
			$f=array("handle"=>array("name"=>"1","error"=>"2","handle_type"=>"none"),"bordy"=>array("name"=>"id","data"=>$fq,"type"=>"id"));
			$fr=new write_json();
			$fr->name=$f;
			$fr->prase_json();
			echo	$fr->getresult();
		}
	}else {
		if (isset($_GET['id'])){
			$fa=$_GET['id'];
			if(check_html($fa)){
				$str1=gy2($fa);//jiemi
				@session_id($str1);
				$str2=$_SESSION['username'];
				$f=array("handle"=>array("name"=>"1","error"=>"2","handle_type"=>"none"),"bordy"=>array("name"=>"username","data"=>$str2,"type"=>"text"));
				$fr=new write_json();
				$fr->name=$f;
				$fr->prase_json();
				echo	$fr->getresult();
			}else $e3=1;
		
		}else{
			@session_data::init();
			@session_start();
			$id=@session_id();
			$_SESSION['username']="you";
			$fq=gy1($id);
			$f=array("handle"=>array("name"=>"1","error"=>"2","handle_type"=>"none"),"bordy"=>array("name"=>"id","data"=>$fq,"type"=>"id"));
			$fr=new write_json();
			$fr->name=$f;
			$fr->prase_json();
				$fr->getresult();
		
		
		
		
		}
		
		
		
	}
	
	
	
	
	
}
jian();
/*
 * <root1>
 * <handle1>
 * <name></name>
 * <error></error>
 * <handle_type></handle_type>
 * </handle1>
 * <bordy1>
 * <name></name>
 * <data1></data1>
 * <type></type>
 * </bordy1>
 * 
 * 
 * </root1>
 * /
 */