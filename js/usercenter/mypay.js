// JavaScript Document


function initdata(){
		
	function setw(dt){
		
		alert(dt);
	//document.write(dt);
		var obj=eval ("(" + dt + ")");
		
		if(obj.brody.balance!=0){
			
			$('#yue').text(obj.brody.balance);
			
			}
		if(obj.brody.integral!=0){
			
			$('#jifen1').text(obj.brody.integral);
			
			}
		
		
		}	
		
		
		var f=getCookie("id");
		//alert(f);
	//ajax("/php/login/image.php",'id',f,set,"text");	
		
		
		//$.post("j.php",{"id1":"dsd"},setw);ajax("image.php","id1",f,setw,"text");
		
		$.post("/jj/userconter/mypay.php",{"id1":f},setw,"text");
		
		
		
		}

function initdata2(){
		
	function setw(dt){
		
		alert(dt);
	//document.write(dt);
		var obj=eval ("(" + dt + ")");
		
		for(var i=0;obj.hand.size;i++){
		var oj=eval("obj.un"+i);
			cretetabl1e([oj.mincheng,oj.integral,oj.balance,oj.integral]);
			
			
			}
		
		
		}	
		
		
		var f=getCookie("id");
		alert(f);
	//ajax("/php/login/image.php",'id',f,set,"text");	
		
		
		//$.post("j.php",{"id1":"dsd"},setw);ajax("image.php","id1",f,setw,"text");
		
		$.post("/jj/userconter/finance/zhandan.php",{"id":f,"pici":"a"},setw,"text");
		
		
		
		}


//initdata();

function cretetabl1e(fd){
	//alert("s");
	var div_1=document.createElement('tr');
	
	
	for(var i=0;i<4;i++){
		
		var dive=document.createElement('td');
		
		dive.innerHTML=fd[i];
		
		div_1.appendChild(dive);
		
		}
		//div_1.appendChild()
	
	var fh=document.getElementById("mtable");
	
	fh.appendChild(div_1);
	
	
	
	
	
	
	
	}




//转账
function sure(){
	
	var xml=new writexml();
	xml.startelement('root');
	xml.startelement("handle");
	xml.element("name","1");
	xml.element("error","2");
	xml.element("handle_type","3");
	xml.endelement("handle");
	xml.startelement("bordy");
	
	
	var x=document.getElementById("myselect");
 var d1= x.options[x.selectedIndex].text;
  	xml.startelement("un1")
	xml.element("name","dfzh");
	xml.element("data",d1);
	xml.element("type","3");
	xml.endelement("un1");
	
	xml.startelement("un2")
	xml.element("name","cash");
	xml.element("data",document.getElementById('cash').value);
	xml.element("type","3");
	xml.endelement("un2");
	
	xml.startelement("un3")
	xml.element("name","power");
	xml.element("data",document.getElementById('paypower').value);
	xml.element("type","3");
	xml.endelement("un3");
	
	xml.endelement("bordy");
	xml.endelement("root");
	var d=xml.savexml();//
	alert(d);
	
	function callback(d){
	//alert(d);
		document.write(d);
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
	$.post('/jj/userconter/finance/finance_.php',{"xml":d},callback,"text");
	
	
	
	
	
	}
	function sure_power(id1,id){
		
		function callback(d){
	//alert(d);
		//document.write(d);
		var obj = eval ("(" + d + ")");
		
		
		if(obj.handle1.name=="username"){
			document.getElementById('kk').innerHTML="鐢ㄦ埛鍚嶉敊璇";//
			$(id1).text("密码错误")
			
			}else if(obj.handle1.name=="power" ){
				
				document.getElementById('kk').innerHTML="瀵嗙爜閿欒";
				
				
				}else if(obj.handle1.name=="yazhen"){
					
					document.getElementById('yazheng2').innerHTML="验证码错误";
					$("#yazheng2").css("visibility","visible");
					}else if(obj.bordy1.data!=""){
						
						//return false;
						$("#liushuinum").text(obj.bordy1.data);//订单编号

						
						}
		
		
		}
		
		
		$.post('/jj/userconter/finance/sure_.php',{"id":getCookie("id"),"pay":$(id).val()},callback,"text");
		
		
		
		}
	
	
	
	
function before(){
	$("#two").css("display","none");
	$("#one").css("visibility","visible");
	
	}
	function next(id){
		
	//	alert($("#cash").val());
	
	
		if( $("#cash").val()=="" ){
			$(id).text("金额不能为空");
			$(id).css("visibility","visible");
			return false
			
			}else {
					
					$("#two").css("display","block");
	$("#one").css("visibility","hidden");
					$(id).css("visibility","hidden");
					var x=document.getElementById("myselect");
 var d1= x.options[x.selectedIndex].text;
					$("#df_zhan").text(d1);
					$("#jine").text($("#cash").val());
					$("#liushuinum").text("0001");
					
					
					
					}
		
		
		}





//
function sure2(){
	
	var xml=new writexml();
	xml.startelement('root');
	xml.startelement("handle");
	xml.element("name","1");
	xml.element("error","2");
	xml.element("handle_type","3");
	xml.endelement("handle");
	xml.startelement("bordy");
	
	
	var x=document.getElementById("my1");
 var d1= x.selectedIndex;
  	xml.startelement("un1")
	xml.element("name","dfzh");
	xml.element("data",d1);
	xml.element("type","3");
	xml.endelement("un1");
	
	xml.startelement("un2")
	xml.element("name","jifen");
	xml.element("data",$("#cash_jifen1").val());
	xml.element("type","3");
	xml.endelement("un2");
	
	xml.startelement("un3")
	xml.element("name","pay");
	xml.element("data",$("#pay1").val());
	xml.element("type","3");
	xml.endelement("un3");
	
	xml.endelement("bordy");
	xml.endelement("root");
	var d=xml.savexml();//
	alert(d);
	document.write(d);
	function callback(d){
	//alert(d);
		document.write(d);
		//var obj = eval ("(" + d + ")");
		
		
		
		
		
		}
	
	
	//ajax('login/login_one.php',"xml",d,callback,"text");
	$.post('/jj/userconter/finance/integral.php',{"xml":d},callback,"text");
	
	
	
	
	
	}



function zz(id){
	
	//alert("dsd");
	if($(id).css("display")=="none"){
		$("[name=zhuanz]").css("display","none");
		
		$(id).css("display","block");
		
		}else{
			
			$("[name=zhuanz]").css("display","none");
			
			}
	
	
	}

function zz_close(id){
	
	//alert("dsd");
	//$(id).css("display","none");
	$("[name=zhuanz]").css("display","none");
	$("#two").css("display","none");
	$("#one").css("visibility","visible");
	$("#cash").attr("value","");
	$("#paypower").attr("value","");
	$("#cash_jifen1").attr("value","");
	$("#pay1").attr("value","");
	}



//

function sure_chong(){
	
	var f=$("#chongzhi").val();
	var f1=$("#chongzhi1").val();
	var f2=$("#chongzhi2").val();
	var f3=$("#chongzhi3").val();
	
	if(f==""||f1==""||f2==""||f3=="")
	{
	   	$("#sure_error12").text("密码填写不完整");
			$("#sure_error12").css("visibility","visible");
		return false;
		}else if($("#chongzhi_err12").css("visibility")=="hidden"){
			
			$("#sure_error12").text("密码不符合规范");
			$("#sure_error12").css("visibility","visible");
			return false;
			} else {
				$("#sure_error12").css("visibility","hidden");
				recharge();
				
				
				}
	
	
	
	}





function recharge(){
	
	var xml=new writexml();
	xml.startelement('root');
	xml.startelement("handle");
	xml.element("name","1");
	xml.element("error","2");
	xml.element("handle_type","3");
	xml.endelement("handle");
	xml.startelement("bordy");
	
	
	var x=document.getElementById("my2");
 var d1= x.selectedIndex;
  	xml.startelement("un1")
	xml.element("name","dfzh");
	xml.element("data",d1);
	xml.element("type","3");
	xml.endelement("un1");
	
	xml.startelement("un2")
	xml.element("name","power");
	xml.element("data",document.getElementById('chongzhi').value);
	xml.element("type","3");
	xml.endelement("un2");
	
	xml.startelement("un3")
	xml.element("name","power1");
	xml.element("data",document.getElementById('chongzhi1').value);
	xml.element("type","3");
	xml.endelement("un3");
	
	xml.startelement("un4")
	xml.element("name","power2");
	xml.element("data",document.getElementById('chongzhi2').value);
	xml.element("type","3");
	xml.endelement("un4");
	
	xml.startelement("un5")
	xml.element("name","power3");
	xml.element("data",document.getElementById('chongzhi3').value);
	xml.element("type","3");
	xml.endelement("un5");
	
	xml.endelement("bordy");
	xml.endelement("root");
	var d=xml.savexml();//
	alert(d);
	
	function callback(d){
	alert(d);
		//document.write(d);
		var obj = eval ("(" + d + ")");
		
		
		
						
						
		
		
		}
	
	
	//ajax('login/login_one.php',"xml",d,callback,"text");
	$.post('/jj/userconter/finance/recharge.php',{"xml":d},callback,"text");
	
	
	
	
	
	}



