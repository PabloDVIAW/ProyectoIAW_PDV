<?php
session_start();
$nombre=$_SESSION['usuario'];
?>

<!doctype html>
<html lang="es">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link rel="stylesheet" type="text/css" href="../estilos/micss.css">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>


	<title>Bestiario Online</title>
</head>

<body>
	<?php
	require 'conexion.php';
	$idusu=$_GET['idusu'];
    $zona=$_GET['zona'];
    $id_especie=$_GET['especie'];
    $fecha=date('Y-m-d');
    $id=$_GET['id'];
	 
	$sql = "UPDATE avistamientos SET id_usuario='$idusu', id_especie='$id_especie', zona='$zona', fecha='$fecha' WHERE id_avis='$id'";

	$resultado = $mysqli->query($sql);

	if ($resultado > 0) {
		?>
		<body>
			<div class="alert alert-success container" role="alert">
			<br><h4 class="alert-heading">REGISTRO MODIFICADO</h4>
			<a href='avistamientos.php?id=<?php echo $idusu ?>' class='btn btn-primary'>Regresar</a>
		</div>
		
		</body>
		<?php
	} else {
		echo "<p>ERROR al editar registro</p>";
		echo "<p><a href='especies.php'>Regresar</a></p>";
	}

	?>
</body>

</html>