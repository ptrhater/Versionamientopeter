
<?php
    include 'class.archivo.php';
    $file = new ARCHIVO("Imagenes");
    $arr = $file->FindFiles();
    echo"<PRE>";
    print_r($arr);
     echo"</PRE>";
     
     $i=0;
     foreach($arr as $key=>$value)
     {
         echo "<br><a href='download.php?id=$value'>Imagen $i </a>";
         $i++;
     }
    
     
?>


<html>
    <body>
        <form action="ADD_IMG.php" method="post" enctype="multipart/form-data">
            <table border="0">
                <tr>
                    <td>
                        <b>PROGRAMA PARA SUBIR IMAGENES ....</b>
                    </td>
                </tr>
                <tr><td></td></tr>
                <tr>
                    <td>
                        <b>Imagen 1:</b>
                    </td>
                     <td>
                         <input type="file" id="archivo1" name="archivo1" value="" />
                    </td>
                </tr>
                 <tr><td></td></tr>
                 <tr><td></td></tr>
                <tr>
                    <td>
                    </td>
                     <td>
                         <input type="submit" name="enviar" value="GuardarImagen" />
                    </td>
                </tr>
            </table>
        </form>
    </body>
</html>