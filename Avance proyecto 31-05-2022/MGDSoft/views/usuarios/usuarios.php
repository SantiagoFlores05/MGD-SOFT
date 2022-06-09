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
			
			<a href="index.php?c=usuarios&a=nuevo" class="btn btn-primary">Agregar</a>
			
			<br />
			<br />
			<div class="table-responsive">
				<table border="1" width="80%" class="table">
					<thead>
						<tr class="table-primary">
                            
                            <th>Nombre</th>
                            <th>Apellido</th>
                            <th>Identificación</th>
                            <th>Telefono</th>
                            <th>Correo electronico</th>
                            <th>Direccion usuario</th>
                            <th>Contraseña</th>
                            <th>Editar</th>
                            <th>Eliminar</th>
                        </tr>
                    </thead>

                     <tbody>
            <?php foreach($data["Usuarios"] as $dato) {
                echo "<tr>";
                echo "<td>".$dato["nombre"]."</td>";
                echo "<td>".$dato["apellido"]."</td>";
                echo "<td>".$dato["identificacion"]."</td>";
                echo "<td>".$dato["telefono"]."</td>";
                echo "<td>".$dato["correoElectronico"]."</td>";
                echo "<td>".$dato["direccionUsuario"]."</td>";
                echo "<td>".$dato["contrasena"]."</td>";
                echo "<td><a href='index.php?c=usuarios&a=modificar&idUsuario=".$dato['idUsuario']."' class='btn btn-warning'>Modificar</a></td>";
                echo "<td><a href='index.php?c=usuarios&a=eliminar&idUsuario=".$dato['idUsuario']."' class='btn btn-danger'>Eliminar</a></td>";
                echo "</tr>";
            }
            ?>
				    </tbody>
					
                </table>
            </div>
        </div>
    </body>
</html>