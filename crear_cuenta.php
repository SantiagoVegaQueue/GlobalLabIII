<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
    <title>Crear cuenta</title>
    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="style.css">
    
    <style>
        .border{
            width: 350px;
            height: 700px;
        }
    </style>
</head>

<body>

    <div class="bg">
    <div style="margin-top: 3.5rem; max-width: 40rem;">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
        <div class="container">
            <a class="navbar-brand" href="#">Cortex empresario</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                    <a class="nav-link" href="index.php">Inicio
                        <span class="sr-only">(actual)</span>
                    </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="sobreNosotros.php">Sobre nosotros</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="productos.php">Productos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Contacto</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="login.php">Ingresar</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="crear_cuenta.php">Registrarse</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    </div>

	<div class="container mx-auto border">
    	<h1>Registrarse</h1>
        <form action="register.php" method="POST" style="margin-top: 30px; max-width: 40px;">
            <label for="">Nombre</label>
            <input type="text" name="nombre" required><br>
            <br><label for="">Apellido</label>
            <input type="text" name="apellido" required><br>
            <br><label for="">Usuario</label>
            <input type="text" id="nombre_usuario" name="username" required><br>
            <br><label for="">Email</label>
            <input type="email" name="email" required><br>
            <br><label for="">Contraseña</label>
            <input type="password" id="password" name="password" required><br>
            <br><label for="">Rol</label>
            <select name="rol" id="rol">
            <option value="usuario">Usuario</option>
            <option value="admin">Administrador</option>
            </select><br>
            <br><a href="index.php"><input type=submit value="Enviar">
        </form>
    </div>

</div>
</body>
</html>