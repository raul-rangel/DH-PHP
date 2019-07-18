<?php
    class Quadrado {

        public $ladoA;
        public $ladoB;

        public function calculaArea(){
            $area = ($this->ladoA * $this->ladoB);
            return $area;
        }
    }

?>

