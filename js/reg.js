// JavaScript Document
function updatedata_denglu(){
	
var kl="";
k1=	getCookie('username');
alert(k1);
if(k1!=""){
	if(k1!="you")
document.getElementById("login_id_a").innerHTML=k1;	}
else {
	ajax('sesi.php',"d","data",in_data_do,"json");
	
	}	
	jpg2();
	
	}
function in_data_do(ds){
	alert(ds);
	//document.write(ds);
	var ff=document.getElementById("login_id_a");
	var obj = eval ("(" + ds + ")");
	//document.write(obj.bordy.name+obj.bordy.data);
	if(obj.bordy.name=="username"){
		
		ff.innerHTML=obj.bordy.data;
		setCookie("username",obj.bordy.data);
		setCookie("username","you",10000);
		
		} else if(obj.bordy.name=="id" ){
			
			ff.innerHTML="请登录";
			setCookie('id',obj.bordy.data,10000);
			setCookie("username","you",10000);
			}else if(obj.bordy.name=="id_name" ) {
				
				ff.innerHTML="请登录";
				setCookie("username",obj.bordy.type,10000);
				setCookie('id',obj.bordy.data,10000);
				}
	
	
	
	}
