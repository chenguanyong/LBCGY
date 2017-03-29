// JavaScript Document

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
	$.post('/jj/userconter/mywork/link/option/page.php',{"id":f,"pici":$("#main_data").attr("pici"),"page":$("#xyy").attr("num")},callback,"text");
	
	
	
	
	
	
	
	
	
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

function initwork(){
		
	function setw(dt){
		
		alert(dt);
	//document.write(dt);
	$("#mtable_valie").empty();
		var obj=eval ("(" + dt + ")");
		$("#syy").attr("max",obj.hand.yeshu);
		$("#main_data").attr("pici",obj.hand.pici);
		
		var dds=parseInt(obj.hand.yeshu);
		for(var i=0;i<dds;i++){
			
			 createys([i+1,i+1]);
			}
		
		
	var dp=	parseInt(obj.hand.size)+10;
		for(var i=10,a=0;i<dp;i++,a++){
			
			var oj=eval("obj.un"+i);
			createtable([oj.si_linknum],[a+1,oj.si_name,oj.si_www,oj.si_acunt,oj.si_riqi,oj.si_renzheng]);
			}
		
		
		}	
		
		
		var f=getCookie("id");
		alert(f);
	
		
		$.post("/jj/userconter/mywork/link/link_init.php",{"id":f,"pici":$("#main_data").attr("pici"),"page":$("#xyy").attr("num")},setw,"text");
		
		
		
		}
//createtable(["dd","dd"],["1","林北","www.lnbei.com","zhaohan","2016","sh"]);
function createtable(s,f){
	var table=document.getElementById("mtable_valie");
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
//更新订单记录，例如：未付款，已付款
function initdata_mylink(){
	
	function setw(dt){
		
		alert(dt);
	//document.write(dt);
		var obj=eval ("(" + dt + ")");
		//alert(obj.hand.yeshu);
		if(obj.hand.yeshu!="a"){
		$("#doed").text();//代收货
		$("#doed1").text();//待付款
		$("#doed2").text();//带评价
		$("#doed3").text();//待自提
        $("#finsh").text();//带评价
		$("#norz").text();//待自提

			
			}
		
		}	
		
		
		var f=getCookie("id");
		//alert(f);
	
		$.post("jj/userconter/myorder/show/show.php",{"id":f,"pici":"2151","page":"0","type":"0"},setw,"text");
		
		
		
		}