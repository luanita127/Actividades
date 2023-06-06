<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=<, initial-scale=1.0">
    <title>Monitos escritores</title>
    <link rel="icon" href="./statics/monito.jpg" type="image/icon">
</head>
<body>
<h1 align="center">Taller de Monos</h1>
<form action="./dynamics/php/desplegar.php" method="post" target="_blank">
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
        <label for="hora">Zona horaria:
                <select id="hora" name="horario">
                    <option disabled>Selection</option>
                    <option value="America/Mexico_City">Ciudad de México</option>
                    <option value="America/New_York">New York</option>
                    <option value="Europe/Madrid">Madrid</option>
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
