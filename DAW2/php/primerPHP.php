<html>
    <head>
        <title>
            Prueba
        </title>
    </head>
    <body>
        <table>
        <tr>
            <td>Dividendo</td><td>Divisor</td><td>Cociente</td><td>Resto</td>
        </tr>
        <tr>
            <td>
                <?php 
                    $a = 20;
                    echo $a;
                ?>
            </td>

            <td>
                <?php 
                    $b = 6;
                    echo $b;
                ?>
            </td>

            <td>
                <?php 
                    echo ($a/$b);
                ?>
            </td>

            <td>
                <?php 
                    echo ($a%$b);
                ?>
            </td>
        </tr>
        </table>
    </body>

</html>