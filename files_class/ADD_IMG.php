<?php

      
  if(isset($_FILES['archivo1'])){
      
  include_once 'class.archivo.php';   
  $files = new ARCHIVO("Imagenes");
  $files->SetFileName("archivo1");
  $files->UploadFile();
   /* $arreglo = array();

    $foto = "";
    $peso = "";
    $tipo = "";
    if(is_uploaded_file($_FILES['archivo1']['tmp_name']))
    {
        //de aca esta para guardar los datos en el arreglo ... 
        $foto = $_FILES['archivo1']['name']; 
        $tipo = $_FILES['archivo1']['type'];
        $peso = $_FILES['archivo1']['size'] / 1024;
        
        $arreglo = array(
            "nombre"=> $foto,
            "formato"=>$tipo,
            "peso"=>$peso . " kb"
        );
        
        //aca guardaremos la imagen encriptada para que no choque en cuestion de querer agregar otra
        //que se llame igual
        $extension = pathinfo($foto,PATHINFO_EXTENSION); //obtiene la extencion del archivo
        $name = pathinfo($foto , PATHINFO_FILENAME); //obtiene el nombre del archivo
        $random = substr(md5(time().rand()),2,8);//codificamos un nuevo nombre para que no se sobreescriba la imagen
        //substr = subcadena (ver manual)
        //md5 = encriptacion de 20 bits formato MD5
        //funcion time() ->obtiene el tiempo .rand() forma aleatoria
        $new_name = base64_encode("$name$random") . ".$extension"; //codificamos hoy en base 64 los datos
        $upload = move_uploaded_file($_FILES['archivo1']['tmp_name'],$directorio. "/$new_name" );
        if($upload)
        {
            echo "<br>Archivo guardado con exito";
        }else
        {
            echo "<br>Ubo un error al guardar";
        }
        
        echo "<PRE>";
        print_r($arreglo);
        echo "</PRE>";
        
    }*/
 }
?>