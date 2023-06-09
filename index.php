<?php
    session_start();
    
    if(isset($_SESSION['usuario'])){
        header("location: bienvenido.php");
    }
?>





<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login y Registro</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/estilos.css">
</head>
<body>
    <main>
        <div class="contenedor__todo">
            <div class="caja__trasera">
                <div class="caja__trasera-login">
                    <h3>Ya tienes una cuenta?</h3>
                    <P>Inicia sesion para entrar en la pagina</P>
                    <button id="btn__iniciar-sesion">Iniciar sesión</button>
                </div>
                <div class="caja__trasera-register">
                    <h3>¿Aún no tienes una cuenta?</h3>
                    <P>Registrate para poder iniciar sesion</P>
                    <button id="btn__registrarse">Registrarse</button>
                </div>
            </div>
            <div class="contenedor__login-register">
                <form action="php/login_usuario_be.php" method="POST" class="formulario__login">
                    <h2>Iniciar sesion</h2>
                    <input type="text" placeholder="Correo electronico" name="correo" >
                    <input type="password" placeholder="Contraseña" name="contrasena" >
                    <button>Entrar</button>
                </form>
                <form action="php/registro_usuarios.php" method="GET" class="formulario__register">
                <h2>Registrarse</h2>
                <input type="text" placeholder="Nombre Completo"  name="nombre_completo">
                <input type="text" placeholder="Correo Electronico" name="correo" >
                <input type="text" placeholder="Usuario" name="usuario" >
                <input type="password" placeholder="Contraseña" name="contrasena" >
                <button>Registrarse</button>
                </form>
            </div>

        </div>
    </main>
    <script src="scrip.js"></script>
</body>
</html>