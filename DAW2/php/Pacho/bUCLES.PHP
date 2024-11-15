<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    echo"<h2>EJ 1</h2>";
        $num = 2;
        $aux = $num; 
        for ($i=0; $i < 10; $i++) {
            
           $aux = $aux*$aux;
           echo "<p> $aux </p>";
        }
        echo "<h1>otro bucle</h1>";
        $aux2 = $num; 
        $a=1;
        while ($a <= 10) { 
            $aux2 = $aux2*$aux2;
            echo "<p> $aux2 </p>";
            $a++;
        }
        echo "<h1>otro bucle</h1>";
        $b=1;
        $aux3 = $num;
        do {
            $aux3 = $aux3*$aux3;
            echo "<p> $aux3 </p>";
            $b++;
        } while ($b <= 10);
        
        
    ?>
    <h2>EJ 2</h2>
    <?php
        for ($i=260; $i >110 ; $i--) { 
            if ($i%3 == 0 || $i%2 == 0) {
                echo "$i ";
            }
        }
        
        echo "<br>";
        echo "<h1>otro bucle</h1>";
        $a = 260;

        do {
            if ($a%3 == 0 || $a%2 == 0) {
                echo "$a ";
            }
            $a--;
        } while ($a >110);

        echo "<br>";
        echo "<h1>otro bucle</h1>";

        $a = 260;
        while ($a >110) {
            if ($a%3 == 0 || $a%2 == 0) {
                echo "$a ";
            }
            $a--;
        }
        echo "<br>";
    ?>
    <h2>EJ 3</h2>
    <table>
        <?php
        $b =1;
            for ($z=0; $z < 10; $z++) { 
                echo "<tr>";
                for ($i=0; $i <10 ; $i++) { 
                    echo "<td> $b X $i</td> ";
                    $res = $i*$b;    
                    echo "<td> $res|</td>";
                }
                echo "</tr>";
                $b++;
            }
        ?>
    
    </table>

    <h2>EJ 4</h2>
            <?php
                $numa = [2,4,6,8,9,0,6];
                $sum =0;
                foreach ($numa as $key => $value) {
                    echo "$value ";
                    $sum += $value; 
                }
                $res = $sum/ count($numa); 
                echo "<br>la media es de $res";
            ?>

    <h2>EJ 5</h2>
        <table>
                <?php
            echo "<tr>";
                $v1 = 0;
                $v2 = 1;
                for ($i=0; $i < 15; $i++) { 
    
                    //Variable temporal para almacenar el número de la primera variable
                    $temp = $v1;
                
                    //La primera variable pasa a contener el valor de la segunda
                    $v1 = $v2;
                
                    //Sumamos el valor de la temporal y la variable 1
                    $v2 = $temp + $v1;
                
                    //Imprimimos el resultado
                    echo "<tr><td>numero $i: </td>  <td>$v1 </td> </tr>";
                }

            echo "</tr>";
            ?>
        </table>

        <h2>EJ 6</h2>

        <?php
            $datos = [12, 45, "Juan", TRUE, 3,90,"22",2];
            foreach ($datos as $value) {
                $con = 0; 
                if (is_int($value)) {
                    $mitad = $value/2;
                    for ($i = 1; $i <=$mitad  && $con==0; $i++ ) { 
                        if (($value % $i) == 0) {
                            $con++;

                        }
                    }

                    if ($con==1) {
                        echo "  primo $value ";
                    } else {
                        echo " NO primo $value ";
                    }
                    echo "<br>";
                }
            }
        ?>
    
        <h2>EJ 7</h2>
            <?php
                $npag= 5;
                echo "<ul>";
                for ($i=1; $i <= $npag; $i++) { 
                    echo "<li><a href='https://www.bing.com/'>Enlace $i </a></li>";
                }
                echo "</ul>";
            ?>

        <h2>EJ 8</h2>

         <?php
            $paginas = 4;
            echo "<ul>";
                for ($i=1; $i <= $paginas; $i++) { 
                    echo "<li><a href='?pag=$i'>Enlace $i </a></li>";
                }
                
                if ($_GET["pag"]==1 || $_GET["pag"]==$paginas) {
                    echo "<li><a href='?pag=$i'>Enlace Secreto </a></li>";
                }
                echo "</ul>";
         ?>
            
    

    
</body>
</html>