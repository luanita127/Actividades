<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=<, initial-scale=1.0">
    <title>Libro monudo</title>
    <link rel="icon" href="../../statics/libre.png" type="image/icon">
</head>
<body>
<h1 align="center">Libro hallado</h1>
<br><br><br>
<?php
    //====== Información recibida ======//
    $frase=(isset($_POST["frase"]) && $_POST["frase"]!="")? $_POST["frase"]: false;
    $modo=(isset($_POST["Modo"]) && $_POST["Modo"]!="")? $_POST["Modo"]: false;
    $horario=(isset($_POST["horario"]) && $_POST["horario"]!="")? $_POST["horario"]: false;

    //====== Casos ======//
    function casos($frase,$modo)
    {
        //=== Normal ===//
        if($modo=="Normal")      
        {
            $numero=0;
            $cadena=$frase;
            $insertar=rand(50,2000);  
            function libro($cadena, $insertar,$frase)
            {   
                $cadena=$frase;
                $insertar=rand(50,2000);
                for($conteo=1;$conteo<=2000;$conteo++)
                {
                    $generador=rand(32,127);
                    echo htmlspecialchars(chr($generador));
                    if($insertar==$conteo) 
                        echo "<strong style= 'color: red'> $cadena </strong>";
                }
            }
            echo libro($cadena, $insertar,$frase);
        }
        else

            //=== Palabras ===//
            if($modo=="Palabras")
            {
                $numero=0;
                // Desordenar //
                $separar=explode(" ",$frase);//Separa la frase en un arreglo
                foreach($separar as $localidades)//Calcula el numero de localidades del arreglo
                    $numero++;  
                echo "<br><br>";
                for($i=0;$i==$numero-1;$i++) //Asigna un numero de localidad
                    $separar[$i]." ";
                shuffle($separar); //Barajea
                echo "<br>";
                echo "<br>";
  
                // Imprimir //
                foreach($separar as $imprimir)
                {
                    for($conteo=1;$conteo<=11;$conteo++)
                    {
                        $generador=rand(32,127);
                        echo htmlspecialchars(chr($generador));  
                    }
                    echo "<strong style= 'color: red'>",$imprimir." ","</strong>";
                    for($conteo=1;$conteo<=1000;$conteo++)
                    {
                        $generador=rand(32,127);
                        echo htmlspecialchars(chr($generador));  
                    }

                }
            }
            else

                //=== Desorden ===//
                if($modo=="Desorden")
                {
                    $numero=0;
                    // Desordenar //
                    $separar=explode(" ",$frase);//Separa la frase en un arreglo
                    foreach($separar as $localidades)//Calcula el numero de localidades del arreglo
                        $numero++;  
                    for($i=0;$i==$numero-1;$i++) //Asigna un numero de localidad
                        $separar[$i]." ";
                    shuffle($separar); //Barajea
                    function imprimir($numero, $separar)
                    {
                        for($i=0;$i<=$numero-1;$i++) //Imprime el arreglo
                            echo $separar[$i]." "; 
                    }
                    
                    // Imprimir //
                    $insertar=rand(50,2000);
                    for($conteo=1;$conteo<=2000;$conteo++)
                    {
                        $generador=rand(32,127);
                        echo htmlspecialchars(chr($generador));
                        if($insertar==$conteo)
                        {
                            echo "<strong style= 'color: red'>",  imprimir($numero, $separar), "</strong>";
                            $conteo++;
                        }
                    }
                }


                else
                    if($modo=="Inverso")
                    {
                        $largo=0;
                        function imprimir($largo, $frase)
                        {
                            $largo=strlen($frase);
                            for($i=$largo-1;$i>=0;$i--)
                                echo $frase[$i];
                        }
                        $insertar=rand(50,2000);
                        for($conteo=1;$conteo<=2000;$conteo++)
                        {
                            $generador=rand(32,127);
                            echo htmlspecialchars(chr($generador));
                            if($insertar==$conteo) 
                                echo "<strong style= 'color: red'> &nbsp", imprimir($largo, $frase)." " ,"</strong>";
                        }

                    }

    }

    //====== Nombre del Libro ======//
    function nombre()
    {
        for($i=0;$i<=9;$i++)
        {
            $nameLibro = rand(48,122);
            echo htmlspecialchars(chr($nameLibro));
            if($nameLibro<=57 && $nameLibro>=97)
                echo "<strong>".chr($nameLibro)."</strong>";
        }
    }

    echo "
    <table border='1'>
    <thead>
        <tr>
            <th>Libre: ", nombre() ,"<th>
        </tr>
    <thead>
    <tbody>
        <tr>
            <td>"; casos($frase,$modo); echo"<td> 
        </tr>
    </tbody>


    </table>
    <br><br>
    " ;
    
    $fechaActual= time();
        $fechaCreacion= rand(0,$fechaActual);
        
        echo "La fecha de consulta de este libro fue: "."<strong>".date("d/F/Y")."</strong>";
        echo " a las: "."<strong>".date("h:i a")."</strong>";
        echo " en la zona horaria de "."<strong>".$horario."</strong>"."<br><br>";

        echo "Este libro fue creado el "."<strong>".date("d/F/Y", $fechaCreacion)."</strong>";
    ?>

