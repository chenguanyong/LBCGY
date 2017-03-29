<?php
class ReplaceHtml {
    const  HEADER = "/<header>[.\s\S]*?<\\/header>/i";
    const  FOOTER = "/<footer>[.\s\S]*?<\\/footer>/i";
    private  $file;
    private  $objpath;//主目录
    private  $mbpath;//次目录
    private  $mb_content;

    public function __construct($path, $path1) {
        
        if(is_file($path) ===false || is_file($path1)===false){
            //如果不是可用的文件抛出异常
            throw  new Exception();
        }
        $this->mbpath = $path1;
        $this->objpath = $path;
        $this->file =@fopen($this->objpath, 'rb+');
        if($this ->file === false){throw  new Exception();}
        $this->mb_content =$this -> read($this->objpath);
        
    }
    //读文件
    private function read($mbpath){
        $txt = "";
        $file = fopen($mbpath, 'rb');
        if($file ===false){throw  new Exception();}
        $txt = fread($file, filesize($mbpath));
        if($txt === false) {throw new Exception();}
        fclose($file);  

      return $txt;  
    }
    //写文件
    private function write($string){
       $handle =  $this->file;

           ftruncate($handle,0);
           $int_count = fwrite( $handle, $string);
           if($int_count === false){
               throw new Exception();
           }

        return $int_count;
    }
    //关闭文件句柄
    public function close(){
        
     fclose($this->file);
        
    }
    public function replaceHeader(){
        
        $re = $this->replace(self::HEADER) ;
        if($re ===false){
            return false;
        }else{return true;}   
        
    }
    public function replaceFooter(){
        
     $re = $this->replace(self::FOOTER) ;
     if($re ===false){
         return false;
     }else{return true;}
        
    }
    private function replace($str){
        $txt_m = "";
        try{
        $txt_m = self::read($this->mbpath);
        }catch (Exception $r){
                    
            return false;
            
        }
        $txt_m =trim($txt_m);
        $new_str = preg_replace($str, $txt_m, $this->mb_content);
        if($new_str === false){
            return false;
        }
        try{
        $this->write($new_str);
        }catch (Exception $t){
            
            return false;
        }
        
        return true;
    }
    //替换
    public function replace_txt($paten){
        
        $paten = trim($paten);
        $txt = "/<".$paten.">"."[.\s\S]*?"."<\\/".$paten.">/i";
        
        $re = $this->replace($txt);
        if($re ===false ){
            
            return false;
        }else{return true;
        }
                
    }
    //设置目标路径
    public function setmbpath($strpath){
        
        if(is_file($strpath) ===false ){
            
            return false;
        }else{
            
            $this->mbpath = $strpath;
        }
    }
    //设置主标路径
    public function setObjpath($strpath){
    
        if(is_file($strpath) ===false ){
    
            return false;
        }else{
    
            $this->objpath = $strpath;
        }
    }
    
}

$f = new ReplaceHtml("G:\\t\\r\\htdocsj\\tt\\s\jj\\home\home.html", "G:\\t\\r\\htdocsj\\tt\\s\jj\\html\ll\muban.html");

$f->replaceHeader();
$f->close();

