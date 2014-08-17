<?php

/**
 * 
 * ISSET Determina si una variable está definida y no es NULL.
 * 
 *  */

/*EJEMPLO SIMPLE DE ISSET*/

//capturaremos el valor seleccionado en el select 
//name del select es = combo_select

//verificamos si la variable existe antes 
if(isset($_GET['combo_select']))//si existe la variable entonces captura el dato
{
    $dato = $_GET['combo_select'];
    echo "<br>EL VALOR  ES ($dato)<br>";
    unset($dato);//elimina la variable, limpia memoria  
}
else if(!isset ($_GET['combo_select'])) // el signo "!" significa "not" entonces el if dice "si no existe" la variable
{
    echo "<BR>USTED NECESITA ELEGIR UN VALOR ...<BR>";
}

/*COMO TE DAS CUENTA AL PRINCIPIO TE SALE EL MENSAJE "USTED NECESITA ELEGIR UN VALOR"
    ES POR EL HECHO DE QUE EL METODO GET NO SE HA EJECUTADO 
 * SELECCIONA UN NUMERO EJECUTA LA VARIABLE Y VERAS COMO CAMBIA LA CONDICION

 *  */


?>


<html>
    <head>
        
    </head>
    <body>
        <form action="index.php" method="get">
            <select name="combo_select">
                <option value="#" selected>Seleccione un valor</option>
                <?php
                    for($i=0; $i<15 ; $i++)
                        echo " <option value='$i'>$i</option>";
                ?>
            </select>
            <input type="submit" value="Enviar valor" name="cmd">
        </form>
    </body>
</html>