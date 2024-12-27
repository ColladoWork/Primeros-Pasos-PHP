<?php
$my_string = "Hola esto es una cadena de texto" . "\n"; //Concatenamos strings.
$my_other_string = "Otro string";

echo $my_string;
echo $my_other_string . "\n";

// OBTENER TIPO DE VARIABLE
echo "<".gettype($my_string).">\n";


$my_int = 7;
$my_int += 4;
echo $my_int . "\n"; 
echo "<".gettype($my_int).">\n";

$my_double = 9.46;
echo "<".gettype($my_double).">\n";# LOS NUMEROS CON COMA FLOTANTE SON DE TIPO DOUBLE, NO FLOAT.

echo $my_int + $my_double ."\n";

$my_bool = true;
$my_other_bool = false;
echo $my_bool . "\n";
echo $my_other_bool . "\n";
/*
    BOOLEANOS GUARDAN VALOR NUMERIO. 
    0: FALSE -> Aunque si mostramos por pantalla el valor, no mostrará nada.
    1: TRUE
*/
echo "<".gettype($my_bool).">\n";


#INTERPOLACION#
echo "El valor de mi integer es $my_int y el de mi booleano es $my_bool.\n";

#CONSTANTES#

const MY_CONSTANT = "Valor de la constante";

echo MY_CONSTANT . "\n";
