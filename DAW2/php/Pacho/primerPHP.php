<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php     
            
        if (isset($_POST["nombre"])){
            echo "Nombre: ".$_POST['nombre']." <br>Edad: ".$_POST['edad'];
            echo '<form action="#" method="post">
                        <input type="submit" nombre="volver" value="Volver">  
                    </form>';
            global  $Personas [$_POST['nombre']] = $_POST['edad'];

            foreach ($Personas as $value) {
                echo array_search($_POST['edad'], $Personas)." ".$value;
            } 
            
            
        }   else {
            echo '<form action="#" method="post">
            <div>
                <label for="Nombre">Escribe tu nombre</label>
                <input type="text" id="input_nom" name="nombre">
            </div>
            <div>
                <label for="edad">Escribe tu edad</label>
                <input type="number" name="edad">
            </div>
            <div>
                <input type="submit" nombre="edad">
            </div>
        </form>';
        }
    ?>
</body>
</html>