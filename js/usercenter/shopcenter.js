// JavaScript Document


function initdata(){
		
	function setw(dt){
		
		alert(dt);
		//document.write(dt);
		var obj=eval ("(" + dt + ")");
		
		/*if(obj.bordy1.name=="image"){
		//$("#yazhengma").attr("src",obj.bordy1.data);
		
		}*/
		
		//我的基本信息
	
		//我的财富信息
		$('#yue').val(obj.un1.yue);
		$('#jifen').val(obj.un1.jinfen1);
		for(var i=2;i<parseInt(obj.un1.size)+2;i++){
			var f=eval("obj.un"+i);
			
			cretetabl1e([f.name,f.shouren,f.jinge,f.zhuangtai]);
			
			
			
			
			
			
			}
		
		
		
		}	
		
		
		var f=getCookie("id");
		alert(f);
	//ajax("/php/login/image.php",'id',f,set,"text");	
		
		
		//$.post("j.php",{"id1":"dsd"},setw);ajax("image.php","id1",f,setw,"text");
		
		$.post("/jj/userconter/shopcenter.php",{"id1":f},setw,"text");
		
		
		
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

function chagestate(gh){
		
	function setw(dt){
		
		alert(dt);
		//document.write(dt);
		var obj=eval ("(" + dt + ")");
		
		/*if(obj.bordy1.name=="image"){
		//$("#yazhengma").attr("src",obj.bordy1.data);
		
		}*/
		
		//我的基本信息
	
		//我的财富信息
		$('#yue').val(obj.un1.yue);
		$('#jifen').val(obj.un1.jinfen1);
		for(var i=2;i<parseInt(obj.un1.size)+2;i++){
			var f=eval("obj.un"+i);
			
			cretetabl1e([f.name,f.shouren,f.jinge,f.zhuangtai]);
			
			
			
			
			
			
			}
		
		
		
		}	
		
		
		var f=getCookie("id");
		alert(f);
	//ajax("/php/login/image.php",'id',f,set,"text");	
		
		
		//$.post("j.php",{"id1":"dsd"},setw);ajax("image.php","id1",f,setw,"text");
		
		$.post("/jj/userconter/shopcenter.php",{"id1":f,"state":document.getElementById(gh).value},setw,"text");
		
		
		
		}



//initdata();

//初始化数据
	function init3(){

	function callback(d){
		alert(d);
		//document.write(d);
		var obj = eval ("(" + d + ")");
		
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
	var f=getCookie("id");
		alert(f);
	//ajax('login/login_one.php',"xml",d,callback,"text");
	$.post('/jj/userconter/shopcenter.php',{"id":f,"pici":$("#main_data").attr("pici"),"page":$("#xyy").attr("num")},callback,"text");
	}

