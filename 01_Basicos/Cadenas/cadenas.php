<?php
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);

    $mi_cadena = $_GET['cadena'];
    $palabra = $_GET['palabra'];

    $longitud = 0; $palabras = 0; $ocurrencia = ""; $minusculas= ""; $mayusculas="";

    $longitud = strlen($mi_cadena); $palabras = str_word_count($mi_cadena);


    $ocurrencia = strpos($mi_cadena, $palabra);

    $minusculas = strtolower($mi_cadena); $mayusculas = strtoupper($mi_cadena);

    echo "La cadena <$mi_cadena> tiene una longitud total de $longitud caracteres y un total de $palabras palabras.<br>";
    echo "> $mayusculas<br>> $minusculas<br>";

    if ($ocurrencia != FALSE){
        echo '*La palabra <span style="font-size:large; color: blue;">' . $palabra ."</span> se encuentra en la posicion <$ocurrencia>.<br>";
    }else{
        echo "*La palabra no se encuentra en <$mi_cadena>.<br>";
    }

?>
