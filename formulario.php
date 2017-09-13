<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" href="css/bootstrap.css">
</head>
<body>

<div class="container"> 
	<div class="row">
		<div class="col-md-6 well">
			<h3>Alumno</h3>
			<form action="procesar.php" method="POST">
				Nombre: <br>
				<input type="text" name="nombre"> <br>
				Apellido <br>
				<input type="text" name="apellido"> <br>
				RUT: <br>
				<input type="text" name="rut"> <br> <br>
				<input type="hidden" name="alumno_formulario">
				<input type="submit" class="btn btn-success"> 
			</form>
		</div>

		<div class="col-md-6 well">
		<h3>Ramo</h3>
			<form action="procesar.php" method="POST">
    			Ramo: <br>
				<input type="text" name="ramo"> <br>
				Nota: <br>
				<input type="text" name="nota"> <br>
				RUT: <br>
				<input type="text" name="rut"> <br> <br>
				<input type="hidden" name="ramo_formulario">
				<input type="submit" class="btn btn-danger">
			</form>
		</div>
	</div>

	<div class="row">
		<div class="col-md-12">
			<button class="btn btn-succes btn-lg" onclick="procesarDatoAlumnos()">Consulta Alumnos</button>
		</div>
	</div>

</div>

<script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>	
<script type="text/javascript" src="js/bootstrap.js"> </script>

<script>
	function procesarDatoAlumnos(argument) {
		$.ajax({
			method: "POST",
			url: "ajax.php",
			data: { juanito: "Jhon Salchichon" }
		})
			.done(function( msg ) {
				alert( "Mi Nombre Es: " + msg);
			});
	}
</script>	

</body>
</html>