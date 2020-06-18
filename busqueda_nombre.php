<?php
    require("conexion.php");

    if(!isset($_POST["buscar"])){
        $_POST["buscar"]= '';
        $buscar = $_POST["buscar"];
    }

    $buscar = $_POST["buscar"];

    $sql = "SELECT * FROM usuarios 
            WHERE nombre LIKE '%".$buscar."%'
            OR apellido LIKE '%".$buscar."%'
            OR username LIKE '%".$buscar."%'
            OR email LIKE '%".$buscar."%'";
    $result = mysqli_query($conn,$sql);
?>