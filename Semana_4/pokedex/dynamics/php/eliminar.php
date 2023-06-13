<?php

    require "config.php";
    $conexion = connect ();
    if(!$conexion)
    {
        echo "No se puedo conectar la base";
    }
    else
    {

        $id = (isset($_GET["id"]) && $_GET["id"] != "")? $_GET["id"] : false; //id del pokemon actual en la pestaña de eliminar
        $pkevol= "DELETE FROM pokemon_evolution WHERE evol_id IN (SELECT evol_id FROM pokemon_evolution INNER JOIN pokemon_evolution_matchup ON pokemon_evolution.evolved_species_id = pokemon_evolution_matchup.pok_id where pok_id=$id)";
        $res = mysqli_query($conexion,$pkevol);
        $db = array("base_stats","pokemon_abilities","pokemon_evolution_matchup","pokemon_moves","pokemon_types");
        //var_dump($db);
        foreach($db as $base)
        {
            $delbases= "DELETE FROM $base WHERE pok_id=$id";
            $res = mysqli_query($conexion,$delbases);
        }

        $delpok="DELETE FROM pokemon WHERE pok_id=$id";
        $res=mysqli_query($conexion,$delpok);
        $mstk=("Se eliminó el pokemón");
    }
    
    echo json_encode($mstk);

?>