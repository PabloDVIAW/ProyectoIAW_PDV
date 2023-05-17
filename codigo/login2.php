<?php
$nombre=$_GET["nombre"];
$contraseña=$_GET["contraseña"];

// echo $nombre;
// echo $contraseña;

require "conexion.php";
$verif= "SELECT contra FROM usuarios where nombre like '$nombre'";
$resultado = $mysqli->query($verif);
$verif2= "SELECT nombre FROM usuarios where contra like '$contraseña'";
$resultado2 = $mysqli->query($verif2);
$nom='';
    while($fila = $resultado->fetch_assoc()){
        $contra=$fila['contra'];
    }

    while($fila = $resultado2->fetch_assoc()){
        $nom=$fila['nombre'];
    }
    if ($nombre==$nom && $contraseña==$contra){
        if($nom=="Administrador"){
            if ($contraseña==$contra) {
                header('Location: menuadmin.php');
            }
        } else{
            if ($contraseña==$contra) {
                header('Location: menu.php');
            }
        }
    }else{
        echo '<script language="javascript">alert("Datos de inicio incorrectos");</script>';
        echo "Vaya, parece que hemos tenido un pequeño problema, pero no se preocupe que no es nada malo"
        ?>
        <br><a href="login.php">Volver a intentarlo</a>
        <?php
    }
    
?>  