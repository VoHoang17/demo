<?php 
    include_once './animal1.php';
    class dvkcv extends animal1 implements sinhsan{
        public function __construct($gioiTinh) {
            $this->gioiTinh = $gioiTinh;
        }
        public function __construct(){
            $this->foot = 2;
            $this->hand = 0;
        }
        public function voice(){
            echo "ta là vẹt";
        }
        public function move(){
            echo "bay,trườn,bơi";
        }
        public function sinhsan(){
            echo "de trung";
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