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
                <div class="col-md-8 mx-auto">
                    <div class="text-center">
                        <br><br><br><h1>Lista de productos</h1>
                    </div>
                </div>

				<div class="col-md-8 mx-auto">
					<?php
					$con = mysqli_connect('localhost','root','');
					mysqli_select_db($con, 'tienda');

					// define how many results you want per page
					$results_per_page = 10;
						
					// find out the number of results stored in database
					$sql='SELECT * FROM productos';
					$resultado = mysqli_query($con, $sql);
					$numeroResultados = mysqli_num_rows($resultado);

					// determine number of total pages available
					$number_of_pages = ceil($numeroResultados/$results_per_page);

					// determine which page number visitor is currently on
					if (!isset($_GET['page'])) {
					$page = 1;
					} else {
					$page = $_GET['page'];
					}

					// determine the sql LIMIT starting number for the results on the displaying page
					$this_page_first_result = ($page-1)*$results_per_page;

					// retrieve selected results from database and display them on page
					$sql='SELECT * FROM productos LIMIT ' . $this_page_first_result . ',' .  $results_per_page;
					$resultado = mysqli_query($con, $sql);

					while($row = mysqli_fetch_array($resultado)) {
						echo $row['id'] . ' ' . $row['nombre']. '<br>';
						

						echo '<!-- <div class="card h-100">
							<a img="' . $row['imagen'] . '"><img class="card-img-top"></a>
							<div class="card-body">
							<h4 class="card-title">
								<a href="#">Caja naranja</a>
							</h4>
							<h5>$24.99</h5>
							<p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet numquam aspernatur!</p>
						</div> -->';
					}

					// display the links to the pages
					for ($page=1;$page<=$number_of_pages;$page++) {
						echo '<a href="productos.php?page=' . $page . '">' . $page . '</a> ';
					}

					?>
				</div>
            </div>

			<div class="col-md-8 mx-auto" style="width: 182px;">
				<nav aria-label="NavPaginacion">
					<ul class="pagination">
						<li class="page-item"><a class="page-link bg-primary" href="#" >Previous</a></li>
						<li class="page-item"><a class="page-link bg-primary" href="#">Next</a></li>
					</ul>
				</nav>
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