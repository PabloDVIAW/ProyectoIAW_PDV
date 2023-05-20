<?php

	require('conexion.php');
	$sql="SELECT * FROM avistamientos";
	$resultado=$mysqli->query($sql)
	
?>

<!DOCTYPE html>
<html lang="en">
    
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bestiario Online</title>
</head>
<body>
    <header>
    <h1>Bienvenido al bestiario online</h1>
    <!-- el header contará con un fondo de los paisajes de los juegos y un icono del gremio de los cazadores -->
    </header>
    <main>
        <h2>Estos son los avistamientos registrados</h2>
        <!-- tabla de los avistamientos recientes -->
        
        <table>
				<thead>
					<tr>
						<th>Nombre Monstruo</th>
						<th>Zona</th>
						<th>Fecha ocurrida</th>
						<th></th>
						<th></th>
					</tr>
				</thead>
				<tbody>
					<?php

						 while($fila = $resultado->fetch_assoc()){
							
							echo "<tr>";
							echo "<td>$fila[nom_mon]</td>";
							echo "<td>$fila[zona]</td>";
							echo "<td>$fila[fecha]</td>";
							echo "<td><a href='modificar.php?id=$fila[id]'>Editar</a></td>";
							echo "<td><a href='eliminar.php?id=$fila[id]'>Eliminar</a></td>";
							echo "</tr>";
						}
						
					?>
				</tbody>
			</table>

			<div>
				<!-- Registrar -->
				<p><a href="agregar.php" name="btn">Agregar</a></p>
				<p><a href="login.php" name="btn">Volver</a></p>
			</div>
        <!-- la tabla dispondrá de 3 campos: nombre de la criatura, lugar de avistamiento y hora del registro-->
        <!-- el fonbdo constará de un estampado de escamas verdes -->


    </main>
    <footer>
        <!-- Icono de las redes sociales, correo y nombre junto a un fondo negro/azul marino -->
    </footer>
</body>
</html>