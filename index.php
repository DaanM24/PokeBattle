<?php
    require './requires/pokemon.php';
    $pokemon = [];
    $selectedPokemon;
    $opposingPokemon;

    
    $pikachu =  new pokemon('Pikachu', 'Electric', 60, 60, new attack('thunderbolt', 50, 'Electric'), new attack('tackle', 20, 'Normal'), new weakness('fire', 1.5), new resistance('fighting', 10) );
    $charmeleon =  new pokemon('Charmeleon', 'Fire', 60, 60, new attack('flare', 30, 'Fire'), new attack('headbutt', 10, 'Normal'), new weakness('water', 2), new resistance('electric', 10) );
    array_push($pokemon, $pikachu, $charmeleon);


    // if(array_key_exists('chooseAllyPokemon', $_POST)) {
    //     chooseAllyPokemon($pokemon->name);
    // }
    //     else if(array_key_exists('tackle', $_POST)) {
    //         tackle();
    //     }
    if(array_key_exists('choosePokemon1', $_POST)) {
        choosePokemon1();
    }else if(array_key_exists('choosePokemon2', $_POST)) {
        choosePokemon2();
    }

    function choosePokemon1(){
        global $pokemon;
        $selectedPokemon = $pokemon[0]->name;
        $opposingPokemon = $pokemon[1]->name;
        header("Location: ./fight.php");
    }

    function choosePokemon2(){
        global $pokemon;
        $selectedPokemon = $pokemon[1]->name;
        $opposingPokemon = $pokemon[0]->name;
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
    <title>Ik ben gewoon koel</title>
</head>
<body>
    <form method="post" id="pokemonSelection">
        <h1>Choose your pokemon</h1>
        <input type="submit" name="choosePokemon1"
        class="button" value="<?= $pokemon[0]->name ?>" />
        <input type="submit" name="choosePokemon2"
        class="button" value="<?= $pokemon[1]->name ?>" />
    </form>
</body>
</html>
