<?php
    session_start();
    if(!isset($_SESSION["useradmin"])){
        echo "No tiene permiso";
        header("location: index.php");
        die();
    }
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
            <div>
                <h2>Usuarios registrados</h2>
            </div>

            <div>
                <table class="table">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col">Nombre</th>
                            <th scope="col">Apellido</th>
                            <th scope="col">Usuario</th>
                            <th scope="col">E-mail</th>
                            <th scope="col">Rol</th>
                            <th scope="col">Operaciones</th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php
                            require("conexion.php");
                            $userPorPagina = 3;
                            
                            $sql = "SELECT * FROM usuarios";
                            
                            $result = mysqli_query($conn,$sql);
                            $row = mysqli_num_rows($result);
                            $numPags = ceil($row/$userPorPagina);

                           if(!isset($_GET["pagina"])){
                                $pagina = 1;
                            }else{
                                $pagina = $_GET["pagina"];
                            }
                            
                            $empiezaPor = ($pagina-1) * $userPorPagina;
                            
                            $sql= "SELECT * FROM usuarios ORDER BY id LIMIT $empiezaPor,$userPorPagina";
                            $result= mysqli_query($conn,$sql);
                            //Realizamos la consulta sql
                            //Seleccionamos todos los elementos de la tabla productos
                            //Guardamos en una variable $result en donde verifica la conexion y la consulta
                            while($row = mysqli_fetch_array($result)){
                            //Mostramos en un while con una variable $row, en donde el procedimiento mysqli_fectch_asscoc($result)
                            //almacena la variable $result
                            //Cerramos esta linea de php y mostramos los datos en la tabla
                            ?>
                       
                        <tr>
                            <td><?php echo $row["nombre"];?></td>
                            <td><?php echo $row["apellido"];?></td>
                            <td><?php echo $row["username"];?></td>
                            <td><?php echo $row["email"];?></td>
                            <td><?php echo $row["rol"];?></td>
                            <td><a href="eliminar_usuarios.php?id=<?php echo $row["id"];?>">Eliminar</a></td>
                        </tr>
                        <?php
                            }
                        ?>
                    </tbody>
                </table>
                <nav aria-label="Page navigation example">
                    <ul class="pagination justify-content-center">
                    <?php
                        for($pagina = 1; $pagina <= $numPags; $pagina++)
                            echo '<li class="page-item"><a class="page-link" href="usuarios_registrados.php?pagina='.$pagina.'">'.$pagina.'</a></li>';
                    ?>
                    </ul>
                </nav>
            </div>  
            
        </div>
        <!-- END Content -->
    </div>
    
</div>
    
</body>
</html>



