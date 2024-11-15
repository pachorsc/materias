<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Practica</title>
    <link rel="stylesheet" href="https://bootswatch.com/5/morph/bootstrap.css">
   
  </head>
  <body>
        
    <table>
        <?php
            if (isset($_POST["enviado"])) {
                foreach ($_POST as $key => $texto) {
                    $res = "";
                        //boton enviar
                     if ($texto == "Enviar") {
                      //cadena vacia
                    } else if ( $texto == "") {
                        $res .= "Vacia ";
                    } else {
                        $palabras = explode(" ", $texto );
                        //vacio
                        if (count($palabras) == 1) {
                            $res .= "Una palabra ";
                          //si es par  
                        } else if(count($palabras) == 2) {
                            $res .= "par ";
                        }
                        $palabrasComa = explode(",", $texto );
                        //si tiene lista por comas
                        if (count($palabrasComa) >= 3) {
                            $res .= "lista ";
                        }
                        //decimal
                        if (preg_match("'^[0-9]{1,},[0-9]{1,}$'", $texto)) {
                            $res .= "Decimal ";
                        }
                        //impar
                        if (!(intval($texto) % 2 ==0)) {
                            $res .= "Impar ";
                        }
                        //Telefono
                        if (preg_match("'^\+[0-9]{2}[6789][0-9]{8}$'", $texto)) {
                            $res .= "Numero Telefono ";
                        }
                        //DNI
                        if (preg_match("'^[0-9]{8}[A-Z]$'", $texto)) {
                            $res .= "DNI ";
                        }
                        //contraseña
                        if (preg_match("'^(?=.*[0-9].*[0-9])(?=.*[A-Z])(?=.*[^a-z0-9A-Z].*[^a-z0-9A-Z].*[^a-z0-9A-Z]).{8,20}$'", $texto)) {
                            $res .= "Contraseña ";
                        }
                        // si no es ninguna
                        if ($res == "") {
                            $res .= "10 ";
                        }
                        echo "<tr>
                            <td>$texto</td><td>$res</td>
                          </tr>";
                    } 
                }
                echo "</table>";
                    //para elegir la palabra para guardar la ima
                    foreach ($_POST as $key => $value) {
                        if ($value == "Enviar") {
                            # code...
                        } else {
                            echo "<label for=\"".$value."\">".$value."</label>
                            <input type=\"radio\"  name =\"".$value."\" value=\"".$value."\"><br>";
                        }
                        
                    }
                    echo "<input type=\"submit\" name=\"enviado\">";
            } else {
                echo "
        <form action=\"#\" method=\"post\" enctype =\"multipart/form-data\">
            <label for=\"t1\">Texto 1</label>
            <input type=\"text\" name =\"t1\">
            <br>
            <label for=\"t2\">Texto 2</label>
            <input type=\"text\" name =\"t2\">
            <br>
            <label for=\"t3\">Texto 3</label>
            <input type=\"text\" name =\"t3\">
            <br>
            <label for=\"t4\">Texto 4</label>
            <input type=\"text\" name =\t4\">
            <br>
            <label for=\"t5\">Texto 5</label>
            <input type=\"text\" name =\"t5\">
            <br>
            <label for=\"t6\">Texto 6</label>
            <input type=\"text\" name =\"t6\">
            <br>
            <label for=\"t7\">Texto 7</label>
            <input type=\"text\" name =\"t7\">
            <br>
            <label for=\"img\"></label>
            <input type=\"file\" name=\"img\" accept=\"image/png,image/jpeg\">
            <br>
            <input type=\"submit\" name=\"enviado\">
        </form>";
            }
        ?>
    </table>
    
  </body>
</html>