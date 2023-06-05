<!doctype html>
<html lang="es">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="css/bootstrap.min.css">

	<title>Bestiario Online</title>
</head>

<body>
	<?php
	require 'conexion.php';
    $zona=$_GET['zona'];
    $nombre=$_GET['nombre'];
    $date=date('Y-m-d');
    $id=$_GET['id'];
	 
	$sql = "UPDATE avistamientos SET nom_mon='$nombre', zona='$zona', fecha='$date' where id like $id";

	$resultado = $mysqli->query($sql);

	if ($resultado > 0) {
		?>
		<body style="background-image: url('../imagenes/fondogremio.jpg');">
		<br><p class='alert alert-primary'>REGISTRO MODIFICADO</p>;
		<a href='menuadmin.php' class='btn btn-primary'>Regresar</a>;
		</body>
		<?php
	} else {
		echo "<p>ERROR al editar registro</p>";
		echo "<p><a href='menuadmin.php'>Regresar</a></p>";
	}

	?>
</body>

</html>