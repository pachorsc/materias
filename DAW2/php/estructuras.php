<html>
    <head>
        <title>
            Prueba
        </title>
    </head>
    <body>
        <p>
            <?php
                echo "Ejercicio 1 <br>";
                $dia = date("w");
                if($dia <= 5) echo "Hoy es laborable <br>";
                else echo "Hoy es fin de semana <br>";
            
                echo "<br> Ejercicio 2 <br>";
                $a = 2;
                $b = 0;
                $c = 7;

                if($a>$b){
                    if($a > $c) echo "$a es mayor que $b y $c";
                    else  echo "$c es mayor que $b y $a";
                }else{
                    if($b > $c) echo "$b es mayor que $a y $c";
                    else echo "$c es mayor que $b y $a";
                }


                echo "<br><br> Ejercicio 3 <br>";
                $p1 = "Seta";
                $p2 = "Toalla";
                $p3 = "Peru";

                if($p1<$p2){
                    if($p1<$p3){
                        $orden = $p1;

                        if($p2 < $p3) $orden = $orden." $p2 $p3";
                        else $orden = $orden." $p3 $p2";
                    } else{
                        $orden = "$p3 $p1 $p2";
                        
                    }
                } elseif ($p2<$p3){
                    if($p2<$p1){
                        $orden = $p2;

                        if($p1 < $p3) $orden = $orden." $p1 $p3";
                        else $orden = $orden." $p3 $p1";
                    } else{
                        $orden = "$p1 $p2 $p3";
                    }
                }else{
                    if($p3<$p1){
                        $orden = $p3;

                        if($p2 < $p1) $orden = $orden." $p2 $p1";
                        else $orden = $orden." $p1 $p2";
                    } else{
                        $orden = "$p2 $p3 $p1";
                    }
                }

                echo "$orden";

                echo "<br><br> Ejercicio 4 <br>";
                $str = "Hoy es ";
                switch($dia){
                    case 1:
                        $str .= " lunes";
                        break;

                    case 2:
                        $str .= " martes";
                        break;

                    case 3:
                        $str .= " miercoles";
                        break;
                }

                echo "$str";
            ?>
        </p>

        <table>
            <?php
                $f = 0;
                $n = 1;

                do{
                    echo "<tr>";

                    do{
                        $i = $n++ + $f*10;
                        echo "<td>$i</td>";

                    }while($n <= 10);

                    echo "</tr>";
                    $f += 1;
                    $n = 1;
                }while($f < 10);
            ?>
        </table>
    </body>

</html>