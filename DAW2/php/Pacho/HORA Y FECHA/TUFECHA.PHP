<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tu dia</title>
</head>
<body>
    <?php
        // if (isset($_POST["fech"])) {
        //     $fecha = explode( "-",$_POST["f1"]);
        //     $nino = strtotime($fecha[2]."-".$fecha[1]."-".$fecha[0]);
        //     $a = getdate($nino);
        //     echo "Naciste un maravilloso dia de ".$a["weekday"];
        // } else {
        //     echo "<form action=\"#\" method=\"post\">
        //                 <label for=\"f1\">Cuando naciste</label>
        //                 <input type=\"date\" name=\"f1\">
        //                 <input type=\"submit\" name=\"fech\" value=\"enviar\">
        //             </form>";
        // }

        //ej 2
        
        // if (isset($_POST["fech"])) {
        //         $fecha = explode( "-",$_POST["f1"]);
        //         $nino = mktime(0,0,0, $fecha[1], $fecha[2], $fecha[0]);

        //         $fecha2 = explode( "-",$_POST["f2"]);
        //         $nino2 = mktime(0,0,0,$fecha2[1], $fecha2[2], $fecha2[0]);

        //         $res = abs($nino - $nino2)/86400 ;
        //         echo "hay un total de ".$res." dias de diferencia";
        //     } else {
        //         echo "<form action=\"#\" method=\"post\">
        //                     <label for=\"f1\">Fecha 1</label>
        //                     <input type=\"date\" name=\"f1\"><br>
        //                     <label for=\"f2\">Fecha 2</label>
        //                     <input type=\"date\" name=\"f2\"><br>
        //                     <input type=\"submit\" name=\"fech\" value=\"enviar\">
        //                 </form>";
        //     }

        //ej3

        // if (isset($_POST["fech"])) {
        //             $nino = mktime(1,0,0, $_POST["mes"], $_POST["dia"], $_POST["an"]);
        //             $fecha = getdate($nino);
        //             $hoy = getdate();
                    
        //             $resta = $hoy["year"] - $fecha["year"];
        //             $res = "".$resta." años, ";
        //             if ($resta >=18) {
        //                 $res .= "Eres mayor de edad ";
        //             } else {
        //                 $res .= " NO eres mayor de edad ";
        //             }

        //             if ($fecha["mon"] == $hoy["mon"] && $fecha["mday"] == $hoy["mday"]) {
        //                 $res .= " y Hoy es tu cumple 😁🎂🎉 ";
        //             }
        //             echo $res;
        //         } else {
        //             echo "<form action=\"#\" method=\"post\">
        //                         <label for=\"dia\">dia</label>
        //                         <input type=\"number\" name=\"dia\"><br>
        //                         <label for=\"mes\">mes</label>
        //                         <input type=\"number\" name=\"mes\"><br>
        //                         <label for=\"an\">año</label>
        //                         <input type=\"number\" name=\"an\"><br>

        //                         <input type=\"submit\" name=\"fech\" value=\"enviar\">
        //                     </form>";
        //         }

        //ej4

        // if (isset($_POST["fech"])) {
        //     $fecha = explode( "-",$_POST["f1"]);
        //     $nino = mktime(0,0,0, $fecha[1], $fecha[2], $fecha[0]);
        //     $enteega = getdate($nino);
        //     $hoy = getdate();
        //     if ($hoy["yday"] ==$enteega["yday"]) {
        //         echo "Hoy debes entregarlo o te amonestarán";
        //     } elseif ($hoy["yday"] < $enteega["yday"]) {
        //         $dias = $enteega["yday"] -$hoy["yday"];
        //         echo "te queda aún ".$dias." para entregar el libro";

        //     } elseif ($hoy["yday"] > $enteega["yday"]) {
        //         $dias = ($hoy["yday"] - $enteega["yday"])*3;
        //         echo "Debes un total de  ".$dias."$ por retraso de entrega";
        //     }
        // } else {
        //     echo "<h1>Cuando tienes que dovolver el libro</h1><form action=\"#\" method=\"post\">
        //     <label for=\"f1\">Fecha</label>
        //     <input type=\"date\" name=\"f1\"><br>
        //     <input type=\"submit\" name=\"fech\" value=\"enviar\">
        //     </form>";
        //     }

        //ej5

        if (isset($_POST["fecha"])) {
            $momento = getdate(mktime(0,0,0,$_POST["m"],$_POST["d"],$_POST["a"]));
            $numero = cal_days_in_month(CAL_GREGORIAN, $_POST["m"], $_POST["a"]);
            echo "<h1>".$momento["month"]."</h1><table>
                    <tr>
                        <th>L</th>
                        <th>M</th>
                        <th>M</th>
                        <th>J</th>
                        <th>V</th>
                        <th>S</th>
                        <th>D</th>

                    </tr>";
                    $tot =1;
            for ($i=0; $i< 5; $i++) { 
                echo "<tr>";
                    //primera iteracion
                    if ($i==0) {
                        //dias en blanco al inicio
                        $blanc = abs(5 - intval($momento["wday"])) ;
                        for ($i2=0; $i2 <6; $i2++) { 
                            if ($i2< $blanc) {
                                echo "<td></td>";
                            } else {
                                echo "<td>$tot</td>";
                                $tot++;
                            }
                        }
                    }else {
                        for ($i3=0; $i3 < 7; $i3++) { 
                            if (!($tot > $numero)){
                                echo "<td>$tot</td>";
                                $tot++;
                            }
                        }
                    }
                echo "</tr>";
            }
            echo "</table>";

        } else {
            echo "<form action=\"#\" method=\"post\">
        <label for=\"d\">Dia</label>
        <input type=\"text\" name=\"d\">
        <br>
        <label for=\"m\">Mes</label>
        <input type=\"text\" name=\"m\">
        <br>
        <label for=\"a\">Año</label>
        <input type=\"text\" name=\"a\">
        <br>
        <input type=\"submit\" name=\"fecha\" value=\"Enviar\">
    </form>";
        }
            
    ?>
    
    
</body>
</html>