<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funciones</title>
</head>
<body>
    <?php
    //EJ1
        function corregir_primera_letra(&$pala){
            if (!preg_match("'^[A-Z].*'",$pala)) {
                $pala[0] = strtoupper($pala[0]);
                return $pala;
            } else {
                return $pala;
            }
        }
        $cad = "holaa";

        //EJ2
        function corregir_mayusculas($cadena) {
            $res = strtolower($cadena);
            return corregir_primera_letra($res);
        }

        //EJ3
        function contar_letra_a($frase){
            $cnt =0;
            for ($i=0 ; $i <  strlen($frase); $i++ ) { 
                if ($frase[$i] === "a") {
                    $cnt++;
                }
            }
            return $cnt;
        }


        //EJ4
        function contar_mayusculas($f){
            $cnt =0;
            for ($i=0 ; $i <  strlen($f); $i++ ) { 

                if (preg_match("'[A-Z]'",$f[$i])) {
                    $cnt++;
                }
            }
            return $cnt;
        }
        
        //ej 5
        function contar_letra($f, $letr, $cs = 1){
            $res =0;
            if ($cs ==1) {
                for ($i=0; $i < strlen($f); $i++) { 
                    if ($f[$i] === $letr) {
                        $res++;
                    }
                }
            } else {
                $nf = strtolower($f);
                $nl = strtolower($letr);
                for ($i=0; $i < strlen($f); $i++) { 
                    if ($nf[$i] === $nl) {
                        $res++;
                    }
                }
            }
            return "en la frase $f hay un total de $res letras $letr ,  y $cs sensitive";
        }

        //ej 7
        // function nota(&$nota){
        //     $num = intval($nota); 
        //     if ($num<5) {
        //         $nota = "Suspenso";
        //     } elseif ($num<8) {
        //         $nota = "Notable";
        //     } elseif ($num<=10) {
        //         $nota = "Sobresaliete";
        //     }
        // } 
        // if (isset($_POST["Enviar"])) {
        //     echo "<table>";
        //     foreach ($_POST as $materia => $nota) {
        //         if (!($nota == "Enviar")) {
        //             nota($nota);
        //             echo "<tr>
        //                 <td>$materia</td>
        //                 <td>$nota</td>
        //             </tr>";
        //         }
        //     }

        //     echo "</table>";
            
        // } else {
        //     echo '<form action="#" method="post">
        //     <label for="Matematicas">Matematicas</label>
        //     <input type="text" name="Matematicas">
        //     <br>
        //     <label for="Lengua">Lengua</label>
        //     <input type="text" name="Lengua">
        //     <br>
        //     <label for="Historia">Historia</label>
        //     <input type="text" name="Historia">
        //     <br>
        //     <label for="Dibujo">Dibujo</label>
        //     <input type="text" name="Dibujo">
        //     <br>
        //     <input type="submit" name="Enviar" value="Enviar">
        // </form>';

        // }
        //ej 8
        function pago(&$d) {
            if ($d>0) {
                $d = $d*5;
                $d .= "$";
            }
        }
        function dias($arrfecha) {
            
            $fecha =  mktime(0,0,0, $arrfecha[1],$arrfecha[2], $arrfecha[0]);
            $dias = (mktime(0,0,0,getdate()["mon"],getdate()["mday"],getdate()["year"]) - $fecha)/86400;

            return intval($dias);
        }

        if (!(isset($_POST["Enviar"]))) {
            echo '<form action="#" method="post">
                    <label for="nm1">Nombre</label>
                    <input type="text" name="nm1">
                    <br>
                    <label for="fe1">Fecha</label>
                    <input type="date" name ="fe1">
                    <br>
                    <label for="nm2">Nombre 2</label>
                    <input type="text" name="nm2">
                    <br>
                    <label for="fe2">Fecha 2</label>
                    <input type="date" name ="fe2">
                    <br>
                    <label for="nm3">Nombre 3</label>
                    <input type="text" name="nm3">
                    <br>
                    <label for="fe3">Fecha 3</label>
                    <input type="date" name ="fe3">
                    <br>
                    <input type="submit" name="Enviar" value="Enviar">
                </form>';
        } else {
            $fech1 = explode("-", $_POST["fe1"]);
            $dias1 = dias($fech1);
            pago($dias1);

            $fech2 = explode("-", $_POST["fe2"]);
            $dias2 = dias($fech2);
            pago($dias2);

            $fech3 = explode("-", $_POST["fe3"]);
            $dias3 = dias($fech3);
            pago($dias3);

            //empiezo la tabla
            echo "<table><tr><th>Nombre</th><th>Cargo</th><th>Fecha</th></tr>";
            $cont =1;
            foreach ($_POST as $key => $value) {

                if ($value != "Enviar") {
                    if (substr($key,0,-1)=="nm") {
                        echo "<tr><td>$value</td>";
                    }
                    if (substr($key,0,-1)=="fe") {
                        $fech = explode("-", $_POST["fe".$cont]);
                        $dias = dias($fech);
                        pago($dias);
                        echo "<td>$dias</td><td>".$fech[2]."/".$fech[1]."/".$fech[0]."</td></tr>";
                        $cont++; 
                    }
                }
                
            }
            echo "</table>";
        }
    ?>
    <!-- //ej 9 -->

</body>
</html>