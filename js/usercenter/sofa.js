// JavaScript Document


function sure(){
	var old1=document.getElementById("old");
	var old=document.getElementById("newphone");
	var newphone =document.getElementById("newphone1");
	if(old1.value==""){
		$("#sure_error").text("旧手机不能为空");
		return false;
		}
	if(newphone.value==""){
		$("#sure_error").text("新手机不能为空");
		return false;
		}
	
	if(old.value==""){
		$("#sure_error").text("新手机不能为空");
		return false;
		}
		
	if(old.value!=newphone.value){
		$("#sure_error").text("输入手机不一致");
		return false;
		}else if($("#kk4").attr("visiabley")=="visible"){
			$("#sure_error").text("旧手机有误");
			return false;
			}else if($("#kk411").attr("visiabley")=="visible"){
			$("#sure_error").text("重新输入手机有误");
			return false;
			}else if($("#kk41").attr("visiabley")=="visible"){
			$("#sure_error").text("新手机有误");
			return false;
			}
			else{tijiao();}
		
		
	
	
	
	
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
	xml.element("name","old");
	xml.element("data",document.getElementById('old').value);
	xml.element("type","3");
	xml.endelement("un1");
	
	xml.startelement("un2")
	xml.element("name","newphone");
	xml.element("data",document.getElementById('newphone').value);
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
			document.getElementById('kk4').innerHTML="鐢ㄦ埛鍚嶉敊璇";
			
			}else if(obj.root.name=="newmail" ){
				
				document.getElementById('kk41').innerHTML="瀵嗙爜閿欒";
				
				
				}else if(obj.root.data=='success'){
					
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
	$.post('/jj/userconter/safa.php',{"xml":d,"id":getCookie()},callback,"text");
	
	//return false
	}
	
	
	