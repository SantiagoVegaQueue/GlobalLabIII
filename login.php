<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
</head>
<body>
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
                    <span class="sr-only">(current)</span>
                </a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="#">Sobre nosotros</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="#">Productos</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="#">Contactos</a>
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
    <h1>LOG IN</h1>
    <form action="verificar.php" method="POST">
        <input type="text" id="login" name="username" placeholder="Usuario"><br>
        <br><input type="password" id="password" name="password" placeholder="Contraseña"><br>
        <br><input type="submit" id="iniciar_sesion" value="Iniciar sesión">
        <button><a href="crear_cuenta.html">Registrarse</a></button>
    </form>
</body>
</html>