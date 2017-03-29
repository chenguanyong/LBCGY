<?php



$xml=new DOMDocument();
$xml->loadHTMLFile("wy_1.html");
 $rew=mb_convert_encoding("论三民主义", "UTF-8");
$arr=array("title"=>$rew,"riqi"=>"2016/5/3","leibie"=>"历史","zuo"=>"官用","lan"=>"0","wen_span"=>"他还说，下一步工作安排是建立健全以合同管理为基础的用人机制，继续扩大聘用制度推行面，研究提出解决编外用人问题政策思路。健全岗位设置管理制度，启动事业单位管理岗位职员等级晋升制度试点。进一步完善公开招聘制度，分行业制定公开招聘办法。出台促进事业单位创业创新工作的指导意见，出台建立机关事业单位防治“吃空饷”问题长效机制的意见，研究制定高校、公立医院不纳入编制管理后的人事管理衔接办法。");

foreach($arr as $key=>$value){

echo $key;
$xml->getElementById($key)->nodeValue=$value;



}
$xml->saveHTMLFile("f65.html");












/*
$e2=array("w","e","f");
$rnode=$xml->getElementById("ds");
$div=$xml->createElement("div");



for($i=0;$i<count($e2);$i++){

$a_=$xml->createElement("a");
$a_->setAttribute("chen", "fuan");
$a_->nodeValue=$e2[$i];
$div->appendChild($a_);
}
//$div->appendChild($a_);

$rnode->appendChild($div);
$xml->saveHTMLFile("w9.html");






//echo $_POST['id1'];
/*include_once 'session/aadmi.php';
include_once 'lib/php_lib/checkinput.php';
include_once 'session/session_build.php';
include_once 'lib/image_php/iamge_create.php';*/
/*//echo $_POST['id1'];
$doc = new DOMDocument();
//$doc->loadHTML("<html><body>Test<br></body></html>");
$doc->loadHTMLFile('dd.html');
$f= $doc->getElementById('ds')->nodeValue="123555456";
$doc->getElementById('ds')->setAttribute("ds", "dd");
echo $doc->saveHTMLFile("f3w.html");
/*d1']){
	
		exit;
	
	}
	//echo "ds";
	$id=check_html($_POST['id1']);
	$id=gy2($id);
	session_data::init();
	session_start();
	
	session_id($id);*/
	
//$jk=iamge_opt::randimage();
	
	//$_SESSION['ya']=$jk[0];
	//write_json::create_massage(array("1","1","1","image","\php\image\check_image\\".$jk[1].".png","path"));
	//exit();
	
//}else exit;
	
	
	
	
	
	

//fu();