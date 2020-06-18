<?php
	session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>sobreNosotros</title>

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
								<a class="nav-link" href="usuarios_registrados.php">P. Admin</a>
								</li>
								';
							}
						}
							else{
							
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

		<div class="container mx-auto">
			<h1 class="p-5" style="text-align: center;">Vendemos cajas</h1>
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
			 quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum 
			 dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p><br>
			 <p>Nunc non dictum elit. Phasellus sit amet malesuada nisi. Pellentesque aliquet mattis iaculis. Nunc quam diam, pellentesque eu hendrerit nec,
			 sollicitudin ac lorem. Vivamus felis sem, eleifend vitae leo ut, laoreet condimentum sapien. Interdum et malesuada fames ac ante ipsum primis in faucibus.
			 Aenean sed pretium urna, et finibus sem. Nunc eu tellus ante. Suspendisse potenti. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere
			 cubilia curae; In vitae sagittis leo. Praesent volutpat sagittis accumsan. Etiam at mi iaculis, pulvinar eros in, ullamcorper ante. Integer leo enim, finibus
			 ac maximus id, commodo eget lacus. Suspendisse scelerisque ut lectus ut fringilla. Phasellus dignissim pretium dolor, sed lobortis arcu pellentesque sed.</p>
		</div>
	</div>

	<footer id="footer" class="py-5 bg-dark">
	<div class="container">
		<p class="m-0 text-center text-white">Copyright &copy; Cortex Empresario 2020</p>
	</div>
	</footer>
</body>
</html>