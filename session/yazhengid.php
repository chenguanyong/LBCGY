<?php
include_once 'session/session_build.php';
include_once 'session/aadmi.php';
include_once 'session/massage.php';
function yazhengid(){
	
	$id_array=array();
	if(isset($_COOKIE['id'])){
		//echo "cunzaiid";
		$id_array[0]=$_COOKIE['id'];
	
	
	}
	else {$id_array[0]=1;}
		
		if(isset($_POST['id'])){
			$id_array[1]=$_POST['id'];
		
	}else {
		
		$id_array[1]=1;
		
	}
	if(isset($_GET['id'])){
		
		$id_array[2]=$_GET['id'];
		
		
	}else{
		
		$id_array[2]=1;
		
	}
	$f=0;

	for($i=0;$i<3;$i++){
		if(!(@$id_array[$i]==1)){
		
			$f=@$id_array[$i];
			break;	
			
		}
		
	}
	//echo "\$f=".$f;
	if($f===1){
		
		write_json::create_massage(array("id","error","string","y2",2,"1"));
		exit();
		
		
	}else{
		//echo "----\n".$f;
		session_data::init();
		session_start();
		  $f=gy2($f);
		session_id($f);
		
		//echo "sdsdsdsd";
		//$_SESSION['rt']=32;
		//ECHO "session_id1:".$f;
	//	echo"----". session_id();
		//echo "---------".$_SESSION['ya']."--------------";
		
	}
	
	
}
function __yazhengid($string){
	$id_array=array();
	if(isset($_COOKIE['id'])){

		$id_array[0]=$_COOKIE['id'];
		echo "d1";
	}
	else {$id_array[0]=1;
	
	//echo "d".$id_array[0];
	}

	if(isset($_POST['id'])){
		$id_array[1]=$_POST['id'];

	}else {

		$id_array[1]=1;

	}
	if(isset($_GET['id'])){

		$id_array[2]=$_GET['id'];


	}else{

		$id_array[2]=1;

	}
	$f;

	for($i=0;$i<3;$i++){
		if($id_array[$i]!=1){

			$f=$id_array[$i];
			//echo $f;
			break;
				
		}else  $f=1;

	}
	if($f===1){

		//write_json::create_massage(array("id","error","string","y2",2,"1"));
		header($string);
		exit();


	}else{
		
		session_data::init();
		session_start();
		$f=gy2($f);
		session_id($f);

	}

	
}
//__yazhengid("Location: http://www.example.com/");