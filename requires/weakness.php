<?php

//Class that returns properties of a weakness
class weakness{
    private $energyType;
    private $multiplier;
    public function __construct($energyType, $multiplier){
        $this->energyType = $energyType;
        $this->multiplier = $multiplier;
    }
    public function __toString() {
        return json_encode($this);
    }
    public function getEnergyType(){
        return $this->energyType;
    }
    public function getMultiplier(){
        return $this->multiplier;
    }
    
}

?>