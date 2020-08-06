<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Formulario</title>
	<link rel="stylesheet" href="css/style.css">
</head>
<body>
	<main class="contenido-principal">
		<fieldset>
			<legend>Contactanos</legend>
			<form class="formulario">
				<input type="text" name="nombre" class="form-control" id="nombre" placeholder="Nombre:" value="">
				<input type="email" name="correo" class="form-control" id="correo" placeholder="Correo:" value="">

				<textarea name="mensaje" class="form-control" id="mensaje" placeholder="Mensaje: "></textarea>

				<input type="submit" name="submit" class="btn btn-primary" value="Enviar Correo">
			</form>
		</fieldset>
	</main>
</body>
</html>