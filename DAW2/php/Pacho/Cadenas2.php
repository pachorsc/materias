<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="ISO-8859-1"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadenas2</title>
</head>
<body>
    <h1>Ej 1</h1>
    <?php
        $cad =["Mi mama me mima","Quiero mucho a mi mama"] ;
         
        $concatenada = implode(" ",$cad);
        

        foreach ($cad as $value) {
            echo $value."<br>";
            $nino = str_replace(" ","",$value);
           foreach (count_chars($nino, 1) as $i => $val) {
            echo "La letra ".chr($i)." ha salido un total de ".$val." <br>";
           }
           echo "<br>";
        }
        echo $concatenada."<br>";
        $nino2 = str_replace(" ","",$concatenada);
        foreach (count_chars($nino2, 1) as $i => $val) {
            echo "La letra ".chr($i)." ha salido un total de ".$val." <br>";
           }
           echo "<br>";
    ?>


    <h1>Ej 2</h1>
    <table>
        <tr>
            <th>
                USUARIO
            </th>
        </tr>
        <?php
            $usuarios=["Juan", "*no", "&no", "!no", "?no", "si"];
            foreach ($usuarios as $value) {
                echo"<tr><td>$value</td>";
                if (preg_match("`^[&/|!/|?/|*/]`",$value)) {
                    echo "<td>INCORRECTO</td>";
                }else echo"<td>CORRECTO</td>";
                echo "</tr>";
            }
        ?>
    </table>
    <h1>Ej 3</h1>
    <table>
            <tr>
                <th>USUARIO</th>
                <th>PASSWORD</th>
            </tr>
        <?php
            $usuCont = [
                ["Juanno","Juan"],
                ["Jsi", "advv"],
                ["esteno", "asdfeste"],
                ["si","abaf"]
            ];
            foreach ($usuCont as $value) {
                $z="";
                $z = str_pad($z, strlen($value[1]),'*');
                echo "<tr><td>".$value[0]."</td><td>".$z."</td>";
                
                if (preg_match("`[$value[0]]`",$value[1])) {
                    echo "<td>INCORRECTO</td></tr>";
                } else echo "<td>CORRECTO</td></tr>";
                
            }
        ?>
    </table>
    <h1>Ej 4</h1>
    <?php
        $cod = "Ipmb rvfsjep bnjhp. Dpnp uf fñdvfñusbt. Uf nbñep nvdipt cftpt. Ibtub qspñup.";  
        $hecho = "";
        $separada = explode(" ", $cod);
        foreach ($separada as $value) {
            $addr = strtr(strtolower($value), "abcdefghijklmnñopqrstuvwxyz", "zabcdefghijklmnñopqrstuvwxy");  
            $hecho .= ucfirst($addr)." ";
        }
        echo $hecho;
    ?>
    <h1>Ej 5</h1>
        <?php
            $texto = "ho gj oi lk nk feliz navidad navidad go he po";
            $palabra = "ho";
            $rep = mb_substr_count($texto, $palabra);
            $por = $rep/(mb_substr_count($texto, " ")+1);
            echo $texto." palabra $palabra puntuacion = ";
            if ($por<0.1) {
                echo "Muy Buena Calidad ";
            } else if($por<0.25) {
                echo "Buena Calidad";
            } else if($por<0.5) {
                echo "Baja Calidad";
            } else if($por>0.5) {
                echo "Mala Calidad";
            }
        ?>
    <h1>Ej 5</h1>
    <table>
        <tr>
            <th>PLABRA</th>
            <th>NUMERO</th>
            <th>MAYUSCULA</th>
            <th>RE</th>
            <th>FECHA</th>
            <th>CONSONANTE FIN</th>
            <th>VOCAL FIN</th>
        </tr>

        <?php
            $pl = ["hola", "1998", "Arekk"];
            foreach ($pl as $value) {
                echo "<tr><td>$value</td>";
                if (preg_match("`[0-1]`",$value)) {
                    echo "<td>SI</td>";
                } else {echo"<td>NO</td>";}

                if (preg_match("`^[A-Z]`",$value)&&!preg_match("`[0-1]`",$value)) {
                    echo "<td>SI</td>";
                } else {echo"<td>NO</td>";}

                if (preg_match("`.re.`",$value)) {
                    echo "<td>SI</td>";
                } else {echo"<td>NO</td>";}

                if (preg_match("`[0-9]{4}`",$value)) {
                    echo "<td>SI</td>";
                } else {echo"<td>NO</td>";}

                if (!preg_match("`[a|e|i|o|u]$`",$value)&&!preg_match("`[0-1]`",$value)) {
                    echo "<td>SI</td>";
                } else {echo"<td>NO</td>";}

                if (preg_match("`[a|e|i|o|u]$`",$value)&&!preg_match("`[0-1]`",$value)) {
                    echo "<td>SI</td>";
                } else {echo"<td>NO</td>";}

                echo "</tr>";
            }
        ?>
    </table>
</body>
</html>