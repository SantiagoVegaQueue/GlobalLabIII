<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ingresar</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
     
    <!-- Funcionalidad NAV -->
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <!-- Hoja de estilo CSS -->
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body id="all-body">

    <?php
        if(isset($_SESSION["useradmin"]) || isset($_SESSION["usernormal"])){
            echo '  <script type="text/javascript">
                        alert("Ya estas logueado");
                        window.location ="index.php";
                    </script>';
           // header("location: index.php");
        }
    ?>
    <div class="bg">

        <!-- Nav -->
        <div style="margin-top: 3.5rem; max-width: 40rem;">
        <nav id="navbar-style" class="navbar navbar-expand-lg navbar-light fixed-top">
                <div class="container">
                    <a class="navbar-brand" href="index.php">Cortex empresario</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive"
                        aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarResponsive">
                        <ul class="navbar-nav ml-auto">
                            <li class="nav-item active">
                                <a class="nav-link" href="index.php">Inicio
                                    <span class="sr-only">(current)</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="sobreNosotros.php">Sobre nosotros</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="productos.php">Productos</a>
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
							<h4 style="text-align: center;">Ingresa a tu cuenta</h4>
						</div>
						<form action="verificar.php" method="POST" id="loginForm" class="card-body">
							<div class="form-group">
								<input type="text" id="user_log" name="username" placeholder="Usuario" class="form-control">
                            </div>
                            <div class="form-group">
								<input type="password" id="password_log" name="password" placeholder="Contraseña" class="form-control">
                            </div>
							<br><a href="index.php"><input id="form-btn" type="submit" id="iniciar_sesion" name="enviar" value="Iniciar sesión" class="btn btn-primary btn-block">
						</form>
					</div>
				</div>
			</div>
        </div>

        <!--
        <div class="container mx-auto border">
            <div>
                <h1>Ingresar</h1><br>
                <form action="verificar.php" method="POST" id="formLog">
                    <input type="text" id="user_log" name="username" placeholder="Usuario"><br>
                    <br><input type="password" id="password_log" name="password" placeholder="Contraseña"><br>
                    <br><input type="submit" id="iniciar_sesion" name="enviar" value="Iniciar sesión">
                    <a href="crear_cuenta.php"><input type=button value="Registrarse">
                </form>   
            </div>
        </div>
        -->
    </div>

    <footer id="footer" class="py-5">
	<div class="container">
		<p class="m-0 text-center text-white">Copyright &copy; Cortex Empresario 2020</p>
	</div>
    </footer>
    <script src="validar_form_Login.js"></script>
</body>
</html>