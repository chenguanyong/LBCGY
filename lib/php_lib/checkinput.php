<?php 


//妫�煡鐢ㄦ埛鍚嶈緭鍏�
function check_name($user_name){
	$fd=strip_tags(trim($user_name));
	$paten="/^[A-Z,a-z,_][0-9,A-Z,a-z,_]{6,10}$/i";
     $result=preg_match($paten,$fd,$ff,PREG_OFFSET_CAPTURE);
	
	if($result>0){
		
		return true;
		
		
		}else return false;
	
	
	
	}
	
//echo	check_name("adsds");
	
	function check_ya($username){
		
		$fd=strip_tags(trim($username));
		$paten="/^[0-9,a-z,A-Z]{4}$/i";
		$result=preg_match($paten,$fd,$ff,PREG_OFFSET_CAPTURE);
		
		if($result>0){
		
			return true;
		
		
		}else return false;
	
	}
	//检查数字
	function check_num($num){
		
		$fd=strip_tags(trim($num));
		$paten="/^[0-9,.]{0,4}$/i";
		$result=preg_match($paten,$fd,$ff,PREG_OFFSET_CAPTURE);
		
		if($result>0){
		
			return true;
		
		
		}else return false;
	
	}
	//检查数字
	function check_num2($num,$e,$r){
		
		$fd=strip_tags(trim($num));
		$paten="/^[0-9,.]{".$e.",".$r."}$/i";
		$result=preg_match($paten,$fd,$ff,PREG_OFFSET_CAPTURE);
		
		if($result>0){
		
			return true;
		
		
		}else return false;
	
	}
	//检查批次；
	function check_pici($pici){
		
		$fd=strip_tags(trim($pici));
		$paten="/^[0-9,.]{0,4}$/i";
		$result=preg_match($paten,$fd,$ff,PREG_OFFSET_CAPTURE);
		
		if($result>0){
		
			return true;
		
		
		}else return false;
	
	}
	
	
	
	function check_phone($phone1){
		
	$fd=strip_tags($phone1);
		$paten="/^[1][3-5,7,8][0-9]{9}$/i";
		$result=preg_match($paten,$fd,$ff,PREG_OFFSET_CAPTURE);
	 $result."-------------";
	if($result>0){
		
		return true;
		
		
		}else return false;
		
		
		}
		//check_phone("15638202185");
		
		function check_power($power){
			$fd=strip_tags($power);
		$paten="/^[A-Z,a-z,0-9,_,.,?,@,#,\$]{6,10}$/i";
		 $result=@preg_match($paten,$fd,$ff,PREG_OFFSET_CAPTURE);
	
	if($result>0){
		//echo "ghg";
		return true;
		
		
		}else {// echo "sds";
			 return false;}
		
		
		}
	//echo 	check_power("a\$aaaaa");	
		function check_mail($mail){
			
			$fd=strip_tags(trim($mail));
		$paten="/^[_,a-z,A-Z,0-9]*@[A-Z,a-z,0-9]*\.[A-Z,a-z]{2,3}\.{0,1}[C,N,c,n]{0,2}$/i";
		  $result=preg_match($paten,$fd,$ff,PREG_OFFSET_CAPTURE);
	
	if($result>0){
		//echo "sds";
		return true;
		
		
		}else{//echo "sd"; 
			 return false;}
		
			
			
			
			}
			//check_mail("993238441@qq.com");
	//check_mail("dd@qq.com");		
			
function check_text($text_input){
				
				$fd=strip_tags(trim($text_input));
				
		$paten="/\bselect\b/i";
	if(preg_match($paten,$fd,$ff,PREG_OFFSET_CAPTURE)>0) return false;
	elseif ($result=preg_match("/\bupdate\b/i",$fd,$ff,PREG_OFFSET_CAPTURE)>0) return false;
	elseif ($result=preg_match("/\bcreate\b/i",$fd,$ff,PREG_OFFSET_CAPTURE)>0) return false;
	elseif ($result=preg_match("/\bdelete\b/i",$fd,$ff,PREG_OFFSET_CAPTURE)>0) return false;
	else return true;			
				}

///// echo  $f= check_text("create");
// if($f==false){
 	
 //	echo "sds"; }

 function check_html($text){
 	
 	$fd=trim($text);
 	//echo $fd;
 	$fd=htmlspecialchars_decode($fd);
 	//echo $fd;
 	$par="/\b&lt\b.\b&lt\b.\b&lt\b\/.\b&lt\b/i";
 	$result=preg_match($par,$fd,$ff,PREG_OFFSET_CAPTURE);
 	//echo $result;
 	if($result==0)return true;
 	else return false;
 }

 //echo check_html("&ltf&lt<h>gg</h>&ltf/f&ltf");






?>