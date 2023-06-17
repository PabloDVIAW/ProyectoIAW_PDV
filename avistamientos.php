<?php
$nombre = $_GET['usuario'];
require('conexion.php');
$sql = "SELECT * FROM avistamientos WHERE usuario='$nombre'";
$resultado = $mysqli->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" type="text/css" href="../estilos/micss.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bestiario Online</title>
</head>
<body>
<div class="container">
    <header>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    </header>

    <div class="container" style="padding-top: 20px;">
        <h1>Hola, bienvenido al bestiario online.</h1>
        <p>Esta es nuestra página informativa sobre Monster Hunter y todo su contenido, espero que te sea de gran ayuda</p>
    </div>
</div>

<div class="container">
    <h2>Estos son los avistamientos registrados</h2>
    <table class="table">
        <thead style="background-color: black; color: white;">
        <tr>
            <th scope="col">Nombre del Monstruo</th>
            <th scope="col">Zona</th>
            <th scope="col">Fecha</th>
            <th scope="col">Cazador</th>
            <th></th>
            <th></th>
        </tr>
        </thead>
        <tbody style="background-color: grey;">
        <?php

        while($fila = $resultado->fetch_assoc()){
            $zona = $fila['zona'];
            $fecha = date('Y-m-d');
            $especie = $fila['especie'];
            $usuario = $fila['usuario'];

            echo "<tr>";
            echo "<td scope='row'>$especie</td>";
            echo "<td scope='row'>$zona</td>";
            echo "<td scope='row'>$fecha</td>";
            echo "<td scope='row'>$usuario</td>";
            echo "<td scope='row'><a href='modificar.php?id=$fila[id]'><button type='button' class='btn btn-primary'>Editar</button></a></td>";
            echo "<td scope='row'><a href='eliminar.php?id=$fila[id]'><button type='button' class='btn btn-primary'>Eliminar</button></a></td>";
            echo "</tr>";
        }
        ?>
        </tbody>
    </table>
    
</div>
</body>
</html>