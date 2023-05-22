<?php
require 'conexion.php';
$zona=$_GET['zona'];
$nombre=$_GET['nombre'];
$date = date('Y-m-d');

$sql = "INSERT INTO `avistamientos` (`id`, `nom_mon`, `zona`, `fecha`) VALUES (NULL, '$nombre', '$zona', '$date');";
	$resultado = $mysqli->query($sql);
    if($resultado>0){
        ?>
		<div class="alert alert-success container" role="alert">
			<br><h4 class="alert-heading">REGISTRO AGREGADO</h4>
			<a href='menuadmin.php' class='btn btn-primary'>Regresar</a>
		</div>
		
		<?php
    }else{
        echo "<p>ERROR al insertar registro</p>";
        echo "<p><a href='index.php'>Regresar</a></p>";
    }

// mirar para que cazador no entre en menu admin si da a agregar

?>