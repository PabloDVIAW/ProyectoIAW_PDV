<?php

$id=$_GET['id'];
require('conexion.php');
$sql="SELECT * FROM tipos where id='$id'";
$resultado=$mysqli->query($sql);

while ($fila = $resultado->fetch_assoc()) {
    $especie=$fila['especie'];
    $debilidad=$fila['debilidad'];
    $fortaleza=$fila['fortaleza'];
    $definicion=$fila['definicion'];
    $arma=$fila['arma'];
}

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
				<h1>Elige una especie</h1>
                <br>
						<form action="ed_esp2.php" method="GET">
							<label for=""><p>Nombre de especie: <input type="text" name="nombre" value=" <?php echo $especie ?>"></p></label>
							<br>
                            <label for=""><p>Descripción: <input type="text" name="definicion" maxlength="50" value=" <?php echo $definicion ?>"></p></label>
                            <br>
                            <label><p>Elige una debilidad porfavor</p>
							<?php
								echo "<select name='debilidad' value='$debilidad'>";
								if($debilidad=='Fuego'){
									echo "<option selected value='Fuego'>Fuego</option>";
								} else {
									echo "<option value='Fuego'>Fuego</option>";
								}
								if($debilidad=='Hielo'){
									echo "<option selected value='Hielo'>Hielo</option>";
								} else {
									echo "<option value='Hielo'>Hielo</option>";
								}
								if($debilidad=='Agua'){
									echo "<option selected value='Agua'>Agua</option>";
								} else {
									echo "<option value='Agua'>Agua</option>";
								}
								if($debilidad=='Viento'){
									echo "<option selected value='Viento'>Viento</option>";
								} else {
									echo "<option value='Viento'>Viento</option>";
								}
								echo "</select>";
							?>
                            </label>
                            <br>
                            <label><p>Elige una fortaleza porfavor</p>
							<?php

								echo "<select name='fortaleza' value='$fortaleza'>";
								if($fortaleza=='Fuego'){
									echo "<option selected value='Fuego'>Fuego</option>";
								} else {
									echo "<option selected value='Fuego'>Fuego</option>";
								}
								if($fortaleza=='Hielo'){
									echo "<option value='Hielo'>Hielo</option>";
								} else {
									echo "<option value='Hielo'>Hielo</option>";
								}
								if($fortaleza=='Agua'){
									echo "<option value='Agua'>Agua</option>";
								} else {
									echo "<option value='Agua'>Agua</option>";
								}
								if($fortaleza=='Viento'){
									echo "<option value='Viento'>Viento</option>";
								} else {
									echo "<option value='Viento'>Viento</option>";
								}
								echo "</select>";
							?>
                            </label>
                            <br>
                            <label><p>Elige un arma</p>

							<?php

								echo "<select name='arma' value='$arma'>";
								if($arma=='Espada'){
									echo "<option selected value='Espada'>Espada</option>";
								} else {
									echo "<option value='Espada'>Espada</option>";
								}
								if($arma=='Espadalarga'){
									echo "<option selected value='Espadalarga'>Espadalarga</option>";
								} else {
									echo "<option value='Espadalarga'>Espadalarga</option>";
								}
								if($arma=='Martillo'){
									echo "<option selected value='Martillo'>Martillo</option>";
								} else {
									echo "<option value='Martillo'>Martillo</option>";
								}
								if($arma=='Glaive'){
									echo "<option selected value='Glaive'>Glaive</option>";
								} else {
									echo "<option value='Glaive'>Glaive</option>";
								}
								echo "</select>";
							?>

                            </label>
							<br>

							<input type="submit" value="Modificar" class='btn btn-primary' style="margin-top: 20px;">

                            <input type="hidden" value="<?php echo $id ?>" name="id">
							<br>
							<a href='especies.php' class='btn btn-primary' style="margin-top: 20px;">Regresar</a>
						</form>
	</div>
	</body>
</html>	