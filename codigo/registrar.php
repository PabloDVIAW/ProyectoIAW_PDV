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
				<h1>Crea tu nuevo usuario</h1>
                <br>
						<form action="registrar2.php" method="GET">
							<label for=""><p>Nombre de Usuario: <input type="text" name="nombre" require></p></label>
							<br>
                            <label for=""><p>Contraseña: <input type="password" name="contra"></p></label>
                            <br>
							<input type="submit" value="Registrar">
						</form>
	</div>
	</body>
</html>	