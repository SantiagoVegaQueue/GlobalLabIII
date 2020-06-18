<?php	
    require("conexion.php");

    $id = $_GET["id"];
    $sqlDelete = "DELETE FROM productos WHERE id = '$id'";

    $resultDelete = mysqli_query($conn,$sqlDelete);

    if($resultDelete){
        header("location: mostrar_productos.php");
    }

?>