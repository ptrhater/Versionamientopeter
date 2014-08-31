

<?php

if(isset($_REQUEST['archivito']))
{
    $_FILES['archivito'];
    echo "entro";
}
//SORT: SON FUNCIONES DE ORDENAMIENTO QUE PHP TRAE POR DEFECTO 
/**
 * 
 * LOS TIPOS DE SORT MAS FRECUENTE SON 
 * 
 * sort(array()) -> devuelve un arreglo en orden ascendente
 * rsort(array()) -> devuelve un arreglo en orden descendente
 * asort(array()) -> devuelve un arreglo en orden ascendente deacuerdo al "value" 
 * ejemplo array("roli"=>"guapo"); el value es "guapo"
 * arsort(array()) ->los mismos patrones solo que de forma descendente
 * 
 */


//sort simple devuelve de forma ascendente marcas de carros
/*$cars=array("Volvo","BMW","Toyota");
sort($cars);

echo "<PRE>";
print_r($cars);
echo "</PRE><br><br>";

rsort($cars);
echo "<PRE>";
print_r($cars);
echo "</PRE><br><br>";


$arreglo = array( "numero"=> 10 , "codigo"=>5 , "nota" => 8);
asort($arreglo);
//ascendente
echo "<PRE>";
print_r($arreglo);
echo "</PRE><br><br>";


arsort($arreglo);
//descendente
echo "<PRE>";
print_r($arreglo);
echo "</PRE><br><br>";*/



?>

<html>
    <head>
        
    </head>
    <body>
        <form>
            <input type="file" name="archivito" id="archivito" value="seleccionar " />
             <input type="submit" value="enviar" />
        </form>
       
    </body>
</html>

