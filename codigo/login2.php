<?php
$nombre=$_GET["nombre"];
$contraseña=$_GET["contraseña"];

// echo $nombre;
// echo $contraseña;

require "conexion.php";
$verif= "SELECT contra FROM usuarios where nombre like '$nombre'";
$resultado = $mysqli->query($verif);

    while($fila = $resultado->fetch_assoc()){
        $contra=$fila['contra'];
    }

    if ($contraseña==$contra) {
        header('Location: menu.php');
    } else {
        echo "adios";
    }
?>