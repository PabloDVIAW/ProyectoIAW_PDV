

<?php
$id=$_GET['id'];
?>

<!doctype html>
<html lang="es">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link rel="stylesheet" type="text/css" href="../estilos/micss.css">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>


	<title>Bestiario Online</title>
</head>

<body>
	<div class="container">
  <h1 >Editar Usuario</h1>
  <form method="GET" action="ed_caz2.php">
    <label>Nuevo nombre de usuario: <input type="text" name="nombre" required></label>
	<input type="hidden" name="id" value="<?php echo $id ?>">
    <br>
    <input type="submit" value="Actualizar" type="button" class="btn btn-primary" style="margin-top: 20px;">
  </form>
  <a href='cazadores.php?' class='btn btn-primary' style="margin-top: 20px;">Regresar</a>
	</div>
  </body>

</html>