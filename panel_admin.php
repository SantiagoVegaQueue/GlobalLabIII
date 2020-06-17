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
    <title>PANEL ADMIN</title>
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
            <p>Dummy Heading</p>
            <li>
                <a href="#">Usuarios registrados</a>
            </li>
            <li>
                <a href="#">Subir productos</a>
            </li>
            <li>
                <a href="#">Ver productos subidos</a>
            </li>
            <li>
                <a href="#">Pagina de inicio</a>
            </li>
            <li>
                <a href="logout.php">Salir</a>
            </li>
        </ul>
        </nav>

        <div id="content">
            <h1>PANEL ADMIN</h1>
                <form action="subir_productos.php" id="formUpload" method="POST" enctype="multipart/form-data">
                    <h2>Subir productos</h2><br>
                        <br><label for="">Nombre del producto:</label>
                             <input type="text" name="nombre" id="nombre"><br>
                             <input type="file" id="fotos" name="fotos"><br>
                             <label for="">Precio:</label>
                             <input type="text" id="precio" name="precio">
                         <br><label for="">Descripcion del producto</label><br>
                             <textarea name="descripcion" id="descripcion" cols="50" rows="20" placeholder="Añade una breve descripción del producto"></textarea><br>
                             <input type="submit" value="Enviar">
                </form>  
                <h1>Lorem</h1>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Veniam, ullam eius, amet distinctio tenetur in et obcaecati pariatur, dolor modi nulla tempore inventore? Quasi debitis recusandae quisquam molestias velit cupiditate.</p>       
        </div>

    </div>
    </div>
    
</div>
    <script src="validar_form_productos.js"></script>
</body>
</html>