// JavaScript Document


function submit1(){
	
	var u= $("#username").val();
	var p=$("#mima_id").val();
	var y=$("#check_ma").val();
	//alert("d");
	if(u==""){
		$("#error_a").text("用户名不能为空");
		return false;
		
		}else if(p==""){
			$("#error_a").text("密码不能为空");
			return false;
			}
			else if(y==""){
				$("#error_a").text("验证码不能为空");
				return false;
				}else{
					//in_login_in();
					return true;
					
					}

//in_login_in();
	
	}

function submit00(){
	
	var u= $("#username").val();
	var p=$("#mima_id").val();
	var y=$("#check_ma").val();
	//alert("d");
	if(u==""){
		$("#error_a").text("用户名不能为空");
		return false;
		
		}else if(p==""){
			$("#error_a").text("密码不能为空");
			return false;
			}
			else if(y==""){
				$("#error_a").text("验证码不能为空");
				return false;
				}else{
					in_login_in();
					
					
					}

//in_login_in();
	//return false;
	}


function huchi(t2,t1){
	var fd=document.getElementById(t2);
	var fs=document.getElementById(t1);
	if(fd.checked){
		fs.checked=false;
		}else if(fs.checked){
			fd.checked=false;
			}
	
	
	}
function check(){
	
	var u= $("#re_username").val();
	var m=$("#re_mima").val();
	var p=$("#re_phone").val();
	var ma=$("#re_mail").val();
	var n=$("#sex_nan").val();
	var v=$("#sex_nv").val();
	var y=$("#yinsi").val();
	var ya=$("#re_yan").val();
	
	
	//alert("d");
	if(ya==""){
		$("#error_q").text("验证码不能为空");
		return false;
		
		}else
	if(u==""){
		$("#error_q").text("用户名不能为空");
		return false;
		
		}else if(p==""){
			$("#error_q").text("手机号不能为空");
			return false;
			}
			else  if(ma==""){
			$("#error_q").text("邮箱不能为空");
			return false;
			}else
			
			
			if(!document.getElementById("yinsi").checked){
				$("#error_q").text("隐私政策未选");
				return false;
				}
				
				else  if(m==""){
				$("#error_q").text("密码不能为空");
				return false;
				} else if(document.getElementById("sex_nan").checked && document.getElementById("sex_nv").checked){
				$("#error_q").text("性别只能选一个");
				return false;
				} else if(!document.getElementById("sex_nan").checked && !document.getElementById("sex_nv").checked){
				$("#error_q").text("性别未选");
				return false;
				}else{return false;}

//in_login_in();
	return false;
	}

function checkw(){
	
	var u= $("#re_username").val();
	var m=$("#re_mima").val();
	var p=$("#re_phone").val();
	var ma=$("#re_mail").val();
	var n=$("#sex_nan").val();
	var v=$("#sex_nv").val();
	var y=$("#yinsi").val();
	var ya=$("#re_yan").val();
	
	
	//alert("d");
	if(ya==""){
		$("#error_q").text("验证码不能为空");
		return false;
		
		}else
	if(u==""){
		$("#error_q").text("用户名不能为空");
		return false;
		
		}else if(p==""){
			$("#error_q").text("手机号不能为空");
			return false;
			}
			else  if(ma==""){
			$("#error_q").text("邮箱不能为空");
			return false;
			}else
			
			
			if(!document.getElementById("yinsi").checked){
				$("#error_q").text("隐私政策未选");
				return false;
				}
				
				else  if(m==""){
				$("#error_q").text("密码不能为空");
				return false;
				} else if(document.getElementById("sex_nan").checked && document.getElementById("sex_nv").checked){
				$("#error_q").text("性别只能选一个");
				return false;
				} else if(!document.getElementById("sex_nan").checked && !document.getElementById("sex_nv").checked){
				$("#error_q").text("性别未选");
				return false;
				}else{in_login_reg();}

//in_login_in();
	//return false;
	}



