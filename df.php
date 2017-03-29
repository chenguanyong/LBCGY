<?php

include_once 'conf/conf.php';
include_once 'lib/network/HostByName.php';
$re=array();
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
		
		echo "sdsdsdsd";
		//$_SESSION['rt']=32;
		//ECHO "session_id1:".$f;
	//	echo"----". session_id();
		//echo "---------".$_SESSION['ya']."--------------";
		
	}
	echo "fvxdf";

/*
//SetIp();
echo time()."---";
echo GetIp();
echo "---".time();
/*
//print_r($_SERVER);

include_once 'lib/php_lib/checkinput.php';
include_once 'session/session_build.php';
include_once 'session/massage.php';
include_once 'session/aadmi.php';
include_once 'mysql/mysqli.php';
include_once 'session/yazhengid.php';
include_once 'lib/network/socket_tcp.php';
include_once "lib/php_lib/brose.php";


echo "dd";
print_r($_POST);

echo strip_tags($_POST['fds']);

echo check_text($_POST['fds'])? "d":"sd";







/*
echo getRealIpAddr();


echo  $query = file_get_contents('http://int.dpool.sina.com.cn/iplookup/iplookup.php?format=utf-8&ip=219.156.98.24');
echo $r= iconv('GB2312', 'UTF-8', $query);


$r=trim($r);
 $i=0;
 // mbsplit(" ", $r, $k);

$k=explode("\t", $r);
print_r($k);


/*run33('2',5116,2);
function run33($page,$pici,$type){
$mysql=new mysqli_("linbei_ad");
$result="";

$result=$mysql->read("SELECT `num`,`createtime`,`link`,`id1`,`name`  FROM `linbei_ad`.`tuijian`  where type=".$type."  and   pici =".$pici." LIMIT 0, 15 ;");
	


		
		$er=$mysql->search_mc($result,"ad_num,riqi,ad_link,ad_id,ad_name");
   
		if(count($er)>0){

		$er['hand']=array("size00"=>count($er),"pici"=>"0","yeshu"=>"l");	
		$xml=new write_json();
		$xml->name=$er;
		$xml->prase_json();
		echo $xml->getresult();
			

		}	else {
			

		}
		
	}






/*
$mysql=new mysqli_("linbei_ad");
$result="";

$result=$mysql->read("SELECT `num`,`createtime`,`link`,`id1`,`name`  FROM `linbei_ad`.`tuijian` WHERE 'type'=0 AND   pici =9343 LIMIT  10 ;");
	


//createshop([oj.createtime,oj.or_num],[oj.sh_num,oj.sh_name,oj.sh_num,oj.sh_attr],[oj.sh_attr,oj.or_cash,oj.or_state,oj.or_num]);	
		
		$er=$mysql->search_mc($result,"ad_num,riqi,ad_link,ad_id,ad_name");
print_r($er);
//echo "ds"; $fp[$rtt]=array("ad_id"=>$value["id00"],"ad_num"=>$value["num00"],"ad_name"=>$value["name00"],"ad_link"=>$value['link00'],"riqi"=>$value['createtime00']);
    
		if(count($er)>0){
//echo "sds";
			//$this->result=$er;
		$er['hand']=array("size00"=>count($er),"pici"=>"0","yeshu"=>"l");	
		$xml=new write_json();
		$xml->name=$er;
		$xml->prase_json();
		echo $xml->getresult();
			//$this->isalive=true;

		}	else {
			//$this->result=null;
			//$this->isalive=false;


		}

/*
$t=new updatedata("2");
$t->start();

class  updatedata extends Thread{
	public $t;
	public $username;
	private $type;
	function __construct($type){
	$this->t="ds";

	$this->type=$type;
	}
	function run(){
		echo "sdsdsd";
		$xml=new massage_xml();
	$shenqing=$xml->prase_xml1(array("name"=>1,"error"=>2,"handle_type"=>3,"fdg"=>'f'),"handle");
	$shenqing=$shenqing.$xml->prase_xml1(array("name"=>"tj","name1"=>"init1","data"=>"is","type"=>$this->type),"body");
echo  $shenqing=$xml->getft()."<root>".$shenqing."</root>";
	
try{
$socket=new  socket_tcp("192.168.0.105", 3000);
    $socket->socket_tcp_send($shenqing);
    echo "1111";
}catch (Exception $g){


echo "aaa1111111dsfsdfss";

}
echo 	$r= $socket->socket_tcp_rec1(1000);
	$socket->socket_tcp_close();
 	//echo strlen($r)."---\n";
     $e=strpos($r,"#");
   echo  $r= substr($r, 0,$e);

 //向客户端返回数据
//echo "1";

// echo  "sdfs1";
     $xml= new massage_xml();
    $xml->initxml($r);
   // echo "3";
    $arry=$xml->xml_prase_array();
 //print_r($arry);
    $f=array();

    
    
    if($arry['un0']['data00']=="kong"){
     $arry['hand']=array("size00"=>count($arry));
    	$xml=new write_json();
		$xml->name=$arry;
		$xml->prase_json1();
		echo $xml->getresult();
    exit;
    }
    
    
  //  echo  "sdfs2";
    
    $f=array();
     $f=$arry;
      $pici=rand(0, 10000);
    $ftr=new updatedata3($f,$pici);
 $ftr->start();

    $fp=array();
  //  echo  "sdfs3";
    FOREACH($arry as $rtt=>$value){
    $fp[$rtt]=array("ad_id"=>$value["id00"],"ad_num"=>$value["num00"],"ad_name"=>$value["name00"],"ad_link"=>$value['link00'],"riqi"=>$value['createtime00']);
    
    }

    $xml=new write_json();
    $size=count($f);
    $linksize=$size;
    $yeshu="";
    $temp=ceil($size/15);
    
    
    if($size>15){
    $size=15;
    
    }
   
    
    
    $fp['hand']=array("size"=>$size,"pici"=>$pici,"yeshu"=>$temp,"linksize"=>$linksize);
		$xml->name=$fp;
		$xml->prase_json();
		echo $xml->getresult();
    
 // echo  "sdfs5";
	
	
	
	}
	
	
	
	}
	













/*
require_once 'lib/network/socket_tcp.php';

$socket=new  socket_tcp("192.168.0.105", 3000);
    $socket->socket_tcp_send($shenqing="sdfsdfsdfsd");
    
    echo $socket->socket_tcp_rec();
    $socket->socket_tcp_close();
/*

class  f{
  public $ff=0;


}

$rg=new f();


echo $rg->ff="sds";
$rg->ffd="sds";
echo $rg->ffd;













/*
function create ($str){
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

echo "d<br />";
print_r(create4 ($str="dd"));

function create4 ($str){
$i=0;
   $rx=array();
            $r1=explode(";", trim('chen="dd",cd="ds";fg="dss",cheg="dsd22"'));//item 的个数
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




/*
$rr=array("g"=>array("f"=>"sdsd"));
print_r($rr);
foreach ($rr as $f=>$fd){

echo $fd["f"];

}



/*
$r=array("中国得到"=>"ds水水ds");
try{
if(@$r["中国得到"]){

echo "中国得到";


}else{


echo "a";
}
echo "dsd11";
}catch (Exception $f){

echo "sdsd";


}
echo "sdsd";
/*
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




/*
$mysql=new mysqli_("linbei_work");
		$result=$mysql->read("select mylink,myspread from work  where username ='chenguan' limit 1;");

		$er=$mysql->search_m($result,"mylink,myspread");
print_r($er);
/*
$r=45;
$e=4;
echo ceil($r/$e);

/* $mysql=new mysqli_("linbei_shop") ;
   
   $where=" where ";
   
   
   $where=$where." assortment1='家电'";
   
  
	
 //$resoo= $mysql->read("select id,brand,prices,condition1 from checkmu ".$where);
 $r=$mysql->insert0("INSERT INTO `linbei_shop`.`checkmu` (
  `assortment1`,
  `assortment2`,
  `assortment3`,
  `brand`,
  `prices`,
  `condition1`
) 
VALUES
  (
   'it',
   '通讯',
    '家电',
    '华为;三星',
    '0-23;24-50',
    '品牌;价格'
  )");
 
 echo $r."dsdsd";
 $mysql->mysql_c();
 /*$d= $mysql->search_m($resoo, "id,brand,prices,condition1");
     
   $rq=array();
     foreach ($d as $value){
     foreach ($value as $key=> $fds){
     
   $sa=  explode(";", trim($fds));
   $json=new    write_json();
   $ar_json= $json->array_json($sa);
  $rq[$key."00"]=$ar_json;
  
     }
     
     }
     
print_r($rq);


/*
$xml=new massage_xml();
	$xml->initxml("<?xml version='1.0' encoding='UTF-8'?><root><handle><name>1</name><error>2</error><handle_type>3</handle_type></handle><bordy><un1><name>dfzh</name><data>0</data><type>3</type></un1><un2><name>jifen</name><data>232</data><type>3</type></un2><un3><name>pay</name><data>4323533</data><type>3</type></un3></bordy></root>");
	$xmlobj=$xml->xml_prase_array();
	print_r($xmlobj);

//check_power("232323");

/*
$g=array();

$g["dd"]="ss";

print_r($g);


/*run();
 function run(){
		$pici=2884;
$mysql=new mysqli_("username");
//$pici=$_POST['pici'];

echo "hhh";
		$result2=$mysql->read("select `mincheng`,`integral`,`balance`,`state_m`,`amount`,`num_`,`optiontime` from userfinance where username ='chenguan' and pici=2884 limit 5;");

		$er=$mysql->search_m($result2,"`mincheng`,`integral`,`balance`,`state_m`,`amount`,`num_`,`optiontime`");
print_r($er);
//echo "ds";
		if(count($er)>0){
//echo "sds";
			//$this->result=$er;
		$xml=new write_json();
		$xml->name=$er;
		$xml->prase_json();
		echo $xml->getresult();
			//$this->isalive=true;

		}	else {
			//$this->result=null;
			//$this->isalive=false;


		}
		//$this->bool=true;

	}



/*echo date("Y-m-d H:i:s");
function fp(){

$xml=new DOMDocument;
$xml->loadHTMLFile("dd.html");

$r=$xml->getElementById("ds");

//echo $r->getAttribute("id");
//$r->setAttribute("id", "s");
$r->nodeValue="根据季节姐姐姐姐姐姐吧";
echo $r->nodeName;

$xml->saveHTMLFile("da.html");
}

fp();




/*
$m=new mysqli_("linbei_shop");
//$f=$m->read("select * from checkmu");
//$r=$m->search($f);
//print_r($r);
$f=$m->read("INSERT INTO  checkmu (assortment1,`assortment2`,`assortment3`,`brand`,`prices`, `freeshipping`,`newshop`,`salse`, `praise`,`follow`,`goods`) values ('手机','家电;洗衣机;电视','的','三星;华为;','0-99;100-199;','d','dd','ew','dd','tr','ghfg')");



//echo $_COOKIE["username"];

/*
// The message

$to      = '993238441@qq.com';
$subject = 'the subject';
$message = 'hello';
$headers = 'From: webmaster@example.com' . "\r\n" .
    'Reply-To: webmaster@example.com' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

mail($to, $subject, $message, $headers);


// echo  convert_uuencode("dsfsf ");
//setcookie("user", "Alexgg Porter", time()+3600,"/");
//echo $_COOKIE['ig'];
/*
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


$_COOKIE['ir']="chenfgsf";


/*
header(conf::$yu."u/usercenter.html?id=dfg")  ;	


//$_SESSION['dsd']="dsfsaddfs";
//echo "-----".  session_data::getsession(session_id(),'fadd2d');


/*
echo substr("qbcds", 0,(strlen("qbcds")-1));

	/*	$xml=new massage_xml();
	$shenqing=$xml->prase_xml1(array("name"=>1,"error"=>2,"handle_type"=>3),"handle");
	$shenqing=$shenqing.$xml->prase_xml1(array("name"=>"tubiao","data"=>'week',"username"=>'chen'),"body");
 $shenqing=$xml->getft()."<root>".$shenqing."</root>";
	$socket=new  socket_tcp("192.168.0.105", 3000);
    $socket->socket_tcp_send($shenqing);
 	$r= $socket->socket_tcp_rec1(250);
     $e=strpos($r,"#");
echo $r= substr($r, 0,$e);
 $xml= new massage_xml();
    $xml->initxml($r);
   // echo "3";
    $arry=$xml->z_prese_array();
print_r($arry);
 //向客户端返回数据
//echo "1";
 
   
   // $arry['optiontime']=time();//添加操作时间
   
  /*  ECHO "chenggong";
   $jk0=iamge_opt::tiaoxing($arry); 
    $jk1=iamge_opt::zhexiantu($arry);
	write_json::create_massage(array("1","s","k","image","image/image/".$jk0.".png","image/image/".$jk1.".png"));
    

$at=array("username"=>"sd","data0"=>"image/image/".$jk0.".png","data1"=>"image/image/".$jk1.".png","optiontime"=>time());

	$m=new mysqli_('username');
	
    $m->insert(array("insert into temp_tubiao",$at));
    $m->mysql_c();
	//$m->
	
	*/
/*(	

//��֤
//yazhengid();
//��������
echo "sd";
 work_thread();
function work_thread(){
	

	if(isset($_SESSION['cash1']))
	{$time=$_SESSION['cash1'];
		if(time()-$time>360){
			
			//ִ�и���
			$rr1=new updatedata("username");
			$rr1->start();
			
		}else{
			
			//ִ�л��棬����ݿ���鿴��Ϣ
			//chaxunsql($ca);
			$ru=new mythread('username');
			$ru->start();
		}
		
		
	}else{
		//threa_update($up);
		$rr11=new updatedata('username');
			$rr11->start();
		
		//ִ�и���
	}
	//�ȴ�ͬ��

}	
	
	
	

class mythread extends Thread{
	private  $mysql;
	private $name;
	public function __construct($name){
        $this->name=$name;
		
		
	}

	public function run(){
$mysql=new mysqli_("username");
		$result=$mysql->read("select username,data0,data1 from temp_tubiao where username ="."'".$this->name."';");

		$er=$mysql->search_m($result,"username,data0,data1");
print_r($er);
//echo "ds";
		if(count($er)>0){
echo "sds";
			//$this->result=$er;
		write_json::create_massage(array("1","s","k","image",$er[0][1],$er[0][2]));
			//$this->isalive=true;

		}	else {
			//$this->result=null;
			//$this->isalive=false;


		}
		//$this->bool=true;

	}
}//


class  updatedata extends Thread{
	public $t;
	public $username;
	function __construct($name){
	$this->t="ds";
	$this->username=$name;
	}
	function run(){
		//echo "sdsdsd";
		$xml=new massage_xml();
	$shenqing=$xml->prase_xml1(array("name"=>1,"error"=>2,"handle_type"=>3),"handle");
	$shenqing=$shenqing.$xml->prase_xml1(array("name"=>"tubiao","data"=>'week',"username"=>'chen'),"body");
echo  $shenqing=$xml->getft()."<root>".$shenqing."</root>";
	$socket=new  socket_tcp("192.168.0.105", 3000);
    $socket->socket_tcp_send($shenqing);
 	$r= $socket->socket_tcp_rec1(100);
     $e=strpos($r,"#");
echo $r= substr($r, 0,$e)."www";

 //向客户端返回数据
//echo "1";
 
   
   // $arry['optiontime']=time();//添加操作时间
   
    ECHO "chenggong";
    $r9=array();
    foreach ($r as $gp=>$r8){
    $r9[]=array($gp,$r8);
    }
    print_r($r9);
  // $jk0=iamge_opt::tiaoxing(array(array("1",60),array("1",60),array("1",60),array("1",60),array("1",60),array("1",60))); 
    $jk1=iamge_opt::zhexiantu(array(array("1",60),array("1",60),array("1",60),array("1",60),array("1",60),array("1",60)));
	write_json::create_massage(array("1","s","k","image","image/image/".$jk0.".png","image/image/".$jk1.".png"));
    

$at=array("username"=>"sd","data0"=>"image/image/".$jk0.".png","data1"=>"image/image/".$jk1.".png","optiontime"=>time());

$m=new mysqli_('username');
	
    $m->insert(array("insert into temp_tubiao",$at));
   $m->mysql_c();
	//$m->
	
	
	
	}
	
	
	
	}


/*

//$arr=explode(",","xuhao,username,power_unm,nickname,age,phone,mail,sex,rank_,createtime,lasttime,prant_user");

//$arrd=array();
//echo $arrd[$arr[0]]="er";

print_r($arr);
echo count($arr);
/*
class mythread extends Thread{
	private  $mysql;
	private $name;
	public function __construct($name){
        $this->name=$name;
		
		
	}

	public function run(){
$mysql=new mysqli_("username");
		$result=$mysql->read("select username,nickname,age,phone,mail,sex,rank_ from userdata where username ="."'".$this->name."';");

		$er=$mysql->search_m($result,"username,nickname,age,phone,mail,sex,rank_");
print_r($er);
//echo "ds";
		if(count($er)>0){
echo "sds";
			//$this->result=$er;
		$xml=new write_json();
		$xml->name=array("body"=>$er[0]);
		$xml->prase_json();
		echo $xml->getresult();
			//$this->isalive=true;

		}	else {
			//$this->result=null;
			//$this->isalive=false;


		}
		//$this->bool=true;

	}
}//
$t=new mythread("chen");
$t->start();
/*$mysql=new mysqli_("username");
		$result=$mysql->read("select * from userdata where username ='chen';");

	$er=$mysql->search($result);
print_r($er);
/*
class  updatedata extends Thread{
	public $t;
	public $username;
	function __construct($name){
	$this->t="ds";
	$this->username=$name;
	}
	function run(){
		echo "sdsdsd";
		$xml=new massage_xml();
	$shenqing=$xml->prase_xml1(array("name"=>1,"error"=>2,"handle_type"=>3),"handle");
	$shenqing=$shenqing.$xml->prase_xml1(array("name"=>"initdata","data"=>$this->username,"type"=>2),"body");
 $shenqing=$xml->getft()."<root>".$shenqing."</root>";
	$socket=new  socket_tcp("192.168.0.105", 3000);
    $socket->socket_tcp_send($shenqing);
 	$r= $socket->socket_tcp_rec1(500);
     $e=strpos($r,"#");
echo $r= substr($r, 0,$e);

$xml1=new massage_xml1();
$xml1->initxml($r);
echo $xml1->prase_json1(); //向客户端返回数据

    $xml= new massage_xml();
    $xml->initxml($r);
    $arry=$xml->z_prese_array();
    $arry['optiontime']=time();//添加操作时间



	$m=new mysqli_('username');
	
    $m->insert(array("insert into userdata",$arry));
    $m->mysql_c();
	//$m->
	
	
	
	}
	
	
	
	}
	$n=new updatedata("chenguan");
	$n->start();
	
//$r=array("dfd"=>"sds");
//echo unserialize( "ya|s:4:'vj18';");
/*
session_data::init();
		session_start();
		session_id("75rc180kv9pb8kahp7q588u5t5");
		$_SESSION['dsdsd']="sd";


/*
$data="rt|i:32;sd|s:4:'sdsd';";//shuju
$date="rt|i:32;sd|s:4:'sdsd';rt44|i:32;";
$arr_dat=explode(";", $date);	
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
		
print_r($r5);		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
//$date="rt|i:322;sd3|s:4:'sdsd';sd23|s:4:'sdsd';";

$temp=" ";
$arr_data=$r5;

//print_r($arr_data);

//echo $arr_data[3];

//print_r($arr_data);
$arr_date=explode(";", $data);
//print_r($arr_date);
$e=null;
for ($i=0;$i<(count($arr_date)-1);$i++){
	$ae=explode("|", $arr_date[$i]);
	print_r($ae);
	for($w=0;$w<(count($arr_data));$w++){
	$rq=explode("|", $arr_data[$w]);
	//print_r($rq);
	if($ae[0]==$rq[0]){
	
echo "###1".	$rq[1]=$ae[1];
	echo "###2".$arr_data[$w]=$rq[0]."|".$rq[1].";";
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
	
	$temp=$temp.$arr_data[$ee];
	
	
	}
echo $temp; 
/*$data="rt|i:32;sd|s:4:'sdsd';re|i:323;";//shuju
$date="rt|i:322;rt|i:322;sd3|s:4:'sdsd';sd23|s:4:'sdsd';sd23|s:4:'sdsd';";
$temp=" ";
$arr_data=explode(";",$data);
print_r($arr_data);
$arr_date=explode(";", $date);
print_r($arr_date);
$e=array();
for ($i=0;$i<(count($arr_date)-1);$i++){
$te=explode("|", $arr_date[$i]);
for ($i1=$i+1;$i1<(count($arr_date)-1);$i1++){
$e4=explode("|", $arr_date[$i1]);
if($te[0]==$e4[0]){
$e[]=$i1;
}



}



}
foreach ($e as $h){
unset($arr_date[$h]);

}
array_values($arr_date);
print_r($e);
print_r($arr_date);

/*yazhengid();
$_SESSION['sd']="wewe";
$_SESSION['re']=323;
$_SESSION['sd']="sdsd";
$_SESSION['sdw']="sdsd";
$_SESSION['sd22']="sdsd";
$pizza="sd|s:4:'wewe';";
$data=explode("|", "sd|s:4:'wewrre';");
print_r($data);
$pieces = explode(";", $pizza);
$rr=null;
$u=count($pieces)-1;
for($i=0;$i<$u;$i++){

$tr=explode("|",$data[$i]);
if($tr[0]==$data[0]){
$tr[1]=$data[1];
$rr=$rr.$tr[0].$tr[1];
}else{

$rr=$rr.$v.";";

}


}
echo $rr;


session_data::init();
		session_start();
		session_id("75rc180kv9pb8kahp7q588u5t5");
		$_SESSION['dsdsd']="sd";
$data="rt|i:32;sd|s:4:'sdsd';re|i:323;";//shuju
$date="rt|i:322;sd3|s:4:'sdsd';sd23|s:4:'sdsd';";
$temp=" ";
$arr_data=explode(";",$data);
print_r($arr_data);
$arr_date=explode(";", $date);
print_r($arr_date);
$e=null;
for ($i=0;$i<(count($arr_date)-1);$i++){
	$ae=explode("|", $arr_date[$i]);
	
	for($w=0;$w<(count($arr_data)-1);$w++){
	$rq=explode("|", $arr_data[$w]);
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
	echo $temp=$temp.$ae[0]."|".$ae[1].";";	
	
	
	}
	




}
print_r($arr_data);

for($ee=0;$ee<(count($arr_data)-1);$ee++){
	
	$temp=$temp.$arr_data[$ee].";";
	
	
	}
echo"####". $temp."####";






//echo conf::$yu;
//$it=conf::$yu;
//header($it."u/usercenter.html?id="."sds"."&id2="."fsdfjjk") ;	



/*$xml=new massage_xml();
	$user_data=	$xml->array_prase_xml2(array("hand"=>array("name"=>"deng232lu","error"=>"0","handle_type"=>"s"),"body"=>array("name"=>"power","data"=>"rfe","power"=>"ere")), "root");
		
		//$socket=new  socket_tcp("192.168.0.105", 3000);
	//$socket->socket_tcp_send("#".$user_data."#");
//echo 	$r= $socket->socket_tcp_rec();
 $e=strpos($r,"#");
//echo substr($r, 0,$e);
$xml->initxml("<?xml version='1.0' encoding='utf-8'?><root><handle><error>d</error><name>d</name><hander_type>d</hander_type></handle><body><name>fixpower</name><data>success</data><type>return</type></body></root>");
	$re=$xml->z_prese_array();
	print_r($re);
	echo $re['data'];
	echo $re['name'];
//echo $ds[1]."";
//	echo strlen($ds);
	//$socket->socket_tcp_close();
	
	
	class  fg extends Thread{
	public $t;
	function __construct(){
	$this->t="ds";
	
	}
	function run(){
		echo "sdsdsd";
		$xml=new massage_xml();
	$shenqing=$xml->prase_xml1(array("name"=>1,"error"=>2,"handle_type"=>3),"handle");
	$shenqing=$shenqing.$xml->prase_xml1(array("name"=>"initdata","data"=>"chenguan","type"=>2),"body");
	echo $shenqing=$xml->getft()."<root>".$shenqing."</root>";
	$socket=new  socket_tcp("192.168.0.105", 3000);
$socket->socket_tcp_send($shenqing);
echo 	$r= $socket->socket_tcp_rec();
	$m=new mysqli_('username');
	//$m->
	
	
	
	}
	
	
	
	}
	$fr=new fg();
	$fr->start();
	
	

/**class updatethread extends Thread{
	
	//private $msocket;
	public $result;
	public  $bool;//�ж�ִ�н��
	private $usertool;
	//private $sql;
	public function __construct(){
		//$this->msocket=new socket_tcp("127", $dd);
		$this->bool=false;
		$this->usertool=new usertool();
		//$this->sql=new mysqli_("username");
	}
	public function run(){
		echo "chenggong";
	$xml=new massage_xml();
	$shenqing=$xml->prase_xml1(array("name"=>1,"error"=>2,"handle_type"=>3),"handle");
	$shenqing=$shenqing.$xml->prase_xml1(array("name"=>"initdata","data"=>"chenguan","type"=>2),"body");
	$shenqing=$xml->getft()."<root>".$shenqing."</root>";
	$socket=new socket_tcp("192.168.0.105",3000);
	if(!$socket->socket_tcp_send($shenqing)){
		$socket->socket_tcp_close();
	//return false;
	}
	//$this->socket->socket_s();
	$re;
	if(!$re=$socket->socket_tcp_rec()){
		$socket->socket_tcp_close();
		//return false;
	}
	//$xml->initxml($re);
	//$xml->xml_prase_array();
	$socket->socket_tcp_close();
	/*$xml2=new massage_xml1();
	$xml2->initxml($re);
	$xml2->xml_prase_json();*/
		//echo "sdfdsfs";
		//$this->bool=true;
		//$xml_array=new massage_xml();
		//$xml_array->initxml($this->result);
		//$re1=$xml_array->z_prese_array();
		
		//print_r($re1);
		
		//$s=array("insert into SESSION_TB3",$re1);
	//if(	$this->sql->insert($s)){
		
		//$_SESSION['cash']=time();
	//}
		
		
		
	//}

//}

	//$tool1=new usertool();
	//$tr=new updatethread();
	//$tr->start();
	
	
//*/

/*
class  fd extends Thread{



function run(){
$d=0;
echo "############fdssds".$d+=8;
$re=new fdw($d);
$re->start();

}



}
$r=new fd();
$r->start();
class  fdw extends Thread{

public $f;
function __construct($t){

$this->f=$t;
}

function run(){

echo "fdss11ds".$this->f+=3;
}



}
*/