<?php
    class pokemon{
        public $name;
        public $energyType;
        public $hitpoints;
        public $health;
        public $attack1;
        public $attack2;
        public $weakness;
        public $resistance;
        public function __construct($name, $energyType, $hitpoints, $health, $attack1, $attack2, $weakness, $resistance){
            $this->name = $name;
            $this->energyType = $energyType;
            $this->hitpoints = $hitpoints;
            $this->health = $health;
            $this->attack1 = $attack1;
            $this->attack2 = $attack2;
            $this->weakness = $weakness;
            $this->resistance = $resistance;
        }
        public function __toString() {
            return json_encode($this);
        }
    }

    class attack{
        public $name;
        public $damage;
        public $energyType;
        public function __construct($name, $damage, $energyType){
            $this->name = $name;
            $this->energyType = $energyType;
            $this->damage = $damage;
        }
        public function __toString() {
            return json_encode($this);
        }
    }

    class weakness{
        public $energyType;
        public $multiplier;
        public function __construct($energyType, $multiplier){
            $this->energyType = $energyType;
            $this->multiplier = $multiplier;
        }
        public function __toString() {
            return json_encode($this);
        }
    }

    class resistance{
        public $energyType;
        public $value;
        public function __construct($energyType, $value){
            $this->energyType = $energyType;
            $this->value = $value;
        }
        public function __toString() {
            return json_encode($this);
        }
    }

?>