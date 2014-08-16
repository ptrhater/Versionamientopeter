<?php

/*
 * AHORA YA QUE VISTES LOS ARREGLOS UNIDIMENCIONALES 
 * NOS PASAREMOS A LOS ARREGLOS MULTIPLE DIMENSIONES 
 * 
 * 
 * UN ARREGLO SE FORMA POR MEDIO DE UN "KEY" Y  UN "VALUE" 
 * A ESO SE LE CONOCE COMO ARRAY 
 * 
 * UN VECTOR SOLO NECESITA UN "VALUE"
 * 
 * **/

/*EJEMPLO DE UN VECTOR
 * 
 * CODIGO DEVUELVE UN VECTOR DE 5 ELEMENTOS
 *  */
$vector[5] = null;
for($i = 0 ; $i < 5 ; $i++)
    $vector[$i] = ($i+1);

//imprime el vector con la funcion implode 
// lo que hace es crear una cadena a partir de un vector o algun arreglo
// el glue o pegamento es "->" , en la cual puede ser cualquier cosa
echo implode("->", $vector);
echo "<br><br>" . implode(",", $vector);
//FIN DEL CODIGO VECTOR UNIDIMENSIONAL

/*
 * EJEMPLO DE UN ARRAY 
 * **/
$array = array(
    0=>"hola",
    1=>"mundo"
);

echo "<br><br>IMPRIMIR UN ARRAY CON FUNCION PRINT ... <pre>";
print_r($array);
echo "</pre><br><br>";


/*
 * ARRAYS DE MULTIPLES DIMENSIONES
 * LOS ARRAYS DE MULTIPLES DIMENSIONES SOLO SON ARRAYS DENTRO DE OTRO ARRAYS 
 * O ARRAYS ASOCIADOS
 * POR EJEMPLO:
 * **/

//array multidimensional combinado con array unidimensional
$dim_array = array(
    "Usuario"=> array(
        "Nombre"=> "Rolando ",
        "Apellido"=> "Arriaza",
        "Edad"=>24
    ),
    "Categoria"=>array(
        "estado"=>true,
        "Id"=> "001x566ff",
        "Skill"=> null
    ),
      
);

//COMO CARAJOS SE RECORRE ESTE ARRAY ??
//FACIL ESTE ARRAY POR TENER DOS DIMENSIONES SE RECORRERA
//CON COMPLEJIDAD O(N^2)

foreach ($dim_array as $key=>$value)//primer foreach complejidad o(n)
{
    foreach($value as $k=>$v)//segundo foreach complejidad o(n^2)
    {
        echo "<br> $k : $v";//valores que deseamos mostrar
    }
}



?>