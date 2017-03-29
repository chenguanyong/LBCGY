<?php //����html��css
function ExtractCss($str){
    
    $patten_information = '/<[A-Z,a-z,0-9,^\/]*?[\s\S]*?class=\"(?<class>.*?)\"[\s\S]*?style=\"(?<style>.*?)\"[.\s\S]*?>?|<[A-Z,a-z,0-9]*?[\s\S]*?style=\"(?<style1>.*?)\"[\s\S]*?class=\"(?<class1>.*?)\"[.\s\S]*?>?/i';
    
    $int_return = preg_match_all($patten_information, $str, $array_information);
    
   
    if($int_return === false){
       
        return false;
    }
    
  
    if($int_return == 0){
       
        return false;
    }
    
    $file = fopen('kk.css','wb+');
    
    $int_count = count($array_information['style1']);
    for($i = 0; $i<$int_count;$i++){
       
            if($array_information['style'][$i]!=''&&$array_information['class'][$i]!=''){ 
        $strr = '.'.$array_information['class'][$i].'{'.$array_information['style'][$i].'}'.PHP_EOL;
    
        fwrite($file, $strr);}
        
        
        
    }
    $int_count = count($array_information['style1']);
    for($i = 0; $i<$int_count;$i++){
        if($array_information['style1'][$i]!=''&&$array_information['class1'][$i]!=''){ 
        $strr = '.'.$array_information['class1'][$i].'{'.$array_information['style1'][$i].'}'.PHP_EOL;
    
        fwrite($file, $strr);}
    
    }
    fclose($file);
}