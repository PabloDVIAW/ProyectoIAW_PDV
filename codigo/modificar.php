<?php

	$id=$_GET['id'];
	require('conexion.php');
	$sql="SELECT * FROM avistamientos where id like $id";
	$resultado=$mysqli->query($sql);

	while($fila = $resultado->fetch_assoc()){
		$nombre=$fila['nom_mon'];
		$zona=$fila['zona'];
		$fecha=$fila['fecha'];
	}
	
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
    
    <?php ?>
    <form action="modificar2.php" method="GET">
							<label><p>Nombre del monstruo: <input type="text" name="nombre" value="<?php echo $nombre ?>"></p></label>
							<label><p>Elige un lugar para cambiar</p>
							
                            <p>Categoría</p>
							
							<?php if($zona=='Templo_Olvidado'){
							
							echo "<select name='categoria' value='<?php echo $zona ?>' id='' >";
							    echo "<option selected value='Templo_Olvidado'>Templo_Olvidado</option>";
								echo "<option value='Islas_Heladas'>Islas_Heladas</option>";
								echo "<option value='Bosque_Inundado'>Bosque_Inundado</option>";
								echo "<option value='Llanos_Arenosos'>Llanos_Arenosos</option>";
								echo "<option value='Grutas_Lava'>Grutas_Lava</option>";
							echo "</select>";
							} else if($zona=='Islas_Heladas') {
							echo "<select name='zona' value='<?php echo $zona ?>' id='' >";
							    echo "<option value='Templo_Olvidado'>Templo_Olvidado</option>";
								echo "<option selected value='Islas_Heladas'>Islas_Heladas</option>";
								echo "<option value='Bosque_Inundado'>Bosque_Inundado</option>";
								echo "<option value='Llanos_Arenosos'>Llanos_Arenosos</option>";
								echo "<option value='Grutas_Lava'>Grutas_Lava</option>";
							echo "</select>";
							} else if($zona=='Bosque_Inundado') {
                            echo "<select name='zona' value='<?php echo $zona ?>' id='' >";
                                echo "<option value='Templo_Olvidado'>Templo_Olvidado</option>";
								echo "<option value='Islas_Heladas'>Islas_Heladas</option>";
								echo "<option selected value='Bosque_Inundado'>Bosque_Inundado</option>";
								echo "<option value='Llanos_Arenosos'>Llanos_Arenosos</option>";
								echo "<option value='Grutas_Lava'>Grutas_Lava</option>";
                            echo "</select>";
                            } else if($zona=='Llanos_Arenosos') {
                            echo "<select name='zona' value='<?php echo $zona ?>' id='' >";
                                echo "<option value='Templo_Olvidado'>Templo_Olvidado</option>";
								echo "<option value='Islas_Heladas'>Islas_Heladas</option>";
								echo "<option value='Bosque_Inundado'>Bosque_Inundado</option>";
								echo "<option selected value='Llanos_Arenosos'>Llanos_Arenosos</option>";
								echo "<option value='Grutas_Lava'>Grutas_Lava</option>";
                            echo "</select>";
                            } else if($zona=='Grutas_Lava') {
                            echo "<select name='zona' value='<?php echo $zona ?>' id='' >";
                                echo "<option value='Templo_Olvidado'>Templo_Olvidado</option>";
								echo "<option value='Islas_Heladas'>Islas_Heladas</option>";
								echo "<option value='Bosque_Inundado'>Bosque_Inundado</option>";
								echo "<option value='Llanos_Arenosos'>Llanos_Arenosos</option>";
								echo "<option selected value='Grutas_Lava'>Grutas_Lava</option>";
                            echo "</select>";
                            }
							?>
                            <input type="hidden" name="id" value="<?php echo $id; ?>">
							<input type="submit" value="Guardar">

						</form>
                                

</body>
</html>