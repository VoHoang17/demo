<?php
    class lophoc{
        private $maLop;
        private $tenLop;
        private $monHoc;
        private $dsSV;
        public function __construct($maLop ,$tenLop ,$monHoc ,$dsSV){
            $this->maLop = $maLop;
            $this->tenLop = $tenLop;
            $this->monHoc = $monHoc;
            $this->dsSV = $dsSV;
        }
        // không method
        public function getMaLop()
        {
            return $this->maLop;
        }
        public function getTenLop()
        {
            return $this->tenLop;
        }
        public function getMonHoc()
        {
            return $this->MonHoc;
        }
        public function getDsSV()
        {
            return $this->dsSV;
        }
    }
?>