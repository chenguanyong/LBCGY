<?php
class session_data{
	public $server_ip;
	private $server_name;
	private $server_pwd;
	private $handle;
	private $timeout;
	function session_open($session_path,$session_name)
	{  //echo "open";
		$this->handle=mysqli_connect($this->server_ip,$this->server_name,$this->server_pwd)or die("shibai");
		if($this->handle){
			$ff=	mysqli_select_db($this->handle,"session_data")or die("dakaishujukeshibai");
				
			if($ff){
				//echo $ff;
				return true;}
					
		}else return false;

	}
	/*
		��ݿ��

		*/
	function session_read($id){
//return "fadd|s:6:'gfhbfg'";
		//echo "read";
		echo 'sdf44'.$id;
		$time=time();
		//echo "\n".$time."gggggggggggg\n";
		$sql="select session_dt from SESSION_TB3 WHERE session_key='$id'";
		$result=mysqli_query($this->handle,$sql);
		//echo $result;
		$wo=mysqli_fetch_row($result);
		//session_cl();
		if($wo){
		//	echo $wo[0];
			return "fadd2|s:9:\"fsdffgvfd\";";
		}
		else return false;

	}
	function session_write($write_id,$data1){
		echo $write_id."1111sdfsd1111".$data1;
		//echo" write";
	//echo "###".$data1;
		//echo $write_id."sdsljfalsdkfjla".$data1;
		$timeout1=$this->timeout+time();
		$tr=time();
		$sql="select session_dt from SESSION_TB3 where session_key='$write_id' and session_time>'$tr'";
		$result=mysqli_query($this->handle,$sql);
		$wo=mysqli_num_rows($result);
		if($wo==0){
			
			$sql="insert into SESSION_TB3 (session_key,session_time,session_dt) values ('$write_id','$timeout1','$data1')";
			$dd=mysqli_query($this->handle,$sql);
			//echo "DSSDSDS";
				
		}else {
		//$data="rt|i:32;sd|s:4:'sdsd';re|i:323;";//shuju
		$wo1=mysqli_fetch_row($result);
	$dat=$wo1[0];
		$arr_dat=explode(";", trim($dat));	
		$e44=array();
for ($i=0;$i<(count($arr_dat)-1);$i++){
$te=explode("|", $arr_dat[$i]);
for ($i1=$i+1;$i1<(count($arr_dat)-1);$i1++){
$e4=explode("|", $arr_dat[$i1]);
if($te[0]==$e4[0]){
$e44[]=$i1;
}



}



}
$r5=array();
foreach ($e44 as $h){
unset($arr_dat[$h]);

}	
foreach ($arr_dat as $vf){
if($vf!=""){

$r5[]=$vf;
}


}		
	
	
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
//$date="rt|i:322;sd3|s:4:'sdsd';sd23|s:4:'sdsd';";

$temp=" ";
$arr_data=$r5;

//print_r($arr_data);

//echo $arr_data[3];

//print_r($arr_data);
$arr_date=explode(";", $data1);
//print_r($arr_date);
$e=null;
for ($i=0;$i<(count($arr_date)-1);$i++){
	$ae=explode("|", $arr_date[$i]);
	//print_r($ae);
	for($w=0;$w<(count($arr_data));$w++){
	$rq=explode("|", $arr_data[$w]);
	//print_r($rq);
	if($ae[0]==$rq[0]){
	
	$rq[1]=$ae[1];
	$arr_data[$w]=$rq[0]."|".$rq[1];
	$e=1;
	break;
	
	}
	
	
	}
if($e==1){
	$e=0;
	continue;
	}else{
	 $temp=$temp.$ae[0]."|".$ae[1].";";	
	
	
	}
	




}
//print_r($arr_data);

for($ee=0;$ee<(count($arr_data));$ee++){
$y5=	explode(";", $arr_data[$ee]);
//print_r($y5);
//echo count($y5);
	if(count($y5)>1){
	
	$temp=$temp.$arr_data[$ee];
	}else {
	
	$temp=$temp.$arr_data[$ee].";";
	}
	
	
	
	
	}	
		
		
	
	//echo "#####".$temp;
			$sql="update SESSION_TB3 set  session_time='$timeout1',session_dt='$temp' where session_key='$write_id' ";
			$dd=mysqli_query($this->handle,$sql);
//echo "";
		}
		//session_cl();
		return $dd;


	}

	function session_ds($key){
		//echo "ds";
		$sql="delete  from SESSION_TB3 where session_key='$key'";
		$result=mysqli_query($this->handle,$sql);
		//session_cl();
		return ($hh);


	}

	function session_fc($key){
		//echo "ffc";
		$lastime=time();
		$sql="delete from SESSION_TB3 WHERE session_time<'$lastime'";
		$result=mysqli_query($this->handle,$sql);
		//session_cl();
		return $my;




	}
	

	public function __construct($server_ip,$user_name,$user_pwr,$timeout){
		$this->server_ip=$server_ip;
		$this->server_name=$user_name;
		$this->server_pwd=$user_pwr;
		$this->timeout=$timeout;
			
			
	}
	function session_cl(){

		$ff=mysqli_close($this->handle);
		return true;


	}
	static function init(){
		$session_data = new session_data("192.168.0.105","root","110",36000);
		//$session_data->session_open("kk","hh");
		//	$td="ii";
		//	$session_data->session_write("ii","hjhgg");
		//	$session_data->session_read($td);
		//$session_data->session_cl();

		session_set_save_handler(array($session_data,'session_open'),array($session_data,'session_cl'),array($session_data,'session_read'),
				array($session_data,'session_write'),array($session_data,'session_ds'),
				array($session_data,'session_fc')

				);
		//
		//$session_data->session_write("ii","hjhgg");
	}





}

//session_data::init();
//session_start();
//$_SESSION['f']="ddd";
//echo session_id();

