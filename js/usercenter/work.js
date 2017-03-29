// JavaScript Document

function initdata(){
		
	function setw(dt){
		
		alert(dt);
	//document.write(dt);
		var obj=eval ("(" + dt + ")");
		
		/*document.getElementById("personality").innerHTML=obj.brody.username;
		$('#username').val(obj.brody.username);
		$('#touxiang').attr("src",obj.brody.mail);
		$('#xinxi').val(obj.brody.phone);*/
	
		$("#linksize").text(obj.brody.mylink);
		$("#spreadsize").text(obj.brody.myspread);
		}	
		
		
		var f=getCookie("id");
		//alert(f);
	
		
		$.post("/jj/userconter/mywork/init_work.php",{"id":f},setw,"text");
		
		
		
		}




//initdata();


initsite();
function  initsite(){
	function callback(d){
		//alert(d);
		//document.write(d);
		$("#mtable_valie").empty();
		var obj = eval ("(" + d + ")");
		//$("#syy").attr("max",obj.hand.yeshu);
		$("#main_data").attr("pici",obj.hand.pici);
		$("#linksize").text(obj.hand.linksize);
		
		
	var dss=	parseInt(obj.hand.size)+10;
	
		for(var i=10;i<dss;i++){
		var oj=eval("obj.un"+i);
		if(oj.data!="kong"){
			//cretetabl1e([oj.soure,oj.ip,oj.city,oj.link_,oj.clicks]);
		createtable([oj.si_linknum],[oj.si_name,oj.si_www,oj.si_dianjilian,oj.si_riqi]);
		
		
		//"si_name":"我是","si_www":"dsdfdsg","si_dianjilian":"343","si_riqi":"2016-8-10 10:01:32","si_linknum":"11dfffddf"}
		
			}else{
				
				break;
				}
		}
	
	}
	var f=getCookie("id");
		//alert(f);
	//ajax('login/login_one.php',"xml",d,callback,"text");
	$.post('/jj/userconter/mywork/tuiguang/tuiguang.php',{"id":f,"pici":$("#main_data").attr("pici"),"page":"1","type":"5"},callback,"text");
	}

function createtable(s,f){
	var table=document.getElementById("mtable_valie");
	var tr=document.createElement("tr");
	//tr.setAttribute();

	
	var td1=document.createElement("td");
	td1.setAttribute("style","width:10%; height:20px; font-family:'Microsoft YaHei UI'; font-size:10px; border:solid 1px #9a9a9a");
	var  a1=document.createElement("input");
	a1.setAttribute("ck","0");
	a1.setAttribute("type","checkbox");
	a1.setAttribute("onclick","a_click(this)");
	td1.appendChild(a1);
	
	
	var td2=document.createElement("td");
	td2.setAttribute("style","width:15%; height:20px; font-family:'Microsoft YaHei UI'; font-size:10px; border:solid 1px #9a9a9a");
	td2.innerHTML=f[0];
	
	var td3=document.createElement("td");
	td3.setAttribute("style","width:20%; height:20px; font-family:'Microsoft YaHei UI'; font-size:10px; border:solid 1px #9a9a9a");
	td3.setAttribute("onclick","yu_click(this)");
	td3.setAttribute("num",s[0])
	td3.innerHTML=f[1];
	
	var td4=document.createElement("td");
	td4.setAttribute("style","width:20%; height:20px; font-family:'Microsoft YaHei UI'; font-size:10px; border:solid 1px #9a9a9a");
	td4.innerHTML=f[2];
	
	var td5=document.createElement("td");
	td5.setAttribute("style","width:20%; height:20px; font-family:'Microsoft YaHei UI'; font-size:10px; border:solid 1px #9a9a9a");
	td5.innerHTML=f[3];
	
	var td6=document.createElement("td");
	td6.setAttribute("style","width:15%; height:20px; font-family:'Microsoft YaHei UI'; font-size:10px; border:solid 1px #9a9a9a");
	td6.setAttribute("onclick","delete_click(this)");
	td6.setAttribute("num",s[0]);//文章编号
	td6.innerHTML="删除";
	
	tr.appendChild(td1);
	tr.appendChild(td2);
	tr.appendChild(td3);
	tr.appendChild(td4);
	tr.appendChild(td5);
	tr.appendChild(td6);
	table.appendChild(tr);
	
	
	}
	function  yu_click(ff){
		
		window.location=http+"site/"+$(ff).attr()+".html";//jump page
		
		
		
		}





function initwork(){
		
	function setw(dt){
		
		//alert(dt);
	//document.write(dt);
	$("#mtable_valie1").empty();
		var obj=eval ("(" + dt + ")");
		//$("#syy").attr("max",obj.hand.yeshu);
		$("#main_s").attr("pici",obj.hand.pici);
		
		
		
		
	var dp=	parseInt(obj.hand.size)+10;
		for(var i=10,a=0;i<dp;i++,a++){
			
			var oj=eval("obj.un"+i);
			createtable1([oj.si_linknum],[a+1,oj.si_name,oj.si_www,oj.si_acunt,oj.si_riqi,oj.si_renzheng]);
			}
		
		
		}	
		
		
		var f=getCookie("id");
		//alert(f);
	
	var d1=	$("#main_s").attr("pici");
	//alert(d1);
		$.post("/jj/userconter/mywork/link/link_init.php",{"id":f,"pici":"gftg","page":"1","type":"5"},setw,"text");
		
		
		
		}
//createtable(["dd","dd"],["1","林北","www.lnbei.com","zhaohan","2016","sh"]);
function createtable1(s,f){
	var table=document.getElementById("mtable_valie1");
	var tr=document.createElement("tr");
	//tr.setAttribute();
//tr.setAttribute(
	
	var tdw=document.createElement("td");
	
	tdw.setAttribute("style","width:10%; height:20px; font-family:'Microsoft YaHei UI'; font-size:10px; border:solid 1px #9a9a9a");
	tdw.innerHTML=f[0];
	//tdw.appendChild(a);
	
	
	var td2=document.createElement("td");
	td2.setAttribute("style","width:15%; height:20px; font-family:'Microsoft YaHei UI'; font-size:10px; border:solid 1px #9a9a9a");
	td2.setAttribute("onclick","yu_click(this)");
	td2.setAttribute("num",s[0])
	td2.innerHTML=f[1];
	
	var td3=document.createElement("td");
	td3.setAttribute("style","width:20%; height:20px; font-family:'Microsoft YaHei UI'; font-size:10px; border:solid 1px #9a9a9a");
	td3.setAttribute("onclick","yu_click(this)");
	td3.setAttribute("num",s[0])
	td3.innerHTML=f[2];
	
	var td4=document.createElement("td");
	td4.setAttribute("style","width:20%; height:20px; font-family:'Microsoft YaHei UI'; font-size:10px; border:solid 1px #9a9a9a");
	td4.innerHTML=f[3];
	
	var td5=document.createElement("td");
	td5.setAttribute("style","width:20%; height:20px; font-family:'Microsoft YaHei UI'; font-size:10px; border:solid 1px #9a9a9a");
	td5.innerHTML=f[4];
	
	var td6=document.createElement("td");
	td6.setAttribute("style","width:15%; height:20px; font-family:'Microsoft YaHei UI'; font-size:10px; border:solid 1px #9a9a9a");
	
	td6.innerHTML=f[5];
	
	tr.appendChild(tdw);
	tr.appendChild(td2);
	tr.appendChild(td3);
	tr.appendChild(td4);
	tr.appendChild(td5);
	tr.appendChild(td6);
	table.appendChild(tr);
	
	
	}

function yu_click(f){
	
	window.location=http+"site/"+$(f).attr("num")+".html";
	}
	
	
	//gengxin 我的推广数据


function  a_click(g){
	
	if($(g).attr("ck")=="0"){
		$(g).attr("ck","1");
		
		}else {
			
			$(g).attr("ck","0");
			//alert($("[ch]").attr("ch"));
			if($("[ch]").attr("ch")=="1"){
				
				$("[ch]").click();
		$("[ch]").attr("ch","0");
				
				
				}
			
			
			}
	
	
	}
function allselect(g){
	//alert("ddd");
	if($(g).attr("ch")=="0"){
		$(g).attr("ch","1");
		$("[ch=0]").click();
		
		$("[ck]").attr("ck","1");
		$("[ch]").attr("ch","1");
		//$("[ck]").click();
	//	alert("s");
	
		}else{
			$(g).attr("ch","0");
		$("[ch=1]").click();
		
		$("[ck]").attr("ck","0");	
			$("[ch]").attr("ch","0");
			//$("[ck]").click();
			//alert("s1");
			}
	
	}

	
	function  yu_click(ff){
		
		window.location=http+"site/"+$(ff).attr()+".html";//jump page
		
		
		
		}
		//删除site
function  delete_click(f){
	var d=$(f).attr("num");
	var id=getCookie("id");
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
	//ajax('login/login_one.php',"xml",d,callback,"text");
	$.post('/jj/userconter/spread/deletesite.php',{"xml":d,"id":id},callback,"text");
	}


initwork();
