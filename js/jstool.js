// JavaScript Document
/*
瀹炵幇閫夋嫨妗�
涓昏鐢ㄥ湪W銆俬tml shouye銆侶tml

*/
var d_="d";
var http="http://localhost:8080/jj/";
var www="http://localhost:8080/" ;
var path_site="/jj/worke/site";

function dologin( id1,den){
	
	if(den){
	
	$('#login_id_a1').text(id1);
	$('#reg_login').text('退出');
	$('#login_id_a1').attr("login",den);
	$('#reg_login').attr("login",den);
	
	}else{
		$('#login_id_a1').text(id1);
	$('#reg_login').text('注册');
	$('#login_id_a1').attr("login",den);
	$('#reg_login').attr("login",den);
	
		
		
		}
		
		}




function dianji(){
	//alert("dsds11");
	
	$("#benzhour").css("display","none");
	$("#xiangguan").css("display","inline");
	$("#xian").css("backgroundColor","#fff");
	$("#re").css("backgroundColor","#999");
	
	//$('#benzhour')
	}
function dianji2(){
	//alert("dsds22");
	$("#xiangguan").css("display","none");
	$("#benzhour").css("display","inline");
	$("#re").css("backgroundColor","#fff");
	$("#xian").css("backgroundColor","#999");
	
	}	
	
	
	
	/*
	鐢熸垚涓嬩竴椤电殑閾炬帴
	
	<涓嬩竴椤�123銆婁笂涓�〉銆嬶紝
	*/
	function createyeshu(c){
	var	 g=document.getElementById('yeshu');
	
	var a_1=document .createElement('a');
	a_1.setAttribute('id',"dd"+i);
	a_1.setAttribute('style'," float:left;");
	a_1.setAttribute('href',c[0]);
	a_1.innerHTML=c[1];
	g.appendChild(a_1);
	
	
	
	
	}
	/*
	鑾峰彇localtion銆俿erch 鐨勬暟鎹�
	锛焏=d&f=f锛�
	
	
	
	*/
	function getdata(f){
	//alert(location.href);
		var og=	f.indexOf('?');
	//	alert(og);
		if(og<0){return null;}
	//var og=	f.indexOf('?');
	f=f.substr(og);
	//alert(f);
var ds=[];

f=f.substr(1);
//alert(f);
var ew=f.indexOf('&');
var i=0;
ew=f.indexOf('&');
//alert(ew);
var ff=f;
var qw;
var v=0;
while((wq=ff.indexOf("="))!=-1){
	v++;
	ff=ff.substr(wq+1);
	
	}
	//alert(v+"dssdsds");
	//var hg=0;
	
for(var gf=0;gf<v;gf++){
	var d;
	if(ew==-1){
	 d=f;
	//alert(d+"000");
	}else   d=f.substr(0,ew);
	//alert(d);
	var s=d.indexOf("=");
	if(s!=-1){
		//var ds=[];
		ds[i]=d.substr(0,s);
		ds[i+1]=d.substr(s+1);
		//ar[i]=ds;
		//alert(ds[0]+"kkkkkkk");
		}
	i+=2;
	//hg=ew;
	//alert(ew);
	f=f.substr(ew+1);
	//alert(f+"f:fffff");
	ew=f.indexOf("&");
	
}
return ds;
}

/*
鍒涘缓鏇村璇勮閲�鐨勮妭鐐�

*/
function createnode(f){
	//alert(d+"n"+f);
	var div_1=document.createElement('div');
	var div_2=document .createElement('div');
	
	var div_3=document .createElement('div');
	var div_4=document .createElement('div');
	
	var a_1=document .createElement('a');
	var a_2=document .createElement('a');
	
	var text=document .createElement('textarea');
	var input=document .createElement('input');
	
	var font_1=document.createElement("font");
	var font_2=document.createElement("font");
	
	a_1.setAttribute("id","f");
	a_1.setAttribute("style","float:right; margin:5px");
	a_1.innerHTML="<font style='color:#f55; margin:5px'>/</font>鍥炲";
	
	a_2.setAttribute("id","f");
	a_2.setAttribute("style","float:right; margin:5px");
	a_2.innerHTML="鎺ㄨ崘  <font style='color:#f55'> fd</font> ";
	
	text.setAttribute("id","f");
	text.setAttribute("style"," height:95px; width: 98%;overflow:auto");
	text.setAttribute("rows","3");
	
	input.setAttribute("id","f");
	input.setAttribute("style","float:right");
	input.setAttribute("type","button");
	input.setAttribute("value","鍙戣〃");
	
	div_1.setAttribute("id","div_1");
	div_1.setAttribute("style","width:80%; clear:both; margin-top:4px; padding:2px; border:0px; border-style:solid ; text-align:left");
		//a_1.setAttribute("src","a");
	
	div_2.setAttribute("id","div_21");
	div_2.setAttribute("style","width:80%; margin:2px; clear:both; padding:2px; border:0px; border-style:solid ; text-align:left");
	
	div_3.setAttribute('id',"dd");
	div_3.setAttribute('style'," width:100%;");
	
	div_4.setAttribute('id',"dd");
	div_4.setAttribute('style',"border:0px solid #C30;");
	
	
	font_1.setAttribute("id","font_11");
	font_1.setAttribute("style","font-size:15px");
	font_1.innerHTML=f[0];
	
	font_2.setAttribute("id","font_21");
	font_2.setAttribute("style","font-size:15px;");
	font_2.innerHTML=f[1];
	
	div_1.appendChild(font_1);
var	 g=document.getElementById('pl_main1');
	g.appendChild(div_1);
	div_2.appendChild(font_2);
	g.appendChild(div_2);
	
	//alert("sdddddddddddd");
	div_4.appendChild(a_1);
	div_4.appendChild(a_2);
	div_4.appendChild(text);
	div_4.appendChild(input);	
	div_3.appendChild(div_4);
	g.appendChild(div_3);
	
		
		}


//createnode( ["dsd","adsv"]);


//createyeshu([2,"f.html","j.html"]);
/*
绌垮缓瀵艰埅

*/
function creatdaohang(c){
	var	 g=document.getElementById('yeshu');
	for(var i=0;i<c[0];i++){
	var a_1=document .createElement('a');
	a_1.setAttribute('id',"dd"+i);
	a_1.setAttribute('style'," float:left;");
	a_1.setAttribute('href',c[i+1]);
	a_1.innerHTML=i+1;
	g.appendChild(a_1);
	
	}
	
	
	}
	
	
/*
index.html






*/

function updatedata(){
	
var kl="";
k1=	getCookie('username');

//alert(k1);
if(k1!=""){
	if(k1!="you"){
//document.getElementById("login_id_a").innerHTML=k1;
dologin( k1,true);
$('#user_login_id').css("visibility","hidden");
$('#yazhengma').css("visibility","hidden");
$('#yazhengma1').css("visibility","hidden");
}else{
	dologin( "登陆",false);
	jpg3();
	}

	}
	
else {
	ajax('sesi.php',"d","data",in_data_do,"json");
	
	}	
	
	
	}
function in_data_do(ds){
	//alert(ds);
	//document.write(ds);
	//var ff=document.getElementById("login_id_a");
	var obj = eval ("(" + ds + ")");
	//document.write(obj.bordy.name+obj.bordy.data);
	if(obj.bordy.name=="username"){
		
		//ff.innerHTML=obj.bordy.data;
		setCookie("id",obj.bordy.data);
		setCookie("username","you",10000);
		//$('#user_login_id').css("visibility","hidden");
$('#user_login_id').css("visibility","visible");
		dologin( "登陆",false);
		} else if(obj.bordy.name=="id" ){
			
			//ff.innerHTML="请登录";
			setCookie('id',obj.bordy.data,10000);
			setCookie("username","you",10000);
			//$('#user_login_id').css("visibility","hidden");
$('#user_login_id').css("visibility","visible");
			dologin( "登陆",false);
			}else if(obj.bordy.name=="id_name" ) {
				
				//ff.innerHTML="请登录";
				setCookie("username",obj.bordy.type,10000);
				setCookie('id',obj.bordy.data,10000);
				//$('#user_login_id').css("visibility","visible");
				if(obj.bordy.type!="you"){
$('#user_login_id').css("visibility","hidden");
dologin( obj.bordy.type,true);
}else{dologin( '登陆',false);
}
				}
	
	
	
	}



/*
璁剧疆cookie



*/
function setCookie(c_name,value,expiredays)
{
var exdate=new Date()
exdate.setDate(exdate.getDate()+expiredays)
document.cookie=c_name+ "=" +escape(value)+"; path=/"+
((expiredays==null) ? "" : ";expires="+exdate.toGMTString());
}
/*
鑾峰彇cookie



*/

function getCookie(c_name)
{
if (document.cookie.length>0)
  {
  c_start=document.cookie.indexOf(c_name + "=")
  if (c_start!=-1)
    { 
    c_start=c_start + c_name.length+1 
    c_end=document.cookie.indexOf(";",c_start)
    if (c_end==-1) c_end=document.cookie.length
    return unescape(document.cookie.substring(c_start,c_end))
    } 
  }
return ""
}

// JavaScript Document
//data 杩斿洖鏁版嵁锛宻鏄繑鍥炴暟鎹殑鐘舵�锛宩xr鏄暟鎹璞�


	//杩斿洖鍑洪敊鐨勬暟鎹�
function error1(er){
	
alert("绯荤粺鍑洪敊");	
	
	
	
	}
	//鍙戣捣璇锋眰
	
	//js杞崲鎴恱ml
	function writexml(){
		this.result="";
		this.title="<?xml version='1.0'  standalone='yes'?>";
		this.startelement=function(nodename){
			this.result+="<"+nodename+">";
			}
		this.endelement=function(nodename){
			this.result+="</"+nodename+">";			
			}
		this.element=function(nodename,value){
			this.result+="<"+nodename+">"+value+"</"+nodename+">";
			}	
		this.savexml=function(){
			return this.title+this.result;
			}	
			
		}
//澶勭悊鏁版嵁
	
		
		function ajax(url,d,data,function_d,mode){
			function sucess(data,s,jxr){
	       if(s=="success"){
		  function_d(data); 
					 }
	       }
			$(function(){
	
	
		   $.post(url,{d:data},sucess);
		   
		   
		  },mode);

			}
			
/*

鍙戦�


*/
function back_(ff){
	
	//alert(ff);
	}
/*$(function collect(){
	//alert("visi");
	
	ajax('visi.php',"d","f",back_,"text");
	
	
	
	});*/

	
	
	
	
	
function in_login_in(){
	
	var xml=new writexml();
	xml.startelement('root');
	xml.startelement("handle");
	xml.element("name","1");
	xml.element("error","2");
	xml.element("handle_type","3");
	xml.endelement("handle");
	xml.startelement("bordy");
	
	xml.startelement("un1")
	xml.element("name1","username");
	xml.element("data1",document.getElementById('username').value);
	xml.element("type1","3");
	xml.endelement("un1");
	
	xml.startelement("un2")
	xml.element("name2","power");
	xml.element("data2",document.getElementById('mima_id').value);
	xml.element("type2","3");
	xml.endelement("un2");
	
	xml.startelement("un3")
	xml.element("name3","yazhen");
	xml.element("data3",document.getElementById('check_ma').value);
	xml.element("type3","3");
	xml.endelement("un3");
	
	xml.endelement("bordy");
	xml.endelement("root");
	var d=xml.savexml();//
	//alert(d);
	
	function callback(d){
	//alert(d);
		//document.write(d);
		var obj = eval ("(" + d + ")");
		
		
		if(obj.handle1.name=="username"){
			document.getElementById('kk').innerHTML="鐢ㄦ埛鍚嶉敊璇";
			
			}else if(obj.handle1.name=="power" ){
				
				document.getElementById('kk').innerHTML="瀵嗙爜閿欒";
				
				
				}else if(obj.handle1.name=="yazhen"){
					
					document.getElementById('yazheng2').innerHTML="验证码错误";
					$("#yazheng2").css("visibility","visible");
					}else if(obj.bordy1.data!=""){
						
						//return false;
						alert("dsdsd222");
						window.location.href=obj.bordy1.data;

						
						}
		
		
		}
	
	
	//ajax('login/login_one.php',"xml",d,callback,"text");
	$.post('/jj/login/login_one.php',{"xml":d},callback,"text");
	
	//return false
	}
	
	/*
	
	绉诲姩琛�
	*/
/*function mousein(sd){
	var d=document.getElementById(sd);
	d.style.visibility="visible";
	
	//document.getElementById('ddd').innerHTML="ds1236123d";
	}
function mouseout(dsa){
		var d=document.getElementById(dsa);
	d.style.visibility="hidden";
	//document.getElementById('ddd').innerHTML="dsd123";
		//document.getElementById(dsa).style.visibility="hidden";
		//alert("ds");
		}
		*/
		
		/*鍒涘缓serch*/

	//e.setAttribute("style",	"border:1px dotted #060; margin:0; padding:0px; height:200px;");	   
//			   
	//$("#ff9").attr("style","border:1px dotted #060; margin:0; padding:0px; height:200px;");		   
//			   
			   
			  
			   
			   /*
			   <root>
			   <handle></handle>
			   <bordy>
			   <un1>
			   <name></name>
			   <data></data>
			   <href></href>
			   <type></type>
			   
			   
			   </un1>
			   
			   
			   
			   </bordy>
			   
			   
			   
			   
			   
			   </root>
			   
			   
			   */
	function serch_button(){
		
		var xml=new writexml();
	xml.startelement('root');
	xml.startelement("handle");
	xml.element("name","1");
	xml.element("error","2");
	xml.element("handle_type","3");
	xml.endelement("handle");
	xml.startelement("bordy");
	
	xml.startelement("un1")
	xml.element("name","username");
	xml.element("data",document.getElementById('serch_keyword').value);
	xml.element("type","3");
	xml.endelement("un1");
	
	xml.startelement("un2")
	xml.element("name2","hiden");
	xml.element("data2",document.getElementById('hiden').value);//ID值
	xml.element("type2","3");
	xml.endelement("un2");
	
	
	/*xml.startelement("un2")
	xml.element("name","power");
	xml.element("data",document.getElementById('mima_id').value);
	xml.element("type","3");
	xml.endelement("un2");
	
	xml.startelement("un3")
	xml.element("name","yazhen");
	xml.element("data",document.getElementById('check_ma').value);
	xml.element("type","3");
	xml.endelement("un3");*/
	
	xml.endelement("bordy");
	xml.endelement("root");
	var d=xml.savexml();//
		
	function callback(dae){
	var obj = eval ("(" + dae + ")");	
	for(var i=0;eval("obj.un"+i)!=undefined;i++)	
		{
		
		var ds=eval("obj.un"+i);
		create_serch([ds.href,ds.name,ds.data,da.type]);
		
		
		
		}	
		
		
		
$.post('serch.php',{"xml":d},callback,"text");
		
		
		
		
		
		
		
		}
	}
	
	/*鍒涘缓瀵艰埅*/
	function dump(){
		
	var title=document.getElementById("");	
		
	var d=	$(this).attr("href");
	if(window.location.serch!=undefined){
		var fh=window.location.pathname;
		fh.replace('/','@');
		d=d+window.location.serch;
	window.location=d+"&"+"o="+fh+"%"+title;
	
	}else {
		var fh=window.location.pathname;
		d.replace('/','@');
	window.location=d+"?"+"o="+fh+"%"+title;
		}
		
		return ;
		}
			   
function createdaohang(f){
	
	var a_1=document.createElement('a');
	a_1.setAttribute('class',"daohang");
	a_1.setAttribute('id','daohang1');
	a_1.setAttribute('style',"width='50px'");
	a_1.setAttribute("href",f[0]);
	
	a_1.innerHTML="<a>>></a>"+f[1];
	document.getElementById("dwen").appendChild(a_1);
	}			   
function buiddaohang(){
	
  var result=     getdata(location.href);
if(result!=null){
	for(var i=0;i<result.length;i=i+4){
		
		var hr=http+result[i+1];
		var fd=[hr,result[i+3]];
		
		 createdaohang(fd);
		
		}
	
	}else{
		
		return false;
		}

	}	
	
	function creat1daohang(){
		alert("sds");
	var path=getdata(window.location.search);
	var arr=[];
	for(var i=0;i<path.length;i++){
		
		if(path[i]=="category"){
			arr=[path[i+1].split("_")[0],path[i+1].split("_")[1]];
			createdaohang(arr);
			}
		
		
		}
	
	
	}	   
			   
/**/
/*鍒ゆ柇鏄惁鐧诲綍*/

function is_login(){
	
	if(getcookie('id')=='true'){
		return true;
		
		}else {alert("请登录"); 
		
		return false;}
	
	
	
	}
	
	//tupian
	function jpg(){
		
	function setw(dt){
		
		//alert(dt);
		//document.write(dt);
		var obj=eval ("(" + dt + ")");
		
		if(obj.bordy1.name=="image"){
			//$("#yazhen2").css("visibility","visible");	
		$("#yazhengma").css("visibility","visible");
		$("#yazhengma").attr("src",obj.bordy1.data);
		
		}
		
		}	
		
		
		var f=getCookie("id");
		//alert(f);
	//ajax("/php/login/image.php",'id',f,set,"text");	
		
		
		//$.post("j.php",{"id1":"dsd"},setw);ajax("image.php","id1",f,setw,"text");
		
		$.post("/jj/login/image.php",{"id1":f},setw,"text");
		
		
		
		}
		
		function jpg3(){
		
	function setw(dt){
		
		//alert(dt);
		//document.write(dt);
		var obj=eval ("(" + dt + ")");
		if(obj.bordy1.data=="kong"){}else
		
		{
		if(obj.bordy1.name=="image"){
		$("#yazhen2").css("visibility","visible");	
		$("#yazhengma").css("visibility","visible");
		$("#yazhen2").attr("src",obj.bordy1.data);
		$("#yazhengma").attr("src",obj.bordy1.data);
		}
		}
		}	
		
		
		//var f=getCookie("id");
		var f="j";
		//alert(f);
	//ajax("/php/login/image.php",'id',f,set,"text");	
		
		
		//$.post("j.php",{"id1":"dsd"},setw);ajax("image.php","id1",f,setw,"text");
		
		$.post("/jj/login/initimage.php",{"id1":f},setw,"text");
		
		
		
		}
		
		function jpg2(){
		
	function setw(dt){
		
		alert(dt);
		//document.write(dt);
		var obj=eval ("(" + dt + ")");
		
		if(obj.bordy1.name=="image"){
			$("#yazhen2").css("visibility","visible");	
		//$("#yazhengma").css("visibility","visible");
		$("#yazhen2").attr("src",obj.bordy1.data);
		//alert("adfasf");
		}
		
		}	
		
		
		var f=getCookie("id");
		alert(f);
	//ajax("/php/login/image.php",'id',f,set,"text");	
		
		
		//$.post("j.php",{"id1":"dsd"},setw);ajax("image.php","id1",f,setw,"text");
		
		$.post("/jj/login/image_reg.php",{"id1":f},setw,"text");
		
		
		
		}

function in_login_reg(){
	//alert("asd");
	var xml=new writexml();
	xml.startelement('root');
	xml.startelement("handle");
	xml.element("name","1");
	xml.element("error","2");
	xml.element("handle_type","3");
	xml.endelement("handle");
	xml.startelement("body");
	
	xml.startelement("un1")
	xml.element("name","username");
	xml.element("data",document.getElementById('re_username').value);
	xml.element("type","3");
	xml.endelement("un1");
	
	xml.startelement("un2")
	xml.element("name","power_unm");
	xml.element("data",document.getElementById('re_mima').value);
	xml.element("type","3");
	xml.endelement("un2");
	
	xml.startelement("un3")
	xml.element("name","yazhen");
	xml.element("data",document.getElementById('re_yan').value);
	xml.element("type","3");
	xml.endelement("un3");
	
	xml.startelement("un4")
	xml.element("name","phone");
	xml.element("data",document.getElementById('re_phone').value);
	xml.element("type","3");
	xml.endelement("un4");
	
	xml.startelement("un5")
	xml.element("name","mail");
	xml.element("data",document.getElementById('re_mail').value);
	xml.element("type","3");
	xml.endelement("un5");
	
	xml.startelement("un6")
	xml.element("name","sex");
	xml.element("data",document.getElementById('sex_nan').checked);
	xml.element("type","1");
	xml.endelement("un6");
	
	xml.startelement("un7")
	xml.element("name","sex");
	xml.element("data",document.getElementById('sex_nv').checked);
	xml.element("type","0");
	xml.endelement("un7");
	
	xml.startelement("un8")
	xml.element("name","xy");
	xml.element("data",document.getElementById('yinsi').checked);
	xml.element("type","3");
	xml.endelement("un8");
	var d1="k";
	var fd=new Array();
 fd=	getdata(location.href);
if(fd!=null){
	for (var i=0;i<fd.length;i++){
	if(fd[i]=="ic"){
		
		//alert(fd[i+1]);
		d1=fd[i+1];
		break;
		}
	}
	}
	
	
	
	xml.startelement("un9")
	xml.element("name","panter");
	xml.element("data",d1);
	xml.element("type","3");
	xml.endelement("un9");
	
	
	
	xml.endelement("body");
	xml.endelement("root");
	var d=xml.savexml();
	
	alert(d);
	
	//document.write(d);
	function callback(d){
		//alert(d);
		document.write(d);
		var obj = eval ("(" + d + ")");
		
		
		
		}
	
	
	
	$.post('/jj/login/reg.php',{"xml":d},callback,"text");
	

	}

function init_login_in(){
	
var kl="";
k1=	getCookie('username');

//alert(k1);
if(k1!=""){
	if(k1!="you"){

dologin( k1,true);

}else{
	dologin( "登陆",false);
	
	}

	}
	
else {
	ajax('sesi.php',"d","data",in_data_do,"json");
	
	}	
	
	
	}



