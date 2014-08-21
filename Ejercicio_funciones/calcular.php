<?php
 function operaciones($n1 , $n2 , $operacion)
 {
     $_GET['combo'] = $operacion;
     $_GET['n1'] = $n1;
     $_GET['n2'] = $n2;
     $total = "";
  
             
     if ($operacion == "suma")
     {
         $total = $n1 + $n2;   
     }
     elseif ($operacion == "resta")
     {
         $total = $n1 - $n2;
     }
     elseif ($operacion == "multiplicacion")
     {
         $total = $n1 * $n2;
     }
     elseif ($operacion == "division")
     {
         $total = $n1 / $n2;
     }
     
     return $total;
          
 }
 
  if ( $_GET['combo'] == "elevar")
     {
       echo pow($_GET['n1'],2);   
     }
     elseif ($_GET['combo'] == "raiz") 
     {
       echo sqrt($_GET['n1']);  
     
       
     }
 
 $a = operaciones($_GET['n1'], $_GET['n2'], $_GET['combo']);
         echo $a ; 
         

?>