<?php
 function operaciones($n1 , $n2 , $operacion)
 {
     //$_GET['combo'] = $operacion;//estas lineas estan demas
     //$_GET['n1'] = $n1;//estas lineas estan demas
     //$_GET['n2'] = $n2;//estas lineas estan demas
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
 
<<<<<<< HEAD
  if ( $_GET['combo'] == "elevar")
=======
 $a = operaciones($_GET['n1'], $_GET['n2'], $_GET['combo']); 
         echo $a ; 
         
     if ( $_GET['combo'] == "elevar")
>>>>>>> origin/master
     {
       echo pow($_GET['n1'],2);   //numero tiene que estar elevado a la "n" digamos 2^3
     }
     elseif ($_GET['combo'] == "raiz") 
     {
       echo sqrt($_GET['n1']);  
     
       
     }
 
 $a = operaciones($_GET['n1'], $_GET['n2'], $_GET['combo']);
         echo $a ; 
         

?>