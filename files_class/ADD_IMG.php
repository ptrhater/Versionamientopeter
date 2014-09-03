<?php

      
  if(isset($_FILES['archivo1'])){
      
  include_once 'class.archivo.php';   
  
  $files = new ARCHIVO("imagenes_sexys");
  $files->SetFileName("archivo1");
  $files->UploadFile();
  
  $files1 = new ARCHIVO("imagenes_sexys");
  $files1->SetFileName("archivo2");
  $files1->UploadFile();
  
  echo "EXITO .... ";
  header("refresh:5;url=index.php");
  
  unset($files);
  unset($files1);
  
 }
?>