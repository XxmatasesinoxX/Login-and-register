<?php
include 'conexion_bd.php';
    $nombre_completo = $_GET['nombre_completo'];
    $correo = $_GET['correo'];
    $usuario = $_GET['usuario'];
    $contrasena = $_GET['contrasena'];
    //Encriptamiento de contraseña
    $contrasena =hash('sha512',$contrasena);


    $query = "INSERT INTO usuarios(nombre_completo, correo, usuario, contrasena) 
            VALUES('$nombre_completo', '$correo', '$usuario', '$contrasena')";
    
    $verificar_correo = mysqli_query($conexion,"SELECT * FROM usuarios WHERE correo='$correo' ");
    
    if(mysqli_num_rows($verificar_correo) > 0){
        echo '
        <script>
            alert("Este correo ya esta registrado, intenta con otro diferente");
            window.location = "../index.php";
        </script>
        '; 
        exit();
     }
     $verificar_usuario = mysqli_query($conexion,"SELECT * FROM usuarios WHERE usuario='$usuario' ");
    
    if(mysqli_num_rows($verificar_usuario) > 0){
        echo '
        <script>
            alert("Este usuario ya esta registrado, intenta con otro diferente");
            window.location = "../index.php";
        </script>
        '; 
        exit();
     }
    
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