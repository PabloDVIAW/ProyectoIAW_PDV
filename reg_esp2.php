<?php

	require('conexion.php');
	$sql="SELECT * FROM tipos";
	$resultado=$mysqli->query($sql);
	
?>

<!doctype html>
<html lang="es">
	<head>

		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<link rel="stylesheet" type="text/css" href="../estilos/micss.css">
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<title>Bestiario Online</title>
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>

	</head>
<body>
    <?php
require('conexion.php');	
$nombre=$_GET['nombre'];
$debilidad = $_GET['debilidad'];
$fortaleza = $_GET['fortaleza'];
$desc=$_GET['descrip'];
$arma = $_GET['arma'];
$si='';

while ($fila = $resultado->fetch_assoc()) {
    if ($fila['especie'] == $nombre) {
        $si = 1;
    }
}
    if ($si==1){
            ?>    
            <body>
                <div class="alert alert-success container" role="alert">
                    <br><h4 class="alert-heading">Ya tenemos una especie con ese nombre</h4>
                    <br><a href="reg_esp.php"><button type="button" class="btn btn-primary">Volver a probar</button></a>
                </div>
            </body>
            <?php

        } else {
            
        $sql = "INSERT INTO `tipos` (`id`, `especie`, `debilidad`, `fortaleza`, `definicion`, `arma`) VALUES (NULL, '$nombre', '$debilidad', '$fortaleza', '$desc', '$arma');";
        $resultado2 = $mysqli->query($sql);
        if($resultado2>0){
            ?>
            <body>
                <div class="alert alert-success container" role="alert">
                <br><h4 class="alert-heading">Se ha agregado la especie</h4>
                <a href='especies.php' class='btn btn-primary'>Regresar</a>
            </div>
            </body>
            <?php
        }else{
            echo "<p>ERROR al insertar registro</p>";
            echo "<p><a href='especies.php'>Regresar</a></p>";
        }

    }

    

?>

	
</body>