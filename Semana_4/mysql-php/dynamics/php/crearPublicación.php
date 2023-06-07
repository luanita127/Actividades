<?php
    $include = include("./config.php");
    $con = connect();

    if($include && $con)
    {
        //$descripcion= (isset)

        //====== DELIMITA  LAS VARIABLES(COLUMNAS) DEL COMANDO ======//
        $ID_USUARIO =1;
        $descripcion = "'Decripcion nueva'";
        $fecha = "01-06-2023";
        $hora = "10:00";
        $corazon = 30;
        $n_comentarios = 20;
        $n_retuits = 22;

        //====== DECLARA  LOS VALORES (COLUMNAS) DEL COMANDO ======// -> hace un nuevo registro a través de la peticion(faltan los ternarios)
        $peticion = "INSERT INTO publicacion VALUES (0,1, $descripcion,'$fecha','$hora', $corazon,$n_comentarios, $n_retuits)";
        $query = mysqli_query($con, $peticion);
        var_dump($query); //-> devuelve true si lo insertó bien y no hay error de sintáxis ni de conexión

        //====== REGRESA INFORMACIÓN DE LA TABLA usuarios ======//
        // $sql="SELECT * FROM usuarios";
        // $query = mysqli_query($con, $sql);
        // var_dump($query);

        //====== REGRESA LOS DATOS EN LA TABLA (INT Y CHAR) ======//
        // $sql="SELECT * FROM usuarios";
        // $query = mysqli_query($con, $sql);
        //$datos = mysqli_fetch_array($query);
        //var_dump($datos);
        
        
        //====== REGRESA LOS DATOS EN LA TABLA DE MANERA MÁS VISUAL Y REDUCIDA ======//
        // $sql="SELECT * FROM usuarios";
        // $query = mysqli_query($con, $sql);
        //$datos = mysqli_fetch_assoc($query);
        //var_dump($datos);

        //====== SOLO REGRESA UN REGISTRO ======//
        // $sql="SELECT * FROM publicacion";
        // $query = mysqli_query($con, $sql);
        // $datos = mysqli_fetch_assoc($query);
        // var_dump($datos);

        //====== VER TODOS LOS REGISTROS ======//
        // $sql="SELECT * FROM publicacion";
        // $query = mysqli_query($con, $sql);
        // while($row=mysqli_fetch_assoc($query))
        // {
        //     echo "<br>";
        //     echo "<br>";
        //     var_dump($row);
        // }

        
        //====== VER TODOS LOS REGISTROS CON INFORMACIÓN ESPECÍFICA ======//
        // $sql="SELECT * FROM publicacion";
        // $query = mysqli_query($con, $sql);
        // while($row=mysqli_fetch_assoc($query))
        // {
        //     echo "<br>";
        //     echo "<br>";
        //     var_dump($row["n_comentarios"]);
        // }






    
    }


?>