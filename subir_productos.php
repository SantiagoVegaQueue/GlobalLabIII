<?php
    require 'conexion.php';

    $nombre = $_POST["nombre"];
    $fotos = addslashes(file_get_contents($_FILES['fotos']['tmp_name']));
    $precio = $_POST["precio"];
    $descripcion = $_POST["descripcion"];

    $sql = "INSERT INTO productos (nombre,descripcion,precio,imagen) 
            VALUES ('$nombre','$descripcion','$precio','$fotos')";

    if(mysqli_query($conn,$sql)){
        echo '  <script type="text/javascript">
                    alert("agregado correctamente");
                    window.location ="panel_admin.php";
                </script>';
    }else{
        echo "Error".$sql."<br>".mysqli_error($conn);
    }
    mysqli_close($conn);
?>
