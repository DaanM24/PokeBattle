<?php
    class pokemon{
        private $name;
        private $energyType;
        private $hitpoints;
        public $health;
        private $attack1;
        private $attack2;
        private $weakness;
        private $resistance;
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
        public function getName() {
            return $this->name;
        }
        public function getEnergyType() {
            return $this->energyType;
        }
        public function getHitpoints() {
            return $this->hitpoints;
        }
        public function getHealth() {
            return $this->health;
        }
        public function getAttack1() {
            return $this->attack1;
        }
        public function getAttack2() {
            return $this->attack2;
        }
        public function getWeakness() {
            return $this->weakness;
        }
        public function getResistance() {
            return $this->resistance;
        }
        public function takeDamage($enemyAttackDamage, $enemyAttackType) {
            global $takenDamage;
            if($this->getResistance()->getEnergyType() == $enemyattackType){
                $takenDamage = $enemyAttackDamage - $this->getResistance()->getValue();
                $this->health = $this->health - $takenDamage;
            }else if($this->getWeakness()->getEnergyType() == $enemyAttackType){
                $takenDamage = $enemyAttackDamage * $this->getWeakness()->getMultiplier();
                $this->health = $this->health - $takenDamage;
            }else{
                $this->health = $this->health - $enemyAttackDamage;
            }
        }
        // public function setName($newName) {
        //     $this->name = $newName;
        // }
        public function setHealth($newHealth){
            $this->health = $newHealth;
        }
    }

    class attack{
        private $name;
        private $damage;
        private $energyType;
        public function __construct($name, $damage, $energyType){
            $this->name = $name;
            $this->damage = $damage;
            $this->energyType = $energyType;
        }
        public function __toString() {
            return json_encode($this);
        }
        public function getName(){
            return $this->name;
        }
        public function getDamage(){
            return $this->damage;
        }
        public function getEnergyType(){
            return $this->energyType;
        }
    }

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