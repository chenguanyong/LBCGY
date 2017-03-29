<?php
include_once 'conf/conf.php';
/*
*根据域名获取IP地址
*@return null
*@auth cgy
*/
function SetIp(){
    
   $ip=gethostbyname(conf::$temp_host_ip);
   try{
   $ip_txt=  fopen("ip.txt", "w");
   fwrite($ip_txt, $ip);
   }catch (Exception $g){
   
   exit;
   
   }
   fclose($ip_txt);


}
/*
*
*@return ip
*@auth 
*/
function GetIp(){

   $ip_txt=fopen("ip.txt", "rb");
   $ip=fread($ip_txt, 12);
   
   fclose($ip_txt);

    return $ip;


}