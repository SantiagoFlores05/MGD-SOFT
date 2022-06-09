<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<title><?php echo $data["titulo"]; ?></title>
		<link rel="stylesheet" href="assets/css/bootstrap.min.css">
		<script src="assets/js/bootstrap.min.js" ></script>
	</head>
	
	<body>
		<div class="container">
			<h2><?php echo $data["titulo"]; ?></h2>
			
			<form id="nuevo" name="nuevo" method="POST" action="index.php?c=usuarios&a=guarda" autocomplete="off">

				
				<div class="form-group">
					<label for="nombre">Nombre</label>
					<input type="text" class="form-control" id="nombre" name="nombre" value="" />
				</div>
				
				<div class="form-group">
					<label for="apellido">Apellido</label>
					<input type="text" class="form-control" id="apellido" name="apellido" value="" />
				</div>
				
				<div class="form-group">
					<label for="identificacion">Identificación</label>
					<input type="number" class="form-control" id="identificacion" name="identificacion" value="" />
				</div>
				
				<div class="form-group">
					<label for="telefono">Telefono</label>
					<input type="number" class="form-control" id="telefono" name="telefono" value="" />
				</div>
				
				<div class="form-group">
					<label for="correoElectronico">Correo Electronico</label>
					<input type="email" class="form-control" id="correoElectronico" name="correoElectronico" value="" />
				</div>
				
                <div class="form-group">
					<label for="direccionUsuario">Direccion Usuario</label>
					<input type="text" class="form-control" id="direccionUsuario" name="direccionUsuario" value="" />
				</div>
				
                <div class="form-group">
					<label for="contrasena">Contraseña</label>
					<input type="password" class="form-control" id="contrasena" name="contrasena" value="" />
				</div>
				
				
				<button id="guardar" name="guardar" type="submit" class="btn btn-primary">Guardar</button>
				
			</form>
		</div>
	</body>
</html>