<?php
include 'conexion_bd.php';
    $nombre_completo = $_GET['nombre_completo'];
    $correo = $_GET['correo'];
    $usuario = $_GET['usuario'];
    $contrasena = $_GET['contrasena'];


    $query = "INSERT INTO usuarios(nombre_completo, correo, usuario, contrasena) 
            VALUES('$nombre_completo', '$correo', '$usuario', '$contrasena')";
    $ejecutar = mysqli_query($conexion, $query);

    if($ejecutar){
        echo '
        <script>
        alert("Usuario almacenado exitosamente");
        window.location = "../index.php";
        </script>
        ';
    }else{
        echo'
        <script>
        alert("Intentalo de nuevo,no almacenado");
        window.location = "../index.php";
        </script>
        ';
    }
    mysqli_close($conexion);
?>