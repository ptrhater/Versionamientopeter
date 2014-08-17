
<html> <center><head>Prueba de arreglos multidimensionales</head></center>
    <form method="post" action="#">
        <body>
        <center><br><br>
            Formulario <br><br>
            <pre>Registro</pre><br>
            <input type="text" name="nombre" placeholder="Introdusca Su 1° Nombre" size="30"><br><br>
            <input type="text" name="apellido" placeholder="Introdusca Su 1° Apellido" size="30"><br><br>           
            <select name="combo_sexo">               
                <option value="Ingresesusexo" disabled selected>Ingrese su sexo</option>
                <option value="masculino" >Masculino</option>
                <option value="femenino" >Femenino</option>
            </select><br><br>
            <pre>Usuario</pre><br>
            Ingrese Su Fecha De Nacimiento<br>
            <input type="date" name="fecha"><br><br>
            <input type="text" name="usuario" placeholder="Ingrese Su Usuario" size="30"><br><br>
            <input type="password" name="pass" placeholder="Ingrese Su Contraseña" size="30"><br><br>
            <input type="radio" name="radio1">Activo
            <input type="radio" name="radio2">Inactivo<br><br>            
            <pre>Provincia</pre><br>            
            <select name="combo_pais">
                <option value="ingresesupais" disabled selected>Ingrese Su Pais</option>
                <option value="guatemala" >Guatemala</option>
                <option value="nicaragua" >Nicaragua</option>
                <option value="honduras" >Honduras</option>
                <option value="costarica" >Costa Rica</option>
                <option value="elsalvador" >El Salvador</option>
                <option value="panama" >Panama</option>
                <option value="belice" >Belice</option>
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
if(isset($_REQUEST['pass'])){
$dim_array = array(     
     "No_mostrar"   => array(
     "Pass"         => $_REQUEST['pass'],
     "Fecha"        => $_REQUEST['fecha'],
     "Estado_activo_inactivo"  => $_REQUEST['radio1'],['radio2'],
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
            echo $v;
            
        }
             
         
    }
}
       
   

?>