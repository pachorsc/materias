<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>cadenas</title>
</head>
<body>
    <table>
        <th>letra</th>
        <th>numero</th>
    <?php
        $palab = "holaaaa";
        for ($i=0; $i < strlen($palab); $i++) { 
            echo "<tr> <td>".$palab[$i]."</td> <td>".$i."</td>   </tr>"; 
        }       
    ?>
    </table>
    <h1>ej2</h1>

    <?php

        echo "Hay un total de ".mb_substr_count($palab,"a")." 'a'";
        echo "<br>";
        $cadenas = ["Hola112", "NO3", "Juan123", "SOFA123"];

        foreach ($cadenas as $value) {
            if (preg_match("`^[A-Z][a-z]{2,}[0-9]{3}$`",$value)) {
                echo "Tinee las condiciones ".$value." <br>";
            }
        }
        echo "<br><br>";
        $cadenas2 = ["Hola.112", "NO3", "Juan1.23", "SOFA123", "a1231A4hlg@gmail.es"];


        foreach ($cadenas2 as $value) {
            if (preg_match("`[A-Z]{1,}`",$value)) {
                if (preg_match("`[a-z]{1,}`",$value)) {
                    if (preg_match("`[0-9]{1,}`",$value)) {
                        if (preg_match("`[^A-Z^a-z]{1,}`",$value)) {
                            echo "Tiene todas las condiciones ".$value." <br>";
                        }
                    }
                }
            }
            echo "<br>";
            
        }
        echo"<h1>correo</h1>";
        if (preg_match("`^[a-z0-9A-Z]+[@][a-z]+[.](com|es)+$`",$cadenas2[4]) ) {
            echo "$cadenas2[4] <br>";
        }
    ?>
    <h1>ej3</h1>

    <!--Implementa un script en PHP en el que, dado un array de
    cadenas de caracteres, se reemplace una subcadena por
    otra indicada y se muestre, en una tabla; la cadena
    original, la cadena nueva y el número de veces que se ha
    hecho la sustitución, de cada una de las posiciones del
    array. -->
    <table>
        <tr>
        <th>Cadena</th>
        <th>Nueva</th>
        <th>veces</th>
        </tr>
    <?php
        $arr = ["Casa", "camka", "camarero", "cacacaca", "quinto"];
        $subca1 = "ca";
        $otra = "ka";
        foreach ($arr as  $value) {
            $min = strtolower($value);
            $cambiadad = str_replace($subca1,$otra,$min);
            echo "<tr>
                   <td>$value</td><td>".$cambiadad."</td><td>".substr_count($min, $subca1)."</td> 
                </tr>";
        }
    ?>
    </table>
    

    
</body>
</html>