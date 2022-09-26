<?php
//extension of pokemon class
class charmeleon extends pokemon{
    private $name;
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
    public function setHealth($health) {
        $this->health = $health;
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
}
?>