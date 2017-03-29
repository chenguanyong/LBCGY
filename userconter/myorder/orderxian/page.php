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

$page=$_POST["pici"];
$pici=((int)$_POST["page"]-1)*15;

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
$result="";
if($_POST['type']=="5"){
		$result=$mysql->read("SELECT `shop_num`,`order_num`,`shop_name`,`shop_size`,`order_state`, `createtime`,`shop_attr`,`order_cash` FROM `linbei_shop`.`temp_order` 
		 where username='".$this->name."' and pici =".$this->pici." LIMIT 5");
}else{
$result=$mysql->read("SELECT `shop_num`,`order_num`,`shop_name`,`shop_size`,`order_state`, `createtime`,`shop_attr`,`order_cash` FROM `linbei_shop`.`temp_order` 
 where username='".$this->name."' and pici =".$this->pici." LIMIT ".$this->page.", 15 ;");
	

}
//createshop([oj.createtime,oj.or_num],[oj.sh_num,oj.sh_name,oj.sh_num,oj.sh_attr],[oj.sh_attr,oj.or_cash,oj.or_state,oj.or_num]);	
		
		$er=$mysql->search_mc($result,"sh_num,or_num,sh_name,sh_size,or_state,createtime,sh_attr,or_cash");
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