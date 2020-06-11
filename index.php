<?php
	session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/bootstrap-theme.min.css">
	<link rel="stylesheet" href="css/main.css">
</head>
<body>
	<?php
		if(!isset($_SESSION["usernormal"])){
			echo "haga login";
			header("location: login.php");
		}
	?>
<<<<<<< HEAD
	<center>
		<h1>PAGINA DE INICIO</h1><br>
    	<br><h2>Bienvenido</h2>
    	<img src="https://i.ytimg.com/vi/PjX70rRtM-g/maxresdefault.jpg" alt="" style="width: 20%">
	</center>
<<<<<<< Updated upstream

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
			<a class="nav-link" href="#">Sobre nosotros</a>
			</li>
			<li class="nav-item">
			<a class="nav-link" href="#">Productos</a>
			</li>
			<li class="nav-item">
			<a class="nav-link" href="#">Contactos</a>
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

	<div class="container">

	<div class="row">

		<div class="col-lg-3">

		<h1 class="my-4">Cortex Empresario</h1>
		<div class="list-group">
			<a href="#" class="list-group-item">Categoria 1</a>
			<a href="#" class="list-group-item">Categoria 2</a>
			<a href="#" class="list-group-item">Categoria 3</a>
		</div>

		</div>

		<div class="col-lg-9">	

		<div id="carousel" class="carousel slide my-4" data-ride="carousel">
			<ol class="carousel-indicators">
			<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
			<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
			<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
			</ol>
			<div class="carousel-inner" role="listbox">
			<div class="carousel-item active">
				<img class="d-block img-fluid" src="https://img2.freepng.es/20180629/zlq/kisspng-crash-bandicoot-the-wrath-of-cortex-box-crash-bas-box-toys-5b35bfe48f7798.5926881815302491885877.jpg" alt="First slide">
			</div>
			<div class="carousel-item">
				<img class="d-block img-fluid" src="https://static.xtralife.com/conversions/4MCP-M1P8238645-medium_w640_h480_q75-me-crbltnt-61664-5055964726140-lampara-3d-crash-bandicoot-tnt-10-cm-con-sonido-1564743201.png" alt="Second slide">
			</div>
			<div class="carousel-item">
				<img class="d-block img-fluid" src="https://pm1.narvii.com/7089/36c3a8510c501c963cfb47424e90cc0233771921r1-400-400v2_00.jpg" alt="Third slide">
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

		<div class="row">

			<div class="col-lg-4 col-md-6 mb-4">
			<div class="card h-100">
				<a href="#"><img class="card-img-top" src="https://images-na.ssl-images-amazon.com/images/I/41NzQ-f-0dL._AC_SY400_.jpg" alt=""></a>
				<div class="card-body">
				<h4 class="card-title">
					<a href="#">Item One</a>
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
					<a href="#">Item Two</a>
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
					<a href="#">Item Three</a>
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
					<a href="#">Item Four</a>
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
				<a href="#"><img class="card-img-top" src="https://vignette.wikia.nocookie.net/metalgear/images/7/7c/THEBOX.jpg/revision/latest?cb=20050831142709" alt=""></a>
				<div class="card-body">
				<h4 class="card-title">
					<a href="#">Item Five</a>
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
					<a href="#">Item Six</a>
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
		<p class="m-0 text-center text-white">Copyright &copy; Your Website 2019</p>
	</div>
	</footer>

=======
=======

    <a href="login.php">Iniciar sesión </a> &nbsp;
    <a href="register.php">Registrarse </a> &nbsp;
    <a href="logout.php">Cerrar sesión </a>
>>>>>>> code
>>>>>>> Stashed changes
</body>
</html>