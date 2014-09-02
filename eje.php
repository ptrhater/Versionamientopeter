<?php
// Escribe un fichero en un array. En este ejemplo iremos a trav�s de HTTP para
// obtener el c�digo fuente HTML de una URL.
$l�neas = file('http://www.example.com/');

// Recorre nuestro array, muestra el c�digo fuente HTML como tal y muestra tamb�en los n�meros de l�nea.
foreach ($l�neas as $num_l�nea => $l�nea) {
    echo "L�nea #<b>{$num_l�nea}</b> : " . htmlspecialchars($l�nea) . "<br />\n";
}

// Otro ejemplo, vamos a escribir una p�gina web en una cadena. Vea tambi�n file_get_contents().
$html = implode('', file('http://www.example.com/'));

// Usando el par�metro opcional banderas a partir de PHP 5
$recortes = file('fichero.txt', FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
?>