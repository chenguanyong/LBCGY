<?php
class shop{
	
public $name;
public $id;
public $price;
public $sourc;//��Ʒ����Դ
public $time_shop;//�ϼ�ʱ��
public function __construct($name,$id,$price,$source,$time){
	
	$this->name=$name;
	$this->id=$id;
	$this->price=$price;
	$this->sourc=$source;
	$this->time_shop=$time;	
}
public function __construct(){
	
	
}
	
	
}
class shop_car
{    
	private $mysql;
	private $array_shop;//shangping
	private $id;//���
	public $shop;
	public function __construct($id){
		$this->array_shop=array();
		$this->id=$id;
		$this->mysql=new my_sql("shop_data");
		$this->shop=null;
	}
	public function getid(){
		
	$this->id();	
		
	}
	public function setid($id){
		
		$this->id=$id;
		
		
	}
	public function add($shop ,$size){
		$ff=array($shop,$size);
		$this->array_shop[$shop->id]=$ff;
		
		
	}
	public function delete($id,$size){
		
		$this->array_shop[$id][1]-=$size;
		if($this->array_shop[$id][1]==0){
			unset($size);
			$this->array_shop=array_values($this->array_shop);
		}
		
	}
	public function saveshop($id){
		$shop=$this->array_shop[$id][0];
		$shop_size=$this->array_shop[$id][1];
	$result=	$this->mysql->ziyou_read(array("insert"=>array("",),"from"=>array(),""), $mode);//������ݿ�
		if($result==false){
			
			$this->mysql->close();
			return false;
		}else return true;
		
	}
	public function read($username){
		$result=	$this->mysql->ziyou_read(array("insert"=>array("",),"from"=>array(),""), $mode);//��ȡ��ݿ�
		$shop=null;
		if($result!=false){
			
	while(($row=mysql_fetch_row($result))!=false){	
		
		$shop=new shop($row[0], $row[1], $row[2], $row[3], $row[4]);
		
		$this->array_shop[]=array($shop,$row);
		}
		
		}
		
		
	}//������ݿ�
	public function update(){
		
		
	}
	
	
}
//֧����
class pay{
	
	
	
	
	
	
	
}//ִ��
function _do(){
	yazhengid();
	
	
	
	
	
	
	
}









