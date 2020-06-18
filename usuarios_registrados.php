<?php
    session_start();
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link href="https://unpkg.com/ionicons@4.5.10-0/dist/css/ionicons.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Usuarios registrados</title>
</head>
<body>
        <?php
            if(!isset($_SESSION["useradmin"])){
                echo "No tiene permiso";
                header("location: index.php");
                die();
            }
        ?>
    <div class="wrapper">
        <!-- Sidebar -->
        <nav id="sidebar">
            <div class="sidebar-header">
                <img src="https://img.icons8.com/color/96/000000/admin-settings-male.png"/>
            </div>
        
        <ul class="list-unstyled components">
            <p>Panel</p>
            <li>
                <a href="usuarios_registrados.php">Usuarios registrados</a>
            </li>
            <li>
                <a href="panel_admin.php">Subir productos</a>
            </li>
            <li>
                <a href="mostrar_productos.php">Ver productos subidos</a>
            </li>
            <li>
                <a href="index.php">Pagina de inicio</a>
            </li>
            <li>
                <a href="logout.php">Salir</a>
            </li>
        </ul>
        </nav>
        <!-- END Sidebar -->

        <!-- Content -->
        <div id="content">
            <nav class="navbar navbar-light bg-light">
                <form class="form-inline">
                    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                </form>
            </nav> 
            <div>
                <table class="table">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col">Nombre</th>
                            <th scope="col">Apellido</th>
                            <th scope="col">Usuario</th>
                            <th scope="col">E-mail</th>
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
                            $sql = "SELECT * FROM usuarios";
                            //Seleccionamos todos los elementos de la tabla productos
                            $result = mysqli_query($conn,$sql);
                            //Guardamos en una variable $result en donde verifica la conexion y la consulta
                            while($row = mysqli_fetch_assoc($result)){
                            //Mostramos en un while con una variable $row, en donde el procedimiento mysqli_fectch_asscoc($result)
                            //almacena la variable $result
                            //Cerramos esta linea de php y mostramos los datos en la tabla
                        ?>
                        <tr>
                            <td><?php echo $row["nombre"];?></td>
                            <td><?php echo $row["apellido"];?></td>
                            <td><?php echo $row["username"];?></td>
                            <td><?php echo $row["email"];?></td>
                            <td><a href="eliminar_usuarios.php?id=<?php echo $row["id"];?>">Eliminar</a></td>
                        </tr>
                        <?php
                                }
                            ?>
                    </tbody>
                </table>
            </div>     
        </div>
        <!-- END Content -->
    </div>
    
</div>
    
</body>
</html>