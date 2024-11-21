<?php
    class persona {
        public $nombre;
        public $apellido;
        private $fecha_nac;

        public function __constructor($n="", $a="", $fn="01/01/2000"){
            $this->nombre = $n;
            $this ->apellido = $a;
            $this-> fecha_nac = $fn;
        }

        public function nom_com(){
            $nom = $this->nombre." ".$this->apellido;
            return $nom;
        }

        public function __toString(){
            $str = "me llamo ".$this->nombre.$this->apellido." y he nacido en ".$this->fecha_nac;
        }
    }
    $y = new persona();

?>