<?php
require 'conexion.php';
$zona=$_GET['zona'];
$nombre=$_GET['nombre'];
$date = date('Y-m-d');

$sql = "INSERT INTO `avistamientos` (`id`, `nom_mon`, `zona`, `fecha`) VALUES (NULL, '$nombre', '$zona', '$date');";
	$resultado = $mysqli->query($sql);
    if($resultado>0){
        echo "<br><p>REGISTRO AGREGADO</p>";
		echo "<a href='menuadmin.php' class='btn btn-primary'>Regresar</a>";
    }else{
        echo "<p>ERROR al insertar registro</p>";
        echo "<p><a href='index.php'>Regresar</a></p>";
    }


?>