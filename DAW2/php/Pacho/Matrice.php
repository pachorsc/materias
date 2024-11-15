<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <?php
    echo "<h1>foreach</h1>";
        $arry = ["nombre" => "Juan ", "Apellido " => " Ximene ", " numero " =>5];
        $lon = count($arry);
        echo "<table><tr>";
        foreach ($arry as $key => $value) {
            echo "<tr><td> $key </td> <td> $value </td></tr>";
        }
        echo "</tr> </table>";

        echo "<h1>For</h1>";

        echo "<table><tr>";
        for ($i=0; $i <$lon ; $i++) { 
            
            echo " <tr><td>".key($arry)."</td> <td>".current($arry)."</td> </tr>";
            next($arry);
        }
        echo "</tr> </table>";

        reset($arry); 
        echo "<h1>Do while</h1>";
         
        echo "<table><tr> <br>";
        do{
            echo " <tr><td>".key($arry)."</td> <td>".current($arry)."</td> </tr>";
        }while(next($arry));
        echo "</tr> </table>";
    ?>
</body>
</html>