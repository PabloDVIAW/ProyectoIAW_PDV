<?php

	require('conexion.php');
	// $sql="SELECT * FROM avistamientos";
	// $resultado=$mysqli->query($sql);
    $sql = "Select * from avistamientos, usuarios, tipos where avistamientos.id_usuario=usuarios.id and avistamientos.id_especie=tipos.id";
    $resultado = $mysqli->query($sql);
    session_start();
    $nombre=$_SESSION['usuario'];
	
?>

<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" type="text/css" href="../estilos/micss.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bestiario Online</title>
    <link rel="stylesheet" type="text/css" href="../estilos/micss.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</head>
<div class="box">
<body>
    <div class="container" style="padding-top: 20px;">
        <h1>Hola, bienvenido al bestiario online.</h1>
        <p style="margin: 20px;">Esta es nuestra página informativa sobre monster hunter y todo su contenido, espero que te sea de gran ayuda</p>
    
    </div>
</div>
            <div class="container">
                <h2>Estos son los avistamientos registrados</h2>
                <table class="table">
                        <thead style="background-color: black; color: white;">
                            <tr>
                                <th scope="col">Nombre del Monstruo</th>
                                <th scope="col">fecha</th>
                                <th scope="col">zona</th>
                                <th scope="col">Cazador</th>


                            </tr>
                        </thead>
                        <tbody style="background-color: grey;">
                            <?php
                            while($fila = $resultado->fetch_assoc()){
                                    echo "<tr>";
                                    // echo "<td scope='row'>$fila[id_especie]</td>";
                                    // echo "<td scope='row'>$fila[fecha]</td>";
                                    // echo "<td scope='row'>$fila[zona]</td>";
                                    // echo "<td scope='row'>$fila[id_usuario]</td>";
                                    echo "<td scope='row'>$fila[especie]</td>";
                                    echo "<td scope='row'>$fila[fecha]</td>";
                                    echo "<td scope='row'>$fila[zona]</td>";
                                    echo "<td scope='row'>$fila[usuario]</td>";
                                    echo "</tr>";
                                }
                                
                            ?>
                        </tbody>
                    </table>
                    <?php

    ?>
			</div>
</body>
<footer class="card text-center fixed-bottom" style="background-color: lightblue;">
        <div>
            <div class="card-body">
                <a href="especies.php" class="btn btn-primary">¡Ver especies!</a>
                <a href="cazadores.php" class="btn btn-primary">¡Ver cazadores!</a>
                <a href="cerrarsesion.php" class="btn btn-primary">Cerrar sesion</a>
                
            </div>
        </div>
</footer>
</div>
</html>