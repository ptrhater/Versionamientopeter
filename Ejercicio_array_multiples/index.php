
<html> <center><head>Prueba de arreglos multidimensionales</head></center>
    <form method="get" action="#">
        <body>
        <center><br><br>
            Formulario <br><br>
            <pre>Registro</pre><br>
            <input type="text" name="nombre" placeholder="Introdusca Su 1° Nombre" size="30"><br><br>
            <input type="text" name="apellido" placeholder="Introdusca Su 1° Apellido" size="30"><br><br>           
            <select name="combo_sexo">               
                <option value="Ingresesusexo" disabled selected>Ingrese su sexo</option>
                <option value="Masculino" >Masculino</option>
                <option value="Femenino" >Femenino</option>                
            </select><br><br>
            <pre>Usuario</pre><br>
            Ingrese Su Fecha De Nacimiento<br>
            <input type="date" name="fecha"><br><br>
            <input type="text" name="usuario" placeholder="Ingrese Su Usuario" size="30"><br><br>
            <input type="password" name="pass" placeholder="Ingrese Su Contraseņa" size="30"><br><br>
            <input type="radio" name="radio1">Activo
            <input type="radio" name="radio2">Inactivo<br><br>            
            <pre>Provincia</pre><br>            
            <select name="combo_pais">
                <option value="ingresesupais" disabled selected>Ingrese Su Pais</option>
                <option value="Guatemala" >Guatemala</option>
                <option value="Nicaragua" >Nicaragua</option>
                <option value="Honduras" >Honduras</option>
                <option value="Costa rica" >Costa Rica</option>
                <option value="El salvador" >El Salvador</option>
                <option value="Panama" >Panama</option>
                <option value="Belice" >Belice</option>
            </select><br><br>
            Ingrese Su estado (Ej. El salvador, San Salvador.)<br>
            <input type="text" name="estado" placeholder="Ingrese Su Estado" size="30"><br><br>
            <input type="text" name="cpostal" placeholder="Ingrese Su Codigo Postal" size="30"><br><br>
            <input type="submit" value="Enviame!">            
        </center>
        </body>        
    </form>
</html>    
    
    
    
    
    
<?php
if(isset($_REQUEST['pass']))
    {    
$activo = null;
if(isset($_REQUEST['radio1']))
    
    $activo = "Activo";
else
    $activo = "No activo";

$dim_array = array(     
     "No_mostrar"   => array(
     "Pass"         => $_REQUEST['pass'],
     "Fecha"        => $_REQUEST['fecha'],
     "Estado"       => $activo,
     "Estado"       => $_REQUEST['estado'],
     "Codigo postal"=> $_REQUEST['cpostal']
        
         ),      
     "Mostrar"      => array(
     "Nombre"       => $_REQUEST['nombre'],
     "Apellido"     => $_REQUEST['apellido'],
     "Sexo"         => $_REQUEST['combo_sexo'],
     "Usuario"      => $_REQUEST['usuario'],
     "Pais"         => $_REQUEST['combo_pais']
        )
     );

    foreach ($dim_array as $key => $value)
    {
        foreach ($value as $k => $v) 
            {
            echo "<br>$k : $v";
            
        }
             
         
    }
}
       
   

?>