<?php

class ARCHIVO
{
    


    private $dir = null;
    private $att_name = null;
    private $arreglo = null;
    
    function __construct($directorio = null)
    {

        if ($directorio != null) {
            $this->dir = dirname(__FILE__) . "/$directorio";
        } else {
            $this->dir = dirname(__FILE__) . "/images";
        }

        if(!file_exists($this->dir))
        {
            $priv = 777;
            mkdir($this->dir , $priv);
        }
    }
    
    function __destruct()
    {
      
    }
    
    public function SetFileName($att_name)
    {
        $this->att_name = $att_name;
    }
    
    public function UploadFile($new_name = "")
    {
        if(is_uploaded_file($_FILES[$this->att_name]['tmp_name'])){
            
            $name = "";
            $archivo=$_FILES[$this->att_name]['name']; 
            
            if ($new_name == "") {
                $name_ = pathinfo($archivo, PATHINFO_FILENAME);
            } else {
                $name_ = $new_name;
            }

            $extension = pathinfo($archivo,PATHINFO_EXTENSION); 
            $random = substr(md5(time().rand()),2,8);
            $name = base64_encode("$name_$random") . ".$extension"; 
            
            if (move_uploaded_file($_FILES[$this->att_name]['tmp_name'], $this->dir . "/$name")) {
                
                $this->arreglo = array(
                    "nombre"=> $archivo,
                    "tipo"=>$_FILES[$this->att_name]['type'],
                    "extencion"=>$extension,
                    "encriptacion"=>$name,
                    "dimension"=>$_FILES[$this->att_name]['size'] / 1024
                );
                
                return true;
            } else {
                $this->showError();
                return false;
            }
        }
        else
        {
            $this->showError();
            return false;
        }
    }
    
    public function GetArray()
    {
        return $this->arreglo;
    }
    
    
    private function showError()
    {
        $err = $file[$this->att_name]['error'];
        echo "<br><b>Hubo un error inesperado ($err)</b>";
    }
    
    public function FindFiles($dir = null)
    {
        $raiz = null;
        $arreglo_file = array();
        
        if($dir == null)
            $raiz= $this->dir;
        else
            $raiz = $dir;
        
        $directorio = opendir($raiz);
        while ($archivo = readdir($directorio))
        {
            if(!is_dir($archivo)) 
                array_push ($arreglo_file, $archivo);
        }
        
        return $arreglo_file;
    }
    

}

?>