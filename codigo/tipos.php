<?php

	require('conexion.php');
	$sql="SELECT * FROM tipos";
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
        <h2>Tabla de tipos</h2>
        
        <table>
				<thead>
					<tr>
						<th>Especie</th>
						<th>Debilidad</th>
						<th>Fortaleza</th>
						<th>Definicion</th>
						<th>Arma ideal</th>
					</tr>
				</thead>
				<tbody>
					<?php

						 while($fila = $resultado->fetch_assoc()){
							
							echo "<tr>";
							echo "<td>$fila[especie]</td>";
							echo "<td>$fila[debilidad]</td>";
							echo "<td>$fila[fortaleza]</td>";
                            echo "<td>$fila[definicion]</td>";
                            echo "<td>$fila[arma]</td>";
							echo "</tr>";
						}
						
					?>
				</tbody>
			</table>

    </main>
    <footer>
    </footer>
</body>
</html>