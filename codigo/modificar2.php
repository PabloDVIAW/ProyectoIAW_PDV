<!doctype html>
<html lang="es">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>


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
		<div class="alert alert-success container" role="alert">
			<br><h4 class="alert-heading">REGISTRO MODIFICADO</h4>
			<a href='menuadmin.php' class='btn btn-primary'>Regresar</a>
		</div>
		
		<?php
	} else {
		echo "<p>ERROR al editar registro</p>";
		echo "<p><a href='menuadmin.php'>Regresar</a></p>";
	}

	?>
</body>

</html>