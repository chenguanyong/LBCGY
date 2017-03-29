// JavaScript Document

function sure14(){
	var old=document.getElementById("oldpower");
	var newpower =document.getElementById("power1");
	var newpower2 =document.getElementById("power2");
	
	if(old.value==""){
		
		$("#sure_q").text("不能为空");
		return false;
		}
	
	if(newpower.value==""){
		
		$("#sure_q").text("不能为空");
		return false;
		}
	if(newpower2.value==""){
		
		$("#sure_q").text("不能为空");
		return false;
		}
	
	if(newpower.value!=newpower2.value){
		$("#sure_q").text("输入密码不一致");
		
		}else if($("#kk").attr("visiabley")=="visible"){
			$("#sure_error").text("密码有误");
			
			}else if($("#kk1").attr("visiabley")=="visible"){
			
			$("#sure_error").text("密码有误");
			
			}else if($("#kk5").attr("visiabley")=="visible"){
			
			$("#sure_error").text("旧密码有误");
			
			}else{
				$("#sure_q").text(" ");
				
				tijiao();}
		
		
	
	
	
	
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
	xml.element("name","oldmail");
	xml.element("data",document.getElementById('oldpower').value);
	xml.element("type","3");
	xml.endelement("un1");
	
	xml.startelement("un2")
	xml.element("name","newmail");
	xml.element("data",document.getElementById('power1').value);
	xml.element("type","3");
	xml.endelement("un2");
	
	xml.startelement("un3")
	xml.element("name","newmail");
	xml.element("data",document.getElementById('power2').value);
	xml.element("type","3");
	xml.endelement("un3");
	
	
	
	xml.startelement("un4")
	xml.element("name","yazhen");
	xml.element("data",document.getElementById('check_ma').value);
	xml.element("type","3");
	xml.endelement("un4");
	
	xml.endelement("bordy");
	xml.endelement("root");
	var d=xml.savexml();//
	alert(d);
	
	function callback(d){
		//alert(d);
		document.write(d);
		var obj = eval ("(" + d + ")");
		if(obj.root.name=="oldpower"){
			document.getElementById('kk5').innerHTML="鐢ㄦ埛鍚嶉敊璇";
			
			}else if(obj.root.name=="newpower" ){
				
				document.getElementById('kk51').innerHTML="瀵嗙爜閿欒";
				
				
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
	$.post('/jj/userconter/chage.php',{"xml":d,"id":getCookie("id")},callback,"text");
	
	//return false
	}
	