<?php
    class imagen{
        private $src;
        private $border;
        private $ruta_images;

        public function __construct($sr="", $brd=0, $ri=""){
            if (!file_exists($ri)) {
                mkdir($ri);
            }
            $this->src = $ri."/".$sr;
            $this->border = $brd;
            $this->ruta_images = $ri;
        }
        //set
        public function __set($algo, $valor){
            $this->algo=$valor;
        }
        //get
        public function __get($algo){
            return $this->$algo;
        }
        public function __toString(){
            $str = "<img src=\"".$this->src."\"border=\"".$this->border." px\"/>"; 
            return $str;
        }
    }
    
    if (isset($_POST["Enviar"])) {
        $im = new imagen($_POST["im"], $_POST["br"], $_POST["dir"]);

        echo $im;
        echo $im->__get("src");

    } else {
        if (isset($_POST["carp"])) {
            $arch = scandir($_POST["dir"]);
            echo '
        <form action="#" method="post" enctype="multipart/from-data">
            <label for="im">Imagen</label>
            <select name="im">';
            foreach ($arch as $key => $value) {
                if (!($value == "." || $value == "..")) {
                    echo "<option value=\"$value\">$value</option>";
                }
            }
    
            echo "</select>
            <br>
            <label for=\"br\">Borde</label>
            <input type=\"text\" name=\"br\">
            <input type=\"text\" name=\"dir\" value=\"".$_POST["dir"]."\" readonly >
            <br>
            <input type=\"submit\" name=\"Enviar\" value=\"Enviar\">

        </form>";
        //mostrar todas las imagenes
        foreach ($arch as $key => $value) {
            if (!($value == "." || $value == "..")) {
                $im = new imagen($value, 0, $_POST["dir"]);
                echo $im;
                
            }
        }
               
        } else {
            $arch = scandir("./");

            echo '
        <form action="#" method="post" enctype="multipart/from-data">
            <label for="dir">Carpeta</label>
            <select name="dir">';
            foreach ($arch as $key => $value) {
                if (!(str_contains($value, '.'))) {
                    echo "<option value=\"$value\">$value</option>";
                }
            }
        
            echo '</select>
            <br>
            <input type="submit" name="carp" value ="Enviar">
        </form>';
        }


    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>imagen</title>
</head>
<body>

<style>
    img {
        width: 300px;
    }
    body {
        display:flex;
        flex-direction:column;
        justify-content: center;
        align-items:center;
    }
</style>
</body>
</html>