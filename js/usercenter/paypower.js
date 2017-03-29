// JavaScript Document


function sure18(){
	alert("sdsds");
	var old=document.getElementById("oldpaypower");
	var newpower =document.getElementById("newpaypower");
	if(old.value==''){
		
		$("#sure_q").text("不能为空");
		
		}
		if(newpower.value==''){
		
		$("#sure_q").text("不能为空");
		return false;
		}
		
	
	if(old.value!=newpower.value){
		$("#sure_q").text("输入密码不一致");
		return false;
		}else if($("#kk").attr("visiabley")=="visible"){
			$("#sure_error").text("格式有误");
			return false;
			}else if($("#kk1").attr("visiabley")=="visible"){
			$("#sure_error").text("格式有误");
			
			}else{tijiao();}
		
		
	
	
	
	
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
	
	xml.startelement("un1")
	xml.element("name","regpaypower");
	xml.element("data",document.getElementById('oldpaypower').value);
	xml.element("type","3");
	xml.endelement("un1");
	
	xml.startelement("un2")
	xml.element("name","regpaypower");
	xml.element("data",document.getElementById('newpaypower').value);
	xml.element("type","3");
	xml.endelement("un2");
	
	/*xml.startelement("un3")
	xml.element("name3","yazhen");
	xml.element("data3",document.getElementById('check_ma').value);
	xml.element("type3","3");
	xml.endelement("un3");*/
	
	xml.endelement("bordy");
	xml.endelement("root");
	var d=xml.savexml();//
	alert(d);
	
	function callback(d){
		//alert(d);
		document.write(d);
		var obj = eval ("(" + d + ")");
		if(obj.root.name=="oldmail"){
			document.getElementById('kk').innerHTML="鐢ㄦ埛鍚嶉敊璇";
			
			}else if(obj.root.name=="newmail" ){
				
				document.getElementById('kk1').innerHTML="瀵嗙爜閿欒";
				
				
				}else if(obj.root.data=="success"){
					
				
					
				alert("chen");
					$('#dbody').css("visibility","visible");
					$('#dbody').text("修改成功！！");
					$('#input_').css("visibility","hidden");
					
					
					
					
					
					
					}
				/*if(obj.handle.name=="yazhen"){
					
					document.getElementById('error_yazhen').innerHTML="楠岃瘉鐮侀敊璇";
					
					}else{
						
						//return false;
						
						}*/
		
		
		}
	
	
	//ajax('login/login_one.php',"xml",d,callback,"text");
	$.post('/jj/userconter/fixpaypower.php',{"xml":d,"id":getCookie("id")},callback,"text");
	
	//return false
	}
	
