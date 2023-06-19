<?php
	$idusu=$_GET['idusu'];
	$id_avis=$_GET['id'];
	require('conexion.php');
	$sql="SELECT * FROM avistamientos where id_avis='$id_avis'";
	$resultado=$mysqli->query($sql);

	while ($fila = $resultado->fetch_assoc()) {
		$id_usuario = $fila['id_usuario'];
		$id_especie = $fila['id_especie'];
		$zona = $fila['zona'];
		$fecha = $fila['fecha'];
	}

	$sql="SELECT * FROM tipos";
	$resultado2 = $mysqli->query($sql);

?>

<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" type="text/css" href="../estilos/micss.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bestiario Online</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container">
    <form action="modificar2.php" method="GET">
	<br>
	<br>
	<br>
	<br>
							<label for=""><p>Especie del monstruo:</p>
							<select name="especie" id="">
							<?php
							while ($fila = $resultado2->fetch_assoc()) {
								echo "<option value=", $fila['id'], ">", $fila['especie'], "</option>";
							}
							?>
							</select>
							<br>
							<label><p>Elige un lugar para cambiar</p>
							

							<?php

							echo "<select name='zona' value='$zona'>";
							 if($zona=='Templo_Olvidado'){
							    echo "<option selected value='Templo_Olvidado'>Templo_Olvidado</option>";
							 } else {
								echo "<option value='Templo_Olvidado'>Templo_Olvidado</option>";
							 }
							 if($zona=='Islas_Heladas'){
							    echo "<option selected value='Islas_Heladas'>Islas_Heladas</option>";
							 } else {
								echo "<option value='Islas_Heladas'>Islas_Heladas</option>";
							 }
							 if($zona=='Bosque_Inundado'){
							    echo "<option selected value='Bosque_Inundado'>Bosque_Inundado</option>";
							 } else {
								echo "<option value='Bosque_Inundado'>Bosque_Inundado</option>";
							 }
							 if($zona=='Llanos_Arenosos'){
							    echo "<option selected value='Llanos_Arenosos'>Llanos_Arenosos</option>";
							 } else {
								echo "<option value='Llanos_Arenosos'>Llanos_Arenosos</option>";
							 }
							 if($zona=='Grutas_Lava'){
								echo "<option selected value='Grutas_Lava'>Grutas_Lava</option>";
							 } else {
								echo "<option value='Grutas_Lava'>Grutas_Lava</option>";
							 }
							echo "</select>";

							?>
                            <input type="hidden" name="id" value="<?php echo $id_avis ?>">
							<input type="hidden" name="idusu" value="<?php echo $idusu ?>">
							<input type="submit" value="Guardar">

						</form>
                                
	</div>
</body>
</html>