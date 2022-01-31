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
            if($pokemon[0]->health > 0){
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


    // for($x = 0; $x < count($attack); $x++){
    //     function $x() {
    //         echo "This is". $attacks->name. "that is selected";
    //     }
    // }
    // i tried

    

    echo $pokemon[0]->name. " has ". $pokemon[0]->health. " hp. ". $pokemon[1]->name. " has ". $pokemon[1]->health. " hp. ";
    echo $pokemon[0]->name. " used ". $pokemon[0]->attack1->name. ". ";
    $pokemon[0]->attack1->damage = $pokemon[0]->attack1->damage - $pokemon[1]->resistance->value;
    $pokemon[1]->health = $pokemon[1]->health - $pokemon[0]->attack1->damage;
    $pokemon[0]->attack1->damage = $pokemon[0]->attack1->damage + $pokemon[1]->resistance->value;
    echo $pokemon[1]->name. " now has ". $pokemon[1]->health. " hp. ";
    echo $pokemon[1]->name. " used ". $pokemon[1]->attack1->name. ". ";
    $pokemon[0]->health = $pokemon[0]->health - $pokemon[1]->attack1->damage * $pokemon[0]->weakness->multiplier;
    echo $pokemon[0]->name. " now has ". $pokemon[0]->health. " hp. ";
    echo $pokemon[0]->name. " used ". $pokemon[0]->attack1->name. ". ";
    $pokemon[0]->attack1->damage = $pokemon[0]->attack1->damage - $pokemon[1]->resistance->value;
    $pokemon[1]->health = $pokemon[1]->health - $pokemon[0]->attack1->damage;
    $pokemon[0]->attack1->damage = $pokemon[0]->attack1->damage + $pokemon[1]->resistance->value;
    echo $pokemon[1]->name. " now has ". $pokemon[1]->health. " hp. ";
    echo $pokemon[1]->name. " has fainted. ". $pokemon[0]->name. " has won the duel!";
    $alivePokemon--;

    

    

    //<?php if($selectedPokemon == $pokemon[0]->name){
    //<?php }else if($selectedPokemon == $pokemon[1]->name){ 
    //<?php } 
?>




<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
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