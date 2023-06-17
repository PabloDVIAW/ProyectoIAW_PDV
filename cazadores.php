<?php
session_start();
$nombre=$_SESSION['usuario'];

require('conexion.php');
$sql = "SELECT * FROM usuarios";
$resultado = $mysqli->query($sql);
$rango = "SELECT tipo_user FROM usuarios WHERE usuario LIKE '$nombre'";
$resultado2 = $mysqli->query($rango);
$fila = $resultado2->fetch_assoc();
$tipoUser = $fila['tipo_user'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" type="text/css" href="../estilos/micss.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bestiario Online</title>
    <link rel="stylesheet" type="text/css" href="../estilos/micss.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</head>
<div class="box">
<body>
    <div class="container" style="padding-top: 20px;">
        <h1>Hola, bienvenido al bestiario online.</h1>
        <p>Esta es nuestra página informativa sobre monster hunter y todo su contenido, espero que te sea de gran ayuda</p>
    </div>
</div>

<?php
if ($tipoUser == "Administrador") {
?>
    <div class="container">
        
        <h2>Estos son los cazadores del gremio</h2>
        <table class="table">
            <thead style="background-color: black; color: white;">
                <tr>
                    <th scope="col">Identificacion</th>
                    <th scope="col">Nombre</th>
                    <th></th>
                    <th></th>
                    <th></th>
                </tr>
            </thead>
            <tbody style="background-color: grey;">
                <?php
                while ($fila = $resultado->fetch_assoc()) {
                    echo "<tr>";
                    echo "<td scope='row'>$fila[id]</td>";
                    echo "<td scope='row'>$fila[usuario]</td>";
                    echo "<td scope='row'><a href='avistamientos.php?id=$fila[id]'><button type='button' class='btn btn-primary'>Ver avistamientos</button></a></td>";
                    echo "<td scope='row'><a href='modificar.php?id=$fila[id]'><button type='button' class='btn btn-primary'>Editar</button></a></td>";
                    echo "<td scope='row'><a href='eliminar.php?id=$fila[id]'><button type='button' class='btn btn-primary'>Eliminar</button></a></td>";
                    echo "</tr>";
                }
                ?>
            </tbody>
        </table>
    </div>
<?php
} else {
?>
    <div class="container">
        <h2>Estos son los cazadores del gremio</h2>
        <table class="table">
            <thead style="background-color: black; color: white;">
                <tr>
                    <th scope="col">Identificacion</th>
                    <th scope="col">Nombre</th>
                    <th></th>
                </tr>
            </thead>
            <tbody style="background-color: grey;">
                <?php
                while ($fila = $resultado->fetch_assoc()) {
                    echo "<tr>";
                    echo "<td scope='row'>$fila[id]</td>";
                    echo "<td scope='row'>$fila[usuario]</td>";
                    echo "<td scope='row'><a href='avistamientos.php?id=$fila[id]'><button type='button' class='btn btn-primary'>Ver avistamientos</button></a></td>";
                    echo "</tr>";
                }
                ?>
            </tbody>
        </table>
    </div>
<?php
}
?>
    <div class="container d-flex justify-content-between bd-highlight mb-3">
        <p><a href="index.php" name="btn"><button type="button" class="btn btn-primary">Volver</button></a></p>
    </div>
</body>
</div>
</html>