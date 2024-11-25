<?php
    require_once "./clases.articulo.php";
    final class  ArticuloRebajado extends Articulo {
        private $rebaja;
        public function __construct($pNombre, $pPrecio, $rebaja) {
            parent::__construct($pNombre, $pPrecio);
            $this->rebaja = $rebaja;
        }
        private function  calculaDescuento(){
            $res = $this->rebaja*$this->getPrecio()/100;
            return $res;
        }
        public function  precioRebajado(){
            $precio = $this->getPrecio();
            $desc =  $this->calculaDescuento();
            $res = $precio - $desc;

            return $res;
        }
        public function __toString(){
            $str= parent::__toString()." ".'La rebaja es: ' . $this->rebaja . ' %<br>'.'El descuento es '.$this->calculaDescuento(). '€' ;
            return $str;
        }
    }

    $art = new ArticuloRebajado("Bicicleta", 352.10, 20);
    echo $art;
    echo "<br/><br/>El precio del artículo rebajado es ".$art->precioRebajado()."€<br/>";
?>