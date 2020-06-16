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
            <!-- START SIDE BAR-->
<div class="container-fluid">
    <div class="row">
        <div class="d-flex">
                <div id="sidebar-container">
                    <div class="logo">
                        <h4>Cortex Empresario</h4>
                    </div>
                    <div class="menu">
                        <a href="#"class="d-block"><i class="icon ion-md-people"></i>Usarios</a>
                        <a href="#"class="d-block"><i class="icon ion-md-appstore"></i></i>Subir productos</a>
                        <a href="#"class="d-block"><i class="icon ion-md-contact"></i>Perfil</a>
                        <a href="index.php"class="d-block"><i class="icon ion-md-home"></i>Página de inicio</a>
                    </div>
                </div>
            </div>
                    <!-- FINISH SIDE BAR-->
        <?php
            if(!isset($_SESSION["useradmin"])){
                echo "no tiene permiso";
                die();
            }
        ?>
            <div class="contenido">
                <section>
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12">
                                <h1>PANEL ADMIN</h1>
                                <form action="subir_productos.php" method="POST" enctype="multipart/form-data">
                                    <h2>Subir productos</h2><br>
                                    <br><label for="">Nombre del producto:</label>
                                    <input type="text" name="nombre" id="nombre"><br>
                                    <input type="file" id="subir_archivo" name="fotos"><br>
                                    <label for="">Precio:</label>
                                    <input type="text" name="precio">
                                    <br><label for="">Descripcion del producto</label><br>
                                    <textarea name="descripcion" id="descripcion" cols="50" rows="20" placeholder="Añade una breve descripción del producto"></textarea><br>
                                    <input type="submit" value="Enviar">
                                </form>
                            </div>
                        </div>    
                    </div>
                </section>
            </div>
    </div>
    
</div>
    
</body>
</html>