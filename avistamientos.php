<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $nombre=$_GET['nombre'];
    ?>
    <div class="container" style="padding-top: 20px;">
        <h1>Hola, bienvenido al bestiario online.</h1>
        <p style="margin: 20px;">Esta es nuestra página informativa sobre monster hunter y todo su contenido, espero que te sea de gran ayuda</p>
    
    </div>
</div>
            <div class="container">
                <h2>Estos son los avistamientos registrados</h2>
                <table class="table">
                        <thead style="background-color: black; color: white;">
                            <tr>
                                <th scope="col">Nombre del Monstruo</th>
                                <th scope="col">zona</th>
                                <th scope="col">fecha</th>
                                <th scope="col">Cazador</th>
                                <th></th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody style="background-color: grey;">
                            <?php
                            while($fila = $resultado->fetch_assoc()){
                                    $zona=$fila['zona'];
                                    $fecha=$fila['fecha'];
                                    $especie=$fila['especie'];
                                    $usuario=$fila['usuario'];
                                    echo "<td scope='row'><a href='modificar.php?id=$fila[id]'><button type='button' class='btn btn-primary'>Editar</button></a></td>";
                                    echo "<td scope='row'><a href='eliminar.php?id=$fila[id]'><button type='button' class='btn btn-primary'>Eliminar</button></a></td>";
                            }                                
                            ?>
                        </tbody>
                    </table>
			</div>
</body>
</html>