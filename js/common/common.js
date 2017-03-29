// JavaScript Document

 function pd_c(){
	var fd= $('#prive').css("visibility");
	 if(fd=="hidden")
	 {
		 $('#prive').css("visibility","visible");
		 }else{
			 
			  $('#prive').css("visibility","hidden");
			  $('#city').css("visibility","hidden");
			  $("[name='city']").css("visibility","hidden");
			 }
	 
	 
	 }
  function province(id,id1){
	
	 var fd= $(id).css("visibility");//父
	 var fd1= $(id1).css("visibility");//子
	 // alert(fd1);
	 if(fd1=="hidden" ) {
		//  alert("1");
		  $(id).css("background-color","#586965");
		
		$("[name='city']").css("visibility","hidden");	
			$(id1).css("visibility","visible");
			$('#city').css("visibility","visible");
			
		 }else{
			///  alert("2");
			   $('#city').css("visibility","hidden");
			$(id1).css("visibility","hidden"); 
			// $(id).css("background-color","#aaa");
			 $("[name='pro']").css("background-color","#fff");
			 }
	  
	  
	  
	  
	  
	  }
	  function city(id){
		  
		  $('#weizhi').text("位置:"+$(id).text());//改变位置
		  
		pd_c();
		 window.location=http+"dump/jump.php?jp="+$(id).attr('num');
		  
		  
		  }
	
//alert("denglu");
//dologin("fffff",false);
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


function Sign_out(id){

	var fd=$(id).attr("login");
	//alert(fd);
	if(fd!="false"){
		socket_send();//退出
		//$(id).attr("href",http+"dump/jump.php?jp=11");
		}
	
	else{
		//$(id).attr("href",http+"dump/jump.php?jp=11");
		//alert("zhixing");
		window.location=http+"lo/reger.html";
		
		}
	
	
	//return false;
	
	}
	function socket_send(){
		
	
	//ajax('login/login_one.php',"xml",d,callback,"text");
	$.post('/jj/login/sign_out.php',{"id": getCookie('id'),"username":getCookie('username')});
	
	$('#login_id_a1').text("登录");
	$('#reg_login').text('注册');
	$('#login_id_a1').attr("login",false);
	$('#reg_login').attr("login",false);	
	$('#user_login_id').css("visibility","visible");	
		
		}


function init(){
	//alert("d1");
	var href=getdata(location.href);
	if(href==null){
		//alert("d");
		return false;
		}
		var d=href.length/2;
	for(var i=0; i<d;i++){
		
		if(href[i]=="jump"){
			//alert(href[i+1]);
			
			switch(href[i+1]){
				case "0":{dump_other('base_user');}break;
				case "1":{dump_other('chagemail');}break;
				case "2":{dump_other('fixpower1');}break;
				case "3":{dump_other('sofa');}break;
				case "4":{dump_other('user_ziliao');}break;
				case "5":{dump_other('work');}break;
				case "6":{dump_other('shishi');}break;
				case "7":{dump_other('bubiao');}break;
				case "8":{dump_other('mylink');}break;
				case "9":{dump_other('myspread');}break;
				case "10":{dump_other('mypay');}break;
				case "11":{dump_other('paypower');}break;
				case "12":{dump_other('fixpaypower');}break;
				case "13":{dump_other('trander');}break;
				case "14":{dump_other('shopcenter');}break;
				case "15":{dump_other('myorder');}break;
				case "16":{dump_other('clict');}break;
				
				}
			}
	
		}
	}

function jump_w(gh){
	window.location=http+"u/?jump="+gh;
	//alert("sd");
	/*//var fu= $('#reg_login').attr("login");
	//alert("dfsf"+fu);
	if(fu=="true"){
window.location=http+"u/?jump="+gh;	
	}else {
		alert("请先登录！！");
		return;
		}*/
	}

function jump_c(gh){
	var fu= $('#reg_login').attr("login");
	//alert("dfsf"+fu);
	if(fu=="true"){
window.location=http+"u/usercenter.html?jump="+gh;	
	}else if(fu=="false"){
		alert("请先登录！！");
		return;
		}
	}
	
	
	//客户服务
function jump_k(gh){
	
	
window.location=http+"client/client.html?jump="+gh;	
	
	}
	
	function jump_s(gh){
	var fu= $('#reg_login').attr("login");
	//alert("dfsf"+fu);
	if(fu=="true"){
window.location=http+"daohang/sitedaohang.html?jump="+gh;	
	}else if(fu=="false"){
		alert("请先登录！！");
		return;
		}
	}
	
	function h(){
	
	window.location=http;
	}
	
	
	function  jump_p(id){
	
var dd=	id.indexOf('_');
	var str=id.substr(dd+1);
	
	window.location=http+"channel/index.html?pd="+str;
	}
//搜索

function submit1(fq,fh){
var xml=new writexml();
	xml.startelement('root');
	xml.startelement("handle");
	xml.element("name","1");
	xml.element("error","2");
	xml.element("handle_type","3");
	xml.endelement("handle");
	xml.startelement("bordy");
	
	xml.startelement("un1")
	xml.element("name","serch_keyword");
	//xml.element("data",document.getElementById('serch_keyword').value);
	xml.element("data",fq)
	xml.element("type","3");
	xml.endelement("un1");
	
	xml.startelement("un2")
	xml.element("name","hiden");
//	xml.element("data",document.getElementById('hiden').value);//ID值
	xml.element("data",fh);
	xml.element("type","3");
	xml.endelement("un2");
	
	xml.endelement("bordy");
	xml.endelement("root");
	var d=xml.savexml();//	
	
	
	alert(d);
	function callback(d){
		alert(d);
		//document.write(d);
		$("#main_f").empty();
		$("#yeshu").empty();
		var obj = eval ("(" + d + ")");
		$("#data").attr("pici",obj.hand.pici);
		$("#xyy").attr("max",obj.hand.page);
		var page1=parseInt(obj.hand.page);
		for(var a=0;a<page1;a++){
			
			createys([a+1,a+1]);
			
			}
		if(obj.hand.size=="0"){
			
			create_serch(['b','b','暂时没有相关信息',' b']);
			return false;
			}
		for(var i=0;i<obj.hand.size;i++){
		var oj=eval("obj.un"+i);
		if(oj.data!="kong"){
			//cretetabl1e([oj.soure,oj.ip,oj.city,oj.link_,oj.clicks]);
		create_serch([oj.name,oj.link1,oj.data,oj.time]);
			}
		}
	
	}
	//ajax('login/login_one.php',"xml",d,callback,"text");
	$.post('/jj/serch/serch1.php',{"xml":d},callback,"text");
	
	
	
	
	
	
	
	
	
	}


function serch(){
	//alert("dfd");
	var f=document.getElementById("serch_keyword");
	if(f.value==""){
		alert("dfd22");
		return false;
		
		}else {
		alert("dfd");	
		
		
			submit1(document.getElementById('serch_keyword').value,document.getElementById('hiden').value);
			
			}
	
	
	}
	
	
	//结束