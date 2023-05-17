<<<<<<< HEAD
<!doctype html>
<html lang="es">
	<head>
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		
		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="css/bootstrap.min.css">
		
		<title>Club Deportivo La Venta</title>
	</head>
	<body>
	
	<?php
    require "conexion.php";
    $id=$_GET['id'];
    $sql="DELETE FROM avistamientos where ID=$id";
    $resultado=$mysqli->query($sql);
    if($resultado>0){
        echo "<br><p class='alert alert-primary'>REGISTRO ELIMINADO</p>";
		echo "<a href='index.php' class='btn btn-primary'>Regresar</a>";
    } else {
        echo "Error al eliminar";
        echo "";
    }
	?>

	</body>
</html>
=======
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

    while($fila = $resultado->fetch_assoc()){
        $contra=$fila['contra'];
    }

    while($fila = $resultado2->fetch_assoc()){
        $nom=$fila['nombre'];
    }
    if ($nombre==$nom){

        if ($contraseña==$contra) {
            header('Location: menuadmin.php');
        } else {
            echo '<script language="javascript">alert("Datos de inicio incorrectos");</script>';
            echo "Vaya, parece que hemos tenido un pequeño problema, pero no se preocupe que no es nada malo"
            ?>
            <br><a href="login.php">Volver a intentarlo</a>
            <?php
        }

    }else{
        
        if ($contraseña==$contra) {
            header('Location: menu.php');
        } else {
            echo '<script language="javascript">alert("Datos de inicio incorrectos");</script>';
            echo "Vaya, parece que hemos tenido un pequeño problema, pero no se preocupe que no es nada malo"
            ?>
            <br><a href="login.php">Volver a intentarlo</a>
            <?php
        }
    }
?>  
>>>>>>> menu
