<?php
require 'conexion.php';
$zona=$_GET['zona'];
$nombre=$_GET['nombre'];
$date = date('Y-m-d');

$sql = "INSERT INTO `avistamientos` (`id`, `nom_mon`, `zona`, `fecha`) VALUES (NULL, '$nombre', '$zona', '$date');";
	$resultado = $mysqli->query($sql);
    if($resultado>0){
        ?>
        <body style="background-image: url('../imagenes/fondogremio.jpg');">
        <br><p>REGISTRO AGREGADO</p>;
		<a href='menuadmin.php' class='btn btn-primary'>Regresar</a>;
        </body>
        <?php
    }else{
        echo "<p>ERROR al insertar registro</p>";
        echo "<p><a href='index.php'>Regresar</a></p>";
    }

// mirar para que cazador no entre en menu admin si da a agregar

?>