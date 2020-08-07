<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Formulario</title>
	<link rel="stylesheet" href="css/style.css">
</head>
<body>
	<main class="wrap">
			<form class="formulario" method="POST" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
				<input type="text" name="nombre" class="form-control" id="nombre" placeholder="Nombre:" value="<?php if(isset($enviado) && !empty($nombre)) echo $nombre ;?>">
				<input type="email" name="correo" class="form-control" id="correo" placeholder="Correo:" value="<?php if(isset($enviado) && !empty($correo)) echo $correo ;?>">

				<textarea name="mensaje" class="form-control" id="mensaje" placeholder="Mensaje: "><?php if(isset($enviado) && !empty($mensaje)) echo $mensaje ;?></textarea>

				<?php if(!empty($errores)): ?>
					<div class="alert error">
						<?php echo $errores?>
					</div>
				<?php elseif($enviado): ?>
					<div class="alert success">
						<p>Formulario enviado correctamente</p>
					</div>
				<?php endif;?>

				<!-- <div class="alert error">
					Lorem ipsum dolor sit, amet consectetur adipisicing elit. Consequatur
				</div>

				<div class="alert success">
					Lorem ipsum dolor sit, amet consectetur adipisicing elit. Consequatur
				</div> -->

				<input type="submit" name="submit" class="btn btn-primary" value="Enviar Correo">
			</form>
	</main>
</body>
</html>