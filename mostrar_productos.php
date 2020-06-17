<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Productos subidos</title>
    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
     
    <!-- Funcionalidad NAV -->
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <!-- Hoja de estilo CSS -->
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">Nombre</th>
                                <th scope="col">Descripcion</th>
                                <th scope="col">Precio</th>
                                <th scope="col">Imagen</th>
                                <th scope="col">Operaciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                if(!isset($_SESSION["useradmin"])){
                                    echo "No tiene permiso";
                                    header("location: index.php");
                                    die();
                                }
                            ?>
                            <?php
                                require("conexion.php");
                                //Realizamos la consulta sql
                                $sql = "SELECT * FROM productos";
                                //Seleccionamos todos los elementos de la tabla productos
                                $result = mysqli_query($conn,$sql);
                                //Guardamos en una variable $result en donde verifica la conexion y la consulta
                                while($row = mysqli_fetch_assoc($result)){
                                //Mostramos en un while con una variable $row, en donde el procedimiento mysqli_fectch_asscoc($result)
                                //almacena la variable $result
                                //Cerramos esta linea de php y mostramos los datos en la tabla
                            ?>
                            <tr>
                                <td><?php echo $row["id"];?></td>
                                <td><?php echo $row["nombre"];?></td>
                                <td><?php echo $row["descripcion"];?></td>
                                <td>$<?php echo $row["precio"];?></td>
                                <!--Para mostrar la imagen, obtenemos su direccion con su formato y la transformamos en base64
                                para que el php pueda mostrarlo-->
                                <td><img height="50px" src="data:image/jpg;base64,<?php echo base64_encode($row['imagen']); ?>"></td>
                                <td>
                                    <a href="#" class="link_operacion">Modificar</a>
                                    <a href="#" class="link_operacion">Eliminar</a>
                                </td>
                            </tr>
                            <?php
                                }
                            ?>
                        </tbody>
                    </table>
            </div>
            
        </div>
    </div>
</body>
</html>