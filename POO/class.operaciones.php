<?php

class operaciones 
{
    
    private $valor1 = 0;
    private $valor2 = 0;
    
    function __construct($v1=0 , $v2=0)
    {
        $this->valor1 = $v1;
        $this->valor2 = $v2;
        
    }
    function __destruct()
    {
        
    }
    
    public function suma ($v1=0 , $v2=0)            
    {
          if($v1 == 0 && $v2 == 0)
          {
              return $this->valor1 + $this->valor2;
          }
          else
          {
              return $v1 + $v2;
          }         

    }
}

?>