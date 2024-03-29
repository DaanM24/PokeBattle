<?php
    require './requires/pokemon.php';
    require './requires/attack.php';
    require './requires/energyType.php';
    require './requires/resistance.php';
    require './requires/weakness.php';
    require './requires/pikachu.php';
    require './requires/charmeleon.php';
    $pokemon = [];
    $selectedPokemon;
    $opposingPokemon;

    
    $pikachu =  new pikachu('Pikachu', new EnergyType('Electric'), 60, 60, new attack('thunderbolt', 50, 'Electric'), new attack('tackle', 20, 'Normal'), new weakness('Fire', 1.5), new resistance('Fighting', 10) );
    $charmeleon =  new charmeleon('Charmeleon', new EnergyType('Fire'), 60, 60, new attack('flare', 30, 'Fire'), new attack('headbutt', 10, 'Normal'), new weakness('Water', 2), new resistance('Electric', 10) );
    array_push($pokemon, $pikachu, $charmeleon);


    if(array_key_exists('choosePokemon1', $_POST)) {
        choosePokemon1();
    }else if(array_key_exists('choosePokemon2', $_POST)) {
        choosePokemon2();
    }

    //Was originally a way to choose a pokemon but has now just turned into a next page button
    function choosePokemon1(){
        global $pokemon;
        $selectedPokemon = $pokemon[0]->getName();
        $opposingPokemon = $pokemon[1]->getName();
        header("Location: ./fight.php");
    }

    //Was originally a way to choose a pokemon but has now just turned into a next page button
    function choosePokemon2(){
        global $pokemon;
        $selectedPokemon = $pokemon[1]->getName();
        $opposingPokemon = $pokemon[0]->getName();
        header("Location: ./fight.php");
    }

    // function chooseAllyPokemon($chosenPokemon){
    //     print "jos";
    //     $selectedPokemon = $chosenPokemon;
    //     print $chosenPokemon;
    // }
    //$pokemon[0]->name
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PokeBattle</title>
</head>
<body>
    <form method="post" id="pokemonSelection">
        <h1>Choose your pokemon</h1>
        <input type="submit" name="choosePokemon1"
        class="button" value="<?= $pokemon[0]->getName() ?>" />
        <input type="submit" name="choosePokemon2"
        class="button" value="<?= $pokemon[1]->getName() ?>" />
    </form>
</body>
</html>
