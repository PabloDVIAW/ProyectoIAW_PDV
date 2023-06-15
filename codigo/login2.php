<link rel="stylesheet" type="text/css" href="../estilos/micss.css">
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <?php
require 'conexion.php';
$nombre = $_GET['nombre'];
$contra = $_GET['contraseña'];
$encontrado = false;
$sql = "Select * from usuarios where usuario='$nombre'";

$resultado = $mysqli->query($sql);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estiloinicio.css">
    <title>Bestiario Online</title>
    <link rel="icon" href="images/Acero.ico" type="image/png">
</head>

<body>
    <div class="container">
        <?php
        while (($fila = $resultado->fetch_assoc())) {
            $hash = $fila['contra'];

            if (password_verify($contra, $hash)) {
                $encontrado = true;
                session_start();
                $_SESSION["nombre"] = $nombre;


                header("Location:index.php");
            } else {
                ?>
                <p class="alert alert-danger">Error, usuario o contraseña incorrecta</p>
                echo '<a href="login.php">Volver al login</a>';
                <?php
            }
        }


        ?>
    </div>

</body>

</html>