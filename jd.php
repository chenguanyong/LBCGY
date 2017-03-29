<?php

//header("Content-type: image/png");
//$im = @imagecreate(100, 50)
//    or die("Cannot Initialize new GD image stream");
//$background_color = imagecolorallocate($im, 5, 5, 5);
//$text_color = imagecolorallocate($im, 233, 14, 91);
//imagestring($im, 1, 5, 5,  "A Simple Text String", $text_color);
//imagepng($im);
//imagedestroy($im);







function randimage(){
	$ff=array("0","1","2","3","4","5","6","7","8","9","a","b","c","d","e","f","g","h","i","j","k","l","m","n","o","p","q","r","s","t","u","v","w","x","y","z");
	$result=NULL;
	//header("Content-type: image/png");
	//header("Content-type: text/html");
	$im=@imagecreate(100,30)or die("sds");
	$background=imagecolorallocate($im,0,0,0);
	
	$fg=0;
	for($i=0;$i<4;$i++){
		$fd=rand(0,35);
		$fa=$ff[$fd];
		$result.=$fa;
		$textcolor=imagecolorallocate($im,rand(0,255),43,rand(0,255));
		imagechar($im,5,$fg,0,$fa,$textcolor);
		$fg=$fg+rand(10,25);
		
		
		}
	$ft=rand(1000,9999);
	imagepng($im,"\dd\\htdocs\\fdf\\".$ft.".png");
	//imagepng($im);
imagedestroy($im);

//echo $result;
 //echo $ft;
	return $ft;
	
	}

echo randimage();


?>