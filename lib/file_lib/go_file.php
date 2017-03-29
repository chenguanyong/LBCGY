<?php
/*
 * �ϴ��ļ���
 */

include_once 'session/massage.php';
include_once 'lib/file_lib/file_opt.php';

class gofile{
	public $uploaddir;//��Ŀ¼
	public $file_name;//�ļ�����
	private $user_name_file;//�û��ϴ��ļ���
	public function __construct($mulu,$file_name){
	$this->uploaddir=$mulu;
	$this->user_name_file=$file_name;
	$this->file_name=$_FILES[$this->user_name_file]['tmp_name'];	
	}
	
	
	
	//�ϴ��ļ�
	public function do_file (){
		
		if (move_uploaded_file($this->file_name, $this->uploaddir)) {
			//echo "File is valid, and was successfully uploaded.\n";
			return true;
		} else {
			return false;//echo "Possible file upload attack!\n";
		}	
		
	
	}
	
		
		
		
		
	
	
	
	
}

/*
$value = 'something from somewhere';

setcookie("TestCookie", $value);
setcookie("TestCookie", $value, time()+3600);  /* expire in 1 hour */
//setcookie("TestCookie", $value, time()+3600, "/~rasmus/", "example.com", 1);
//header("location:http://www.baidu.com?df=fdf");
//$fd = dio_open('/f.text', O_RDWR | O_NOCTTY | O_NONBLOCK);
//echo dio_read($fd);
//dio_close($fd);

// In PHP versions earlier than 4.1.0, $HTTP_POST_FILES should be used instead
// of $_FILES.

/*
function goimage(){
$uploaddir = "d:/QQ7/45/5233.text";
$uploadfile = $uploaddir . basename("ff.txt");

echo '<pre>';
if (move_uploaded_file($_FILES['userfile']['tmp_name'], $uploaddir)) {
    echo "File is valid, and was successfully uploaded.\n";
} else {
    echo "Possible file upload attack!\n";
}

echo 'Here is some more debugging info:';
print_r($_FILES);
$d=fopen($uploaddir,'a+');
//fwrite($d,"woshi");


echo fread($d,55);
//fread(
fclose($d);
print "</pre>";}
*/





 