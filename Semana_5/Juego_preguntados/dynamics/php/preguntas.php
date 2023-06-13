<?php
    $no = rand(1,6); //número random para hacer que la materia sea aleatoria
    require "config.php";
    $conexion =  connect();

    if(!$conexion){
        echo "No se puedo conectar :(";
    }else
    {
        if($no==1)//Matemáticas
        {
            /*De esta forma funciona todo el código lo único que varía es el número de materia:
            Para sacar la pregunta solo se hace una petición, se almacena dentro de un arreglo y se barajea para que se mande aleatoriamente.
            Para las respuestas se sacan todos los id´s de las preguntas que tienen el id_materia = 1 (en este caso), estos id´s se almacenan en un arreglo que se usará más adelante; luego se extraen todas las respuestas
            con una petición donde las respuestas extraídas coincidan con el id de la pregunta, una vez obtenidas las respuestas se meten en un arreglo tipo matriz para facilitar la manipulación de este objeto en JavaSript,
            y finalmente con un echo json_encode se manda. Algunas líneas tienen información un poco más detallada de cómo funcionan.*/

            $preg = rand (0,19);
            //se declaran afuera para que no haya problemas al momento de ingrsar los valores del array
            $arreglop=[]; 
            $arreglor=[]; 
            $arregloid=[]; 
            $pregunta= "SELECT pregunta FROM preguntas NATURAL JOIN materias WHERE id_materia = 1;"; //request para la pregunta
            $respre= mysqli_query($conexion, $pregunta);
            while($row=mysqli_fetch_assoc($respre)) //Mete todas las preguntas en un arreglo
            {
                $arreglop[] = $row["pregunta"];
            }

            $id_preg = "SELECT id_pregunta FROM preguntas WHERE id_materia = 1"; //request que regresa todos los id´s de las preguntas con el id_materia dado, en este caso 1
            $res_id = mysqli_query($conexion, $id_preg);
            while($row=mysqli_fetch_assoc($res_id)) //mete todos los id´s recibidos en un arreglo
            {
                $arregloid[] = $row["id_pregunta"];
            }

            $arregloresp=[]; //se declara afuera del foreach para que no se esté reiniciando y para poder llamarlo afuera del foreach (almacenará TODAS las respuestas de TODAS las preguntas) 
            /*$arregloid es el arreglo con todos los id´s de las preguntas, $localidad va a ser la localidad correspondiente de ese arreglo y $valor es el id de la base de datos
            en este foreach vamos a recorrer cada localidad del arregloid para ir metiendo las resspuestas y su bool en el arregloresp*/
            foreach($arregloid as $localidad=>$valor)
            {
                $respuestas = "SELECT respuesta, boolCorrect FROM respuestas WHERE id_pregunta = $valor "; //pide las respuestas y el boolCorrect de su respectiva pregunta
                $resres = mysqli_query($conexion, $respuestas);
                $cadarespuesta = []; //se declara afuera para poder llamarlo adentro del while y que no se reinicie cada que inicia otro ciclo (almacenará los valores de respuesta y boolCorrect)
                while($row=mysqli_fetch_assoc($resres)) //llena $pregybool, que luego se iguala a $cadarespuesta[]
                {
                    $pregybool = array("valoresp"=>$row["respuesta"],"boolCorrect"=>$row["boolCorrect"]);// se declaran como si fuera una matriz para que cuando llegue a JavaScript se puedan manejar más fácil los objetos
                    $cadarespuesta[] = $pregybool; //se iguala a la variable $pregybool, de tal forma que se crea un arreglo de 4 localidades, que contiene 2 localidades respectivamente, para cada una de las 20 preguntas
                }
                $arregloresp[] = $cadarespuesta; //se iguala a $cadarespuesta para poder llamarlo abajo en el echo json_encode
            }
            $materia="Matemáticas";
            $respuesta = array("materia"=>$materia, "pregunta"=>$arreglop[$preg], "respuesta"=>$arregloresp[$preg]); //junta en un arreglo el nombre de la materia, la pregunta con su id random, y las respuestas a esa respectiva pregunta random
            //lo que esta entre corchetes es el número de localidad random de la pregunta, es por eso que las preguntas salen aleatoriamente con sus respectivas respuestas
            echo json_encode($respuesta);
        }
    
        else if($no==2)//Física
             {
                $preg = rand (0,19);
                $arreglop=[];
                $arreglor=[];
                $arregloid=[];
                $pregunta= "SELECT pregunta FROM preguntas NATURAL JOIN materias WHERE id_materia = 2;"; 
                $respre= mysqli_query($conexion, $pregunta);
                while($row=mysqli_fetch_assoc($respre))
                {
                    $arreglop[] = $row["pregunta"];
                }
                $id_preg = "SELECT id_pregunta FROM preguntas WHERE id_materia = 2";
                $res_id = mysqli_query($conexion, $id_preg);
                while($row=mysqli_fetch_assoc($res_id))
                {
                    $arregloid[] = $row["id_pregunta"];
                }
                $arregloresp=[];
                foreach($arregloid as $localidad=>$valor)
                {
                    $respuestas = "SELECT respuesta, boolCorrect FROM respuestas WHERE id_pregunta = $valor ";
                    $resres = mysqli_query($conexion, $respuestas);
                    $cadarespuesta = [];
                    while($row=mysqli_fetch_assoc($resres))
                    {
                        $pregybool = array("valoresp"=>$row["respuesta"],"boolCorrect"=>$row["boolCorrect"]);
                        $cadarespuesta[] = $pregybool;
                    }
                    $arregloresp[] = $cadarespuesta;
                }
                $materia="Física";
                $respuesta = array("materia"=>$materia, "pregunta"=>$arreglop[$preg], "respuesta"=>$arregloresp[$preg]);
                echo json_encode($respuesta);

             }
             else if($no==3)//Química
                  {
                    $preg = rand (0,19);
                    $arreglop=[];
                    $arreglor=[];
                    $arregloid=[];
                    $pregunta= "SELECT pregunta FROM preguntas NATURAL JOIN materias WHERE id_materia = 3;"; 
                    $respre= mysqli_query($conexion, $pregunta);
                    while($row=mysqli_fetch_assoc($respre))
                    {
                        $arreglop[] = $row["pregunta"];
                    }
                    $id_preg = "SELECT id_pregunta FROM preguntas WHERE id_materia = 3";
                    $res_id = mysqli_query($conexion, $id_preg);
                    while($row=mysqli_fetch_assoc($res_id))
                    {
                        $arregloid[] = $row["id_pregunta"];
                    }
                    $arregloresp=[];
                    foreach($arregloid as $localidad=>$valor)
                    {
                        $respuestas = "SELECT respuesta, boolCorrect FROM respuestas WHERE id_pregunta = $valor ";
                        $resres = mysqli_query($conexion, $respuestas);
                        $cadarespuesta = [];
                        while($row=mysqli_fetch_assoc($resres))
                        {
                            $pregybool = array("valoresp"=>$row["respuesta"],"boolCorrect"=>$row["boolCorrect"]);
                            $cadarespuesta[] = $pregybool;
                        }
                        $arregloresp[] = $cadarespuesta;
                    }
                    $materia="Química";
                    $respuesta = array("materia"=>$materia, "pregunta"=>$arreglop[$preg], "respuesta"=>$arregloresp[$preg]);
                    echo json_encode($respuesta);
                  }
                  else if($no==4)//Psicología
                       {
                            $preg = rand (0,19);
                            $arreglop=[];
                            $arreglor=[];
                            $arregloid=[];
                            $pregunta= "SELECT pregunta FROM preguntas NATURAL JOIN materias WHERE id_materia = 4;"; 
                            $respre= mysqli_query($conexion, $pregunta);
                            while($row=mysqli_fetch_assoc($respre))
                            {
                                $arreglop[] = $row["pregunta"];
                            }
                            $id_preg = "SELECT id_pregunta FROM preguntas WHERE id_materia = 4";
                            $res_id = mysqli_query($conexion, $id_preg);
                            while($row=mysqli_fetch_assoc($res_id))
                            {
                                $arregloid[] = $row["id_pregunta"];
                            }
                            $arregloresp=[];
                            foreach($arregloid as $localidad=>$valor)
                            {
                                $respuestas = "SELECT respuesta, boolCorrect FROM respuestas WHERE id_pregunta = $valor ";
                                $resres = mysqli_query($conexion, $respuestas);
                                $cadarespuesta = [];
                                while($row=mysqli_fetch_assoc($resres))
                                {
                                    $pregybool = array("valoresp"=>$row["respuesta"],"boolCorrect"=>$row["boolCorrect"]);
                                    $cadarespuesta[] = $pregybool;
                                }
                                $arregloresp[] = $cadarespuesta;
                            }
                            $materia="Psicología";
                            $respuesta = array("materia"=>$materia, "pregunta"=>$arreglop[$preg], "respuesta"=>$arregloresp[$preg]);
                            echo json_encode($respuesta);
                       }
                       else if($no==5)//Literatura
                            {
                                $preg = rand (0,19);
                                $arreglop=[];
                                $arreglor=[];
                                $arregloid=[];
                                $pregunta= "SELECT pregunta FROM preguntas NATURAL JOIN materias WHERE id_materia = 5;"; 
                                $respre= mysqli_query($conexion, $pregunta);
                                while($row=mysqli_fetch_assoc($respre))
                                {
                                    $arreglop[] = $row["pregunta"];
                                }
                                $id_preg = "SELECT id_pregunta FROM preguntas WHERE id_materia = 5";
                                $res_id = mysqli_query($conexion, $id_preg);
                                while($row=mysqli_fetch_assoc($res_id))
                                {
                                    $arregloid[] = $row["id_pregunta"];
                                }
                                $arregloresp=[];
                                foreach($arregloid as $localidad=>$valor)
                                {
                                    $respuestas = "SELECT respuesta, boolCorrect FROM respuestas WHERE id_pregunta = $valor ";
                                    $resres = mysqli_query($conexion, $respuestas);
                                    $cadarespuesta = [];
                                    while($row=mysqli_fetch_assoc($resres))
                                    {
                                        $pregybool = array("valoresp"=>$row["respuesta"],"boolCorrect"=>$row["boolCorrect"]);
                                        $cadarespuesta[] = $pregybool;
                                    }
                                    $arregloresp[] = $cadarespuesta;
                                }
                                $materia="Literatura";
                                $respuesta = array("materia"=>$materia, "pregunta"=>$arreglop[$preg], "respuesta"=>$arregloresp[$preg]);
                                echo json_encode($respuesta);
                            }
                            else if($no==6)//Computación
                                 {
                                    $preg = rand (0,19);
                                    $arreglop=[];
                                    $arreglor=[];
                                    $arregloid=[];
                                    $pregunta= "SELECT pregunta FROM preguntas NATURAL JOIN materias WHERE id_materia = 6;"; 
                                    $respre= mysqli_query($conexion, $pregunta);
                                    while($row=mysqli_fetch_assoc($respre))
                                    {
                                        $arreglop[] = $row["pregunta"];
                                    }
                                    $id_preg = "SELECT id_pregunta FROM preguntas WHERE id_materia = 6";
                                    $res_id = mysqli_query($conexion, $id_preg);
                                    while($row=mysqli_fetch_assoc($res_id))
                                    {
                                        $arregloid[] = $row["id_pregunta"];
                                    }
                                    $arregloresp=[];
                                    foreach($arregloid as $localidad=>$valor)
                                    {
                                        $respuestas = "SELECT respuesta, boolCorrect FROM respuestas WHERE id_pregunta = $valor ";
                                        $resres = mysqli_query($conexion, $respuestas);
                                        $cadarespuesta = [];
                                        while($row=mysqli_fetch_assoc($resres))
                                        {
                                            $pregybool = array("valoresp"=>$row["respuesta"],"boolCorrect"=>$row["boolCorrect"]);
                                            $cadarespuesta[] = $pregybool;
                                        }
                                        $arregloresp[] = $cadarespuesta;
                                    }
                                    $materia="Computación";
                                    $respuesta = array("materia"=>$materia, "pregunta"=>$arreglop[$preg], "respuesta"=>$arregloresp[$preg]);
                                    echo json_encode($respuesta);
                                }
    }
    
    


?>