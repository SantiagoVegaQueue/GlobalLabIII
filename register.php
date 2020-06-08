<?php
    require 'conexion.php';
    
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $pass = $_POST['password'];
    $rol = $_POST['rol'];

    $sql = "INSERT INTO usuarios (nombre,apellido,username,email,password,rol) VALUES ('$nombre','$apellido','$username','$email','$pass','$rol')";

    if(mysqli_query($conn,$sql)){
        header('location:login.php');
    }else{
        echo "Error".$sql."<br>".mysqli_error($conn);
    }
    mysqli_close($conn);
?>