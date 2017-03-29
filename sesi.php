<?php
/*
 * ���user
 * */
include_once  'session/session_build.php'; 
include_once 'session/aadmi.php';
include_once 'session/massage.php';
include_once 'lib/php_lib/checkinput.php';
jian();

function check_location(){
$ip=getRealIpAddr();

$ipxian=getipxian($ip);
if($ipxian==false){
write_json::create_massage(array("ip","budoubuxuan","string","1","1","1"));
exit();

}
}
function jian(){
	$r=0;
	$e=0;
	$e3=0;
	if(isset($_COOKIE['username'])){
		
		//�����ڷ���username//���򷵻���ʾ���¼
		$fd=$_COOKIE['username'];
		if(check_html($fd)){
		$f=array("handle"=>array("name"=>"1","error"=>"256","handle_type"=>"none"),"bordy"=>array("name"=>"username","data"=>$fd,"type"=>"text"));
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
		$f=array("handle"=>array("name"=>"1","error"=>"265","handle_type"=>"none"),"bordy"=>array("name"=>"username","data"=>$str2,"type"=>"text"));
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
			$f=array("handle"=>array("name"=>"1","error"=>"276","handle_type"=>"none"),"bordy"=>array("name"=>"username","data"=>$str2,"type"=>"text"));
			$fr=new write_json();
			$fr->name=$f;
			$fr->prase_json();
			echo	$fr->getresult();
		}else $e3=1;
	
	
		
		
		
		
	}
	if($r==1){
		if (isset($_POST['id'])){
		
			$fa=$_POST['id'];
			if(check_html($fa)){
				$str1=gy2($fa);//jiemi
				@session_id($str1);
				$str2=$_SESSION['username'];
				setcookie1("username",$str2,3600);
				$f=array("handle"=>array("name"=>"1","error"=>"28","handle_type"=>"none"),"bordy"=>array("name"=>"username","data"=>$str2,"type"=>"text"));
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
				$str20=$_SESSION['username'];
				setcookie1("username",$str20,3600);
				$f=array("handle"=>array("name"=>"1","error"=>"27","handle_type"=>"none"),"bordy"=>array("name"=>"username","data"=>$str2,"type"=>"text"));
				$fr=new write_json();
				$fr->name=$f;
				$fr->prase_json();
				echo	$fr->getresult();
			}else $e3=1;
		
		}else{
			@session_data::init();
			@session_start();
			$id=@session_id();
			$str4=$_SESSION['username']="you";
			setcookie1("username",$str4,3600);
			$fq=gy1($id);
			setcookie2("id",$fq);
			$f=array("handle"=>array("name"=>"1","error"=>"26","handle_type"=>"none"),"bordy"=>array("name"=>"id","data"=>$fq,"type"=>"id"));
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
				$f=array("handle"=>array("name"=>"1","error"=>"25","handle_type"=>"none"),"bordy"=>array("name"=>"username","data"=>$str2,"type"=>"text"));
				$fr=new write_json();
				$fr->name=$f;
				$fr->prase_json();
				echo	$fr->getresult();
			}else $e3=1;
		
		}else{
			@session_data::init();
			@session_start();
			$id=@session_id();
			$str21=$_SESSION['username']="you";
			setcookie1("username",$str21,3600);
			$fq=gy1($id);//fq ��session����id
			setcookie2("id",$fq);
			$f=array("handle"=>array("name"=>"1","error"=>"24","handle_type"=>"none"),"bordy"=>array("name"=>"id","data"=>$fq,"type"=>"id"));
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
				setcookie1("username",$str2,3600);
				$f=array("handle"=>array("name"=>"1","error"=>"23","handle_type"=>"none"),"bordy"=>array("name"=>"username","data"=>$str2,"type"=>"text"));
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
			setcookie1("username","you",3600);
			$fq=gy1($id);
			setcookie2("id",$fq);
			$f=array("handle"=>array("name"=>"1","error"=>"21","handle_type"=>"none"),"bordy"=>array("name"=>"id_name","data"=>$fq,"type"=>"you"));
			$fr=new write_json();
			$fr->name=$f;
			$fr->prase_json();
			echo	$fr->getresult();
		
		
		
		
		}
		
		
		
	}
	
	
	
	
	
}
function setcookie1($key,$value,$time1){
	
	setcookie($key, $value, time()+$time1, "/", "localhost", 1);
	
	
	}
function setcookie2($key,$value){
	
	setcookie1($key,$value,3600);
	
	
	}

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