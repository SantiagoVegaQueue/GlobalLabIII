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
        <div class="container mx-auto">  
            <div class="row">
                <div class="col-md-6 mx-auto">
                    <div class="text-center">
                        <br><br><br><h1>Lista de productos</h1>
                    </div>
                </div>
            </div>
 
            <div class="col-md-6 mx-auto" style="width: 182px;">
                <nav aria-label="NavPaginacion">
                    <ul class="pagination">
                        <li class="page-item"><a class="page-link bg-primary" href="#" >Previous</a></li>
                        <li class="page-item"><a class="page-link bg-primary" href="#">Next</a></li>
                    </ul>
                </nav>
            </div>
        </div>  

		<!--
			<div class="row">
				<div class="col-lg-4 col-md-6 mb-4">
				<div class="card h-100">
					<a href="#"><img class="card-img-top" src="https://images-na.ssl-images-amazon.com/images/I/41NzQ-f-0dL._AC_SY400_.jpg" alt=""></a>
					<div class="card-body">
					<h4 class="card-title">
						<a href="#">Caja naranja</a>
					</h4>
					<h5>$24.99</h5>
					<p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet numquam aspernatur!</p>
					</div>
					<div class="card-footer">
					<small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
					</div>
				</div>
				</div>

				<div class="col-lg-4 col-md-6 mb-4">
				<div class="card h-100">
					<a href="#"><img class="card-img-top" src="https://images-na.ssl-images-amazon.com/images/I/810oMCXKSSL._AC_SX355_.jpg" alt=""></a>
					<div class="card-body">
					<h4 class="card-title">
						<a href="#">Caja gris</a>
					</h4>
					<h5>$24.99</h5>
					<p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet numquam aspernatur! Lorem ipsum dolor sit amet.</p>
					</div>
					<div class="card-footer">
					<small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
					</div>
				</div>
				</div>

				<div class="col-lg-4 col-md-6 mb-4">
				<div class="card h-100">
					<a href="#"><img class="card-img-top" src="https://images-na.ssl-images-amazon.com/images/I/81YOmcf8RVL._AC_SX355_.jpg" alt=""></a>
					<div class="card-body">
					<h4 class="card-title">
						<a href="#">Caja marron</a>
					</h4>
					<h5>$24.99</h5>
					<p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet numquam aspernatur!</p>
					</div>
					<div class="card-footer">
					<small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
					</div>
				</div>
				</div>

				<div class="col-lg-4 col-md-6 mb-4">
				<div class="card h-100">
					<a href="#"><img class="card-img-top" src="https://vignette.wikia.nocookie.net/metalgear/images/1/14/C-vRQ5BUQAAJ79K.jpg/revision/latest/top-crop/width/300/height/300?cb=20170717122834" alt=""></a>
					<div class="card-body">
					<h4 class="card-title">
						<a href="#">Caja edicion especial</a>
					</h4>
					<h5>$2499.99</h5>
					<p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet numquam aspernatur!</p>
					</div>
					<div class="card-footer">
					<small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
					</div>
				</div>
				</div>

				<div class="col-lg-4 col-md-6 mb-4">
				<div class="card h-100">
					<a href="#"><img class="card-img-top" src="https://vignette.wikia.nocookie.net/metalgear/images/7/7c/THEBOX.jpg/revision/latest?cb=20050831142709" alt=""></a>
					<div class="card-body">
					<h4 class="card-title">
						<a href="#">!</a>
					</h4>
					<h5>$24.99</h5>
					<p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet numquam aspernatur! Lorem ipsum dolor sit amet.</p>
					</div>
					<div class="card-footer">
					<small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
					</div>
				</div>
				</div>

				<div class="col-lg-4 col-md-6 mb-4">
				<div class="card h-100">
					<a href="#"><img class="card-img-top" src="https://cdn3.dualshockers.com/wp-content/uploads/2015/08/MGS5Boss-8.jpg" alt=""></a>
					<div class="card-body">
					<h4 class="card-title">
						<a href="#">Caja rosada</a>
					</h4>
					<h5>$24.99</h5>
					<p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet numquam aspernatur!</p>
					</div>
					<div class="card-footer">
					<small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
					</div>
				</div>
				</div>
			</div>
		</div>
		-->
		
		<!--
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
		-->
	</div>

	<footer class="py-5 bg-dark">
	<div class="container">
		<p class="m-0 text-center text-white">Copyright &copy; Cortex Empresario 2020</p>
	</div>
    </footer>

</body>
</html>