<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>

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
    if ($nombre==NULL){
            ?>
                <div class="alert alert-success container" role="alert">
                    <br><h4 class="alert-heading">No, por ahi no es.</h4>
                    <br><h4 class="alert-heading">debes ingresar un nombre y una contraseña.</h4>
                    <br><a href="login.php"><button type="button" class="btn btn-primary">Esta vez lo hare bien</button></a>
                </div>
            
            <?php
    } else {
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
            ?>
		    <div class="alert alert-success container" role="alert">
		    	<br><h4 class="alert-heading">Vaya, parece que hemos tenido un pequeño problema, pero no se preocupe que no es nada malo</h4>
		    	<br><a href="login.php"><button type="button" class="btn btn-primary">Volver a intentarlo</button></a>
            </div>
            
            <?php
        }
    }
    
?>  