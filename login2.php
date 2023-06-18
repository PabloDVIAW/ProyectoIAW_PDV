<link rel="stylesheet" type="text/css" href="../estilos/micss.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>

<?php
$nombre=$_POST["nombre"];
$contraseña=$_POST["contraseña"];

require "conexion.php";
$verif= "SELECT * FROM usuarios where usuario like '$nombre'";
$resultado = $mysqli->query($verif);
$verif2= "SELECT usuario FROM usuarios where contra like '$contraseña'";
$resultado2 = $mysqli->query($verif2);
$nom='';
    
    while($fila = $resultado->fetch_assoc()){
        $hash = $fila['contra'];
            echo $hash;

            if (password_verify($contraseña, $hash)) {
                $encontrado = true;
                
                session_start();
                $_SESSION["usuario"] = $nombre;
                $_SESSION["id_usuario"] = $fila['id'];

                header('Location: principal.php');
            }   
    }  
    ?>
                    <body>
                        <div class="alert alert-success container" role="alert">
                            <br><h4 class="alert-heading">LogIn incorrecto.</h4>
                            <br><a href="index.php"><button type="button" class="btn btn-primary">Esta vez lo hare bien</button></a>
                        </div>
                    </body>