<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ejT62</title>
</head>
<body>
    <?php
        // if (preg_match("'^image/.+$'", $_FILES["img1"]["type"]) ) {
        //     if ($_FILES["img1"]["size"] > $_FILES["img2"]["size"]) {
        //         echo  "<img src=\"\" alt=\"\">";
        //         echo $_FILES["img1"]["name"]." con un peso de ".$_FILES["img1"]["size"]."<br>";
        //         echo $_FILES["img2"]["name"]." con un peso de ".$_FILES["img2"]["size"]."<br>";
        //     } else {
        //         echo $_FILES["img2"]["name"]." con un peso de ".$_FILES["img2"]["size"]."<br>";
        //         echo $_FILES["img1"]["name"]." con un peso de ".$_FILES["img1"]["size"]."<br>";
        //     }
        // } else {
        //     echo "Error con el formato wey";
        // }
        // echo $_POST["nm"]." ".$_POST["dni"]."<br>";
        // if ($_FILES["curri"]["size"] > 2000000) {

        //     echo "<h1>El archivo es muy grande</h1>";
        // } else {

        //     $origen = $_FILES["curri"]["tmp_name"];
        //     $ruta = "./archivos/".$_POST["dni"].".pdf";
        //     move_uploaded_file($origen, $ruta);
        // }ç

        //ejercicio 3
        // if (isset($_POST["ho"])) {
        //     $res = $_POST["ps"] / $_POST["alt"] **2;
        //     echo "El señor ".$_POST["nm"]." tiene una masa corporal de: ".$res;
        // }
        // if (isset($_POST["mj"])) {
        //     $res = $_POST["ps"] / $_POST["alt"] **2;
        //     echo "La señora ".$_POST["nm"]." tiene una masa corporal de: ".$res;
        // }
        // if (isset($_POST["bb"])) {
        //     $res = $_POST["ps"] / $_POST["alt"] **2;
        //     echo "El bebito ".$_POST["nm"]." tiene una masa corporal de: ".$res;
        // }
        if (isset($_POST["si"])) {
            echo "<table>";
            echo "<tr><th>Nombre y apellido</th><th>".$_POST["nm"]." ".$_POST["apll"]."</th></tr>";
            echo "<tr><td>Curso</td><td>".$_POST["cr"]."</td></tr>";
            echo "<tr><td>Nota1</td><td>".$_POST["n1"]."</td></tr>";
            echo "<tr><td>Nota2</td><td>".$_POST["n2"]."</td></tr>";
            echo "<tr><td>Nota3</td><td>".$_POST["n3"]."</td></tr>";
            $res = ($_POST["n1"] + $_POST["n2"] +$_POST["n3"])/3;
            echo "<tr><td>Nota media</td><td>".$res."</td></tr>";
            echo "</table>";
        }
        echo "<form action=\"#\" method=\"post\">
        <label for=\"nm\">Nombre</label>
        <input type=\"text\" name=\"nm\">
        <br>
        <label for=\"apll\">Apellido</label>
        <input type=\"text\" name=\"apll\">
        <br>
        <label for=\"cr\">Curso</label>
        <input type=\"text\" name=\"cr\">
        <br>
        <label for=\"n1\">Nota de Examen 1</label>
        <input type=\"number\" name=\"n1\">
        <br>
        <label for=\"n2\">Nota de Examen 2</label>
        <input type=\"number\" name=\"n2\">
        <br>
        <label for=\"n3\">Nota de Examen 3</label>
        <input type=\"number\" name=\"n3\">
        <br>
        <label for=\"n4\">Nota de Examen 4</label>
        <input type=\"number\" name=\"n4\">
        <br>
        <input type=\"submit\" name=\"si\" value = \"Enviar\">
    </form>";


    ?>
</body>
</html>