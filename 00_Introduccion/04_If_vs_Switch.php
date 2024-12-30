<?php

$fruta = "naranja";

######
# IF #
######
if($fruta == "manzana"){
    echo "MANZANA\n";
}elseif($fruta == "pera"){
    echo "PERA\n";
}elseif($fruta == "mango"){
    echo "MANGO\n";
}else{
    echo "La fruta <$fruta> no es ni MANZANA, PERA o MANGO\n";
}


##########
# SWITCH #
##########

switch($fruta){
    case "manzana":
        echo "MANZANA -> SWITCH\n";
        break;
    
    case "pera":
        echo "PERA -> SWITCH\n";
        break;
    
    case "mango":
        echo "MANGO -> SWITCH\n";
        break;
    
    default:
        echo "La fruta <$fruta> no es ni MANZANA, PERA o MANGO -> SWITCH.\n";
}
        
