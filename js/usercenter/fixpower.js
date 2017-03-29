// JavaScript Document

function sure1(){
	tijiao();
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
	xml.element("name1","oldpower");
	xml.element("data1",document.getElementById('oldpower').value);
	xml.element("type1","3");
	xml.endelement("un1");
	
	xml.startelement("un2")
	xml.element("name2","newpower");
	xml.element("data2",document.getElementById('newpower').value);
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
	alert(d);
	
	function callback(d){
		alert(d);
		//document.write(d);
		var obj = eval ("(" + d + ")");
		if(obj.root.name=="oldmail"){
			document.getElementById('kk5').innerHTML="鐢ㄦ埛鍚嶉敊璇";
			
			}else if(obj.root.name=="newmail" ){
				
				document.getElementById('kk51').innerHTML="瀵嗙爜閿欒";
				
				
				}else 
				if(obj.root.name=="yazhen"){
					
					document.getElementById('error_yazhen').innerHTML="楠岃瘉鐮侀敊璇";
					
					}else if(obj.root.data=='success'){
					
				alert("chen");
					$('#dbody').css("visibility","visible");
					$('#dbody').text("修改成功！！");
					$('#input_').css("visibility","hidden");
					
					
					
					}
		
		
		}
	
	
	//ajax('login/login_one.php',"xml",d,callback,"text");
	$.post('/jj/userconter/power.php',{"xml":d},callback,"text");
	
	//return false
	}
	
}
function submit11(){
	
	var u= $("#oldpower").val();
	var p=$("#newpower").val();
	var y=$("#check_ma").val();
	alert(u+123);
	//alert("d");
	if(u==""){
		$("#error_a").text("用户名不能为空");
		return false;
		
		}else if(p==""){
			$("#error_a").text("密码不能为空");
			//alert(u+123);
			return false;
			}
			else if(y==""){
				$("#error_a").text("验证码不能为空");
				return false;
				}else if(u!=p){
					//in_login_in();
					$("#error_a").text("密码不一致");
					
					}else {
						alert("dsf1233");
						sure1();
						
						
						}

//in_login_in();
	return false;
	}
