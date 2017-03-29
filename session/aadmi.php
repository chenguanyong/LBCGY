<?php
include_once 'session/session_build.php';
function yuan($x){
	$a=1000.0;
	//$b=0;
	$r=999.0;
	$f=$r*$r;
	$d=($x-$a)*($x-$a);
	$ff=sqrt($f-$d);
	return -floor($ff);


}
function yuan1($x){
	$a=1000.0;
	//$b=0;
	$r=999.0;
	$f=$r*$r;
	$d=($x-$a)*($x-$a);
	$ff=sqrt($f-$d);
	return floor($ff);


}
//echo yuan(500);
function gy1($str){
	$dcrc=crc32($str);
	$dcrc=sprintf("%u",$dcrc);

	//echo $dcrc."\nbbb";
	$dcrc=" ".$dcrc;
	$dcrc=substr($dcrc,-5);
	$dcrc=floatval($dcrc);
	//echo "xin crc".$dcrc;
	$fd=array();//解析成16进制
	$fr=rand(1,1999);
	//echo "fr=".$fr."\n";
	$fy=-yuan($fr);//求圆的-Y值
	//echo "fy=".$fy;
	$s=" ";
	$fda=array();
	for($i=0;$i<strlen($str);$i++){
		$fd[$i]=ord($str[$i]);
		//echo "a10jinzhi=".$fd[$i]."zhi=".$str[$i]."sds".$dcrc;
		$fda[$i]=$fd[$i]^$dcrc;
		//echo "crc=".$fda[$i];
		//$fda[$i]=$fda[$i]>>1;
		//echo "youyi=".$fda[$i];
		$fda[$i]=$fda[$i]^$fy;
		//echo "fy=".$fda[$i];
		$rr="".$fda[$i];
		//echo is_string($rr);
		$tt=strlen($rr);
		$ds=substr($rr,-3,3);
		$ffdd=substr($rr,0,strlen($rr)-3);
		$s.=$ds;
		//echo "jjjj".$ds."dd";
		//echo "jieguo=".$fda[$i];
	}

	return $s."#".$dcrc."#".$fr."#".$ffdd;

}
function gy2($str){
	$str =rtrim($str);
	//echo "a1=".$str;
	$ff=array();
	$a=0;
	for($i=0;$i<strlen($str);$i++){

		if($str[$i]=="#"){
			$ff[$a]=$i;
			//echo "ff=".$ff[$a];
			$a++;
				
		}

	}
	$dcrc=@substr($str,$ff[0]+1,$ff[1]-$ff[0]-1);//jiexicrc();
	//echo "crc=".$dcrc."\n";
	$fx=@substr($str,$ff[1]+1,$ff[2]-$ff[1]-1);//jiexifx;
	//echo "fx=".$fx."\n";
	$dds=@substr($str,$ff[2]+1);
	//echo "dds=".$dds."\n";
	$fx=floatval($fx);
	$str=@substr($str,0,$ff[0]);
//	echo "str=".$str."\n";
	$dcrc=floatval($dcrc);
//	echo "dcrc".$dcrc;
	$fda=array();
	//echo "dddddddddddddddd>>>>>>>>>".$str=rtrim($str)."<<<<<<<<<<<\n".strlen($str);
	$str=substr($str,1);
	//echo "dddddddddddddddd>>>>>>>>>".$str=rtrim($str)."<<<<<<<<<<<\n".strlen($str).$str[0];
	$qq=strlen($str);
//	echo "qq=".$qq;
	$gg=$qq/3;
	//echo "ssssssssssssssssssssssss>".$gg."kkkkkkkkkkkkkkkkkkkkkkkk\n";
	for($i=0,$a=0;$i<$gg;$i++){
		$fda[$i]=substr($str,$a,3);
		$a+=3;
			
		//echo "ddd>>>>>".$fda[$i]."<<<\n";
	}
	//$fda=str_split($str,3);
//	print_r($fda);
	$fy=yuan1($fx);
//	echo "fy=".$fy."\n";
	$fo=array();
	$result="";
	$dds=floatval($dds)*1000;
	//echo "ddddddddddddddddd".$dds;
	for($i=0;$i<count($fda);$i++){
		//echo is_string($fda[$i]);
		$rre=rtrim($fda[$i]);
	//	echo "kkkkkkkkkkkk".$rre;
			
		$fo[$i]=floatval($rre)+$dds;
		//echo "jiexi111llgggg=".$fo[$i]."\n";
		$fo[$i]=$fo[$i]^$fy;
	//	echo "jiex22222gggg=".$fo[$i]."\n";
		//$fo[$i]=$fo[$i]<<1;
	//	echo "jiexi111llggggzuoyi=".$fo[$i]."\n";
		$fo[$i]=$fo[$i]^$dcrc;
	//	echo "jiexi111llggggyihuo crc=".$fo[$i]."\n";
		$result.=chr($fo[$i]);
	}

	return rtrim($result);

}
/*
session_start();
echo $d=session_id();
$fg1=gy1($d);
echo "--------------------------------------\n";
echo $fg1;
echo "\n--------------------------";
echo $s=gy2($fg1);
if($d===$s)   echo "chengg";
header("localhost:www.ff.com?f=".$fg1);*/
function supergy1($str){
	$g=rand(0,100);
	$str=$str.$g;
	
return	$r=gy1($str);
	
}
function supergy2($str){
	$e=gy2($str);
	$r=substr($e, -2);
	return $r;
	
}
//echo gy2("404394404421486397416487422399402419402419407485420419480397404486402404392481#31207#416#31");

////$f0=gy1("weewr3434ggggggggggggggggggggewwww4r4rwefe4rge4te4re4w3r2rw4trgt5e4ererdfzffr4wrwr43");
//echo gy2("404394404421486397416487422399402419402419407485420419480397404486402404392481#31207#416#31");
