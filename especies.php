<?php

	require('conexion.php');
	$sql="SELECT * FROM tipos";
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
    <header>
	<div class="container">
    <h1 class="display-1">Bienvenido al bestiario online</h1>
	</div>
    </header>
    <main>
        <div class="container">
		<h2>Estas son las especies registradas</h2>
        <table class="table">
				<thead style="background-color: black; color: white;">
					<tr>
						<th scope="col">Especie</th>
						<th scope="col">Debilidad</th>
						<th scope="col">Fortaleza</th>
						<th scope="col">Definicion</th>
						<th scope="col">Arma</th>
						<th></th>
						<th></th>
					</tr>
				</thead>
				<tbody style="background-color: grey;">
					<?php

						 while($fila = $resultado->fetch_assoc()){
							
							echo "<tr>";
							echo "<td scope='row'>$fila[especie]</td>";
							echo "<td scope='row'>$fila[debilidad]</td>";
							echo "<td scope='row'>$fila[fortaleza]</td>";
							echo "<td scope='row'>$fila[definicion]</td>";
                            echo "<td scope='row'>$fila[arma]</td>";
							echo "<td scope='row'><a href='ed_esp.php?id=$fila[id]'><button type='button' class='btn btn-primary'>Editar</button></a></td>";
							echo "<td scope='row'><a href='del_esp.php?id=$fila[id]'><button type='button' class='btn btn-primary'>Eliminar</button></a></td>";
							echo "</tr>";
						}
						
					?>
				</tbody>
			</table>
			</div>

			<div  class="container d-flex justify-content-between bd-highlight mb-3">
				
				<p><a href="reg_esp.php" name="btn"><button type="button" class="btn btn-primary">Agregar</button></a></p>
			
				<p><a href="login.php" name="btn"><button type="button" class="btn btn-primary">Volver</button></a></p>
				
				
			</div>
    </main>
    <footer>
    </footer>
</body>
</html>