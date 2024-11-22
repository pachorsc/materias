<?php
    class animal {
        public $nombre;
        public $color;
        public $fech;

        public function __construct($nm, $cl, $fch) {
            $this->nombre = $nm;
            $this ->color = $cl;
            $this-> fech = $fch;  
        }

        public function __set($atributo, $valor) {
            $this -> $atributo = $valor;
        }

        public function __get($atributo) {
            return $this -> $atributo;
        }

        public function __toString(){
            $str = "Nombre ".$this->nombre." color ".$this->color." fecha de nacimiento ".$this->fech;
            return $str;
        }

        public function edad(){
            $anos = getdate()["year"] - getdate(strtotime($this->fech))["year"];
            return $anos;
        }
    }

    class perro extends animal {
        private $raza;
        private $sexo;

        public function __construct($nm,$cl,$fch, $rz, $sx){
            parent::__construct($nm, $cl, $fch);
            $this-> raza = $rz;
            $this-> sexo = $sx;
        }

        public function __toString(){
            return parent::__toString()." y ademas es un perro de raza ".$this->raza." y de sexo ".$this->sexo;
        }

        public function ladrar(){
            echo $this->__get("nombre")." GUAU";
        }
        public function dormir(){
            echo $this->__get("nombre")." se ha ido a dormir";
        }
    }
    class delfin extends animal {
        private $longitud;

        public function __construct($nm,$cl,$fch, $lg){
            parent::__construct($nm, $cl, $fch);
            $this-> longitud = $lg;
        }
        public function __toString(){
            return parent::__toString()." y ademas es un delfin que mide ".$this->longitud." metros";
        }

        public function saltar(){
            echo $this->__get("nombre")." está saltando por los aires";
        }

        public function comer(){
            echo $this->__get("nombre")." tiene hambre";
        }
    }

    if (isset($_POST["perro"])) {
        $dog = new perro($_POST["nm"],$_POST["col"],$_POST["fch"],$_POST["rz"],$_POST["sx"]);
        echo $dog->__toString()."<br>";

        if ($_POST["acc"]=="ladrar") {
            $dog->ladrar();
        } else  $dog->dormir();;
    }else if (isset($_POST["delfin"])) {

        $fin = new delfin($_POST["nm"],$_POST["col"],$_POST["fch"],$_POST["lg"]);
        echo $fin->__toString()."<br>";
        if ($_POST["acc"]=="saltar") {
            $fin->saltar();
        } else  $fin->comer();;
    } else {
        echo '
        <form action="#" method="post">
            <label for="nm">Nombre DEL PERRO</label>
            <input type="text" name="nm">
            <br>
            <label for="col">Color</label>
            <input type="text" name="col">
            <br>
            <label for="fch">Fecha</label>
            <input type="date" name="fch">
            <br>
            <label for="rz">Raza</label>
            <input type="text" name="rz">
            <br>
            <label for="sx">Sexo</label>
            <input type="text" name="sx">
            <br>
            <select name="acc">
                <option value="ladrar">ladrar</option>
                <option value="dormir">dormir</option>
            </select>
            <br>
            <input type="submit" name="perro" value="Enviar">
        </form>';
        echo '
        <form action="#" method="post">
            <label for="nm">Nombre DEL delfin</label>
            <input type="text" name="nm">
            <br>
            <label for="col">Color</label>
            <input type="text" name="col">
            <br>
            <label for="fch">Fecha</label>
            <input type="date" name="fch">
            <br>
            <label for="lg">Longitud</label>
            <input type="number" name="lg">
            <br>
            <select name="acc">
                <option value="saltar">saltar</option>
                <option value="comer">comer</option>
            </select>
            <br>
            <input type="submit" name="delfin" value="Enviar">
        </form>';
    }
    //2003-10-01
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=form, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    
</body>
</html>