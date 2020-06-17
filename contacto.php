<?php
	session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
     
    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <!-- Funcionalidad NAV -->
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <!-- Hoja de estilo CSS -->
	<link rel="stylesheet" href="style.css">

    <!-- Font Awesome (para los iconos) -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
</head>
<body>
    <div class="bg">

        <!-- Nav -->
		<div class="container" style="margin-top: 3.5rem; max-width: 40rem;">
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
					<a class="nav-link" href="contacto.php">Contacto</a>
					</li>
					<?php
				
						if(isset($_SESSION["usernormal"]) || isset($_SESSION["useradmin"])){
							echo '
							<li class="nav-item">
							<a class="nav-link" href="logout.php">Salir</a>
							</li>';
							if(isset($_SESSION["useradmin"])){
								echo '
								<li class="nav-item">
								<a class="nav-link" href="panel_admin.php">P. Admin</a>
								</li>
								';
							}
						}else{
							
							echo '<li class="nav-item">
							<a class="nav-link" href="login.php">Ingresar</a>
							</li>
							<li class="nav-item">
							<a class="nav-link" href="crear_cuenta.php">Registrarse</a>
							</li>';
						}
					?>
					</ul>
					</div>
				</div>
			</nav>
		</div>

        <!-- Iconos -->
        <div class="container">
            <div class="row">
				<div class="col-12" style="position : absolute;bottom : 0;">
					<i class="fa fa-phone fa-1x" aria-hidden="true">123 456-7890</i>
					<br><br>
					<i class="fa fa-envelope fa-1x" aria-hidden="true">cortexempresario@yahoo.com</i>
					<br><br>
					<i class="fa fa-facebook-official fa-1x" aria-hidden="true">CortexEmpresario</i>
					<br><br>
					<i class="fa fa-instagram fa-1x" aria-hidden="true">CortexEmpresarioAR</i>
					<br><br>
					<i class="fa fa-twitter fa-1x" aria-hidden="true">CortexEmpresario</i>
					<br><br>
				</div>
			</div>
        </div>
	</div>

    <footer class="py-5 bg-dark">
	<div class="container">
		<p class="m-0 text-center text-white">Copyright &copy; Cortex Empresario 2020</p>
	</div>
	</footer>
</body>
</html>