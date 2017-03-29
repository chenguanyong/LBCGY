<?php
include_once 'lib/php_lib/checkinput.php';
include_once 'session/session_build.php';
include_once 'session/massage.php';
include_once 'session/aadmi.php';
include_once 'mysql/mysqli.php';
include_once 'session/yazhengid.php';
include_once 'userconter/usertool.php';
yazhengid();

$name="chenguan";

$pici=$_POST["pici"];
$page=((int)$_POST["page"]-1)*20;

$data=new mythread($name,$page,$pici);
$data->start();



class mythread extends Thread{
	private  $mysql;
	private $name;
	private $pici;
	private $page;
	public function __construct($name,$page,$pici){
        $this->name=$name;
		$this->page=$page;
		$this->pici=$pici;
		
	}

	public function run(){
$mysql=new mysqli_("username");
		$result=$mysql->read("SELECT  `entry_name`,`link`,`dianjiliang`,`linknum`,`createtime` FROM `username`.`temp_mylink` where username='".$this->name."' and pici =".$this->pici." LIMIT ".$this->page.", 20 ;");

		$er=$mysql->search_mc($result,"si_name,si_www,si_dianjilian,si_linknum,si_riqi");
//print_r($er);
//echo "ds";
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
		//$this->bool=true;

	}
}//