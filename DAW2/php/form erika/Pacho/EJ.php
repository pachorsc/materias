<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        $dia = date("w");

        $text = "hoy es ";

        switch ($dia) {
            case 1:
                $text.=" lunes";
                break;
            case 2:
                $text.=" martes";
                break; 
                
                case 3:
                    $text.=" Miercoles";
                    break;
                case 4:
                    $text.=" Jueves";
                    break; 
                    case 5:
                        $text.=" Viernes";
                        break;
                    case 6:
                        $text.=" Sabado";
                        break; 
            
            default:
                 $text.=" Domingo ";
                break;
                
        }
        echo $text."<br>";
        if ($dia>5) {
            echo " no se trabaja";
        } else echo "Trabaja <br>";

        $arr = [1,4,6,8,0];
        $arr2 = [1,4,6,8,0];

        
        
        sort($arr);
        echo end($arr)."<br>";

        $pala = ["Miguel", "JOJO", "Erik"];
        sort($pala);

        foreach ($pala as $key => $value) {
            echo $value." <br>";
        }
    ?>
    <br>
    <br>
    <?php 
        $a =0;
        while ( $a <= 10) {
            echo "$a <br>";
            $a++;
        }
    ?>
    <h2>ej 2</h2>

    <?php 
        $num1 = 3;
        $num2 = 13;
        $num3 = $num1;
        while ( $num3 < $num2) {
            echo "$num3 <br>";
            $num3++;
        }
    ?>

    <h2>EJ 3</h2>

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

    <h2>EJ 4</h2>
    <table>
    <?php
    $v = 0;
        $coches = ["mustang", "ferrari", "toyota", "citroen"];
        for ($i=1; $i < 3 ; $i++) { 
            echo "<tr>";
            for ($b=1; $b < 3; $b++) { 
                echo "<td>$coches[$v]</td>";
                $v++;
            }
            echo "</tr>";
        }
    ?>
        
    </table>
    <h2>EJ 5</h2>
    <?php
    
        $numberssos = [3,5,8,9,6,2];
        $v = $numberssos[1];
        foreach ($numberssos as $key => $value) {
            if ($v>$value) {
                $v = $value;
            }
        }
        echo "El numero menor es  $v";
        $v = 0;
        foreach ($numberssos as $key => $value) {
            $v++;
        }
        echo " <br> el array tiene $v espacios";
    ?>
    <h2>EJ 6</h2>
    <table>
    <?php 
        $arr = ["palabra1","palabra2","palabra3","palabra4"];
        foreach ($arr as $key => $value) {
            echo "<tr><td>$value</td></tr>";
        }

    ?>
    </table>
    
</body>
</html>