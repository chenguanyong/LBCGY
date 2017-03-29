<?php 
//include('checkinput.php');
//include('session_data.php');
include_once 'lib/php_lib/checkinput.php';
include_once 'session/session_build.php';
include_once 'lib/network/socket_tcp.php';
include_once 'session/massage.php';
include_once 'lib/image_php/iamge_create.php';
include_once 'session/yazhengid.php';
$str="";
$id="";
//yazhengid();

	

$data1=array("name"=>"username","username"=>$_POST['username']);
$data2=array("name"=>"userpower","userpower"=>$_POST['userpower']);
$data3=array("name"=>"userphone","userphone"=>$_POST['userphone']);
$data4=array("name"=>"usermail","usermail"=>$_POST['usermail']);
$data5=array("name"=>"sex_nan","sex_nan"=>$_POST['sex_nan']);
//$data5=array("name"=>"usersex","usersex"=>$_POST['usersex']);
$data6=array("name"=>"sex_nv","sex_nv"=>@$_POST['sex_nv']);
$data7=array("name"=>"yazhen","useridcar"=>$_POST['yazhen']);
$data8=array("name"=>"yinsi","userrealname"=>@$_POST['yinsi']);
$data=array("un0"=>$data1,"un1"=>$data2,"un2"=>$data3,"un3"=>$data4,"un4"=>$data5,"un5"=>$data6,"un6"=>$data7,"un7"=>$data8);
print_r($data);
//$session_id1=$_POST['id'];
//name=$_POST['userrealname'];//鏄电О锛�
checkf();
function checkf(){

	
echo "\n"	.$username=$_POST['username'];
echo strlen($username)."\n";//鐢ㄦ埛鍚�
echo  "\n"	.	$userpower=$_POST['userpower'];
//瀵嗙爜
echo  "\n"	.	$userphone=$_POST['userphone'];
//鎵嬫満鍙�
echo strlen($userphone)."\n";
echo "\n"	.	$usermail=$_POST['usermail'];//閭
	$usersex_nan=$_POST['sex_nan'];//鎬у埆
	$usersex_nv=$_POST['sex_nan'];
	$yanzhen=$_POST['yazhen'];//鐢ㄦ埛鍦板潃
	$yinsi=$_POST['yinsi']."<br/>";//鏀粯淇℃伅
	//$userrealname=$_POST['userrealname'];
	//echo check_mail("993238441@qq.com");
	echo strlen($userphone)."?????????????";
	echo "fffffffffff".substr($usermail, 0,11)."gggggggggggggggggggg";
if($username==""){
	//write_json::create_massage(array("username","kong","string","1","1","1"));
	header(conf::$yu."lo/reger.html"."?username=kong")  ;
	exit();
	
	}else if($usermail=""){
		header(conf::$yu."lo/Login.html"."?mail=kong")  ;
		
		//write_json::create_massage(array("usermail","kong","string","1","1","1"));
	exit();}
	else if($userphone=""){
		header(conf::$yu."lo/Login.html"."?phone=kong")  ;
		//write_json::create_massage(array("userphone","kong","string","1","1","1"));
	exit();
		
		}else if($userpower==""){
			header(conf::$yu."lo/Login.html"."?power=kong")  ;
			//write_json::create_massage(array("userpower","kong","string","1","1","1"));
	exit();
		
		}
	
	
	
	
	else if(check_name($username)){
	//echo "鐢ㄦ埛鍚嶅紓甯�;
	header(conf::$yu."lo/Login.html"."?username=not")  ;
		//write_json::create_massage(array("username","bufuhegeifan","string","1","1","1"));
		exit();
	
	}else if(!check_power($userpower)){
		header(conf::$yu."lo/Login.html"."?power=not")  ;
		//write_json::create_massage(array("userpower","buheguifan","string","1","1","1"));
	exit();
		
		
		}else if(check_phone($userphone)){
			header(conf::$yu."lo/Login.html"."?phone=not")  ;
			//write_json::create_massage(array("userphone","buheguige","string","1","1","1"));
	exit();
			
			} else if(check_mail($usermail)){
			header(conf::$yu."lo/Login.html"."?mail=not")  ;	
			//write_json::create_massage(array("usermail","buheguige","string","1","1","1"));
	exit();
				
				} 
}
function addsql($data){
	
	$ff=mysql_connect("localhost","root","110");
mysql_select_db("username",$ff);
$sql="insert into userdata (";
$sql_name="";
$sql_value="1";
$d=count($data);
for( $i=0;$i<$d;$i++){
	if($data[$i][1]!=NULL)
	$sql_name.=",".$data[$i][0];
	$sql_value.=",".$data[$i][1];
	
	}
	$sql_name=substr($sql_name,1);
	$sql_value=substr($sql_value,1);
	$sql=$sql.$sql_name.") values (".$sql_value.")";
	
	
	
//$sql="select user_power from user_data where user_name='$username' ";
$result=mysql_query($sql,$ff);
if($result){
mysql_close($ff);
return true;}
else{
	addsql($data);
	
	} 
	}
	
	msocket($data);
	
	
	
	
function msocket($data){
	$xml=new massage_xml();
echo 	$xml->array_prase_xml2($data, "root");
	/*$socket = @socket_create(AF_INET, SOCK_STREAM, SOL_TCP)or die("gyhjkjkl");
	if(!is_resource($socket)){
		
		$socket = @socket_create(AF_INET, SOCK_STREAM, SOL_TCP)or die("gyhjkjkl");
		
		
		}
     $t=@socket_connect($socket,"127.0.0.1",700);
	
	if($t){
		
		if($result=socket_write($socket,$data,strlen($data))===false){
			
			
			
			
		return "shibai"	;}
		$ds=array($socket);
		
		socket_select($ds,NULL,NULL,30);
		$fd=socket_read($socket,200);//xml鏂囦欢
		
		}*/
	try{
	$socket=new socket_tcp("192.168.0.105", 3000);}
catch (error_exp $r){
	//write_json::create_massage(array("socket_creat",$r->mas,"string","1","1","1"));
	//header(conf::$yu."lo/Login.html"."?sys=false")  ;
	
	$r->err_obj1->socket_tcp_close();
	exit();
}

if(!$socket->socket_tcp_send($data)){
	//header(conf::$yu."lo/Login.html"."?sys=false")  ;
	//write_json::create_massage(array("socket_creat","fasong","string","1","1","1"));
	$socket->socket_tcp_close();
	
	//$r->err_obj1->socket_tcp_close();
	exit();
	
	
}
	
	if(!$str=$socket->socket_tcp_rec()){
		
	//	write_json::create_massage(array("socket_rev","jieshou","string","1","1","1"));
		
		//header(conf::$yu."lo/Login.html"."?sys=false")  ;
		//$r->err_obj1->socket_tcp_close();
		exit();
		
		
	}
	 $e=strpos($str,'#');
   $r1= substr($str, 0,$e);
   $xml->initxml($r1);
	$re=$xml->z_prese_array();
	if($re['data']=='success'){
		//注册成功的页面
		header(conf::$yu."lo/regok.html"."?sys=ok")  ;
		
	}else{
		
	header(conf::$yu."lo/regfalse.html"."?sys=false")  ;	
		
	}
	
	
	$socket->socket_tcp_close();
	
	}
	
	
		//header("location:.susess.html?id=".$id);	
	
	

exit;





?>
