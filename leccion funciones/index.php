<?php

//funciones en php 

/**
 * LAS FUNCIONES PHP SIRVEN PARA LLAMAR FRAGMENTOS DE CODIGO EN LA CUAL
 * HACE UNA FUNCION EN ESPECIFICO, GRACIAS A ELLO NOS AHORRAMOS
 *  REPETIR CODIGO , SATAURAR ESPACIO DE TRABAJO , SATURAR RESPUESTAS Y EVITAR AMBIGUEDAD
 * LAS FUNCIONES SON TAN FACILES COMO DECLARAR SU SENTENCIA
 * 
 *  */

/*PRIMERA FUNCION (QUE NO DEVUELVE NINGUN VALOR)*/

//funcion basica no devuelve ningun valor por lo tanto se le conoce como preocedimiento
function suma()
{
    $a= 1;
    $b= 1;
    $suma = $a + $b;
}

/*FUNCION BASICA CON APRAMETROS*/

function suma_($a ,  $b)
{
    $c = $a ;
    $d = $b;
    $suma = $c + $d;
}



/*FUNCION BASICA CON PARAMETROS OPCIONALES*/

function suma__($a=0 , $b=0)
{
    $c = $a ;
    $d = $b;
    $suma = $c + $d;
}

suma__();//como su parametro inicial es $a=0 , $b=0 entonces el resultado sera "0"
suma__(2,2); //le damos valores y su suma sera 4



?>