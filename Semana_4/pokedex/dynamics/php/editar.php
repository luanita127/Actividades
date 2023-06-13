<?php

require "config.php";
    $conexion = connect();
    if(!$conexion)
    {
        echo "No se pudo conectar con la base";
    }else{
        $id = (isset($_POST["id"]) && $_POST["id"] != "")? $_POST["id"] : false; //id del pokemon actual en la pestaña de eliminar
        //$id=720;
        $nombre = (isset($_POST["nombre"]) && $_POST["nombre"] != "")? $_POST["nombre"] : false;
        $altura = (isset($_POST["altura"]) && $_POST["altura"] != "")? $_POST["altura"] : false;
        $peso = (isset($_POST["peso"]) && $_POST["peso"] != "")? $_POST["peso"] : false;
        $exp_base = (isset($_POST["exp_base"]) && $_POST["exp_base"] != "")? $_POST["exp_base"] : false;
        $tipo = (isset($_POST["tipo"]) && $_POST["tipo"] != "")? $_POST["tipo"] : false;
        if($altura && $peso && $exp_base)
       {
            $sql = "UPDATE pokemon SET pok_height=$altura, pok_weight=$peso, pok_base_experience=$exp_base WHERE pok_id=$id;";
            $res = mysqli_query($conexion, $sql);
            $sql2 = "UPDATE pokemon_types SET type_id=$tipo WHERE pok_id=$id;";
            $res2 = mysqli_query($conexion, $sql2);
            if(!$res || !$res2)
            {
                echo "No se pudo insertar el pokemon";
                $respuesta = array("ok"=>false, "mensaje" => "No se pudo editar el pokemon");
            } else{
                $respuesta = array("ok"=>true, "mensaje" => "Pokemon actualizado");
            }
       }
       //var_dump($respuesta);
       $array= array($id,$altura,$peso,$exp_base,$tipo);
       echo json_encode($respuesta);
    }
    
?>