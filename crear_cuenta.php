<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
    <title>Crear cuenta</title>
    
    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    
    <!-- Funcionalidad NAV -->
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    
    <!-- Hoja de estilo CSS -->
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

    <!-- Nav -->
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
                        <a class="nav-link" href="contacto.php">Contacto</a>
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
        <form action="register.php" method="POST" style="margin-top: 30px; max-width: 40px;" id="form" onsubmit="return validar();">
            
            <label for="">Nombre</label>
            <input type="text" name="nombre" id="nombre" ><br>
            
            <br><label for="">Apellido</label>
            <input type="text" name="apellido" id="apellido" ><br>
            
            <br><label for="">Usuario</label>
            <input type="text" name="username" id="nombre_usuario" ><br>
            
            <br><label for="">Email</label>
            <input type="email" name="email" id="email" ><br>
            
            <br><label for="">Contraseña</label>
            <input type="password" name="password" id="password" ><br>
            
            <br><label for="">Rol</label>
            <select name="rol" id="rol">
                <option value="usuario">Usuario</option>
                <option value="admin">Administrador</option>
            </select><br>
            
            <br><a href="index.php"><input type="submit" value="Enviar">
        </form>
    </div>
</div>

</div>
</body>

</html>