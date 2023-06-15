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
<body>
<div class="container">
<header class="menucab">
	<div class="container">
    <h1 class="display-1">Bienvenido al bestiario online</h1>
	</div>

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
						<th></th>
						<th></th>
					</tr>
				</thead>
				<tbody style="background-color: grey;">
					<?php

						 while($fila = $resultado->fetch_assoc()){
							
							echo "<tr>";
							echo "<td scope='row'>$fila[nom_mon]</td>";
							echo "<td scope='row'>$fila[zona]</td>";
							echo "<td scope='row'>$fila[fecha]</td>";
							echo "</tr>";
						}
						
					?>
				</tbody>
			</table>
		</div>
			<div class="container d-flex justify-content-between bd-highlight mb-3">
					<a href="login.php" name="btn"><button type="button" class="btn btn-primary">Volver</button></a>
					<p class="col-sm"></p>
					<a href="tipos.php" name="btn"><button type="button" class="btn btn-primary">Ver la tabla informativa</button></a>
			</div>
    </main>
	</div>
</body>

</html>