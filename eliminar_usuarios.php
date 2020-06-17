<?php	
    require("conexion.php");

    $id = $_GET["id"];
    $sqlDelete = "DELETE FROM usuarios WHERE id = '$id'";

    $resultDelete = mysqli_query($conn,$sqlDelete);

    if($resultDelete){
        header("location: usuarios_registrados.php");
    }

?>