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
    <title>Panel Administrador</title>
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
        <div class="container">
            <div id="app" class="row">
                <div id="content" class="col-12">
                    
                    <form action="subir_productos.php" id="formUpload" method="POST" enctype="multipart/form-data" class="card-body">
                        <div class="form-group col-6">
                            <label for="">Nombre del producto:</label>
                            <input type="text" class="form-control" name="nombre" id="nombre"><br>
                        </div>

                        <div class="form-group col-6">
                            <label for="">Precio:</label>
                            <input type="text" class="form-control" id="precio" name="precio">
                        </div>

                        <div class="form-group col-6">
                            <input type="file" class="form-control-file" id="fotos" name="fotos"><br>
                        </div>

                        <div class="form-group col-6">
                            <br><label for="">Descripcion del producto</label><br>
                            <textarea name="descripcion" class="form-control" id="descripcion" placeholder="Añade una breve descripción del producto"></textarea><br>
                        </div>
                        
                        <div class="form-group col-6">
                        <button type="submit" class="btn">Subir producto</button>
                        </div>
                    </form>        
                </div>
            </div>
        </div>
        <!-- END Content -->
    </div>
    
</div>
    <script src="validar_form_productos.js"></script>
</body>
</html>