<?php


    $otra = (isset($_POST["Otra"]) && $_POST["Otra"] != "")? $_POST["Otra"] : false;
    $materia = (isset($_POST["Materia"]) && $_POST["Materia"] != "")? $_POST["Materia"] : false;
    $tarea = (isset($_POST["Tarea"]) && $_POST["Tarea"] != "")? $_POST["Tarea"] : false;


    echo json_encode($materia.": ".$tarea);

?>

