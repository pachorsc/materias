<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Practica</title>
    <link rel="stylesheet" href="https://bootswatch.com/5/morph/bootstrap.css">
   <link rel="stylesheet" href="practica.css">
  </head>
  <body> 
        <?php
        
            if (isset($_POST["enviado"])) { 
                echo "<table>";
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
                                $res .= "dos palabras ";
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
                            // 
                            // si no es ninguna
                            if ($res == "") {
                                $res .= "10 ";
                            }
                            echo "<tr>
                                <td>$texto</td><td>$res</td>
                            </tr>";
                            
                        
                        
                    }
                }
            

                echo "</table><form action=\"#\" method=\"post\">";
                //para elegir la palabra para guardar la ima
                echo "<h1>Eligela palabra para renonmbrar la imagen</h1>";
                foreach ($_POST as $key => $value) {
                    if ($value == "Enviar") {
                        # code...
                    } else {
                        echo "<label for=\"".$value."\">".$value."</label>
                        <input type=\"radio\"  name =\"nombreN\" value=\"".$value."\"><br>";
                    }
                    
                }
            
                //guardamos la foto para despues renombrarla
                $origen = $_FILES["img"]["tmp_name"];
                //obtener la extencion
                $extencion = explode(".",$_FILES["img"]["name"]);
                $extImg = ".".$extencion[1];
                $ruta = "a".$extImg;
                move_uploaded_file($origen, $ruta);

                //guardamos la ruta de donde guardamos la imagen 
                echo "<input type=\"hidden\" name=\"guardF\" value=\"$ruta\">";

                //enviar el formulario
                echo "<input type=\"submit\" name=\"RenmFot\"> </form>";
                
            } else if (isset($_POST["RenmFot"])) {
                //el antiguo nombre y ruta de la foto 
                $origen = $_POST["guardF"];
                //obtener la extencion
                $extencion = explode(".",$origen);
                //ruta para enviar y nuevo nombre
                $ruta = $_POST["nombreN"].".".$extencion[1];
                rename($origen, $ruta);
                //mensaje correcto
                echo "<p>se guardó la imagen como ".$ruta."</p><br>";
                echo "<img src=\"$ruta\" alt=\"\">";

            } else {
                echo "<div id= \"nino\">
                <h1>Formulario del demonio</h1>
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
                </form> </div>";
            }
        ?>    
           
  </body>
</html>