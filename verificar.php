<?php 
    require 'conexion.php';

    $sql = "SELECT * FROM usuarios WHERE username ='". $_POST['username']."' ";
    $result = mysqli_query($conn,$sql);

    while($colum = mysqli_fetch_array($result)){
        $user_verified = $colum['username'];
        $pass_verified = $colum['password'];
        $rol_verified = $colum['rol'];
    }
    mysqli_close($conn);

    if($_POST['username'] == $user_verified && $_POST['password'] == $pass_verified && $rol_verified =="admin"){
        header("location: panel_admin.php");
    }else if($_POST['username'] == $user_verified && $_POST['password'] == $pass_verified && $rol_verified =="usuario"){
        header("location: index.php");
    }else{
        echo "Usuario y/o contraseña incorrectos";
        die();
    }
    /*if(mysqli_num_rows($result)>0){
        while($row = mysqli_fetch_assoc($result)){
            $usuario = $row['username'];
            $contraseña = $row['password'];
            $rol = $row['rol'];

            session_start();
            $_SESSION['usuario'] = $usuario;
            $_SESSION['contraseña'] = $contraseña;
            $_SESSION['rol'] = $rol;
        }
        header("location: panel_admin.php");
    }
    session_start();¨*/

 ?>