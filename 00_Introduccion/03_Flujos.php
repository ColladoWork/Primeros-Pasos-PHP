<?php
$my_string = "Hola esto es una cadena de texto";
$my_int = 7;
$my_double = 9.46;
$my_bool = true;

$my_array = [$my_string, $my_int, $my_double, $my_bool];
$my_dict = array("string" => $my_string, "int" => $my_int, "double" => $my_double, "bool" => $my_bool);

#############
# BUCLE FOR #
#############

// Metodo 1) Igual que en C++
for($index = 0; $index < 10; $index++){
    echo $index . "\n";
}

// Metodo 2) <foreach> es una manera mas limpia de declararlo
foreach($my_array as $my_item){
    echo $my_item . "\n";
}

###############
# BUCLE WHILE #
###############

$index = 0;
while($index < sizeof($my_array)){
    echo "> $my_array[$index]\n";

    $index++;
}

#################
# ESTRUCTURA IF #
#################

if($my_int == 11 && $my_string = "Hola"){# Operador AND
    echo "El valor es 11\n";
}elseif($my_int == 12 || $my_string= "Hola"){# Operador OR
    echo "El valor es 12\n";
}else{
    echo "El valor no es 11\n";
}



