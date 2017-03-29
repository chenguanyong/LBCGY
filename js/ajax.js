// JavaScript Document
function ajax(url){
	this.xmlhttp=null;
	this.url=url;
	this.call=null;	
	this.createobject=function (){
					  if (window.XMLHttpRequest)
				{// code for IE7+, Firefox, Chrome, Opera, Safari
			  this.xmlhttp=new XMLHttpRequest();
				}
			  else
				{// code for IE6, IE5
			   this.xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
				}
		
		}
	
	this.onread=function (ca){
		
	//this.onreadystatechange=cfunc;
	if(ca!=null){
	this.xmlhttp.onreadystatechange=ca;
		
		}else this.xmlhttp.onreadystatechange=this.onmessage;
	}
		
		
	this.setget=function (data_array){
		var ds="?";
		var i=0;
		for(i in data_array){
			ds=ds+data_array[i][0]+"="+data_array[i][1]+"&";
			
			}
			var d="";
			if((d=ds.charAt(ds.length-1))=='&')
			{
				ds=ds.substr(0,ds.length-2);
				
				}
		var str=this.url+ds;
		
		this.xmlhttp.open("get",str,true);
		
		this.xmlhttp.send();
		
		}
		this.setpost=function(data_array){
			
			var ds;
		var i=0;
		for(i in data_array){
			ds=ds+data_array[i][0]+"="+data_array[i][1]+"&";
			
			}
			if((d=ds.charAt(ds.length-1))=='&')
			{
				ds=ds.substr(0,ds.length-2);
				
				}
				this.xmlhttp.open("get",this.url,true);
			this.xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
this.xmlhttp.send(ds);
			
			}
	
	this.onmessage=function (){
		
					  if (xmlhttp.readyState==4 && xmlhttp.status==200)
				  {
			   this.call(this.xmlhttp.responseText,this.xmlhttp.responseXML);
				  }
		
		}
	
	}