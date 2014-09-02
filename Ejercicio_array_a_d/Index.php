<?php

$nombres = array (
    
    "pedro"     => "jarquin",
    "jesus"     => "cruz",
    "manuel"    => "flores",
    "rolando"   => "arriaza",
    "saul"      => "palacios",
    "douglas"   => "george",
    "geral"     => "escobar",
    "abigail"   => "hernandez",
    "eduardo"   => "jose",
    "berenice"  => "muleto",
    "carlos"    => "jesus",    
    "leonidas"  => "sparta" 
);




  
  
    
?>

<html>
    <body>
        <table border ="1" style="width: 500px">
            <td><tr><th><pre> Nombres 
<?php
            sort($nombres);
            echo "<pre>";
            print_r ($nombres);
            echo "</pre><br><br>";
     

?>
                 
            </th></tr></td></pre>
        </table>
    </body>
</html>