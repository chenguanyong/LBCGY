<?php
include_once 'session/massage.php';
include_once 'lib/network/socket_udp.php';
function visi(){
	//$news=array();//xiaoxi
	
	$ip=getRealIpAddr();
	$brose=getBrowser($_SERVER['HTTP_USER_AGENT']);
	 $xitong=getOS($_SERVER['HTTP_USER_AGENT']);
//$mas=new massage_xml();
 	$xin=array("handle"=>array("name"=>"d","error"=>"d","handle_type"=>"d"),"bordy"=>array("brose"=>$brose,"ip"=>$ip,"os"=>$xitong));
//print_r($xin);	
$mas=new massage_xml($xin);
	$socket;
	try{
	//	$socket=new socket_udp("",3000);
		
	}catch (error_exp $r){
		$r->err_obj1->socket_close();
		
	}
	//$socket->socket_write($mas);
	//$socket->socket_close();
	//exit();
	
}
visi();
exit();
function getRealIpAddr()
{
	if (isset($_SERVER['REMOTE_ADDR']) and $_SERVER['REMOTE_ADDR'] != '')
	{
		return $_SERVER['REMOTE_ADDR'];
	}
	// Fall back to HTTP_CLIENT_IP
	elseif (isset($_SERVER['HTTP_CLIENT_IP']) and $_SERVER['HTTP_CLIENT_IP'] != '')
	{
		return $_SERVER['HTTP_CLIENT_IP'];
	}
	// Finally fall back to HTTP_X_FORWARDED_FOR
	// I'm aware this can sometimes pass the users LAN IP, but it is a last ditch attempt
	elseif (isset($_SERVER['HTTP_X_FORWARDED_FOR']) and $_SERVER['HTTP_X_FORWARDED_FOR'] != '')
	{
		return $_SERVER['HTTP_X_FORWARDED_FOR'];
	}

	// Nothing? Return false
	return false;
}
function getBrowser($user_agent)
{
	$browser        =   "Unknown Browser";
	$browser_array  =   array(
			'/msie/i'       =>  'Internet Explorer',
			'/firefox/i'    =>  'Firefox',
			'/safari/i'     =>  'Safari',
			'/chrome/i'     =>  'Chrome',
			'/opera/i'      =>  'Opera',
			'/netscape/i'   =>  'Netscape',
			'/maxthon/i'    =>  'Maxthon',
			'/konqueror/i'  =>  'Konqueror',
			'/mobile/i'     =>  'Handheld Browser'
	);
	foreach ($browser_array as $regex => $value)
	{
		if (preg_match($regex, $user_agent))
		{
			$browser=$value;
		}
	}
	return $browser;
}
function getOS($user_agent)
{

	$os_platform    =   "Unknown OS Platform";
	$os_array       =   array(
			'/windows nt 10/i'     =>  'Windows 10',
			'/windows nt 6.3/i'     =>  'Windows 8.1',
			'/windows nt 6.2/i'     =>  'Windows 8',
			'/windows nt 6.1/i'     =>  'Windows 7',
			'/windows nt 6.0/i'     =>  'Windows Vista',
			'/windows nt 5.2/i'     =>  'Windows Server 2003/XP x64',
			'/windows nt 5.1/i'     =>  'Windows XP',
			'/windows xp/i'         =>  'Windows XP',
			'/windows nt 5.0/i'     =>  'Windows 2000',
			'/windows me/i'         =>  'Windows ME',
			'/win98/i'              =>  'Windows 98',
			'/win95/i'              =>  'Windows 95',
			'/win16/i'              =>  'Windows 3.11',
			'/macintosh|mac os x/i' =>  'Mac OS X',
			'/mac_powerpc/i'        =>  'Mac OS 9',
			'/linux/i'              =>  'Linux',
			'/ubuntu/i'             =>  'Ubuntu',
			'/iphone/i'             =>  'iPhone',
			'/ipod/i'               =>  'iPod',
			'/ipad/i'               =>  'iPad',
			'/android/i'            =>  'Android',
			'/blackberry/i'         =>  'BlackBerry',
			'/webos/i'              =>  'Mobile'
	);

	foreach ($os_array as $regex => $value)
	{
		if (preg_match($regex, $user_agent))
		{
			$os_platform=$value;
		}
	}
	return $os_platform;
}
