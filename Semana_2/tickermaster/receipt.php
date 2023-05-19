<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tus Boletos</title>
    <link rel="icon" href="./logo.png" type="image/icon">
</head>
<body bgcolor="#BAF1FF">
    
        <?php
        //====== Verifica la recepción de datos ======//
        $nombre=(isset($_POST["Nombre"]) && $_POST["Nombre"]!="")? $_POST["Nombre"]: false;
        $apellido=(isset($_POST["Apellido"]) && $_POST["Apellido"]!="")? $_POST["Apellido"]: false;
        $artista=(isset($_POST["Artista"]) && $_POST["Artista"]!="")? $_POST["Artista"]: false;
        $lugar=(isset($_POST["Lugar"]) && $_POST["Lugar"]!="")? $_POST["Lugar"]: false;
        $zona=(isset($_POST["Zona"]) && $_POST["Zona"]!="")? $_POST["Zona"]: false;
        $fecha=(isset($_POST["Fecha"]) && $_POST["Fecha"]!="")? $_POST["Fecha"]: false;
        $boletos=(isset($_POST["NodeBoletos"]) && $_POST["NodeBoletos"]!="")? $_POST["NodeBoletos"]: false;
        $mg=(isset($_POST["preferencia"][0]) && $_POST["preferencia"][0]!="")? $_POST["preferencia"][0]: false;
        $e=(isset($_POST["preferencia"][1]) && $_POST["preferencia"][1]!="")? $_POST["preferencia"][1]: false;
        $pq=(isset($_POST["preferencia"][2]) && $_POST["preferencia"][2]!="")? $_POST["preferencia"][2]: false;

        //====== Verifica Número de Boletos ======//
        if($boletos>15)
            $boletos=false;
        else
            $boletos=$_POST["NodeBoletos"];

        

        //====== Verifica Imagen del Artista ======//
        
        function verartist()
        {
            if($_POST["Artista"]=='Arctic Monkeys')
                return("<img src='./arctic.jpg' alt='Arctic Monkeys' width='300' height='300'>");
            else
                if($_POST["Artista"]=='Morat')
                    return("<img src='./morat.jpg' alt='Morat' width='300' height='300'>");
                else
                    if($_POST["Artista"]=='Luis Miguel')
                         return("<img src='./luismi.jpg' alt='Luis Miguel' width='271' height='204'>");
                    else
                        if($_POST["Artista"]=='Molotov')
                            return("<img src='./molotov.jpg' alt='Molotov' width='320' height='196'>");
                        else
                            if($_POST["Artista"]=='Siddhartha')
                                return("<img src='./siddharta.jpg' alt='Siddhartha' width='256' height='192'>");
        }



        //====== Verifica Imagen del Lugar ======//

        function verlug()
        {
            if($_POST["Lugar"]=='Foro Sol')
                return("<img src='./foro_sol.jpg' alt='Foro Sol' width='300' height='169'>");
            else
                if($_POST["Lugar"]=='Auditorio Nacional')
                    return("<img src='./auditorio-nacional.jpg' alt='Auditorio Nacional' width='300' height='169'>");
                else
                    if($_POST["Lugar"]=='Palacio de los Deportes')
                         return("<img src='./palacio.jpg' alt='Palacio de los Deportes' width='300' height='169'>");
                    else
                        if($_POST["Lugar"]=='Teatro Metropolitan')
                            return("<img src='./metropolitan.jpg' alt='Teatro Metropolitan' width='300' height='169'>");
        }

        //====== Verifica Imagen de la Zona ======//

        function verzone()
        {
            if($_POST["Zona"]=='General A (de pie)')
                return("<img src='./pista.jpg' alt='General A (de pie)' width='300' height='169'>");
            else
                if($_POST["Zona"]=='General B (de pie)')
                    return("<img src='./pista.jpg' alt='General B (de pie)' width='300' height='169'>");
                else
                    if($_POST["Zona"]=='Sección C')
                         return("<img src='./seccion_c.jpg' alt='Sección C' width='300' height='169'>");
                    else
                        if($_POST["Zona"]=='Sección D')
                            return("<img src='./seccion_d.jpg' alt='Sección D' width='300' height='169'>");
        }

        //====== Imprime Boletos ======//
        if($nombre==false || $apellido==false || $artista==false || $fecha==false || $boletos==false)
        {
            echo "<h1 align='center'><strong>Error 404</strong></h1>";
            echo "<h3>Se hallaron datos no especificados. Verifica que todos los campos esten correctamente llenados.";
        }
        else
        {
            echo "<h1 align='center'><br>Estos son tus boletos de entrada, imprimelos para tener acceso a tu evento:D</h1><br><br>";
            for($no=0; $no<$boletos; $no++)
            {
                echo "
                <table border='2' align='center' cellpadding='25px' style='border-collapse:collapse;'>
                    <thead>
                        <tr>
                            <th colspan='5'><h2>$artista</h2></th>
                        </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td align='center' colspan='2'><h3>$nombre $apellido</h3></td>
                        <td align='center'><h3>$fecha</h3></td>
                        <td rowspan='2'>"; echo verartist(); echo "</td>
                        <td rowspan='5'><img src='./codigo.png' alt='Código de barras' width='176' height='290'></td>
                    </tr>
                    <tr>
                        <td align='center'><h3>$lugar</h3><br>"; echo verlug(); echo "</td>
                        <td align='center'><h3>$zona</h3><br>"; echo verzone(); echo "</td>
                        <td rowspan='2'><h3>Extras:</h3>"; echo $mg."<br>", $e."<br>", $pq."<br>"; echo "</td>
                    </tr>
                </table>
                <br><br><br><br><br>";
            }
            
        }
        ?>
</body>
</html>