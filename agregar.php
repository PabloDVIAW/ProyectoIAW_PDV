<?php
session_start();
$nombre=$_SESSION['usuario'];
$id_usuario=$_SESSION['id_usuario'];
echo $id_usuario;
require('conexion.php');
$sql="SELECT * FROM tipos";
$resultado = $mysqli->query($sql);
?>

<!doctype html>
<html lang="es">
	<head>
	<link rel="stylesheet" type="text/css" href="../estilos/micss.css">
		<title>Bestiario Online</title>
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>

	</head>
	<body>
	<?php
	?>
	<div class="container">
				<h1>Lugares donde lo pudiste encontrar</h1>
						<form action="agregar2.php" method="GET">
							<label for=""><p>Especie del monstruo:</p>
							<select name="especie" id="">
							<?php
							while ($fila = $resultado->fetch_assoc()) {
								echo "<option value=", $fila['id'], ">", $fila['especie'], "</option>";
							}
							?>
							</select>
							<br>
							<label><p>Elige un lugar porfavor</p>
							<select name="zona" id="" >
								<option value="Templo_Olvidado">Templo_Olvidado</option>
								<option selected value="Islas_Heladas">Islas_Heladas</option>
								<option value="Bosque_Inundado">Bosque_Inundado</option>
								<option value="Llanos_Arenosos">Llanos_Arenosos</option>
								<option value="Grutas_Lava">Grutas_Lava</option>
							</select></label>
							<input type="submit" value="Guardar">
						</form>
	</div>
	</body>
</html>	