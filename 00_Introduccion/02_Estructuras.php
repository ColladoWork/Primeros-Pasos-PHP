<?php
$my_string = "Hola esto es una cadena de texto";
$my_int = 7;
$my_double = 9.46;
$my_bool = true;

##########
# LISTAS #
##########

$my_array = [$my_string, $my_int, $my_double, $my_bool];
echo "<".gettype($my_array) . ">\n";# Las listas son Arrays.

echo $my_array[0];# Primera posicion.
echo $my_array[3];

// -> Añadir elementos a la lista.
$new_int = 46;
array_push($my_array, $new_int);

echo $my_array; # NO SIRVE PARA MOSTRAR ARRAYS !

print_r($my_array); # COMANDO PARA MOSTRAR EL CONTENIDO DE LAS LISTAS.
echo $my_array[4] . "\n";

################
# DICCIONARIOS #
################
/*
    Clave => Valor
*/

$my_dict = array("string" => $my_string, "int" => $my_int, "double" => $my_double, "bool" => $my_bool);
echo "<".gettype($my_dict) . ">\n";
print_r($my_dict);
echo $my_dict["int"] . "\n";# Acceder al valor de una clave.
echo $my_dict["string"] . "\n";


# SET # 
/*
    Solo incluyen elementos unicos. No existen como tal en PHP pero hay un comando 
    que permite eliminar elementos repetidos en un array y crear asi un SET.
*/

array_push($my_array, "Jesus");
array_push($my_array, "Jesus");
print_r($my_array);

$my_set = array_unique($my_array);
echo "> SET ";
print_r($my_set);

##########
# CLASES #
##########

class MyClass{
    public $name;
    public $age;

    // Constructor para inicializar la clase.
    function __construct($name, $age){
        // Asignamos a los valores publicos sus respectivos valores.
        $this->name = $name;
        $this->age = $age;
    }
}

$my_class = new MyClass("Jesús", 25);
print_r($my_class);
echo $my_class->name ."\n";

// -> Actualizacion de elementos de una clase.
$my_class->name = "Jesús Collado Fernández";
echo $my_class->name ."\n";

echo gettype($my_class) . "\n";

#############
# FUNCIONES #
#############

function print_number($my_number){
    echo "$my_number \n";
}

print_number(4);
print_number(6);
