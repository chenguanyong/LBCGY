// JavaScript Document
function int(){
	function callback(d){
		alert(d);
		//document.write(d);
		var obj = eval ("(" + d + ")");
		
		
	
	}
	//ajax('login/login_one.php',"xml",d,callback,"text");
	$.post('/jj/userconter/spread/init.php',{"id":id},callback,"text");
	
	
	
	
	}
	
	
	//gengxin 我的推广数据
function  initsite(){
	function callback(d){
		alert(d);
		//document.write(d);
		$("#mtable_valie").empty();
		var obj = eval ("(" + d + ")");
		$("#syy").attr("max",obj.hand.yeshu);
		$("#main_data").attr("pici",obj.hand.pici);
		$("#linksize").text(obj.hand.linksize);
		if(obj.hand.yeshu=="0"){
			
			//create_serch(['b','b','暂时没有相关信息',' b']);
			return false;
			}
		var dds=parseInt(obj.hand.yeshu);
		for(var i=0;i<dds;i++){
			
			 createys([i+1,i+1]);
			}
		
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
		alert(f);
	//ajax('login/login_one.php',"xml",d,callback,"text");
	$.post('/jj/userconter/mywork/tuiguang/tuiguang.php',{"id":f,"pici":$("#main_data").attr("pici"),"page":$("#xyy").attr("num")},callback,"text");
	}

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
	
	createtable([444],["d","dd","dsd","sdsdfsd"]);
	
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
	td2.setAttribute("style","width:20%; height:20px; font-family:'Microsoft YaHei UI'; font-size:10px; border:solid 1px #9a9a9a");
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
	td5.setAttribute("style","width:15%; height:20px; font-family:'Microsoft YaHei UI'; font-size:10px; border:solid 1px #9a9a9a");
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





	function createys(c){
	var	 g=document.getElementById('yeshu');
	
	var a_1=document .createElement('a');
	//a_1.setAttribute('id',"dd"+i);
	a_1.setAttribute('style',"border:1px solid #999; display: inline-block; width:20px; padding-top:3px; padding-bottom:2px; font-family:Arial, Verdana, 宋体 ");
	a_1.setAttribute('onclick',"y_click(this)");
	a_1.setAttribute('y',c[0]);
	//a_1.setAttribute('ww',"0");
	a_1.innerHTML=c[1];
	g.appendChild(a_1);
	
	
	
	
	}
	
	
	function page_tj(){

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
	$.post('/jj/userconter/mywork/tuiguang/page.php',{"id":f,"pici":$("#main_data").attr("pici"),"page":$("#xyy").attr("num")},callback,"text");
	
	
	
	
	
	
	
	
	
	}
	
function y_click(g){
	//alert($(g).text());
	var df=$(g).text();
	//alert($(g).attr("id"));
	if($(g).attr("id")=="xyy"){
		//alert("11");
		var fd=$(g).attr("num");
		var fd1=parseInt(fd)+1;
		if($(g).att("max")<fd1){return false;}
		
		$(g).attr("num",fd1);
		$("[dss=f]").css("background-color","#fff");
		var fv="[y="+fd1+"]";
		$(fv).css("background-color","#aaa");
		
		
		}else if($(g).attr("id")=="syy")
		{
			var fd=$(g).attr("num");
			//alert(fd);
			if(fd=="0"){return false;}
		var fd1=parseInt(fd)-1;
		
		$(g).attr("num",fd1);
		$("[dss=f]").css("background-color","#fff");
		$("[y="+fd1+"]").css("background-color","#aaa");
			
			
			
			}
		
		
		else {
			
		var fe=	$(g).attr("y");
			
			//alert(fe);
		$(g).parent().parent().children("a").attr("num",fe);	
		
		$("[dss=f]").css("background-color","#fff");
		$(g).css("background-color","#aaa");	
			}
	
	
	//tj($("#syy").attr("num"));
	page_tj();
	}

