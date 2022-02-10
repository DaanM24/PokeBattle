<?php
    require './index.php';
    $selectedPokemon;
    $opposingPokemon;
    $pokemonPopulation;
    $pokemonAmount = count($pokemon);

    

    if(array_key_exists('getPopulation', $_POST)) {
        getPopulation();
    }

    function getPopulation(){
        global $pokemonAmount;
        global $pokemon;
        global $pokemonPopulation;
        for($i = 1; $i < $pokemonAmount; $i++){
            if($pokemon[$i]->getHealth() > 0){
                $pokemonPopulation++;
            }
        }
        echo $pokemonPopulation;
        echo " pokemon alive. ";
    }

    // if(array_key_exists('getPopulation', $_POST)) {
    //     getPopulation();
    // }

    // function getPopulation(){
    //     global $alivePokemon;
    //     for($i = 0; $i < $alivePokemon; $i++){
    //         echo "jos ";
    //     }
    // }

    

    echo $pokemon[0]->getName(). " has ". $pokemon[0]->getHealth(). " hp. ". $pokemon[1]->getName(). " has ". $pokemon[1]->getHealth(). " hp. ";
    echo $pokemon[0]->getName(). " used ". $pokemon[0]->getAttack1()->getName(). ". ";
    $pokemon[1]->takeDamage($pokemon[0]->getAttack1()->getDamage(), $pokemon[0]->getAttack1()->getEnergyType());
    echo $pokemon[1]->getName(). " has ". $pokemon[1]->getHealth(). " hp. ";
    echo $pokemon[1]->getName(). " used ". $pokemon[1]->getAttack1()->getName(). ". ";
    $pokemon[0]->takeDamage($pokemon[1]->getAttack1()->getDamage(), $pokemon[1]->getAttack1()->getEnergyType());
    echo $pokemon[0]->getName(). " now has ". $pokemon[0]->getHealth(). " hp. ";
    echo $pokemon[0]->getName(). " used ". $pokemon[0]->getAttack1()->getName(). ". ";
    $pokemon[1]->takeDamage($pokemon[0]->getAttack1()->getDamage(), $pokemon[0]->getAttack1()->getEnergyType());

    if($pokemon[0]->getHealth() < 0){
        $pokemon[0]->setHealth(0);
    }else if($pokemon[1]->getHealth() < 0){
        $pokemon[1]->setHealth(0);
    }
    
    echo $pokemon[1]->getName(). " has ". $pokemon[1]->getHealth(). " hp. ";
    echo $pokemon[1]->getName(). " has fainted. ". $pokemon[0]->getName(). " has won the duel!";


    // $pokemon[0]->getAttack1()->getDamage() = $pokemon[0]->getAttack1()->getDamage() - $pokemon[1]->getResistance()->getValue();
    // $pokemon[1]->getHealth() = $pokemon[1]->getHealth() - $pokemon[0]->getAttack1()->getDamage();
    // $pokemon[0]->getAttack1()->getDamage() = $pokemon[0]->getAttack1()->getDamage() + $pokemon[1]->getResistance()->getValue();
    // echo $pokemon[1]->getName(). " now has ". $pokemon[1]->getHealth(). " hp. ";
    // echo $pokemon[1]->getName(). " used ". $pokemon[1]->getAttack1()->getName(). ". ";
    // $pokemon[0]->getHealth() = $pokemon[0]->getHealth() - $pokemon[1]->getAttack1()->getDamage() * $pokemon[0]->weakness->multiplier;
    // echo $pokemon[0]->getName(). " now has ". $pokemon[0]->getHealth(). " hp. ";
    // echo $pokemon[0]->getName(). " used ". $pokemon[0]->getAttack1()->getName(). ". ";
    // $pokemon[0]->getAttack1()->getDamage() = $pokemon[0]->getAttack1()->getDamage() - $pokemon[1]->getResistance()->getValue();
    // $pokemon[1]->getHealth() = $pokemon[1]->getHealth() - $pokemon[0]->getAttack1()->getDamage();
    // $pokemon[0]->getAttack1()->getDamage() = $pokemon[0]->getAttack1()->getDamage() + $pokemon[1]->getResistance()->getValue();
    // echo $pokemon[1]->getName(). " now has ". $pokemon[1]->getHealth(). " hp. ";
    // echo $pokemon[1]->getName(). " has fainted. ". $pokemon[0]->getName(). " has won the duel!";
    // $alivePokemon--;

    

    

    //<?php if($selectedPokemon == $pokemon[0]->getName()){
    //<?php }else if($selectedPokemon == $pokemon[1]->getName()){ 
    //<?php } 
?>




    <!DOCTYPE html>
    <html lang="en">
    <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta getName()="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ik ben gewoon koel</title>
    </head>
    <body>
    <form method="post">
        <input type="submit" name="getPopulation" 
        class="button" value="How many pokemon are alive?" />
    </form>

    <script>
        var pokemonSelection = document.getElementById("pokemonSelection");
        pokemonSelection.hidden = true;
    </script>
    </body>
    </html>