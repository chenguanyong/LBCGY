// JavaScript Document
var c=0;
function show_jianbian(){
	$(document).ready(function(){
  $("#show_1").fadeIn("slow");
  $("#show_1").fadeTo("slow",0.7);
});
	c=c+1;
	$("#show_1").fadeIn("slow");
	var ff=document.getElementById("show_1");
	//ff.style.backgroundColor="#014";
	// ff.innerHTML=c;
	setTimeout("show_jianbian()",1000);
	
	
	}
	function check_username(str){
		//alert("dfdfggh");
		var str1="^[_,A-Z,a-z][_,a-z,A-Z,0-9]{5,9}$";
		var fd= new RegExp(str1,'g');
		var fd1=fd.exec(str);
		//alert(fd1);
		return fd1;
		
		}
	function check_pwer(str){
		var str1="^[A-Z,a-z,0-9,_,?]{6,10}$";
		var fd= new RegExp(str1,'g');
		var fd1=fd.exec(str);
		return fd1;
		}
	function check_js(str){
		var str1="javascript";
		var fd=new RegExp(str1,'i');
		var fd1=fd.exec(str);
		return fd1;
		
		}
	function check_phone(str){
		
		var str1="[1][3-5,7,8][0-9]{9}";
		var fd= new RegExp(str1,'g');
		var fs=fd.exec(str);
		return fs;
		
		
		}//检查数字
		function check_num(str){
			if(str.length>4){return null;}
			var str1="[0-9,.]{1,4}";
		var fd= new RegExp(str1,'g');
		var fs=fd.exec(str);
		return fs;
			}
		function check_ya(str){
			if(str.length>4){return null;}
			var str1="[0-9,a-z]{4}";
		var fd= new RegExp(str1,'g');
		var fs=fd.exec(str);
		return fs;
			}	
			
	function check_mail(str){
		var str1="^[_,a-z,A-Z,0-9]*@[A-Z,a-z,0-9]*\.[A-Z,a-z]{2,3}\.{0,1}[C,N,c,n]{0,2}$";
		var fd=new RegExp(str1,'g');
		var fs=fd.exec(str);
		//alert(fs);
		return fs;
		
		}
	function on_show(){
		//alert("sds");//setTimeout("var ff=document.getElementById('fd');ff.style.display='inline';",100);
		
		var ff=document.getElementById("fd");
		ff.style.display="inline";
	}
	
	function on_over(f){
		
		
		var ds=$(f).attr("num");
		if(ds==undefined)	{
			ds=$(f).attr("nu");
			//alert(ds);
			}
		//alert(ds);
	$("[num]").css("background-color","#fff");
		$("[nu]").css("background-color","#138e8e");
		$("[nu]").css("color","#000");
	$("[num="+ds+"]").css("background-color","#f1f1f1");
	$("[nu="+ds+"]").css("background-color","#138e8e");
	//$("[nu="+ds+"]").children('a').css("color","#66cccc");
		$("[nu="+ds+"]").css("color","#fff");
		}
		
	function on_show1(){
		//alert("sds");//setTimeout("var ff=document.getElementById('fd');ff.style.display='inline';",100);
		
		var ff=document.getElementById("fd");
		ff.style.display="inline";
	}
	function on_hide(){
		var dw=$("[num]").css("background-color","#fff");
		$("[nu]").css("background-color","#138e8e");
		$("[nu]").css("color","#000");
		var ff=document.getElementById('fd');
		ff.style.display='none';
		}
	function check_text(re,rr){
		//visibility:hidden; visibility:visible;
		//alert("erwr22"+rr);
		var ff=document.getElementById(re);//laber
		var result;
		var ff2=document.getElementById(rr);//input
		//ff.innerHTML=ff2.value;
		if(ff2.value!=""){
			
			
		if((result=check_username(ff2.value))==null){
			ff.style.visibility="visible";
			ff.innerHTML="输入有误";
			//return false;
			}else ff.style.visibility="hidden";	
		}else ff.style.visibility="hidden";	
		}
	//function check_change(){
//		var ff=document.getElementById("kk");
//		ff.style.visibility="hidden";
//		//ff.innerHTML="df";
		//}
		
	function check_pwer1(re,rr){
		//visibility:hidden; visibility:visible;
		//alert("erwr22"+rr);
		var ff=document.getElementById(re);//laber
		var result;
		var ff2=document.getElementById(rr);//input
		//ff.innerHTML=ff2.value;
		if(ff2.value!=""){
			
			//alert(ff2.value);
		if((result=check_pwer(ff2.value))==null){
			ff.style.visibility="visible";
			ff.innerHTML="输入有误";
			//alert(result);
			//return false;
			}else ff.style.visibility="hidden";	
		}else ff.style.visibility="hidden";	
		}
		
		
		
		function check_pwer2(re,rr){
		//visibility:hidden; visibility:visible;
		//alert("erwr22"+rr);
		var ff=document.getElementById(re);//laber
		var result;
		var ff2=document.getElementById(rr);//input
		//ff.innerHTML=ff2.value;
		if(ff2.value!=""){
			
			//alert(ff2.value);
		if((result=check_pwer(ff2.value))==null){
			ff.style.visibility="visible";
			ff.innerHTML="输入有误";
			//alert(result);
			//return false;
			}else {ff.style.visibility="hidden";
			//sure_power("#"+re,"#"+rr);
			
			}	
		}else ff.style.visibility="hidden";	
		}
		
		
		
		
		function check_num1(re,rr){
		//visibility:hidden; visibility:visible;
		//alert("erwr22"+rr);
		var ff=document.getElementById(re);//laber
		var result;
		var ff2=document.getElementById(rr);//input
		//ff.innerHTML=ff2.value;
		if(ff2.value!=""){
			
		//	alert(check_num(ff2.value));
		if((result=check_num(ff2.value))==null){
			ff.style.visibility="visible";
			ff.innerHTML="输入有误";
		//	alert(result);
			//return false;
			}else ff.style.visibility="hidden";//alert(result+"121")};	
		}else ff.style.visibility="hidden";	
		}
	//function check_change(){	
	function check_phone1(re,rr){
		//visibility:hidden; visibility:visible;
		//alert("erwr22"+rr);
		var ff=document.getElementById(re);//laber
		var result;
		var ff2=document.getElementById(rr);//input
		//ff.innerHTML=ff2.value;
		if(ff2.value!=""){
			
			
		if((result=check_phone(ff2.value))==null){
			ff.style.visibility="visible";
			ff.innerHTML="输入有误";
			//return false;
			}else ff.style.visibility="hidden";	
		}else ff.style.visibility="hidden";	
		}
	//function check_change(){
		function check_mail1(re,rr){
		//visibility:hidden; visibility:visible;
		//alert("erwr22"+rr);
		var ff=document.getElementById(re);//laber
		var result;
		var ff2=document.getElementById(rr);//input
		//ff.innerHTML=ff2.value;
		if(ff2.value!=""){
			
			
		if((result=check_mail(ff2.value))==null){
			ff.style.visibility="visible";
			ff.innerHTML="输入有误";
			//return false;
			}else ff.style.visibility="hidden";	
		}else ff.style.visibility="hidden";	
		}
	//function check_change(){
	function mousein(sd,f){
	var d=document.getElementById(sd);
	d.style.visibility="visible";
	$(f).css("background-color","#fff");
	}
	function mouseout(dsa,f){
	
		var d=document.getElementById(dsa);
	d.style.visibility="hidden";
	$(f).css("background-color","rgba(18, 18, 18, 0)");
		}	