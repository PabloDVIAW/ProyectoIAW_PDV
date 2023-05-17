<!doctype html>
<html lang="es">
	<head>
		<title>Bestiario Online</title>
	</head>
	<body>
	<?php
	?>
				<h1>Lugares donde lo pudiste encontrar</h1>
						<form action="agregar2.php" method="GET">
							<label for=""><p>Nombre del monstruo: <input type="text" name="nombre"></p></label>
							<!-- Categoría -->
							<label><p>Elige un lugar porfavor</p>
							<select name="zona" id="" >
								<option value="Templo_Olvidado">Templo_Olvidado</option>
								<option value="Islas_Heladas">Islas_Heladas</option>
								<option value="Bosque_Inundado">Bosque_Inundado</option>
								<option value="Llanos_Arenosos">Llanos_Arenosos</option>
								<option value="Grutas_Lava">Grutas_Lava</option>
							</select></label>
							<input type="hidden" value="<?php $date ?>" name="fecha">
							<!-- Registrar -->
							<input type="submit" value="Guardar">
						</form>
	</body>
</html>	