<?php
    /*
        Calculadora simple: Crea una página PHP que permita sumar, restar,
        multiplicar y dividir dos números ingresados por el usuario mediante
        un formulario HTML.
    */

    function suma($a, $b){
        $suma = $a + $b; 
        return $suma;
    }

    function resta($a, $b){
        $resta = $a - $b;
        return $resta;
    }

    function division($a, $b){
        $division = $a / $b;
        return $division;
    }

    function multiplicacion($a, $b){
        $multiplicacion = $a * $b;
        return $multiplicacion;
    }

    ###########################################################################
    ###########################################################################
    #      $GET para recuperar los datos enviados con el formulario HTML      #
    ###########################################################################
    ###########################################################################
    $n1 = isset($_GET['n1']) ? $_GET['n1'] : null;
    $n2 = isset($_GET['n2']) ? $_GET['n2'] : null;
    $op = isset($_GET['op']) ? $_GET['op'] : null;

    switch($op){
        case '+':
            echo "$n1 $op $n2 = " . suma($n1, $n2) . "<br>";
            break;

        case '-':
            echo "$n1 $op $n2 = " . resta($n1, $n2) . "<br>";
            break;

        case '*':
            echo "$n1 $op $n2 = " . multiplicacion($n1, $n2) . "<br>";
            break;

        case '/':
            echo "$n1 $op $n2 = " . division($n1, $n2) . "<br>";
            break;
        
        default:
            echo "Operacion [$op] no valida.<br>";
        
    }



?>
