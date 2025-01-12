<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tablas Multiplicacion</title>
    <!-- Declaramos los estilos de las tablas en la cabecera del HTML -->
    <style>

        /* ESTILO GENERAL PARA TODAS LAS TABLAS */
        table{
            border: 1px solid black;/*Anchura de la linea*/
            border-collapse: collapse;/* Estilo de tabla */
            width: 14%;/* Anchura de la tabla */
        }

        /*
            Declaramos <th> y <td> fuera de <table> para poder modificar estos estilos
            en todas las tablas sin necesidad de ir una a una duplicando codigo.    
        */
        th, td {
            border: 1px solid black;
            padding: 10px;/* Espacio entre el contenido de la celda y sus bordes */
            text-align: center;
        }

        /* ESTILO PARA LA TABLA AZUL */
        .tabla-azul{
            background-color: #3291d3;
        }

        /* ESTILO PARA LA TABLA ROJA */
        .tabla-roja{
            background-color: #db3040;
        }
    
    
    </style>
    
</head>
<body>
    <h1>Tablas de multiplicar del 1 al 10</h1>
    
    <table class="tabla-azul">
        <?php
            # Creacion Dinamica de Tablas de multiplicar #    
            for($i = 1; $i <= 6; $i++){#Creacion de filas
                echo "<tr> <th colspan='2'> $i </th> </tr>"; # Cabecera de la tabla
                # colspan indica cuantas columnas debe abarcar la cabecera en caso de querer una solo para toda la tabla.

                for($j = 1; $j <= 10; $j++){
                    $mult = $i * $j;
                    echo "<tr> <td>$i * $j</td> <td>$mult</td> </tr>";
                }
                
            }
        ?>
    </table>
            
    <table class="tabla-roja">
        <?php
            echo "<br>";
            for($i = 7; $i <= 10; $i++){
                echo "<tr> <th colspan='2'> $i </th> </tr>";

                for($j = 1; $j <= 10; $j++){
                    $mult = $i * $j;
                    echo "<tr> <td>$i * $j</td> <td>$mult</td> </tr>";
                }
            }
        ?>
    </table>
    
    
</body>
</html>
