<?php
// Escribe un fichero en un array. En este ejemplo iremos a través de HTTP para
// obtener el código fuente HTML de una URL.
$líneas = file('http://www.example.com/');

// Recorre nuestro array, muestra el código fuente HTML como tal y muestra tambíen los números de línea.
foreach ($líneas as $num_línea => $línea) {
    echo "Línea #<b>{$num_línea}</b> : " . htmlspecialchars($línea) . "<br />\n";
}

// Otro ejemplo, vamos a escribir una página web en una cadena. Vea también file_get_contents().
$html = implode('', file('http://www.example.com/'));

// Usando el parámetro opcional banderas a partir de PHP 5
$recortes = file('fichero.txt', FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
?>