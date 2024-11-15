<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- <h1>?php echo "Buenos dias ".$_POST["Nombre"]." ".$_POST["Apellido"]." ten un buen dia";?></h1> -->

    <!-- <table>
        <tr>
            <th>numeros 1</th>
            <th>numero 2</th>
            <th>Suma</th>
            <th>Resta</th>
            <th>Mltiplicacion</th>
            <th>Division</th>
        </tr>
        ?php
        $div ="";
        if ($_POST["n2"]==0) {
            $div = "No se puede";
        } else {
            $div = $_POST["n1"]/$_POST["n2"];
        }
            echo"<tr><td>".$_POST["n1"]."</td>
                <td>".$_POST["n2"]."</td>
                <td>".$_POST["n1"]+$_POST["n2"]."</td>
                <td>".$_POST["n1"]-$_POST["n2"]."</td>
                <td>".$_POST["n1"]*$_POST["n2"]."</td>
                <td>".$div."</td>";
            
        ?>

    </table> -->
    <!-- ?php
            echo "<h1>".$_POST["n1"]."</h1>";
        for ($i=1; $i <= 10; $i++) { 
            $res = $_POST["n1"]**$i;
            echo "<p>$res</p>";
        }
    ?> -->
    <!-- <table>
        ?php
            asort($_POST);
            echo "<tr>";
            foreach ($_POST as $value) {
                echo "<td>$value</td>";
            }
            echo "</tr>";
        ?>
    </table> -->
    <!-- <table>
        ?php
            foreach ($_POST as $key => $value) {
                echo "<tr><td>$value</td></tr>";
            }
            $res =$_POST["n1"]+$_POST["n2"];
            echo "<tr><td>".$res."</td></tr>";
            $res =$_POST["n2"]*$_POST["n3"];
            echo "<tr><td>".$res."</td></tr>";
            $res =$_POST["n1"]/$_POST["n3"];
            echo "<tr><td>".$res."</td></tr>";
            $res = $_POST["n1"]+$_POST["n2"]+$_POST["n3"];
            echo "<tr><td>".$res."</td></tr>";
            $res= ($_POST["n2"]+$_POST["n3"])/$_POST["n1"];
            echo "<tr><td>".$res."</td></tr>";

        ?>

    </table> -->
    <!-- <table>
         ?php
            for ($i=$_POST["n1"]; $i <=$_POST["n2"] ; $i++) { 
                echo "<tr><td>$i</td>";
            }
            echo "</tr>";
        ?>
    </table> -->

    <!-- ?php
        if ($_POST["ed"]<=17) {
            echo "<h1>".$_POST["nm"]." eres nemor de edad</h1>";
        } else echo "<h1>".$_POST["nm"]." eres mayor de edad</h1>";
    ?> -->

    <!-- ?php
    $div = [1,$_POST["n1"]];

        for ($i=2; $i <= $_POST["n1"]/2; $i++) { 
            if ($_POST["n1"]%$i == 0) {
                $div[] =$i;  
            }
        }

        if (count($div) > 2) {
            echo "<h1>".$_POST["n1"]." No es primo</h1>";
            echo "<h2>Divisores</h2>";
            foreach ($div as $value) {
                echo "<p>$value</p>";
            }
        } else echo "<h1>".$_POST["n1"]." es primo</h1>";
    ?> -->
    <!-- <table>
        ?php
            foreach ($_POST as $key => $value) {
                $res ="";

                if ($key== "alumno")  {
                    $res = $value;
                }else if ($value<5) {
                    $res = "Insuficiente";
                } elseif ($value<7) {
                    $res = "Notable";
                } else $res = "Sobresaliente";
                echo "<tr>
                        <td>$key</td>
                        <td>$res</td>
                    </tr>";
            }

        ?>

    </table> -->

    <!-- <table>
        <tr>
            <th>Numero</th>
            <th>Cuadrado</th>
            <th>Cubo</th>
        </tr>
            ?php
                foreach ($_POST as $value) {
                    echo "<tr>
                                <td>$value</td>
                                <td>".($value**2)."</td>
                                <td>".($value**3)."</td>
                        </tr>";
                }
            ?>
    </table> -->


     <!-- <table>    
        <tr>
            <th>table del ?php echo $_POST["n1"]?></th>

            ?php
            $num = $_POST["n1"];
                for ($i=0; $i <= 10; $i++) { 
                    echo "<tr><td>$num X $i</td><td>".($i*$num)."</td></tr>";
                }
            ?>
        </tr>
    </table>

    ?php
        echo "<style>
        table {
            background-color: ".$_POST["color"].";
            border-radius: 5px;
        }

    </style>";
    ?> -->

     <!-- <h1>Forma 1</h1>
    ?php
    
        foreach ($_POST as $value) {
            $res = "";
            echo $value;
            $partes =  explode(".",$value);
            if (count($partes)>4) {
                $res = "<p>No es una IP</p>";
                echo $res;
            }
            
            foreach ($partes as $va) {
                $va = (int)$va;

                if ($va<0 || $va>255) {
                    $res = "<p>No es una IP</p>";
                    echo $res;
                    break;
                }
            }
            if ($res == "") {
                echo "<p>es una IP</p>";
            }
        }
    ?>

    <h2>forma 2 ER</h2>
    
    ?php
        foreach ($_POST as $value) {
            $res = "";
            echo $value;
            $partes =  explode(".",$value);
            
            foreach ($partes as $va) {
                $va = (int)$va;

                if (!preg_match("'^(?!.*(([3-9][0-9]{2})|2(([6-9][0-9])|(5[6-9]))))([0-9]{1,3}\.){3}[0-9]{1,3}$'" , $va)) {
                    $res = "<p>No es una IP</p>";
                    echo $res;
                    break;
                }
            }
            if ($res == "") {
                echo "<p>es una IP</p>";
            }
        }
    ?>  -->
    <!--12 <h1>numeros</h1>
    ?php
        $min = $_POST["n1"];
        $max = $_POST["n1"];
        $sum = 0;
        foreach ($_POST as $value) {
            echo "<p>$value</p>";
            $sum += $value;
            if ($min<$value) {
                $min = $value;
            }
            if ($max>$value) {
                $max = $value;
            }
        }
        echo "El mayor: ".$max."<br>";
        echo "El menor: ".$min."<br>";
        $med = $sum/count($_POST);
        echo "El media: ".$med."<br>";
        echo "La suma: ".$sum."<br>";
        

    ?> -->
    <!-- >?php
    $aux = [];
        for ($i=1; $i < count($_POST)/2; $i++) { 
            $aux[$i] = strtolower($_POST["ap".$i]." ".$_POST["nm".$i]) ; 
        }

        asort($aux);
        foreach ($aux as $value) {
           echo "<p>$value</p>";
        }
    ?> -->

    <!-- <table>

        ?php
        $num = intval(array_pop($_POST));
        echo $num." caracteres que se parecen";
        echo "<tr><td> </td>";
        //escribe el th
        foreach ($_POST as $value) {
            echo "<td>$value</td>";
        }
        echo "</tr>";
        
        foreach ($_POST as $value) {
            echo "<tr><td>$value</td>";
            //comprueba cada palabra
            foreach ($_POST as $palaux) {
                if (strlen($value) < $num) {
                    echo "<td>incomp</td>";
                } else if(str_starts_with(strtolower($palaux) , strtolower(substr($value, 0,$num)))) {
                    echo "<td class=\"true\"></td>";
                } else {
                    echo "<td class=\"false\"></td >";
                }
            }
            echo"</tr> ";
        }
        ?>
    </table> -->
    <!-- ej 17 -->
    <!-- ?php
        echo "<h1>".$_POST["pl1"]."</h1>";
        echo "cambaindo '".$_POST["cr1"]."' por '".$_POST["cr2"]."'<br>";

        echo "Palabra cambiada ".str_replace($_POST["cr1"],$_POST["cr2"], $_POST["pl1"] );
    ?> -->
    <!-- ej 18 -->
     <!-- ?php
        echo "<h1>Bienbenido</h1>";
        echo "<img src=".$_POST["imga"].">";
        echo "<style>
                    h1 {
                        background: ".$_POST["colFondo"].";
                        color: ".$_POST["colTExt"].";
                        font-family: ".$_POST["fontText"].";
                    }
              </style>";
     ?> -->
     <!-- ej 19 -->
    <?php
        $correctas = [4,47,7,1,0,"no se puede",3,1,3,"Erika"];
        $preguntas = ["Cuanto es 2 + 2", "Cuanto es 7 X 7", "Cuanto es 7 X 1", "Cuanto es 1 X 1","Cuanto es 0 X 99", "Cuanto es 3 / 0", "Cuanto es 3 / 1", "Cuanto es 3 / 3", "Cuanto es 9 / 3", "erica?"];
        $nota = 0;
        $cnt = 0;
        foreach ($_POST as $key => $value) {
            if (!strcmp($value, "si")) {
                $nota +=1;
                echo "ACERTASTE la ".($cnt+1)." cuya pregunta era ".$preguntas[$cnt]." cuya respuesta era: ".$correctas[$cnt]."<br>";
            } else {
                echo "FALLASTE la ".($cnt+1)." cuya pregunta era ".$preguntas[$cnt]." cuya respuesta era: ".$correctas[$cnt]."<br>";
            }
            $cnt += 1;
        }
        echo "<h1>Tu nota es $nota/10</h1>";
    
    ?>

    
</body>
<!-- <style>
    table {
        border: solid 1px;
    }
    .true {
        background:green;
    }
    .false {
        background:red;
    }
</style> -->
</html>