<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN</title>
</head>
<body>
    <h1>LOG IN</h1>
    <form action="verificar.php" method="POST">
        <input type="text" id="login" name="username" placeholder="Usuario"><br>
        <br><input type="password" id="password" name="password" placeholder="Contraseña"><br>
        <br><input type="submit" id="iniciar_sesion" value="Iniciar sesión">
        <button><a href="register.html">Registrarse</a></button>
    </form>
</body>
</html>