<html>
    <head>
        <title>
            Prueba
        </title>
    </head>
    <body>
        
        <p>
            <?php
            /*
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
                */
            ?>
        </p>

        <table>
            <?php
            /*
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
                */
            ?>
        </table>


            <?php
            /*
                echo "<br> Ejercicio 7 <br>";
                $coches = array("Nissan", "Peugeot", "Audi", "Ford", "Ferrari");
                $nCoches = count($coches);

                echo "<table>";
                
                echo "<tr>";
                
                for($i=0; $i<$nCoches;$i++){
                    echo "<td>$i</td>";
                }

                echo "</tr>";

                echo "<tr>";
                
                for($i=0; $i<$nCoches;$i++){
                    echo "<td>".$coches[$i]."</td>";
                }

                echo "</tr>";

                echo "</table>";


                echo "<br><br>Ejercicio 8<br>";
                $numeros = array(12,45,7,93,33,1);
                $min=$numeros[0];
                $tope = count($numeros);

                for($i=1; $i<$tope; $i++){
                    if($numeros[$i] < $min) $min=$numeros[$i];
                }

                echo "El número más pequeño es $min <br>";

                echo "<br><br>Ejercicio 9<br>";
                $i = 0;
                do{
                    $i++;
                }while(next($numeros));

                echo "El array tiene $i elementos";


                echo "<br><br> Ejemplo <br>";

                $ejemplo = array("NOMBRE" => "Erica","APELLIDO" => "PALOMINO","EDAD" => 33, "ALTURA" => 1.85);

                echo "<table>";
                foreach($ejemplo as $clave => $valor){
                    echo "<tr><td>$clave</td><td>$valor</td></tr>";
                }
                echo "</table>";


                echo nl2br("\n\nRelacion 2 Ej 1\n");
                $base = 2;
                echo nl2br("WHILE\n");
                $exp = 1;
                while($exp <= 10){
                    echo ($base ** $exp)."<br>";
                    $exp++;
                }

                echo nl2br("\nFOR\n");
                for($exp=1; $exp<=10; $exp++){
                    echo ($base ** $exp)."<br>";
                }

                echo nl2br("\nFOREACH\n");
                for($i = 1; $i <= 10; $i++){
                    $num[] = $i;
                }

                foreach(range(1,10) as $exp){
                    echo ($base ** $exp)."<br>";
                }


                echo nl2br("\n\nRelacion 2 Ej 2\n");
                echo nl2br("WHILE\n");
                $ini = 260;
                $fin = 110;

                $i = $ini;

                while($i >= $fin){
                    $mult2 = $i%2;
                    $mult3 = $i%3;

                    $resu = "$i es multiplo de ";

                    if($mult2 == 0 && $mult3 == 0) echo  "$resu 2 y 3";
                    elseif($mult2 == 0) echo "$resu 2";
                    elseif($mult3 == 0) echo "$resu 3";

                    $i--;
                    echo "<br>";
                }

                echo nl2br("\nFOR\n");
                for($i=$ini; $i>=$fin; $i--){
                    $mult2 = $i%2;
                    $mult3 = $i%3;

                    $resu = "$i es multiplo de ";

                    if($mult2 == 0 xor $mult3 == 0){
                        if($mult2 == 0) echo "$resu 2";
                        else echo "$resu 3";

                        echo "<br>";
                    }

                    
                }
            

                echo "<br> Ejercicio 7 RELACION<br>";
                $paginas = 1;


                if($paginas > 1){
                    echo "<a href=\"?pag=1\">Primer enlace</a><br>";

                    for($i = 2; $i < $paginas; $i++){
                        echo "<a href=\"?pag=$i\">$i</a>\t";
                    }

                    echo "<br><a href=\"?pag=$paginas\">Ultimo enlace</a><br>";
                }else echo "<a href=\"?pag=1\">1</a><br>";
            
            
                echo "<br> ARRAYS 1 <br>";

                echo "<br> TABLA FOREACH <br>";

                $array = array("Nombre" => "Erica", "Apellidos" => "Palomino", "Nota" => 8.5);

                echo "<table>";

                foreach($array as $clave => $valor){
                    echo "<tr><td>$clave</td><td>$valor</td></tr>";
                }

                echo "</table>";
                
                echo "<br> TABLA WHILE <br>";

                echo "<table>";

                do{

                    echo "<tr><td>".key($array)."</td><td>".current($array)."</td></tr>";

                }while(next($array));

                echo "</table>";

                reset($array); 

                echo "<br> TABLA FOR <br>";

                echo "<table>";

                $max = count($array);

                for($i = 0; $i < $max; $i++){
                    echo "<tr><td>".key($array)."</td><td>".current($array)."</td></tr>";
                    next($array);
                }

                echo "</table>";


                echo "<br> ARRAYS 2 <br>";

                $claves = array_keys($array);
                $valores = array_values($array);

                echo "<table>";
                echo "<tr>";

                foreach($claves as $clv){
                    echo "<td>$clv</td>";
                }

                echo "</tr>";

                echo "<tr>";

                foreach($valores as $vls){
                    echo "<td>$vls</td>";
                }

                echo "</tr>";

                echo "</table>";

                reset($array); 

                echo "<br> ARRAYS 3 <br>";

                $claves = array_keys($array);

                echo "<table>";
                echo "<tr>";

                foreach($claves as $clv){
                    echo "<td>$clv</td>";
                }

                echo "</tr>";

                echo "<tr>";

                do{
                    echo "<td>".current($array)."</td>";
                }while(next($array));

                echo "</tr>";

                echo "</table>";

                $rango = range(10, 100, 2);
            */

            $matriz["Aguayo"] = array("Matemáticas" => 9, "Lengua" => 7.5, "Ciencias Naturales" => 10, "Geografía" => 3.5);

            $clavesC = array_keys($matriz["Aguayo"]);

            $matriz["Pablo"] = array($clavesC[0] => 5, $clavesC[1] => 8, $clavesC[2] => 6, $clavesC[3] => 7);
            $matriz["Pepe"] = array($clavesC[0] => 7, $clavesC[1] => 4, $clavesC[2] => 9, $clavesC[3] => 7);
            $matriz["Maite"] = array($clavesC[0] => 7.5, $clavesC[1] => 8, $clavesC[2] => 3, $clavesC[3] => 10);
            
           


            /*
            do{
                echo "<tr><td>".key($matriz)."</td>";
                $media = 0;

                $listNotas = current($matriz);
                do{
                    $nota = current($listNotas);
                    echo "<td>".$nota."</td>";
                    $media += $nota;
                }while(next($listNotas));

                $media /= count($listNotas);
                
                echo "<td>$media</td>";
                echo "</tr>";

            }while(next($matriz));
            */

            echo "<table><tr><th>Alumnos</th>";
            foreach($clavesC as $cl) echo "<th>$cl</th>";
            echo "<th>Media</th></tr>";
            
            foreach($matriz as $alumno => $listNotas){
                echo "<tr><td>$alumno</td>";
                $media = 0;
                foreach($listNotas as $nota){
                    echo "<td>$nota</td>";
                    $media += $nota;
                }

                echo "<td>". $media/count($listNotas) ."</td>";

                echo "</tr>";
            }

            echo "</table>";

            $alum = "Maite";


            echo "<table><tr><th>Alumnos</th>";
            foreach($clavesC as $cl) echo "<th>$cl</th>";
            echo "<th>Media</th></tr>";

            echo "<tr><td>$alum</td>";
            $media = 0;
            foreach($matriz[$alum] as $nota){
                echo "<td>$nota</td>";
                $media += $nota;
            }

            echo "<td>". $media/count($matriz[$alum]) ."</td>";

            echo "</tr>";

            $claves = array("Nombre", "Peso", "Color", "Edad");
            $mascotas[] = array($claves[0] => "Pepe", $claves[1] => 4.2, $claves[2] => "Marrón", $claves[3] => 12);
            $mascotas[] = array($claves[0] => "Sparky", $claves[1] => 3, $claves[2] => "Blanco", $claves[3] => 2);
            $mascotas[] = array($claves[0] => "Tobby", $claves[1] => 7.2, $claves[2] => "Beige", $claves[3] => 8);
            $mascotas[] = array($claves[0] => "Bigotes", $claves[1] => 4, $claves[2] => "Negro", $claves[3] => 9);
            $mascotas[] = array($claves[0] => "Ricky", $claves[1] => 0.1, $claves[2] => "Verde", $claves[3] => 2);

            echo "<table>";
            echo "<table><tr><th>Fila</th>";
            foreach($claves as $cl) echo "<th>$cl</th>";
            echo "</tr>";
            $tam = count($mascotas);
            for($i = 0; $i < $tam; $i++){
                echo "<tr><td>$i</td>";

                foreach($mascotas[$i] as $car) echo "<td>$car</td>";

                echo "</tr>";
            }

            echo "</table>";

            echo "El peso de la mascota 3 es ".$mascotas[3]["Peso"]."<br>";

            $nEnc = TRUE;
            do{
                $masc = current($mascotas);

                if($masc["Nombre"] == "Sparky"){
                    echo "El color de Sparky es ".$masc["Color"]."<br>";
                    $nEnc = FALSE;
                }

            }while(next($mascotas) && $nEnc);
            
            $maxPeso = $mascotas[0]["Peso"];
            $idMaxPeso = 0;

            for($i = 1; $i < $tam; $i++){
                if($mascotas[$i]["Peso"] > $maxPeso) {
                    $maxPeso =  $mascotas[$i]["Peso"];
                    $idMaxPeso = $i;
                }
            }

            echo "<table><tr>";
            foreach($mascotas[$idMaxPeso] as $car) echo "<td>$car</td>";

            echo "</tr></table>";


            ?>





    </body>

</html>