<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<title><?php echo $data["titulo"]; ?></title>
        <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
		<link rel="stylesheet" href="assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/css/estiloAdmin.css">
		<script src="assets/js/bootstrap.min.js" ></script>
	</head>
	
	<body>
    <div class="slidebar">
        <div class="logo_content">
            <div class="logo">
                
                <div class="logo_name">Llantas Moreno Lopez</div>
                
            </div>

        </div>
        <ul class="nav_list">
            <li>
                <i class='bx bx-search' ></i>
                <input type="text" name="" value="Buscar..">
            </li>
            <li>
                <a href="#">
                    <i class='bx bxs-user' ></i>
                    <span class="links_name">Usuarios</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <i class='bx bxs-shopping-bag' ></i>
                    <span class="links_name">Productos</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <i class='bx bxs-collection' ></i>
                    <span class="links_name">Categorias</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <i class='bx bxs-calendar' ></i>
                    <span class="links_name">Citas</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <i class='bx bxs-envelope' ></i>
                    <span class="links_name">PQR</span>
                </a>
            </li>
        </ul>
        <div class="profile_content">
            <div class="profile">
                <div class="profile_details">
                    <div class="name_job">
                        <div class="name">Administrador LML</div>
                        <div class="job">Llantas Moreno Lopez</div>
                    </div>
                </div>
               <a href="#">
                <i class='bx bx-log-out' id="log_out"></i>
               </a>
            </div>
        </div>
    </div>
		<div class="contenedor">
			<h2 class="h2">Usuarios registrados</h2>
			
			<a href="index.php?c=usuarios&a=nuevo" class="btn btn-primary a">Agregar un usuario nuevo  <i class='bx bxs-user-plus'></i></a>
			
			<br />
			<br />
			<div class="table table-hover" >
				<table border="1" width="100%" class="table table-hover">
					<thead class="thead-dark">
						<tr>
                            
                            <th>Nombre</th>
                            <th>Apellido</th>
                            <th>Identificación</th>
                            <th>Telefono</th>
                            <th>Correo electronico</th>
                            <th>Dirección</th>
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
                echo "<td><a href='index.php?c=usuarios&a=modificar&idUsuario=".$dato['idUsuario']."' class='btn btn-warning'><i class='bx bxs-user-detail'></i></a></td>";
                echo "<td><a href='index.php?c=usuarios&a=eliminar&idUsuario=".$dato['idUsuario']."' class='btn btn-danger'><i class='bx bxs-trash'></i></a></td>";
                echo "</tr>";
            }
            ?>
				    </tbody>
					
                </table>
            </div>
        </div>
    </body>
</html>