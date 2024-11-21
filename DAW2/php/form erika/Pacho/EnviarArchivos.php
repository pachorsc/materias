<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Envío de formularios</title>
</head>
<body>
    <?php
        $ruta = "./archivos/";
        if (!file_exists($ruta)) {
            echo "La carpeta no existe, creando...";
            mkdir($ruta);
        }
        $origen = $_FILES["foto1"]["tmp_name"];
        $ruta .= $_POST["nm"].".png";
        move_uploaded_file($origen, $ruta);
    ?> 
    <table>
        <tr>
            <th>Nombre original</th>
            <th>Nuevo nombre</th>
            <th>Tamaño en megas</th>
            <th>Tipo de imagen</th>
        </tr>
        <tr>
            <?php
                echo "<td>".$_FILES["foto1"]["name"]."</td>";

                echo "<td>".$_POST["nm"]."</td>";

                $res = round((($_FILES["foto1"]["size"])/(2**20)),4 );

                echo "<td>".$res." Mb</td>";
                $res = substr($_FILES["foto1"]["name"], -4);
                echo "<td>".$res."</td>";

            ?>
        </tr>
        <?php
            echo "<img src=\"".$ruta."\" alt=\"hola\">";
            
        ?>
        

    </table>
    
</body>
</html>