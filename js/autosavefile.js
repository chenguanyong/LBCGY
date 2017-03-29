// JavaScript Document

function auto_save_file(){
	//getCookie("id")
	var data = CKEDITOR.instances.editor1.getData();
	$.post('/jj/works/tempsavefile.php',{id:'dd'},function (data){
		alert(data);
		
		},"text");
	
	}
function auto_rev_file(){
	$.post('/jj/works/revtempfile.php',{"id":getCookie("id")},function(data){
		
		
		var data = CKEDITOR.instances.editor1.setData(data);
		
		},"text");
	
	
	
	}	