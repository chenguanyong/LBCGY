// JavaScript Document

var  vocation =new Array();//职业
var focuss =new Array();//关注
function  check_click(key,array){
	//alert(array.length);
	var fg=document.getElementById(key);
	//document.getElementById(key).v
	if(array.length >= 5){
		fg.checked=false;
		alert("最多选5个");
		}
	if(fg.checked){
		if(array.length==0){
			var f=array.length-1<0?0:array.length;
		 array[f]=fg.value;
			}else
			{var i1=0;
		for(var i=0;i<array.length;i++){
		if(array[i]==fg.value){
			i1=1;
			break;
			}	
		}
		if(i1!=1){
		var f=array.length-1<0?0:array.length;
		 array[f]=fg.value;
		}
		}
		
		}else{
			
			for(var i=0;i<array.length;i++){
		if(array[i]==fg.value){
			array[i]="0";
			break;
			}	
		}
		
			}

		// alert("sasjkjd56");
         var fef=new Array();
         for( var fww=0, i=0;i<array.length;i++){
         	if(array[i]=="0"){


         	}else{

          fef[fww]=array[i];
           fww++;

         	}

	
	}
	return fef;}

function initdata(){
		
	function setw(dt){
		
		alert(dt);
		//document.write(dt);
		var obj=eval ("(" + dt + ")");
		
		/*if(obj.bordy1.name=="image"){
		//$("#yazhengma").attr("src",obj.bordy1.data);
		
		}*/
		
		//的基本信息
		$('#username').val(obj.un1.name);
		$('#touxiang').attr("src",obj.un1.touxiang);
		$('#xinxi').val(obj.un1.xinxi);
		
		//我的爱好
		
		for(var i=0;i<obj.un1.size;i++){
			var f=eval("obj.un2.xin"+i);
			$(f).attr("checked",true);
			
			}
		//我的个性签名
		$("#text").val(obj.un3.data);
		//我的兴趣爱好
		$("#text").val(obj.un4.data);
		//我的关注
		for(var i=0;i<obj.un1.size1;i++){
			var f=eval("obj.un5.xin"+i);
			$(f).attr("checked",true);
			
			}
		
		
		}	
		
		
		var f=getCookie("id");
		alert(f);
	//ajax("/php/login/image.php",'id',f,set,"text");	
		
		
		//$.post("j.php",{"id1":"dsd"},setw);ajax("image.php","id1",f,setw,"text");
		
		$.post("/jj/userconter/base_user.php",{"id1":f},setw,"text");
		
		
		
		}



//initdata();
function huchi(r1,r2){
	var rq=document.getElementById(r1);
	var rw=document.getElementById(r2);
	if(rq.checked){
		rw.checked=false;		
		}else if(rw.checked){rq.checked=false;}
	
	}

function tijiao(){
	
	
	var xml=new writexml();
	xml.startelement('root');
	xml.startelement("handle");
	xml.element("name","1");
	xml.element("error","2");
	xml.element("handle_type","3");
	xml.endelement("handle");
	xml.startelement("bordy");
    var sex=document.getElementById('nan_sex').checked;
    var str;
	if(sex){
		str="10";
		
		
		}else 
		str="01";
	xml.startelement("un1")
	xml.element("name","sex");
	xml.element("data",str);
	xml.element("type","1");
	xml.endelement("un1");
	var fg="";
	if(vocation.length!=0){
	for(var i=0;i<vocation.length;i++){
		fg=fg+vocation[i]+';';
		}
	}else{
		fg='0';
		
		}
	
	xml.startelement("un2")
	xml.element("name","carer");//职业
	xml.element("data",fg);
	xml.element("type","3");
	xml.endelement("un2");
	
	
	xml.startelement("un3")
	xml.element("name","gexing");
	xml.element("data",document.getElementById('gx').value);
	xml.element("type","3");
	xml.endelement("un3");
	
	xml.startelement("un4")
	xml.element("name","xingqu");
	xml.element("data",document.getElementById('xq').value);
	xml.element("type","3");
	xml.endelement("un4");
	
	var fg1="";
	if(focuss.length!=0){
	for(var i=0;i<vocation.length;i++){
		fg1=fg1+vocation[i]+';';
		}
	}else{
		fg1='0';
		
		}
	xml.startelement("un5")
	xml.element("name","guanzhu");
	xml.element("data",fg1);
	xml.element("type","3");
	xml.endelement("un5");
	
	
	
	
	xml.endelement("bordy");
	xml.endelement("root");
	var d=xml.savexml();//
	alert(d);
	//document.write(d);
	function callback(d){
		//alert(d);
		document.write(d);
		var obj = eval ("(" + d + ")");
		if(obj.handle.name=="oldmail"){
			document.getElementById('kk5').innerHTML="鐢ㄦ埛鍚嶉敊璇";
			
			}else if(obj.handle.name=="newmail" ){
				
				document.getElementById('kk51').innerHTML="瀵嗙爜閿欒";
				
				
				}else {}
				/*if(obj.handle.name=="yazhen"){
					
					document.getElementById('error_yazhen').innerHTML="楠岃瘉鐮侀敊璇";
					
					}else{
						
						//return false;
						
						}*/
		
		
		}
	
	
	//ajax('login/login_one.php',"xml",d,callback,"text");
	$.post('/jj/userconter/user_ziliao.php',{"xml":d},callback,"text");
	
	//return false
	}



