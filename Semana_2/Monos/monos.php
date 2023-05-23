<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=<, initial-scale=1.0">
    <title>Monitos escritores</title>
    <link rel="icon" href="./monito.jpg" type="image/icon">
</head>
<body>
<h1 align="center">Taller de Monos</h1>
<form action="./desplegar.php" method="post" target="_blank">
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
                    <option value="Inverso">Inverso</option>
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
        <br><br>
        <label>
                <input type="submit">
            </label>
    </fieldset>
</form>
<br>
<br>
</body>
</html>