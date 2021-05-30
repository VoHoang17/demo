<?php
    class sinhvien{
        private $maSV;
        private $hoTen;
        private $tuoi;
        private $nganh;
        private $dsLOP;
        public function __construct($maSV ,$hoTen ,$tuoi ,$nganh ,$dsLOP){
            $this->maSV = $maSV;
            $this->hoTen = $hoTen;
            $this->tuoi = $tuoi;
            $this->nganh = $nganh;
            $this->dsLOP = $dsLOP;
        }
        //method dangkyhoc , thaydoithongtin
        public function dangkyhoc($maSV){
        }
        public function thaydoithongtin($hoTen ,$tuoi ,$nganh ,$dsLOP){
            $this->hoTen = $hoTen;
            $this->tuoi = $tuoi;
            $this->nganh = $nganh;
            $this->dsLOP = $dsLOP;
        }
        public function getMaSV()
        {
            return $this->maSV;
        }
        public function getHoTen()
        {
            return $this->hoTen;
        }
        public function getTuoi()
        {
            return $this->tuoi;
        }
        public function getNganh()
        {
            return $this->nganh;
        }
        public function getDsLOP()
        {
            return $this->dsLOP;
        }
    }
?>