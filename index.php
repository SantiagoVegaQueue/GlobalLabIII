<?php
	session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>

	<!-- Bootstrap -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
	
	<!-- Funcionalidad NAV -->
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
	
	<!-- Hoja de estilo CSS -->
	<link rel="stylesheet" type="text/css" href="style.css">

	<link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">

</head>
<body id="all-body">

	<?php
		if(!isset($_SESSION["usernormal"])){
			echo "Haga login";
		} 

		/*if (isset($_SESSION["useradmin"])){
			echo '<div class="row">
						<div class="d-flex">
							<div id="sidebar-container">
								<div class="logo">
									<h4>Cortex Empresario</h4>
								</div>
						<div class="menu">
								<a href="#"class="d-block"><i class="icon ion-md-people"></i>Usarios</a>
								<a href="panel_admin.php"class="d-block"><i class="icon ion-md-appstore"></i></i>Subir productos</a>
								<a href="#"class="d-block"><i class="icon ion-md-contact"></i>Perfil</a>
								<a href="index.php"class="d-block"><i class="icon ion-md-home"></i>Página de inicio</a>
						</div>
					</div>
			</div>';
		}*/
	?>
	
	<div class="bg">

	<!-- Nav -->
	<div style="margin-top: 2rem; max-width: 40rem;">
	<nav id="navbar-style" class="navbar navbar-expand-lg navbar-light fixed-top">
	<div id="text-style" class="container">
		<a id="text-style" class="navbar-brand" href="index.php">Cortex empresario</a>
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

		<div class="container-fluid">
			<h1 id="header1" class="text-center">Cuchilleria Artesanal</h1>
			<div class="row">
				<div class="col-6">
					<h1 id="header1">Los mejores cuchillos artesanales</h1>
					<p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nihil eos tempora natus consequatur, incidunt odio accusantium obcaecati doloremque architecto sed assumenda necessitatibus voluptatum, quaerat labore atque doloribus tenetur! Aperiam, accusantium.</p>
					<p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Animi quo mollitia placeat pariatur, numquam officia, accusantium nihil molestias ullam voluptatibus iure. Quia numquam rem et est eius voluptates laboriosam dicta?</p>
					<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Facere quod exercitationem quidem ad, eaque nemo nulla repellendus cum officia corporis cumque iste vel non doloribus numquam voluptate vitae. Numquam, sequi.</p>
					<p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Iste quibusdam exercitationem nobis dolorum expedita aperiam nesciunt dicta, suscipit culpa ipsam veritatis vel! Necessitatibus provident ullam neque dolorum quisquam delectus omnis.</p>
				</div>
				<div class="col-6">
					<img src="img/forge1.png" alt="" class="img-fluid" id="img-index">
				</div>
			</div>
			
		</div>
		<footer id="footer" class="py-5">
			<div class="container">
				<p class="m-0 text-center text-white">Copyright &copy; Cortex Empresario 2020</p>
			</div>
			</footer>
		</div>
	</div>
</body>
</html>