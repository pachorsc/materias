<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arrays</title>
    <link rel="stylesheet" href="style.css">
</head>
<style>
    table {
        border: solid 1px;
    }
</style>

<body>
    <table>
        <h1>Ej 1</h1>
        <?php

        for ($i = 0; $i < 15; $i++) {
            $arr[] =  mt_rand(1, 100);
        }
        echo "<tr> <td>Vector Original</td><td>";
        foreach ($arr as $key => $value) {
            echo "$value" . " ";
        }
        echo "</td></tr><tr><td>Mayor</td>";
        $may = $arr[0];
        foreach ($arr as $key => $value) {
            if ($value > $may) {
                $may = $value;
            }
        }
        echo "<td>$may</td>";


        echo "<td></tr><tr><td>Menor</td><td>";

        $men = $arr[0];
        foreach ($arr as $key => $value) {
            if ($value < $men) {
                $men = $value;
            }
        }
        echo "$men</td><tr><td>Vector inverso</td><td>";
        $cant = count($arr) - 1;
        for ($i = $cant; $i >= 0; $i--) {
            echo $arr[$i] . " ";
        }
        echo "$men</td><tr><td>Vector Ordenado</td><td>";
        sort($arr);
        foreach ($arr as $key => $value) {
            echo  "$value" . " ";
        }
        echo "</td></td><tr><td>Vector Pares</td><td>";
        foreach ($arr as $key => $value) {
            if ($value % 2 == 0) {
                echo  $value . " ";
            }
        }
        echo "</td>";
        echo "</td></td><tr><td>Vector Impartes</td><td>";
        foreach ($arr as $key => $value) {
            if ($value % 2 != 0) {
                echo  $value . " ";
            }
        }
        echo "</td>";
        ?>
    </table>

    <h1>EJ2</h1>
    <table>
        <?php
        $arr2 = ["WiiSports" => 829000, "Skyrim" => 600000, "GTAV" => 2000000, "MarioKart8" => 7043400, "Tetris" => 1000000, "RDR2" => 6300000, "Minecraft" => 30000000];

        echo "<tr><td>Video Juegos</td> <td>Ventas</td></tr>";
        foreach ($arr2 as $key => $value) {
            echo "<tr><td>$key</td><td>$value</td> </tr>";
        }


        ?>


    </table>
    <br>
    <table>
        <?php
        ksort($arr2);
        echo "<tr><td>Video Juegos</td> <td>Ventas</td></tr>";
        foreach ($arr2 as $key => $value) {
            echo "<tr><td>$key</td><td>$value</td> </tr>";
        }
        ?>
    </table>
    <br>
    <table>
        <?php
        asort($arr2);
        $may = 0;

        $men = next($arr2);

        $aux = array_reverse($arr2);
        echo "<tr><td>Video Juegos</td> <td>Ventas</td></tr>";
        foreach ($aux as $key => $value) {
            if ($value > $may) {
                $may = $value;
            }
            if ($value < $men) {
                $men = $value;
            }
            echo "<tr><td>$key</td><td>$value</td> </tr>";
        }
        ?>
        <h2>
            mas vendido <?php echo array_key_first($aux); ?>
        </h2>
        <h2>
            menos vendido <?php echo array_key_last($aux); ?>
        </h2>

    </table>
    <h1>EJ3</h1>

    <table border='1'>
        <tr>
            <th>Estudiante</th>
            <?php
                $elegido = "Benito";
                $estud = [
                    "Antonio" => ["Matemáticas" => 5, "Lengua" => 8.3, "Ciencias Naturales" => 9, "Geografía" => 7],
                    "Ana" => ["Matemáticas" => 8, "Lengua" => 7, "Ciencias Naturales" => 4.5, "Geografía" => 9],
                    "Benito" => ["Matemáticas" => 9, "Lengua" => 6.75, "Ciencias Naturales" => 9, "Geografía" => 3.1]
                ];
                $arrk = array_keys($estud["Benito"]);
                foreach ($arrk as $value) {
                    echo "<th> $value</th>";
                }
            ?>
            <th>Media</th>
        </tr>
        <?php
        

        foreach ($estud as $key => $value) {
            echo "<tr><td>$key</td>";
            $media = 0;
            foreach ($value as $key2 => $nota) {
                echo "<td>$nota</td>";
                $media += $nota;
            }
            $media /= count($value);
            echo "<td>$media</td>";
            echo "</tr>";
            if ($key == $elegido) {
                echo $key . ": <br>";
                foreach ($value as $key2 => $nota) {
                    echo $key2. " - " .$nota."<br> ";
                }
            }
        }

        ?>
    </table >
    <h1>EJ4</h1>
    <table id="ej4">
        <tr class="ni">
            <th class="verd">Fila</th>
            <?php
            $arr4 = [
                ["Nombre"=>"Pepe", "Peso"=>4.5, "Color"=>"Marrón", "Edad"=>12],
    
                ["Nombre"=>"Spark", "Peso"=>3, "Color"=>"Blanco", "Edad"=>2],
    
                ["Nombre"=>"Tobby", "Peso"=>7.2, "Color"=>"Beige", "Edad"=>8],
    
                ["Nombre"=>"Bigotes", "Peso"=>4, "Color"=>"Negro", "Edad"=>9],
    
                ["Nombre"=>"Ricky", "Peso"=>0.1, "Color"=>"Verde", "Edad"=>2]
            ];
                $arrk = array_keys($arr4[0]);
                foreach ($arrk as $value) {
                    echo "<th> $value</th>";
                }
            ?>
        </tr>
        <?php
        
        $nomMayor=$arr4[0];
        $nomMenor=$arr4[0];
        foreach ($arr4 as $key => $value) {
            echo "<tr><td class='verd'>$key</td>";//abierto tr
            foreach ($value as $key2 => $value2) {
                echo "<td>$value2</td>";//abierto td
            }
            if ($value["Edad"]>$nomMayor["Edad"]) {
                $nomMayor = $value;
            }
            if ($value["Peso"]<$nomMenor["Peso"]) {
                $nomMenor = $value;
            }
            echo "</tr>";
        }
    ?>
    </table>
    <?php
        echo"1. Mascotas que tiene el usuario: ".count($arr4);
        echo "<br><br>2.Datos de la Mascota con el codigo 3<br>";
        foreach ($arr4[3] as $key => $value) {
            echo $key.": ".$value.", ";
        }
        echo "<br><br>3. Datos de la Mascota con el Nombre 'Sparky'<br>";
        foreach ($arr4 as $key => $value) {
            if ($value["Nombre"] == "Spark") {
                echo $value["Color"];
                
            }
        }
        echo "<br><br>4. Los datos de la mascota más mayor<br>";
        foreach ($nomMayor as $key => $value) {
            echo $key.": ".$value;
        }
        echo "<br><br>5. Nombre de la mascota más liviana<br>".$nomMenor["Nombre"];
        
    ?>

</body>

</html>