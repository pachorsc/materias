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

        public function setnm($nom) {
            $this->nombre = $nom;
        }
        public function setcpl($cpl){
            $this->color = $cpl;
            
        }
        public function setfcha($fcha){
            $this->fech = $fcha;  

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
    
    if (isset($_POST["Enviar"])) {
        $a = new animal($_POST["nm"],$_POST["col"],$_POST["fch"]);
        echo $a->__toString()."<br>";
        echo "y tiene ".$a->edad()." años";
    }else {
        echo '
        <form action="#" method="post">
            <label for="nm">Nombre</label>
            <input type="text" name="nm">
            <br>
            <label for="col">Color</label>
            <input type="text" name="col">
            <br>
            <label for="fch">Fecha</label>
            <input type="date" name="fch">
            <br>
            <input type="submit" name="Enviar" value="Enviar">

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