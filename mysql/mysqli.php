<?php
class mysqli_ {
	
	private $mysq;
	private $host;
	private $name;
	private $password;
	
	public function __construct($dbname){
		$this->host="192.168.0.105";
		$this->name="root";
		$this->password="110";
		$this->mysq=new mysqli($this->host,$this->name,$this->password,$dbname);
		}
	
	public function read($sql){
		//echo $sql;
		//return  $result=$this->mysq->query($sql);
		if($result=$this->mysq->query($sql)){
			
			//echo "sdsd";
			return $result;
			
			}else return false;
		}
		
		
		public function insert($arra){
		
	  $sql=	$this->createsqlinsert($arra);
	
	
	
			if($result=$this->mysq->query($sql)){
					
					
				return true;
					
			}else return false;
		}
public function insert1($arra){
		
	 $sql=	$this->createsqlinsert1($arra);
	
	//echo $sql;
	
			if($result=$this->mysq->query($sql)){
					
					
				return true;
					
			}else return false;
		}
public function insert0($sql){
		
	
			if($result=$this->mysq->query($sql)){
					
					
				return true;
					
			}else return false;
		}	
		
		public function read2($strarry,$mode,$where=""){
		$fr=$this->creatstrsql($strarry, $mode,$where);
			if($result=$this->mysq->query($fr)){
					
					
				return $result;
					
			}else return false;
		}
		
		
		
	public function mysql_c(){
		
		@$this->mysq->close();
		}
	
		
		
	public function search($result){
		
		$fe=array();
		while($row=$result->fetch_row()){
			
			$fgg=array();
			foreach($row as $value){
				
				$fgg[]=$value;
				
				}
				$fe[]=$fgg;
			
			
			}
		
		return $fe;
		}
public function search_m($result,$sql){
		$arr=explode(",",$sql);
		$fe=array();
		$i=0;
		$aa=0;
		while($row=$result->fetch_row()){
			
			$fgg=array();
			foreach($row as $value){
				
				$fgg[$arr[$i]]=$value;
				$i++;
				}
				$fe["un".$aa]=$fgg;
			$i=0;
			$aa++;
			}
		
		return $fe;
		}
public function search_mc($result,$sql){
		$arr=explode(",",$sql);
		$fe=array();
		$i=0;
		$fx=0;
		while($row=$result->fetch_row()){
			
			$fgg=array();
			foreach($row as $value){
				
				$fgg[$arr[$i]]=$value;
				$i++;
				}
				$i=0;
				$v="un".$fx;
				$fe[$v]=$fgg;
			$fx++;
			
			}
		
		return $fe;
		}
public function search_mc1($result,$sql){
		$arr=explode(",",$sql);
		$fe=array();
		$i=0;
		$fx=10;
		while($row=$result->fetch_row()){
			
			$fgg=array();
			foreach($row as $value){
				
				$fgg[$arr[$i]]=$value;
				$i++;
				}
				$i=0;
				$v="un".$fx;
				$fe[$v]=$fgg;
			$fx++;
			
			}
		
		return $fe;
		}
	
		public  function creatstrsql($strarray,$mode,$where=""){
			$f="";
			switch($mode){
				case 'select':	$f="select";break;
		
		
		
			}
			if($f===""){
				return false;
		
			}
			$g="";
			foreach($strarray as $key=>$value){
				 $g=$g.$key;
				foreach ($value as $key1=>$value1){
					
					if($key==="from"){
		//echo "ds";
		
						$g=$g." ".$value1." ";
					}
					
					if($key===$mode){
		
						$g=$g." ".$value1." ";
		
					}
				}}
				//echo $g;
				if($where==""){
						
					return $g;
						
				}else return  $g.$where;
			}
		
			//return  $g;
		
		
		
	public 	function createsqlinsert($arra){
		
		$key1="";
		$value1="";
		//print_r($arra[1]);
		foreach ($arra[1] as $key=>$value){
			
		 $key1.=$key.",";
		 $value1.="'".$value."',";
			
			
		}
		 $key1=substr($key1,0,strlen($key1)-1);
		$value1=substr(trim($value1),0,strlen($value1)-1);
		return $f=$arra[0]." ( ".$key1." ) "." values "." ( ".$value1." ); ";
		
		
		
		
	}
	
	//创建插入语句
	private  	function createsqlinsert1($arra){
		
		$key1="";
		$value1="";
		
		
		$int_count=0;
		foreach ($arra[1] as $key=>$value){
			$lo=strlen($key);
		    $key1.=substr($key,0, $lo-2).",";
		    if($arra[2][$int_count]==0){
		    	
		    $value1.="'".$value."',";
		    //echo "--".PHP_EOL;
		    }else{
		    //echo "-E-".PHP_EOL;	
		    $value1.=" ".$value." ,";
		    
		    }
			$int_count ++;
			
		}
		 $key1=substr($key1,0,strlen($key1)-1);
		$value1=substr(trim($value1),0,strlen($value1)-1);
	

		 $f=$arra[0]." ( ".$key1." ) "." values "." ( ".$value1." ); ";
	return  $f;	
		
		
		
	}
	
	
	
	
	
	}
	//$mj=new mysqli_("username");
	//$r=array("select"=>array("*"),"from"=>array("userdata"));
	////$mj->creatstrsql($r, "select");
//echo 	$mj->createsqlinsert(array("insert into userdata",array("ser"=>"ds")));
//$result=$mj->read2(array("select"=>array("*"),"from"=>array("userdata")),"select","");
//	print_r($mj->search($result));
