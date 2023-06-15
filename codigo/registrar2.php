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
require 'conexion.php';
$nombre=$_GET['nombre'];
$contra=$_GET['contra'];
$contraseña = $_GET['contra'];
    $contraseña_segura= password_hash($contra, PASSWORD_DEFAULT);

$sql = "INSERT INTO `usuarios` (`id`, `tipo_user`, `usuario`, `contra`) VALUES (NULL, 'cazador', '$nombre', '$contraseña_segura');";
	$resultado = $mysqli->query($sql);
    if($resultado>0){
        ?>
		<body>
			<div class="alert alert-success container" role="alert">
			<br><h4 class="alert-heading">Te has registrado Satisfactoriamente</h4>
			<a href='menuadmin.php' class='btn btn-primary'>Regresar</a>
		</div>
		</body>
		<?php
    }else{
        echo "<p>ERROR al insertar registro</p>";
        echo "<p><a href='index.php'>Regresar</a></p>";
    }



?>
</body>