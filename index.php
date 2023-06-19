<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" type="text/css" href="../estilos/micss.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bestiario Online</title>
</head>
<body>
    <div class="container">
        <header>
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
        </header>
        
        <main>
        <div>
        <form action="login2.php" method="POST">
            <h2>Por favor, identifiquese</h2>
            <div class="form-group" class="log" >
                <p><label>Nombre <input type="text" name="nombre" class="form-control"></label></p>
            </div>
            <div class="form-group">
            <p><label>Contraeña <input type="password" name="contraseña" class="form-control"></label></p>
            </div>
            <button type="submit" class="btn btn-warning">Entrar</button>
        </form>
        </div>
        <div>
        <p class="card-text">¿Aún no eres miembro del gremio? ¡Registrate!</p>
                <a href="registrar.php" class="btn btn-primary">¡Quiero unirme!</a>
        </div>
        </main>
        <footer class="card text-center fixed-bottom" style="background-color: lightblue;">
        <section class="buttons">
        
        </section>
        </footer>
    </div>
</body>
</html>