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
<form action="./desorden.php" method="post" target="_blank">
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
    $frase=(isset($_POST["frase"]) && $_POST["frase"]!="")? $_POST["frase"]: false;
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
    


    ?>
</body>
</html>