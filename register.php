<?php
    require 'conexion.php';
    
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $pass = $_POST['password'];
    $rol = $_POST['rol'];

    //Se agregan las variables a la base de datos
    $sql = "INSERT INTO usuarios (nombre,apellido,username,email,password,rol) VALUES ('$nombre','$apellido','$username','$email','$pass','$rol')";
    //Mediante los procediminetos mysqli, verificamos que la inserccion sea exitosa
    if(mysqli_query($conn,$sql)){
        header('location:login.php');
    }else{
        echo "Error".$sql."<br>".mysqli_error($conn);
    }
    mysqli_close($conn);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrarse</title>
</head>
<body>
</body>
</html>