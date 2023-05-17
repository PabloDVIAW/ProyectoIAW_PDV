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
    require "conexion.php";
    $id=$_GET['id'];
    $sql="DELETE FROM avistamientos where ID=$id";
    $resultado=$mysqli->query($sql);
    if($resultado>0){
        echo "<br><p class='alert alert-primary'>REGISTRO ELIMINADO</p>";
		echo "<a href='login.php'>Regresar</a>";
    } else {
        echo "Error al eliminar";
        echo "";
    }
	?>

	</body>
</html>