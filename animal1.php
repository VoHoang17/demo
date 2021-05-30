<?php
    abstract class animal{
        protected $sex;
        protected $foot;
        protected $hand;

    abstract public function sinhsan();
    abstract public function voice();
    abstract public function move();

    
    public function getSex(){
        echo $this->sex;
    }
    public function getFoot(){
        echo $this->foot;
    }
    public function getHand(){
        echo $this->hand;
    }
}
?>
