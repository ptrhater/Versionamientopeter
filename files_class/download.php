<?php

$enlace = "Imagenes/" . $_REQUEST['id']; 
echo $enlace;
header ("Content-Disposition: attachment; filename="."presentacion.pdf"." "); 
header ("Content-Type: application/octet-stream");
header ("Content-Length: ".filesize($enlace));
readfile($enlace);

?>