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
				<h1>Añade una especie</h1>
                <br>
						<form action="reg_esp2.php" method="GET">
							<label for=""><p>Nombre de especie: <input type="text" name="nombre" required></p></label>
							<br>
                            <label for=""><p>Descripción: <input type="text" name="descrip" maxlength="50" required></p></label>
                            <br>
                            <label><p>Elige una debilidad porfavor</p>
							<select name="debilidad" id="" >
								<option selected value="Fuego">Fuego</option>
								<option value="Hielos">Hielo</option>
								<option value="Dragon">Agua</option>
								<option value="Viento">Viento</option>
							</select>
                            </label>
                            <br>
                            <label><p>Elige una fortaleza porfavor</p>
							<select name="fortaleza" id="" >
								<option selected value="Fuego">Fuego</option>
								<option value="Hielos">Hielo</option>
								<option value="Dragon">Agua</option>
								<option value="Viento">Viento</option>
							</select>
                            </label>
                            <br>
                            <label><p>Elige un arma</p>
							<select name="arma" id="" >
								<option selected value="Espada">Espada</option>
								<option value="Espadalarga">Espadalarga</option>
								<option value="Martillo">Martillo</option>
								<option value="Glaive">Glaive</option>
							</select>
                            </label>
							<br>
							<input type="submit" value="Registrar">
							<br>
							<a href='especies.php' class='btn btn-primary'>Regresar</a>
						</form>
	</div>
	</body>
</html>	