<?php

$doc = new DOMDocument();
//$doc->loadHTML("<html><body>Test<br></body></html>");
$doc->loadHTMLFile('jj.html');
 $doc->getElementById('ds123')->nodeValue="jklklkllk";
echo $doc->saveHTMLFile("f2.html");



function create_site_html($dataarray,$htmlfile){

$arr=array();
$arr=$dataarray;
$doc = new DOMDocument();
//$doc->loadHTML("<html><body>Test<br></body></html>");
$doc->loadHTMLFile('jj.html');
foreach($arr as  $key=>$value ){

$doc->getElementById($key)->nodeValue=$value;



}
$doc->saveHTMLFile('ffsf.html');
}
//create_site_html(array('ds'=>'woshi'),"sdfsd");