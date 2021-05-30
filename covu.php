<?php
    include_once'./animal1.php';
    class dvcv extends animal1 implements sinhsan {

        public function __construct($gioiTinh) {
            $this->gioiTinh = $gioiTinh;
        }
        public function __construct(){
            $this->foot = 4;
            $this->hand = 0;
        }
        public function voice(){
            echo "be e e e ";
        }
        public function move(){
            echo "chay";
        }
        public function sinhsan(){
            echo "de con";
        }
        public function getFoot(){
            echo $this->foot;
        }
        public function getHand(){
            echo $this->hand;
        }
        public function getSS(){
            echo $this->sinhsan;
        }
        interface sinhsan{
            public function sinhsan(); 
        }

    }
?>