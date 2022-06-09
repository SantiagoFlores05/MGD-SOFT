<?php

    session_start();

    include 'conexion_be.php';

    $correo = $_POST['correo'];
    $contrasena = $_POST['contrasena'];
    $contrasena = hash('sha512', $contrasena);

    $validar_login = mysqli_query($conn , "SELECT * FROM usuarios WHERE correo='$correo' and contrasena='$contrasena' ");

    if(mysqli_num_rows($validar_login) > 0){
        $_SESSION['usuario'] = $correo;
         echo '
        <script>
        window.location = "https://programacionsofiacosme.000webhostapp.com/profi/indexx.html";
        </script>
        ';
        exit;
    }else{
        echo '
        <script>
        alert("Usuario no existe, por favor verifique los datos introducidos");
        window.location = "../index.php";
        </script>
        ';
        exit;
    }


?>