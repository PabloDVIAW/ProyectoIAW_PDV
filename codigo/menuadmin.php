<?php

	require('conexion.php');
	$sql="SELECT * FROM avistamientos";
	$resultado=$mysqli->query($sql)
	
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
<body style="background-image: url('../imagenes/fondogremio.jpg');">
    <header>
	<div class="container">
    <h1 class="display-1">Bienvenido al bestiario online</h1>
	</div>
	<!-- el header contará con un fondo de los paisajes de los juegos y un icono del gremio de los cazadores -->
    </header>
    <main>
        <div class="container">
		<h2>Estos son los avistamientos registrados</h2>
        <table class="table">
				<thead style="background-color: black; color: white;">
					<tr>
						<th scope="col">Nombre Monstruo</th>
						<th scope="col">Zona</th>
						<th scope="col">Fecha ocurrida</th>
						<th scope="col"></th>
						<th scope="col"></th>
					</tr>
				</thead>
				<tbody style="background-color: grey;">
					<?php

						 while($fila = $resultado->fetch_assoc()){
							
							echo "<tr>";
							echo "<td scope='row'>$fila[nom_mon]</td>";
							echo "<td scope='row'>$fila[zona]</td>";
							echo "<td scope='row'>$fila[fecha]</td>";
							echo "<td scope='row'><a href='modificar.php?id=$fila[id]'><button type='button' class='btn btn-primary'>Editar</button></a></td>";
							echo "<td scope='row'><a href='eliminar.php?id=$fila[id]'><button type='button' class='btn btn-primary'>Eliminar</button></a></td>";
							echo "</tr>";
						}
						
					?>
				</tbody>
			</table>
			</div>

			<div  class="container d-flex justify-content-between bd-highlight mb-3">
				
				<p><a href="agregar.php" name="btn"><button type="button" class="btn btn-primary">Agregar</button></a></p>
			
				<p><a href="login.php" name="btn"><button type="button" class="btn btn-primary">Volver</button></a></p>
				
				<p><a href="tipos.php" name="btn"><button type="button" class="btn btn-primary">Ver la tabla informativa</button></a></p>
				
			</div>
        <!-- la tabla dispondrá de 3 campos: nombre de la criatura, lugar de avistamiento y hora del registro-->
        <!-- el fonbdo constará de un estampado de escamas verdes -->


    </main>
    <footer>
        <!-- Icono de las redes sociales, correo y nombre junto a un fondo negro/azul marino -->
    </footer>
</body>
</html>