<?php
    class Articulo {
        private $nombre;
        private $precio;

        public function __construct($pNomrbre, $pPrecio){
            $this->nombre = $pNomrbre;
            $this-> precio = $pPrecio;
        }
        public function  __toString(){
            $str = "nombre: ".$this->nombre."<br/>Precio: ".$this->precio."€ <br/>";
            return $str;
        }
        public function getPrecio(){
            return $this->precio;
        }
        public function setPrecio($pPrecio){
            if (is_numeric($pPrecio)) {
                $this->precio=$pPrecio;
            } else echo "precio no numerico";
        }
    }

?>