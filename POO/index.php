<?php

require_once 'class.operaciones.php';

$sumar = new operaciones ();
$total = $sumar->suma(2 , 5);

echo $total;



?>