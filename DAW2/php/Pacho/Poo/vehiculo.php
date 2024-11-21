<?php
    class coche {
        private $nombre;
        private $tipo;
        private $peso;

        public function __construct($nm="", $tip="", $pes=""){
            $this->nombre = $nm;
            $this ->tipo = $tip;
            $this-> peso = $pes;
        }
        //set
        public function __set($algo, $valor){
            $this->algo=$valor;
        }
        //get
        public function __get($algo){
            return $this->$algo;
        }
        //tostring
        public function __toString(){
            $str ="El coche es un ".$this->nombre." del tipo ".$this->tipo." con un peso de ".$this->peso." Kg";
            return $str;
        } 
    }

    if (isset($_POST["Enviar"])) {
        $ch1 = new coche("coch1",$_POST["tp1"],$_POST["ps1"]);
        $ch2 = new coche("coch2",$_POST["tp2"],$_POST["ps2"]);
        if ($ch1->__get("tipo") != $ch2->__get("tipo")) {
            //si son distinto tipo
            echo "Eso no se puede comparar no son del mismo tipo";
        } else {
            if ($ch1->__get("tipo") == $ch2->__get("tipo") && $ch1->__get("peso") == $ch2->__get("peso")) {
                //mismo peso y tipo
                echo "son del mimo tipo y peso";
            } else if ($ch1->__get("tipo") == $ch2->__get("tipo")) {

                //mismo tipo y distinto peso
                if ($ch1->__get("peso") > $ch2->__get("peso")) {
                    echo $ch1." pesa mas que el ".$ch2;
                } else {
                    echo $ch1." pesa menos que el ".$ch2;
                }
            }
        }




    } else {
        echo '
            <form action="#" method="post">
                <label for="tp1">Tipo coche 1</label>
                <input type="radio" name="tp1" value="Turismo">
                <label for="tp1">Turismo</label>
                <input type="radio" name="tp1" value="Camion">
                <label for="tp1">Camion</label>
                <input type="radio" name="tp1" value="Moto">
                <label for="tp1">Moto</label>
                <br>
                <label for="ps1">Peso coshe 1</label>
                <input type="text" name="ps1">
                <br>
                <label for="tp2">Tipo coche 2</label>
                <input type="radio" name="tp2" value="Turismo">
                <label for="tp2">Turismo</label>
                <input type="radio" name="tp2" value="Camion">
                <label for="tp2">Camion</label>
                <input type="radio" name="tp2" value="Moto">
                <label for="tp2">Moto</label>
                <br>
                <label for="ps2">Peso coshe 2</label>
                <input type="text" name="ps2">
                <br>
                <input type="submit" name ="Enviar" value="Enivar">
                <br>
            </form>
        '; 
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Coshe</title>
</head>
<body>


</body>
</html>