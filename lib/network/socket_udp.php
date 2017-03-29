<?php
class socket_udp{
	public $socket;
	public $string;
	public $ip;
	public $port;
	public function __construct($ip,$port){
		$this->ip=$ip;
		$this->port=$port;
		$this->string="";
		$this->init();
	}
	//³õÊ¼»¯socket
	private function init(){
		//set_time_limit( 0 );
		//ob_implicit_flush();
		
		$this->socket = socket_create(AF_INET, SOCK_DGRAM, SOL_UDP);
		if(is_resource($this->socket)){
			return true;
		}else { throw new error_exp("udp", $this->socket);
		return false;}
		
		
		
		
	}
	public function socket_write($str){
		$len=strlen($str);
		socket_sendto($this->socket, $str, $len, 0, $this->ip,$this->port);
		
	}//
	
	public static    function  socket_read( $ip,$port){
		error_reporting(E_ALL | E_STRICT);
		
		$socket = socket_create(AF_INET, SOCK_DGRAM, SOL_UDP);
		socket_bind($socket, $ip, $port);
		
		$from = '';
		$port = 0;
		$i=0;
		$buf=0;
		//while($i<3){
			socket_recvfrom($socket, $buf, 120, 0, $from, $port);
		
		//	echo "Received $buf from remote address $from and remote port $port" . PHP_EOL;
		//	$i++;}	
		return $buf;
		
	}
	public function socket_close(){
		
		socket_close($this->socket);
		
	}
	public function error_code(){
		
		
		
	}
	
	
	
	
}