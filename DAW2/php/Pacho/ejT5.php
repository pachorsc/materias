<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadenas</title>
</head>
<body>
    <h1>ej1</h1>
    <table>
        <th>
            palabra
        </th>
        <th>p</th>
    <?php
        $pala = ["baba", "dabad", "jujaja", "kijaa","asdjhfl"];
        foreach ($pala as $value) {
            $str ="";
            if (preg_match("`[b]`" ,$value)) {
                $str = "tiene b";
            } else $str = "Nope";
            echo "</tr><td>$value</td><td>$str</td></tr>"; 
        }
    ?>
    </table>
    <h1>ej2</h1>
        
    <?php
        $esp = ["a", "b@", "X$", "C/","\$asdf"];

        foreach ($esp as  $value) {
            if (preg_match("`[C|@|/|\$]`" ,$value)) {
                echo "$value tiene raro caracter<br>";
            }
        }
    ?>
    <h1>ej3</h1>
        <table>
        <?php
            $ej3 = ["agua", "azul", "aguacero", "azucena", "romero"];
            echo "<tr><td>h</td>"; 
        foreach ($ej3 as $value) {
            echo "<td>$value</td>";
        }
        for ($i=0; $i < count($ej3); $i++) { 
            echo "<tr><td>".$ej3[$i]."</td>";
            foreach ($ej3 as $value) {
                $compa = substr($ej3[$i],0,3);
                if (preg_match("'$compa'",$value)) {
                       echo "<td style='background-color:green;'></td>";
                } else echo "<td style='background-color:red;'></td>";
            }
            echo "</tr>";
        }
         ?>
        </table>

        <h1>ej4</h1>
        <table>
        <?php
            $ej4 = ["Tomate", "Recorrer", "Trepar", "Carro"];
            echo "<th>Cadena</th><th>Concurrencia de 'r'</th>";
            foreach ($ej4 as $value) {
                echo "<tr><td>$value</td><td>";
                echo mb_substr_count(strtolower($value), "r");
                echo "</td></tr>";
            }
        ?>
        </table>
        <h1>ej5</h1>
        <table>
            <tr>
                <th>Cadena</th>
                <th>Resultado</th>
            </tr>
        <?php
            $ej5 = ["Moto", "arrtr", "12345234", "Hablaba", "bbbbb"];
            foreach ($ej5 as $value) {
                echo "<tr><td>$value</td>";
                if (preg_match("`[r|R]{2,}`",$value)) {
                    echo "<td style='background-color:red;'></td></tr>";
                }else if (preg_match("`(h{6}|b{3})`",$value)) { 
                    echo "<td style='background-color:green;'></td></tr>";
                }else if (preg_match("`.[aba].`",$value)) {
                    echo "<td style='background-color:blue;'></td></tr>";
                }else if (preg_match("`^[0-9]+$`",$value)) {
                    echo "<td style='background-color:yellow;'></td></tr>";
                } else {
                    echo "<td style='background-color:grey;'></td></tr>";
                }
            }
        ?>
        </table>
        <H1>EJ6</H1>
        <table>
            <tr>
                <th>Cadena</th>
                <th>URL?</th>
            </tr>
            <?php
                $ej6 = ["juan.com","https://www.host.es","https://www.youtube.com","https://brlog.hr","http://1a23.es.com","http://localhost+Pac!hoejT5.hr","estesiqueno.com"];
                foreach ($ej6 as $value) {
                    echo "<tr><td>$value</td>";
                    if (preg_match("`^http[s]?://[www.\]?[A-Z0-9a-z]+[.com|.es|.co|.org|.hr]{1,2}`",$value)) {
                        echo "<td>SI</td>";
                    } else {
                        echo "<td>NO</td>";
                    }
                }

            ?>
        </table>
        <H1>Ej7</H1>
        <table>
            <tr>
                <th>antes</th>
                <th>despues</th>
            </tr>
        <?php
            $arr7 = ["hola", "esto esta separado", "juanjo gguegga", "a a a a a"];
            foreach ($arr7 as $value) {
                echo "<tr><td>$value</td><td>".str_replace(" ","",$value)."</td>";
            }    
        ?>
        </table>
        <H1>Ej8</H1>

        <table>
            <tr>
                <th>antes</th>
                <th>despues</th>
            </tr>
        <?php
            foreach ($arr7 as $value) {
                $cambiada = str_pad($value,strlen($value)+5,"-") ;
                $cambiada =str_pad($cambiada,strlen($cambiada)+3,",",STR_PAD_LEFT);
                echo "<tr><td>$value</td><td>".$cambiada."</td>";
            }    
        ?>
        </table>
        <H1>Ej9</H1>
        <table>
            <tr>
                <th>antes</th>
                <th>despues</th>
            </tr>
        <?php
        $arr9 = ["casa",2,"abcde", 5, "ab"];
            foreach ($arr9 as $value) {
                $camb = $value;
                if (!is_int($value)) {
                    $camb = strtr($value,'ab', 'Av');
                }
                echo "<tr><td>$value</td><td>".$camb."</td>";
            }    
        ?>
        </table>

        
</body>
</html>