<?php
	session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Productos</title>

	<!-- Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
	
	<!-- Funcionalidad NAV -->
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

	<!-- Hoja de estilo CSS -->
	<link rel="stylesheet" href="style.css">
</head>
<body>
	<div class="bg">

		<!-- Nav -->
		<div class="container" style="margin-top: 3.5rem; max-width: 40rem;">
			<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
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
				<div class="col-md-4 pt-5">
					<div class="card">
						<div class="card-header">
							<h4>Añada un producto</h4>
						</div>

						<form id="productoFormulario" class="card-body">
							<div class="form-group">
								<input type="text" id="name" placeholder="Nombre del producto" class="form-control">
							</div>

							<div class="form-group">
								<input type="number" id="price" step="0.01" placeholder="Precio del producto" class="form-control">
							</div>

							<div class="form-group">
								<input type="number" id="year" placeholder="Año del producto" class="form-control">
							</div>

							<input type="submit" value="Enviar" class="btn btn-primary btn-block">
						</form>
					</div>
				</div>

				<div class="col-md-8">
					<div id="lista-productos">

					</div>
				</div>
			</div>
		</div>
	</div>

	<footer class="py-5 bg-dark">
	<div class="container">
		<p class="m-0 text-center text-white">Copyright &copy; Cortex Empresario 2020</p>
	</div>
	</footer>

	<script src="app.js"></script>
</body>
</html>