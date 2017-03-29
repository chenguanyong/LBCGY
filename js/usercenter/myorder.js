initdata2();
function initdata2(){
		
	function setw(dt){
		
		alert(dt);
	//document.write(dt);
		var obj=eval ("(" + dt + ")");
		//alert(obj.hand.yeshu);
		if(obj.hand.yeshu!="a"){
			var dd=parseInt(obj.hand.yeshu);
		//	alert(dd);
			createys(dd);
			
			}
		for(var i=0;obj.hand.size;i++){
		var oj=eval("obj.un"+i);
		//	cretetabl1e([oj.mincheng,oj.integral,oj.balance,oj.integral]);
		createshop([oj.createtime,oj.or_num],[oj.sh_num,oj.sh_name,oj.sh_num,oj.sh_attr],[oj.sh_attr,oj.or_cash,oj.or_state,oj.or_num]);	
			
			}
		//$fp[$rtt]=array("or_num"=>$value["order_num00"],"sh_name"=>$value["shop_name00"],"or_state"=>$value["order_state00"],"or_cash"=>$value['order_cash00'],"createtime"=>$value['createtime00'],"sh_num"=>$value['shop_num00'],"sh_attr"=>$value['shop_attr00']);
    
		
		}	
		
		
		var f=getCookie("id");
		alert(f);
	//ajax("/php/login/image.php",'id',f,set,"text");	
		
		
		//$.post("j.php",{"id1":"dsd"},setw);ajax("image.php","id1",f,setw,"text");
		
		$.post("/jj/userconter/myorder/init.php",{"id":f,"pici":"2151","page":"0","type":"0"},setw,"text");
		
		
		
		}
//更新订单记录，例如：未付款，已付款
function initdata_myorder(){
	
	function setw(dt){
		
		alert(dt);
	//document.write(dt);
		var obj=eval ("(" + dt + ")");
		//alert(obj.hand.yeshu);
		if(obj.hand.yeshu!="a"){
		$("#nohuo").text();//代收货
		$("#nopay").text();//待付款
		$("#nopj").text();//带评价
		$("#nozit").text();//待自提


			
			}
		
		}	
		
		
		var f=getCookie("id");
		//alert(f);
	
		$.post("jj/userconter/myorder/show/show.php",{"id":f,"pici":"2151","page":"0","type":"0"},setw,"text");
		
		
		
		}
function cretetabl1e(fd){
	//alert("s");
	var div_1=document.createElement('tr');
	
	
	for(var i=0;i<4;i++){
		
		var dive=document.createElement('td');
		
		dive.innerHTML=fd[i];
		
		div_1.appendChild(dive);
		
		}
		//div_1.appendChild()
	
	var fh=document.getElementById("mtable");
	
	fh.appendChild(div_1);
	
	}
//订单详情
function order_xiang(){
	
	
	function setw(dt){
		
		alert(dt);
	//document.write(dt);
		var obj=eval ("(" + dt + ")");
		//alert(obj.hand.yeshu);
		if(obj.hand.yeshu!="a"){
		$("#nohuo").text();//代收货
		$("#nopay").text();//待付款
		$("#nopj").text();//带评价
		$("#nozit").text();//待自提


			
			}
		
		}	
		
		
		var f=getCookie("id");
		//alert(f);
	
		$.post("jj/userconter/myorder/show/show.php",{"id":f,"pici":"2151","page":"0","type":"0"},setw,"text");
		
	
	}
	//订单评价
	function order_pingjia(){
		
	function setw(dt){
		
		alert(dt);
	//document.write(dt);
		var obj=eval ("(" + dt + ")");
		//alert(obj.hand.yeshu);
		if(obj.hand.yeshu!="a"){
		$("#nohuo").text();//代收货
		$("#nopay").text();//待付款
		$("#nopj").text();//带评价
		$("#nozit").text();//待自提


			
			}
		
		}	
		
		
		var f=getCookie("id");
		//alert(f);
	
		$.post("jj/userconter/myorder/show/show.php",{"id":f,"pici":"2151","page":"0","type":"0"},setw,"text");
			
		
		}
//订单删除
	function order_delete(){
		
	function setw(dt){
		
		alert(dt);
	//document.write(dt);
		var obj=eval ("(" + dt + ")");
		//alert(obj.hand.yeshu);
		if(obj.hand.yeshu!="a"){
		$("#nohuo").text();//代收货
		$("#nopay").text();//待付款
		$("#nopj").text();//带评价
		$("#nozit").text();//待自提


			
			}
		
		}	
		
		
		var f=getCookie("id");
		//alert(f);
	
		$.post("jj/userconter/myorder/show/show.php",{"id":f,"pici":"2151","page":"0","type":"0"},setw,"text");
			
		
		}










//收货人
createshop(["3","4"],["3","3","4","3","55"],["431","3432","433","234"]);

function createshop(f,g,v){
	
	var main=document.getElementById("main_shop");
	var div=document.createElement("div");
	div.setAttribute("style","width:98%; height:140px; border:solid 0px #000; margin-bottom:10px; margin:0 auto;");

	
	main.appendChild(div);
var div_1=document.createElement("div");
div_1.setAttribute("style","width:100%; height:25px; border-left:#e5e5e5 solid 1px ; border-right:#e5e5e5 solid 1px; border-top:#e5e5e5 solid 1px; background-color:#f5f5f5");


	var font= document.createElement("font");	
	font.setAttribute("style","display:inline-block; width:50px; float:left ");	
	font.innerHTML="日期";
	var font1= document.createElement("font");	
	font1.setAttribute("style","display:inline-block; width:100px;  float:left ");	
	font1.innerHTML=f[0];
	
	var font2= document.createElement("font");	
	font2.setAttribute("style","display:inline-block; width:50px;  float:left ");	
	font2.innerHTML="订单号";
	
	var font22= document.createElement("font");	
	font22.setAttribute("style","display:inline-block;  width:100px;  float:left ");	
	font22.innerHTML=f[1];
	
	div_1.appendChild(font);	
	div_1.appendChild(font1);	
	div_1.appendChild(font2);
    div_1.appendChild(font22);

var div_2=document.createElement("div");
var div_2_1=document.createElement("div");
var div_2_2=document.createElement("div");
var div_2_3=document.createElement("div");
var div_2_4=document.createElement("div");
var div_2_5=document.createElement("div");	
	
	div_2.appendChild(div_2_1);
	div_2.appendChild(div_2_2);
	div_2.appendChild(div_2_3);
	div_2.appendChild(div_2_4);
	div_2.appendChild(div_2_5);
	
	div_2.setAttribute("style","width:100%; border-bottom: #e5e5e5 solid 1px; border-left:#e5e5e5 solid 1px; border-right: #e5e5e5 solid 1px;margin:0; clear:both; height:100px; ");
	div_2_1.setAttribute("style","width:55%; height:100px;  border-right:solid 1px #e5e5e5; margin:0; float:left");
	div_2_2.setAttribute("style","width:10%; height:100px; border-right:solid 1px #e5e5e5; float:left");
	div_2_3.setAttribute("style","width:11% ; height:100px; border-right:solid 1px #e5e5e5; float:left");
	div_2_4.setAttribute("style","width:12%; height:100px; border-right:solid 1px #e5e5e5; float:left");
	div_2_5.setAttribute("style","width:12%; height:100px;  border-right:solid 1px #e5e5e5; float:left");
	
	var   div_3=document.createElement("div");
	var   div_3_1=document.createElement("div");
	var   div_3_2=document.createElement("div");
	var   div_3_3=document.createElement("div");
	div_3.appendChild(div_3_1);
	div_3.appendChild(div_3_2);
	div_3.appendChild(div_3_3);
	div_3.setAttribute("style","width:100%; border-bottom: #e5e5e5 solid 1px; border-left:#e5e5e5 solid 1px; border-right: #e5e5e5 solid 1px;margin:0; clear:both; height:100px; ");
	
	
	div_3_1.setAttribute("style","width:25%; height:100px;  float:left; text-align:center");
	div_3_2.setAttribute("style","width:50%; height:100px; text-align:center; float:left;");
	div_3_3.setAttribute("style","width:25% ; height:100px; float:left; text-align:center ");
	
	var aa_1=document.createElement("a");
	var aa_2=document.createElement("a");
	var aa_3=document.createElement("a");
	var aa_4=document.createElement("a");
	var aa_5=document.createElement("a");
	var aa_6=document.createElement("a");
	var aa_7=document.createElement("a");
	var aa_8=document.createElement("a");
	
	aa_1.setAttribute("style","display:block ; width:100%;  border-right:solid 1px #f1f1f1; margin-top:35px; ");
	aa_1.setAttribute("onclick","img_click(this)");
	aa_1.setAttribute("num",g[0]);
	aa_1.innerHTML=g[1];
	
	aa_2.setAttribute("style","display:block ; width:100%;  border-right:solid 1px #f1f1f1; margin-top:35px; ");
	//aa_2.setAttribute("onclick","s_click(this)");
	//aa_1.setAttribute("num",g[0]);
	aa_2.innerHTML=g[2];//数量
	var d=document.createElement("div");
	
	d.setAttribute("style","width:25%; height:100px;  float:left; text-align:center");
	d.setAttribute("onclick","img_click(this)");
	d.setAttribute("num",g[0]);
	
	var dw=document.createElement("img");
	dw.setAttribute("style"," width:90%; height:80px; padding-top:10px;");
	dw.setAttribute("src",g[3]);
	d.appendChild(dw);
	
	div_3_1.appendChild(d);
	div_3_2.appendChild(aa_1);
	div_3_3.appendChild(aa_2);
	
	//div_2_1.appendChild(div_3);
	
	aa_3.setAttribute("style","display:block ; width:80%;  margin:0 auto; padding-top:35px; height:50px;");
	
	aa_3.innerHTML=v[0];//收货人
	div_2_2.appendChild(aa_3);
	
	aa_4.setAttribute("style","display:block ; width:90%;  margin:0 auto; padding-top:35px; height:50px;");
	
	aa_4.innerHTML="<font>总额</font><font>"+v[1]+"</font>";
	
	div_2_3.appendChild(aa_4);
	
	aa_5.setAttribute("style","display:block ; width:90%;  margin:0 auto; padding-top:30px;  border-bottom:solid #e5e5e5 1px; padding-bottom:2px; ");
	
	aa_5.innerHTML=v[2];//状态
	
	aa_6.setAttribute("style","display:block ; cursor:pointer; width:90%; background-color:#CCC; border:solid 1px #e5e5e5; margin:0 auto; ");
	aa_6.setAttribute("num",v[3]);
	aa_6.innerHTML="订单详情";
	
	div_2_4.appendChild(aa_5);
	div_2_4.appendChild(aa_6);
	
	
	aa_7.setAttribute("style","display:block ; width:50%;  margin:0 auto; padding-top:30px; ");
	
	aa_7.innerHTML="评价";
	aa_7.setAttribute("onclick","pi_click(this)");
	aa_7.setAttribute("num",v[3]);
	
	aa_8.setAttribute("style","display:block ; width:50%;  margin:0 auto;");
	
	aa_8.innerHTML="晒单";
	aa_8.setAttribute("onclick","shai_click(this)");
	aa_8.setAttribute("num",v[3]);
	
	
	div_2_5.appendChild(aa_7);
	div_2_5.appendChild(aa_8);
	
	
	
	
	div_2_1.appendChild(div_3);
	div.appendChild(div_1);
	div.appendChild(div_2);
	
	}

function img_click(f){
	
	window.location=http+"shop/"+$(f).attr("num")+".html";
	
	
	}
function shai_click(f){
	
	
	}//评价
	function pi_click(f){
		
		
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
	$.post('/jj/userconter/myorder/orderxian/page.php',{"id":f,"pici":$("#main_data").attr("pici"),"page":$("#xyy").attr("num")},callback,"text");
	
	
	
	
	
	
	
	
	
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


