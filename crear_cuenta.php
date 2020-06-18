<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
    <title>Crear cuenta</title>
    
    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    
    <!-- Funcionalidad NAV -->
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    
    <!-- Hoja de estilo CSS -->
    <link rel="stylesheet" type="text/css" href="style.css">

    <!-- JS
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script> -->
    
    <style>
        .border{
            width: 350px;
            height: 700px;
        }
    </style>
</head>

<body>
    <?php
        if(isset($_SESSION["useradmin"]) || isset($_SESSION["usernormal"])){
            echo '  <script type="text/javascript">
                        alert("Primero cierra tu cuenta");
                        window.location ="index.php";
                    </script>';
            //header("location: index.php");
        }
    ?>
    <div class="bg">
    
        <!-- Nav -->
        <div style="margin-top: 3.5rem; max-width: 40rem;">
        <nav id="navbar-style" class="navbar navbar-expand-lg navbar-light fixed-top">
                <div class="container">
                    <a class="navbar-brand" href="#">Cortex empresario</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarResponsive">
                        <ul class="navbar-nav ml-auto">
                            <li class="nav-item active">
                            <a class="nav-link" href="index.php">Inicio
                                <span class="sr-only">(actual)</span>
                            </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="sobreNosotros.php">Sobre nosotros</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="productos.php">Productos</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="contacto.php">Contacto</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="login.php">Ingresar</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="crear_cuenta.php">Registrarse</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>

        <div class="container">
			<div id="app" class="row">
				<div class="col-md-5 pt-5 mx-auto">
					<div class="card">
						<div class="card-header">
							<h4 style="text-align: center;">Crear cuenta</h4>
						</div>
						<form action="register.php" method="POST" id="formReg" class="card-body">
							<div class="form-group">
								<input type="text" name="nombre" id="nombre" placeholder="Nombre" class="form-control">
							</div>

							<div class="form-group">
								<input type="text" name="apellido" id="apellido" placeholder="Apellido" class="form-control">
							</div>

							<div class="form-group">
								<input type="text" name="username" id="nombre_usuario" placeholder="Usuario" class="form-control">
                            </div>
                            
                            <div class="form-group">
								<input type="email" name="email" id="email" placeholder="e-mail" class="form-control">
                            </div>
                            
                            <div class="form-group">
								<input type="password" name="password" id="password" placeholder="Contraseña" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="" >Rol</label>
                                <select name="rol" id="rol" class="custom-select" placeholder="Elija su rol">
                                    <option value="usuario">Usuario</option>
                                    <option value="admin">Administrador</option>
                                </select>
                            </label>
                            </div>
                            <div class="form-group">
                                
                            </div>
                                
                            

							<input type="submit" id="form-btn"  value="Enviar" class="btn btn-primary btn-block">
						</form>
					</div>
				</div>
			</div>
        </div>
        
        <!--
	    <div class="container mx-auto border">
            <h1>Registrarse</h1>
            <form action="register.php" method="POST" style="margin-top: 30px; max-width: 40px;" id="formReg">
                
                <label for="">Nombre</label>
                <input type="text" name="nombre" id="nombre" ><br>
                
                <br><label for="">Apellido</label>
                <input type="text" name="apellido" id="apellido" ><br>
                
                <br><label for="">Usuario</label>
                <input type="text" name="username" id="nombre_usuario" ><br>
                
                <br><label for="">Email</label>
                <input type="email" name="email" id="email" ><br>
                
                <br><label for="">Contraseña</label>
                <input type="password" name="password" id="password" ><br>
                
                <br><label for="">Rol</label>
                <select name="rol" id="rol">
                    <option value="usuario">Usuario</option>
                    <option value="admin">Administrador</option>
                </select><br>
                
                <br><a href="index.php"><input type="submit" value="Enviar">
            </form>
        </div>
        -->

</div>


    <footer class="py-5 bg-dark">
        <div class="container">
            <p class="m-0 text-center text-white">Copyright &copy; Cortex Empresario 2020</p>
        </div>
    </footer>
    <script src="validar_form.js"></script>
</body>

</html>