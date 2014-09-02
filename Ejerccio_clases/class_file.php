<?php
var_dump($_FILES);
    $dir = dirname(__FILE__) . "/Imagenes" ;

if (!file_exists($dir))
{
    $mode = 777;
    mkdir($dir , $mode);
}

class upload 
{
    
    function __construct()
    {
        if (isset($_FILES['img']))
           
            {
        
        
            $this->arreglo = array ();
    
            $this->tipo = "";
            $this->size = "";
            $this->name = "";
            }
            
            
            if(is_uploaded_file($_FILES['img']['tmp_name']))
            {
                
            $this->tipo = $_FILES['img']['type'];
            $this->size = $_FILES['img']['size'] / 1024 ;
            $this->name = $_FILES['img']['name'];
            
            
                    
                  echo $this->tipo ;
            }
    
                    
          
                
                     
            
  
        else 
        {
            echo "Error al subir";
        }
    }
}
        

    
    function __destruct()
    {
        
    }
    
 
?>