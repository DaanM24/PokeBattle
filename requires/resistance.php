<?php
    //Class that returns properties of a weakness
    class resistance{
        private $energyType;
        private $value;
        public function __construct($energyType, $value){
            $this->energyType = $energyType;
            $this->value = $value;
        }
        public function __toString() {
            return json_encode($this);
        }
        public function getEnergyType(){
            return $this->energyType;
        }
        public function getValue(){
            return $this->value;
        }
    }


?>