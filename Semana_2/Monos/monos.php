<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=<, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1 align="center">Taller de Monos</h1>
<form action="./monos.php" method="post" target="_blank">
    <fieldset>
        <legend align="center"><h3>Envía tu frase a los monos</h3></legend>
        <label>Frase: 
            <input required name="frase" type= "text" maxlenght="120">
        </label>
        <br><br>
        <label>Modo: 
                <select required name="Modo">
                    <option value="Normal">Normal</option>
                    <option value="Palabras">Palabras</option>
                    <option value="Desorden">Desorden</option>
                </select>
        </label>
        <br><br>
        <label>Zona horaria: 
                <select required name="Zona">
                    <option value="Mexico">México</option>
                    <option value="Nueva York">Nueva York</option>
                    <option value="España">España</option>
                </select>
        </label>
        <br>
    </fieldset>
</form>
<br>
<br>
<?php
    //====== Información recibida ======//
    $frase=(isset($_POST["frase"]) && $_POST["frase"]!="")? $_POST["frase"]: false;
    $modo=(isset($_POST["Modo"]) && $_POST["Modo"]!="")? $_POST["Modo"]: false;

    //====== Casos ======//
    function casos($frase,$modo)
    {
        //=== Normal ===//
        if($modo=="Normal")      
        {
            $cadena=$frase;
            $insertar=rand(50,2000);  
            function libro()
            {   
                $frase=(isset($_POST["frase"]) && $_POST["frase"]!="")? $_POST["frase"]: false;
                $cadena=$frase;
                $insertar=rand(50,2000);
                for($conteo=1;$conteo<=2000;$conteo++)
                {
                    $generador=rand(32,127);
                    echo chr($generador);
                    if($insertar==$conteo)
                        echo "<strong style= 'color: red'> $cadena </strong>";
                }
            }
            echo libro();
        }
        else

            //=== Palabras ===//
            if($modo=="Palabras")
            {

            }
            else

                //=== Desorden ===//
                if($modo=="Desorden")
                {
                    // Desordenar //
                    $separar=explode(" ",$frase);//Separa la frase en un arreglo
                    foreach($separar as $localidades)//Calcula el numero de localidades del arreglo
                        $numero++;  
                    //echo "<br><br>";
                    for($i=0;$i==$numero-1;$i++) //Asigna un numero de localidad
                        $separar[$i]." ";
                    shuffle($separar); //Barajea
                    //echo "<br>";
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
                        echo chr($generador);
                        if($insertar==$conteo)
                        {
                            echo "<strong style= 'color: red'>";  imprimir($numero, $separar);  echo "</strong>";
                            $conteo++;
                        }
                    }
                }

    }
    echo "
    <table border='1'>
    <thead>
        <tr>
            <th>Libre<th>
        </tr>
    <thead>
    <tbody>
        <tr>
            <td>"; casos($frase,$modo); echo"<td> 
        </tr>
    </tbody>


    </table>
    " ; 
    ?>
</body>
</html>