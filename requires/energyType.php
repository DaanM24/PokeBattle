<?php

    //Class that returns name of energytype
    class EnergyType{
        private $name;
        public function __construct($name){
            $this->name = $name;
        }
        public function __toString(){
            return json_encode($this);
        }
        public function getName(){
            return $this->name;
        }
    }

?>