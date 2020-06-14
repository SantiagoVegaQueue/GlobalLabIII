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
</head>
<body>

	<?php
		if(!isset($_SESSION["usernormal"])){
			echo "haga login";
		}
	?>
	
	<div class="bg">

	<!-- Nav -->
	<div style="margin-top: 2rem; max-width: 40rem;">
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
	<div class="container">
		<a class="navbar-brand" href="index.php">Cortex empresario</a>
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
		<br><h1 id="header1">Bienvenido a nuestra pagina!</h1>
		<br>
		<br>
		<br>
	</div>

	<div class="container">

	<div class="row">

		<div class="col-lg-3">

		<h1 class="my-4">Cortex Empresario</h1>
		<div class="list-group">
			<a class="list-group-item">Categorías</a>
			<a href="#" class="list-group-item">Cajas de carton</a>
			<a href="#" class="list-group-item">Cajas de metal</a>
			<a href="#" class="list-group-item">Cajas de vidrio</a>
		</div><br><br>

		</div>

		<div class="col-lg-9">	

		<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  		<ol class="carousel-indicators">
    	<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    	<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
   	 	<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
 	 </ol>
 	 <div class="carousel-inner">
   		<div class="carousel-item active">
    		<img id="imagen1" class="d-block w-100" src="https://orangebox.com.ar/wp-content/uploads/2015/02/Orange-Box-1.jpg"  alt="First slide">
    	</div>
    	<div class="carousel-item">
      		<img id="imagen2" class="d-block w-100" src="https://orangebox.com.ar/wp-content/uploads/2015/02/Orange-Box-2.jpg" alt="Second slide">
    	</div>
    	<div class="carousel-item">
      		<img id="imagen3" class="d-block w-100" src="https://st.depositphotos.com/1000975/2963/i/950/depositphotos_29635763-stock-photo-woman-with-box-on-white.jpg" alt="Third slide">
    	</div>
  		</div>
  		<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    	<span class="carousel-control-prev-icon" aria-hidden="true"></span>
    	<span class="sr-only">Previous</span>
  		</a>
  		<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    	<span class="carousel-control-next-icon" aria-hidden="true"></span>
    	<span class="sr-only">Next</span>
  		</a>
	</div>

		<br><br><br><h2 class="my-4" align="center">Lo mas vendido</h2>

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
	</div>
	</div>
	<footer class="py-5 bg-dark">
	<div class="container">
		<p class="m-0 text-center text-white">Copyright &copy; Cortex Empresario 2020</p>
	</div>
	</footer>

	</div>
	
</body>
</html>