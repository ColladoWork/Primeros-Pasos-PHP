<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tablas Multiplicacion</title>
    <!-- Declaramos los estilos de las tablas en la cabecera del HTML -->
    <style>

        header{
            text-align: center;
        }

        /* ESTILO GENERAL PARA TODAS LAS TABLAS */
        table{
            border-collapse: collapse;/* Estilo de tabla */
            width: 100%;/* Anchura de la tabla */
        }

        /*
            Declaramos <th> y <td> fuera de <table> para poder modificar estos estilos
            en todas las tablas sin necesidad de ir una a una duplicando codigo.    
        */
        th, td {
            border: 2px solid black;/* Anchura de las lineas */
            padding: 5px;/* Espacio entre el contenido de la celda y sus bordes */
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

        .container{
            display: grid;/* Definimos grid para crear la cuadricula */
            grid-template-columns: auto auto auto auto auto; /* Indicamos cuantas columnas tiene la cuadricula */
            row-gap: 14px;/* Espacio entre las filas de la cuadricula */
            column-gap: 14px;/* Esapcio entre las columnas de la cuadricula */
            
        }
    
    
    </style>
    
</head>
<body>
    <header>
        <h1>Tablas de multiplicar del 1 al 10</h1>
    </header>
    
    <div class='container'>
        <div>
            <table class="tabla-azul">
                <?php
                    echo "<tr> <th colspan='2'> 1 </th> </tr>";
                    for($j = 1; $j <= 10; $j++){
                        $mult = 1 * $j;
                        echo "<tr> <td>1 * $j</td> <td>$mult</td> </tr>";
                    } 
                ?>
            </table>
        </div>

        <div>
            <table class="tabla-azul">
                <?php
                    echo "<tr> <th colspan='2'> 2 </th> </tr>";
                    for($j = 1; $j <= 10; $j++){
                        $mult = 2 * $j;
                        echo "<tr> <td>2 * $j</td> <td>$mult</td> </tr>";
                    } 
                ?>
            </table>
        </div>

        <div>
            <table class="tabla-azul">
                <?php
                    echo "<tr> <th colspan='2'> 3 </th> </tr>";
                    for($j = 1; $j <= 10; $j++){
                        $mult = 3 * $j;
                        echo "<tr> <td>3 * $j</td> <td>$mult</td> </tr>";
                    } 
                ?>
            </table>
        </div>

        <div>
            <table class="tabla-azul">
                <?php
                    echo "<tr> <th colspan='2'> 4 </th> </tr>";
                    for($j = 1; $j <= 10; $j++){
                        $mult = 4 * $j;
                        echo "<tr> <td>4 * $j</td> <td>$mult</td> </tr>";
                    } 
                ?>
            </table>
        </div>

        <div>
            <table class="tabla-azul">
                <?php
                    echo "<tr> <th colspan='2'> 5 </th> </tr>";
                    for($j = 1; $j <= 10; $j++){
                        $mult = 5 * $j;
                        echo "<tr> <td>5 * $j</td> <td>$mult</td> </tr>";
                    } 
                ?>
            </table>
        </div>

        <div>
            <table class="tabla-roja">
                <?php
                    echo "<tr> <th colspan='2'> 6 </th> </tr>"; # Cabecera de la tabla 
                    for($j = 1; $j <= 10; $j++){
                        $mult = 6 * $j;
                        echo "<tr> <td>6 * $j</td> <td>$mult</td> </tr>";
                    }
                ?>
            </table>
        </div>
        
        <div>
            <table class="tabla-roja">
                <?php
                    echo "<tr> <th colspan='2'> 7 </th> </tr>"; # Cabecera de la tabla 
                    for($j = 1; $j <= 10; $j++){
                        $mult = 7 * $j;
                        echo "<tr> <td>7 * $j</td> <td>$mult</td> </tr>";
                    }
                ?>
            </table>
        </div>

        <div>
            <table class="tabla-roja">
                <?php
                    echo "<tr> <th colspan='2'> 8 </th> </tr>"; # Cabecera de la tabla 
                    for($j = 1; $j <= 10; $j++){
                        $mult = 8 * $j;
                        echo "<tr> <td>8 * $j</td> <td>$mult</td> </tr>";
                    }
                ?>
            </table>
        </div>

        <div>
            <table class="tabla-azul">
                <?php
                    echo "<tr> <th colspan='2'> 9 </th> </tr>"; # Cabecera de la tabla 
                    for($j = 1; $j <= 10; $j++){
                        $mult = 9 * $j;
                        echo "<tr> <td>9 * $j</td> <td>$mult</td> </tr>";
                    }
                ?>
            </table>
        </div>

        <div>
            <table class="tabla-azul">
                <?php
                    echo "<tr> <th colspan='2'> 10 </th> </tr>"; # Cabecera de la tabla 
                    for($j = 1; $j <= 10; $j++){
                        $mult = 10 * $j;
                        echo "<tr> <td>10 * $j</td> <td>$mult</td> </tr>";
                    }
                ?>
            </table>
        </div>
    </div>

        
    
</body>
</html>
