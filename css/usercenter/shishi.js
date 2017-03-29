// JavaScript Document
function shua(){
	
	function setw(dt){
		
		alert(dt);
	//document.write(dt);
		var obj=eval ("(" + dt + ")");
		$("#main_0").attr("pici",obj.hand.pici);
		$("#main_0").attr("ix",obj.hand.id);
		var yeshu=parseInt(obj.hand.yeshu);
		
		$("#syy").attr("max",yeshu);
		for(var i=0;i<yeshu;i++){
			
			createys([i+1,i+1]);
			
			}
		var size=parseInt(obj.hand.size);
		
		if(size>19){
		
		for(var i=0;i<obj.hand.size;i++){
		var oj=eval("obj.un"+i);
			createtable(["ss"],[oj.soure,oj.link_,oj.clicks,oj.ip,oj.createtime]);
		//{"city":"重庆","clicks":"1","ip":"192.168.0.1","link_":"f.html","soure":"buzhidao"},"hand":{"size":"21","id":"57","yeshu":"57","pici":"5369"}}
			}
		
		
		}else{
			$("#main_0").css("visibility","hidden");
			var dssp=document.getElementById("main_0");
			var dclone=dssp.cloneNode(true);
			$("#main_0").empty();
			
			for(var i=0;i<obj.hand.size;i++){
		var oj=eval("obj.un"+i);
			createtable(["ss"],[oj.soure,oj.link_,oj.clicks,oj.ip,oj.createtime]);
		//{"city":"重庆","clicks":"1","ip":"192.168.0.1","link_":"f.html","soure":"buzhidao"},"hand":{"size":"21","id":"57","yeshu":"57","pici":"5369"}}
			}
			var ds=dq.childNodes;
			var yeshu=parseInt($("#syy").attr("max"));
			var dss=0;
			if(yeshu>1){
              dss=size;
		
		      }else{
			   dss=0;
			  }
	
            alert(ds.length);
            for(var i=ds.length-1;i>=0;i--)
            {
	
	          if(dss==0){
		          break;
		              }
	        switch(ds.item(i).nodeType){
		case 1: dq.removeChild(ds.item(i));dss--;break;
		}
	        }	
           }
		}
		var f=getCookie("id");
		$.post("/jj/userconter/shishi/shishi.php",{"id":f,"id0":$("#main_0").attr("ix"),"pici":$("#main_0").attr("pici")},setw,"text");
		
	
	
	}









	initdata2();
	
	function initdata2(){
		
	function setw(dt){
		
		alert(dt);
	//document.write(dt);
		var obj=eval ("(" + dt + ")");
		$("#main_0").attr("pici",obj.hand.pici);
		$("#main_0").attr("ix",obj.hand.id);
		var yeshu=parseInt(obj.hand.yeshu);
		
		$("#syy").attr("max",yeshu);
		for(var i=0;i<yeshu;i++){
			
			createys([i+1,i+1]);
			
			}
		
		
		
		
		for(var i=0;i<obj.hand.size;i++){
		var oj=eval("obj.un"+i);
			createtable(["ss"],[oj.soure,oj.link_,oj.clicks,oj.ip,oj.createtime]);
		//{"city":"重庆","clicks":"1","ip":"192.168.0.1","link_":"f.html","soure":"buzhidao"},"hand":{"size":"21","id":"57","yeshu":"57","pici":"5369"}}
			}
		
		
		}	
		
		
		var f=getCookie("id");
		//alert(f);
	//ajax("/php/login/image.php",'id',f,set,"text");	
		
		
		//$.post("j.php",{"id1":"dsd"},setw);ajax("image.php","id1",f,setw,"text");
		
		$.post("/jj/userconter/myshishi.php",{"id1":f},setw,"text");
		
		
		
		}


//initdata();

function createtable(s,f){
	var table=document.getElementById("mtable_valie");
	var tr=document.createElement("tr");
	//tr.setAttribute();

	
	
	var td2=document.createElement("td");
	td2.setAttribute("style","width:15%; height:20px; font-family:'Microsoft YaHei UI'; font-size:10px; border:solid 1px #9a9a9a");
	td2.innerHTML=f[0];
	
	var td3=document.createElement("td");
	td3.setAttribute("style","width:30%; height:20px; font-family:'Microsoft YaHei UI'; font-size:10px; border:solid 1px #9a9a9a");
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
	td6.setAttribute("style","width:20%; height:20px; font-family:'Microsoft YaHei UI'; font-size:10px; border:solid 1px #9a9a9a");
	//td6.setAttribute("onclick","delete_click(this)");
	//td6.setAttribute("num",s[0]);//文章编号
	td6.innerHTML=f[4];
	
	//tr.appendChild(td1);
	tr.appendChild(td2);
	tr.appendChild(td3);
	tr.appendChild(td4);
	tr.appendChild(td5);
	tr.appendChild(td6);
	
	table.appendChild(tr);
	
	
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
