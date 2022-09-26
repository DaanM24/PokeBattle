<?php
    //Master class for all pokemon
    class pokemon{
        private $energyType;
        private $hitpoints;
        private $health;
        private $attack1;
        private $attack2;
        private $weakness;
        private $resistance;
        static private $population = 2;
        public function __construct($energyType, $hitpoints, $health, $attack1, $attack2, $weakness, $resistance){
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

        //function that calculates damage taken based on weakness/resistance and subtracts that amount from the pokemon's health
        public function takeDamage($enemyAttackDamage, $enemyAttackType) {
            global $takenDamage;
            if($this->getResistance()->getEnergyType() == $enemyattackType){
                $takenDamage = $enemyAttackDamage - $this->getResistance()->getValue();
                $newHealth = $this->getHealth() - $takenDamage;
            }else if($this->getWeakness()->getEnergyType() == $enemyAttackType){
                $takenDamage = $enemyAttackDamage * $this->getWeakness()->getMultiplier();
                $newHealth = $this->getHealth() - $takenDamage;
            }else{
                $takenDamage = $enemyAttackDamage;
                $newHealth = $this->getHealth() - $takenDamage;
            }
            $this->setHealth($newHealth);
        }

        //counts the amount of alive pokemon
        public function getPopulation($data){
            for($i = 1; $i < count($data); $i++){
                if($data[$i]->getHealth() > 0){
                    $pokemonPopulation++;
                }
            }
            return $pokemonPopulation;
        }
    }

?>