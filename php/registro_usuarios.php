<?php
include 'conexion_bd.php';
    $nombre_completo = $_GET['nombre_completo'];
    $correo = $_GET['correo'];
    $usuario = $_GET['usuario'];
    $contrasena = $_GET['contrasena'];


    $query = "INSERT INTO usuarios(nombre_completo, correo, usuario, contrasena) 
            VALUES('$nombre_completo', '$correo', '$usuario', '$contrasena')";
    $ejecutar = mysqli_query($conexion, $query);

?>